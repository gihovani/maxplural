<?php
declare(strict_types=1);

namespace App\Controllers\Admin;

use App\Models\EmpreendimentoImagemModel;
use GroceryCrud\Core\GroceryCrud;

class EmpreendimentoImagens extends CrudAbstract
{
    public function configureCrud(GroceryCrud $crud): void
    {
        $crud->setTable('empreendimento_imagem');
        $crud->setSubject('Empreendimento Imagem', 'Empreendimento Imagens');
        $crud->uniqueFields(['titulo']);
        $crud->requiredFields(['titulo']);
        $crud->setFieldUpload('imagem', EmpreendimentoImagemModel::IMG_PATH, base_url(EmpreendimentoImagemModel::IMG_PATH));
        $crud->setRelation('empreendimento_id','empreendimento','titulo');
        $crud->setRule('titulo', 'lengthBetween', ['2', '100']);
        $crud->displayAs('titulo', 'Título');
        $crud->callbackBeforeInsert(function ($stateParameters) {
            $admin = new EmpreendimentoImagemModel();
            $stateParameters->data = $admin->defineValor((array) $stateParameters)['data'];
            return $stateParameters;
        });
        $crud->callbackBeforeUpdate(function ($stateParameters) {
            $admin = new EmpreendimentoImagemModel();
            $stateParameters->data = $admin->defineValor((array) $stateParameters)['data'];
            return $stateParameters;
        });
    }
}
