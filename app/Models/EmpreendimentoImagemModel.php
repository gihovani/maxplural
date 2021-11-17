<?php
declare(strict_types=1);

namespace App\Models;

class EmpreendimentoImagemModel extends BaseModel
{
    const IMG_PATH = 'assets' . DIRECTORY_SEPARATOR . 'imgs' . DIRECTORY_SEPARATOR . 'projetos' . DIRECTORY_SEPARATOR . 'empreendimento' . DIRECTORY_SEPARATOR;

    protected $table = 'empreendimento_imagem';
    protected $allowedFields = ['empreendimento_id', 'tipo', 'imagem', 'titulo'];

    protected $validationRules = [
        'empreendimento_id' => [
            'label' => 'Empreendimento',
            'rules' => 'required'
        ],
        'tipo' => [
            'label' => 'Tipo',
            'rules' => 'required|in_list[Banner,Fachada,Área de Lazer,Decorado,Especificação,Obra]'
        ],
        'imagem' => [
            'label' => 'Imagem',
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
        $data['data']['tipo'] = $data['data']['tipo'] ?? 'Banner';
        return $data;
    }
}
