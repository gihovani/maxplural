<?php
declare(strict_types=1);

namespace App\Models;

class ContatoModel extends BaseModel
{
    protected $table = 'contato';
    protected $allowedFields = ['empreendimento_id', 'nome', 'email', 'telefone', 'assunto', 'mensagem'];

    protected $validationRules = [
        'empreendimento_id' => [
            'label' => 'Empreendimento',
            'rules' => 'permit_empty'
        ],
        'nome' => [
            'label' => 'Nome',
            'rules' => 'required|min_length[2]|max_length[100]'
        ],
        'email' => [
            'label' => 'E-mail',
            'rules' => 'required|valid_email|max_length[200]'
        ],
        'telefone' => [
            'label' => 'Telefone',
            'rules' => 'permit_empty|max_length[20]'
        ],
        'assunto' => [
            'label' => 'Assunto',
            'rules' => 'required|max_length[200]'
        ],
        'mensagem' => [
            'label' => 'Mensagem',
            'rules' => 'permit_empty|max_length[65000]'
        ],
    ];
}
