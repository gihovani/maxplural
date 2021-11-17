<?php
declare(strict_types=1);

namespace App\Models;

class EmpreendimentoStatusModel extends BaseModel
{
    protected $table = 'empreendimento_status';
    protected $allowedFields = [
        'empreendimento_id',
        'terraplenagem',
        'fundacao',
        'revestimento',
        'alvenaria',
        'infraestrutura',
        'acabamento',
        'total'
    ];

    protected $validationRules = [
        'empreendimento_id' => [
            'label' => 'Empreendimento',
            'rules' => 'required'
        ],
        'terraplenagem' => [
            'label' => 'Terraplenagem',
            'rules' => 'permit_empty|integer'
        ],
        'fundacao' => [
            'label' => 'Fundação',
            'rules' => 'permit_empty|integer'
        ],
        'revestimento' => [
            'label' => 'Revestimento',
            'rules' => 'permit_empty|integer'
        ],
        'alvenaria' => [
            'label' => 'Alvenaria',
            'rules' => 'permit_empty|integer'
        ],
        'infraestrutura' => [
            'label' => 'Infraestrutura',
            'rules' => 'permit_empty|integer'
        ],
        'acabamento' => [
            'label' => 'Acabamento',
            'rules' => 'permit_empty|integer'
        ],
        'total' => [
            'label' => 'Total',
            'rules' => 'permit_empty|integer'
        ]
    ];

    public function defineValor(array $data): array
    {
        $data = parent::defineValor($data);
        $data['data']['terraplenagem'] = $data['data']['terraplenagem'] ?? '0';
        $data['data']['fundacao'] = $data['data']['fundacao'] ?? '0';
        $data['data']['revestimento'] = $data['data']['revestimento'] ?? '0';
        $data['data']['alvenaria'] = $data['data']['alvenaria'] ?? '0';
        $data['data']['infraestrutura'] = $data['data']['infraestrutura'] ?? '0';
        $data['data']['acabamento'] = $data['data']['acabamento'] ?? '0';
        $data['data']['total'] = $data['data']['total'] ?? '0';
        return $data;
    }
}
