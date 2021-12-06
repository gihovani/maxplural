<?php
declare(strict_types=1);

namespace App\Models;

class EmpreendimentoModel extends BaseModel
{
    const IMG_PATH = 'assets' . DIRECTORY_SEPARATOR . 'imgs' . DIRECTORY_SEPARATOR . 'projetos' . DIRECTORY_SEPARATOR;

    protected $table = 'empreendimento';
    protected $allowedFields = [
        'linha_id',
        'tipo',
        'imagem',
        'video',
        'slug',
        'titulo',
        'palavras_chave',
        'descricao',
        'conteudo',
        'especificacoes_tecnicas',
        'endereco',
        'google_map',
        'style',
        'javascript',
        'situacao'
    ];

    protected $validationRules = [
        'linha_id' => [
            'label' => 'Linha',
            'rules' => 'required'
        ],
        'tipo' => [
            'label' => 'Tipo',
            'rules' => 'required|in_list[Lançamento,Entregue,Construção]'
        ],
        'imagem' => [
            'label' => 'Imagem',
            'rules' => 'permit_empty'
        ],
        'video' => [
            'label' => 'Video',
            'rules' => 'permit_empty'
        ],
        'slug' => [
            'label' => 'Slug',
            'rules' => 'required|max_length[100]|is_unique[pagina.slug,id,{id}]'
        ],
        'titulo' => [
            'label' => 'Título',
            'rules' => 'required|min_length[1]|max_length[100]'
        ],
        'palavras_chave' => [
            'label' => 'Palavras-chave',
            'rules' => 'permit_empty'
        ],
        'descricao' => [
            'label' => 'Descrição',
            'rules' => 'required|max_length[200]'
        ],
        'conteudo' => [
            'label' => 'Conteúdo',
            'rules' => 'required'
        ],
        'especificacoes_tecnicas' => [
            'label' => 'Especificações Técnicas',
            'rules' => 'permit_empty'
        ],
        'tipologia' => [
            'label' => 'Tipologia',
            'rules' => 'permit_empty|max_length[50]'
        ],
        'bairro' => [
            'label' => 'Bairro',
            'rules' => 'permit_empty|max_length[100]'
        ],
        'cidade' => [
            'label' => 'Cidade',
            'rules' => 'permit_empty|max_length[100]'
        ],
        'estado' => [
            'label' => 'Estado',
            'rules' => 'permit_empty|max_length[2]'
        ],
        'endereco' => [
            'label' => 'Endereço',
            'rules' => 'permit_empty'
        ],
        'google_map' => [
            'label' => 'Google Map',
            'rules' => 'permit_empty'
        ],
        'style' => [
            'label' => 'Style/CSS',
            'rules' => 'permit_empty'
        ],
        'javascript' => [
            'label' => 'JavaScript',
            'rules' => 'permit_empty'
        ],
        'situacao' => [
            'label' => 'Situação',
            'rules' => 'permit_empty|in_list[0,1]'
        ],
    ];

    public function getCities(string $search): array
    {
        $empreendimentos = $this->select('cidade')
            ->orLike('tipo', $search)
            ->orLike('titulo', $search)
            ->orLike('conteudo', $search)
            ->groupBy(['cidade'])->findAll();
        $ret = [];
        foreach ($empreendimentos as $empreendimento)
        {
            $ret[] = $empreendimento->cidade;
        }
        return $ret;
    }

    public function getBySlug(string $slug, bool $allRelations = true)
    {
        if (!$item = $this->where(['slug' => $slug])->first()) {
            return $item;
        }

        if ($allRelations) {
            $id = (int) $item->id;
            $item->caracteristica = $this->getCaracteristica($id);
            $item->arquivos = $this->getArquivos($id);
            $item->imagens = $this->getImagens($id);
            $item->status = $this->getStatus($id);
            $item->linha = $this->getLinha((int)$item->linha_id);
        }
        return $item;
    }

    public function defineValor(array $data): array
    {
        $data = parent::defineValor($data);
        $id = $data['primaryKeyValue'] ?? null;
        $slug = $data['data']['slug'] ?? mb_url_title($data['data']['titulo'], '-', true);
        $empreendimento = $this->getBySlug($slug, false);

        if ($empreendimento && $empreendimento->id != $id) {
            $slug .= '-' . uniqid();
        }
        $data['data']['slug'] = $slug;
        $data['data']['situacao'] = $data['data']['situacao'] ?? '0';
        $data['data']['tipo'] = $data['data']['tipo'] ?? 'Lançamento';

        return $data;
    }

    private function getCaracteristica(int $id): array
    {
        return $this->select('c.imagem, c.titulo')
            ->join('empreendimento_caracteristica r', 'empreendimento.id = r.empreendimento_id', 'inner')
            ->join('caracteristica c', 'c.id = r.caracteristica_id', 'inner')
            ->orderBy('c.prioridade')
            ->getWhere(['empreendimento.id' => $id])->getResult();
    }

    private function getArquivos(int $id): array
    {
        $model = new EmpreendimentoArquivoModel();
        return $model->getWhere(['empreendimento_id' => $id])->getResult();
    }

    private function getImagens(int $id): array
    {
        $ret = [
            'Banner' => [],
            'Fachada' => [],
            'Área de Lazer' => [],
            'Decorado' => [],
            'Especificação' => [],
            'Obra' => []
        ];
        $model = new EmpreendimentoImagemModel();
        foreach ($model->getWhere(['empreendimento_id' => $id])->getResult() as $image) {
            $ret[$image->tipo][] = $image;
        }
        return $ret;
    }

    private function getStatus(int $id)
    {
        $model = new EmpreendimentoStatusModel();
        return $model->getWhere(['empreendimento_id' => $id])->getFirstRow();
    }

    private function getLinha(int $id)
    {
        $model = new LinhaModel();
        return $model->getWhere(['id' => $id])->getFirstRow();
    }
}
