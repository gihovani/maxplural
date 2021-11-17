<?php
declare(strict_types=1);

namespace App\Models;

class CaracteristicaModel extends BaseModel
{
    const IMG_PATH = 'assets' . DIRECTORY_SEPARATOR . 'imgs' . DIRECTORY_SEPARATOR . 'projetos' . DIRECTORY_SEPARATOR . 'icons' . DIRECTORY_SEPARATOR;

    protected $table = 'caracteristica';
    protected $allowedFields = ['imagem', 'titulo', 'prioridade'];

    protected $validationRules = [
        'imagem' => [
            'label' => 'Imagem',
            'rules' => 'permit_empty'
        ],
        'titulo' => [
            'label' => 'Título',
            'rules' => 'required|min_length[2]|max_length[100]'
        ],
        'prioridade' => [
            'label' => 'Prioridade',
            'rules' => 'permit_empty|integer'
        ],
    ];

    public function defineValor(array $data): array
    {
        $data = parent::defineValor($data);
        $data['data']['prioridade'] = $data['data']['prioridade'] ?? '0';
        return $data;
    }
}
