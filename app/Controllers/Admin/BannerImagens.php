<?php
declare(strict_types=1);

namespace App\Controllers\Admin;

use App\Models\BannerImagemModel;
use GroceryCrud\Core\GroceryCrud;

class BannerImagens extends CrudAbstract
{
    public function configureCrud(GroceryCrud $crud): void
    {
        $this->unsetColumns = ['deleted_at', 'conteudo'];
        $crud->setTable('banner_imagem');
        $crud->setSubject('Banner Imagem', 'Banner Imagens');
        $crud->requiredFields(['titulo', 'imagem']);
        $crud->setFieldUpload('imagem', BannerImagemModel::IMG_PATH, base_url(BannerImagemModel::IMG_PATH));
        $crud->setFieldUpload('imagem_mobile', BannerImagemModel::IMG_PATH, base_url(BannerImagemModel::IMG_PATH));
        $crud->setRule('titulo', 'lengthBetween', ['1', '100']);
        $crud->displayAs('titulo', 'Título');
        $crud->fieldType('conteudo', 'text');
        $crud->setRule('conteudo', 'lengthMin', ['1']);
        $crud->displayAs('conteudo', 'Conteúdo');
    }
}
