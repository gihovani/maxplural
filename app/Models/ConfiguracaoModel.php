<?php
declare(strict_types=1);

namespace App\Models;

class ConfiguracaoModel extends BaseModel
{
    protected $table = 'configuracao';
    protected $allowedFields = [
        'email',
        'telefone_fixo',
        'telefone_whatsapp',
        'facebook',
        'instagram',
        'linkedin',
        'youtube',
        'whatsapp',
        'chat_online',
        'central_vendas',
        'horario_atendimento',
        'endereco'
    ];

    protected $validationRules = [
        'email' => [
            'label' => 'E-mail',
            'rules' => 'required|valid_email|max_length[200]'
        ],
        'telefone_fixo' => [
            'label' => 'Telefone Fixo',
            'rules' => 'permit_empty|max_length[200]'
        ],
        'telefone_whatsapp' => [
            'label' => 'Telefone WhatsApp',
            'rules' => 'permit_empty|max_length[200]'
        ],
        'facebook' => [
            'label' => 'Facebook',
            'rules' => 'permit_empty|max_length[200]'
        ],
        'instagram' => [
            'label' => 'Instagram',
            'rules' => 'permit_empty|max_length[200]'
        ],
        'linkedin' => [
            'label' => 'Linkedin',
            'rules' => 'permit_empty|max_length[200]'
        ],
        'youtube' => [
            'label' => 'Youtube',
            'rules' => 'permit_empty|max_length[200]'
        ],
        'whatsapp' => [
            'label' => 'WhatsApp',
            'rules' => 'permit_empty|max_length[200]'
        ],
        'chat_online' => [
            'label' => 'Chat Online',
            'rules' => 'permit_empty|max_length[200]'
        ],
        'central_vendas' => [
            'label' => 'Central Vendas',
            'rules' => 'permit_empty|max_length[200]'
        ],
        'horario_atendimento' => [
            'label' => 'Horário Atendimento',
            'rules' => 'permit_empty|max_length[200]'
        ],
        'endereco' => [
            'label' => 'Endereço',
            'rules' => 'permit_empty|max_length[200]'
        ],
    ];
}
