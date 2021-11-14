<?php
declare(strict_types=1);

namespace App\Models;

class PaginaModel extends BaseModel
{
    const IMG_PATH = 'assets' . DIRECTORY_SEPARATOR . 'pagina' . DIRECTORY_SEPARATOR;

    protected $table = 'pagina';
    protected $allowedFields = [
        'imagem',
        'tipo',
        'titulo',
        'slug',
        'descricao',
        'conteudo',
        'palavras_chave',
        'style',
        'javascript',
        'situacao'
    ];

    protected $validationRules = [
        'imagem' => [
            'label' => 'Imagem',
            'rules' => 'permity_empty'
        ],
        'tipo' => [
            'label' => 'Tipo',
            'rules' => 'required|in_list[pagina,noticias,empreendimentos]'
        ],
        'titulo' => [
            'label' => 'Título',
            'rules' => 'required|min_length[1]|max_length[100]'
        ],
        'slug' => [
            'label' => 'Slug',
            'rules' => 'required|max_length[100]|is_unique[pagina.slug,id,{id}]'
        ],
        'descricao' => [
            'label' => 'Descrição',
            'rules' => 'required|max_length[200]'
        ],
        'conteudo' => [
            'label' => 'Conteúdo',
            'rules' => 'required'
        ],
        'palavras_chave' => [
            'label' => 'Palavras-chave',
            'rules' => 'permity_empty'
        ],
        'style' => [
            'label' => 'Style/CSS',
            'rules' => 'permity_empty'
        ],
        'javascript' => [
            'label' => 'JavaScript',
            'rules' => 'permity_empty'
        ],
        'situacao' => [
            'label' => 'Situação',
            'rules' => 'permit_empty|in_list[0,1]'
        ],
    ];

    public function getBySlug(string $slug)
    {
        return $this->where(['slug' => $slug])->first();
    }

    public function defineValor(array $data): array
    {
        $data = parent::defineValor($data);
        $id = $data['primaryKeyValue'] ?? null;
        $slug = $data['data']['slug'] ?? mb_url_title($data['data']['titulo'], '-', true);
        $pagina = $this->getBySlug($slug);

        if ($pagina && $pagina->id != $id) {
            $slug .= '-' . uniqid();
        }
        $data['data']['slug'] = $slug;
        $data['data']['situacao'] = $data['data']['situacao'] ?? '0';
        $data['data']['tipo'] = $data['data']['tipo'] ?? 'pagina';

        return $data;
    }
}
