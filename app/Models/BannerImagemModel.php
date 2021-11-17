<?php
declare(strict_types=1);

namespace App\Models;

class BannerImagemModel extends BaseModel
{
    const IMG_PATH = 'assets' . DIRECTORY_SEPARATOR . 'imgs' . DIRECTORY_SEPARATOR . 'banner' . DIRECTORY_SEPARATOR;

    protected $table = 'banner_imagem';
    protected $allowedFields = ['imagem', 'imagem_mobile', 'link', 'titulo', 'conteudo', 'prioridade'];

    protected $validationRules = [
        'imagem' => [
            'label' => 'Imagem',
            'rules' => 'permit_empty'
        ],
        'imagem_mobile' => [
            'label' => 'Imagem',
            'rules' => 'permit_empty'
        ],
        'link' => [
            'label' => 'Link',
            'rules' => 'permit_empty'
        ],
        'titulo' => [
            'label' => 'Título',
            'rules' => 'required|min_length[2]|max_length[100]'
        ],
        'conteudo' => [
            'label' => 'Conteúdo',
            'rules' => 'permit_empty|max_length[65000]'
        ],
        'prioridade' => [
            'label' => 'Prioridade',
            'rules' => 'permit_empty|integer'
        ],
    ];
}
