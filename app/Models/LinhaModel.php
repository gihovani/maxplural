<?php
declare(strict_types=1);

namespace App\Models;

class LinhaModel extends BaseModel
{
    const IMG_PATH = 'assets' . DIRECTORY_SEPARATOR . 'imgs' . DIRECTORY_SEPARATOR . 'linhas' . DIRECTORY_SEPARATOR;

    protected $table = 'linha';
    protected $allowedFields = ['imagem', 'titulo', 'descricao', 'prioridade'];

    protected $validationRules = [
        'imagem' => [
            'label' => 'Imagem',
            'rules' => 'permit_empty'
        ],
        'titulo' => [
            'label' => 'Título',
            'rules' => 'required|min_length[2]|max_length[100]'
        ],
        'descricao' => [
            'label' => 'Descrição',
            'rules' => 'required|max_length[65000]'
        ],
        'prioridade' => [
            'label' => 'Prioridade',
            'rules' => 'permit_empty|integer'
        ],
    ];

    public function getById(string $id)
    {
        return $this->where(['id' => $id])->first();
    }

    public function defineValor(array $data): array
    {
        $data = parent::defineValor($data);
        $data['data']['prioridade'] = $data['data']['prioridade'] ?? '0';
        return $data;
    }
}
