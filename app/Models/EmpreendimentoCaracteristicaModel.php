<?php
declare(strict_types=1);

namespace App\Models;

class EmpreendimentoCaracteristicaModel extends BaseModel
{
    protected $table = 'empreendimento_caracteristica';
    protected $allowedFields = ['empreendimento_id', 'caracteristica_id', 'prioridade'];

    protected $validationRules = [
        'empreendimento_id' => [
            'label' => 'Empreendimento',
            'rules' => 'required'
        ],
        'caracteristica_id' => [
            'label' => 'Característica',
            'rules' => 'required'
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
