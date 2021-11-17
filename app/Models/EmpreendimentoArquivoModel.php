<?php
declare(strict_types=1);

namespace App\Models;

class EmpreendimentoArquivoModel extends BaseModel
{
    const IMG_PATH = 'assets' . DIRECTORY_SEPARATOR . 'imgs' . DIRECTORY_SEPARATOR . 'projetos' . DIRECTORY_SEPARATOR . 'arquivos' . DIRECTORY_SEPARATOR;

    protected $table = 'empreendimento_arquivo';
    protected $allowedFields = ['empreendimento_id', 'tabela_valores', 'arquivo', 'titulo'];

    protected $validationRules = [
        'empreendimento_id' => [
            'label' => 'Empreendimento',
            'rules' => 'required'
        ],
        'tabela_valores' => [
            'label' => 'Tabela de Valores',
            'rules' => 'required|in_list[0,1]'
        ],
        'arquivo' => [
            'label' => 'Arquivo',
            'rules' => 'permit_empty'
        ],
        'titulo' => [
            'label' => 'Título',
            'rules' => 'required|min_length[2]|max_length[100]'
        ],
    ];

    public function defineValor(array $data): array
    {
        $data = parent::defineValor($data);
        $data['data']['tabela_valores'] = $data['data']['tabela_valores'] ?? '0';
        return $data;
    }
}
