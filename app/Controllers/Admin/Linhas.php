<?php
declare(strict_types=1);

namespace App\Controllers\Admin;

use App\Models\LinhaModel;
use GroceryCrud\Core\GroceryCrud;

class Linhas extends CrudAbstract
{
    public function configureCrud(GroceryCrud $crud): void
    {
        $crud->setTable('linha');
        $crud->setSubject('Linha', 'Linhas');
        $crud->uniqueFields(['titulo']);
        $crud->requiredFields(['titulo']);
        $crud->setFieldUpload('imagem', LinhaModel::IMG_PATH, base_url(LinhaModel::IMG_PATH));
        $crud->setRule('titulo', 'lengthBetween', ['2', '100']);
        $crud->setRule('descricao', 'lengthMax', ['65000']);
        $crud->displayAs('titulo', 'Título');
        $crud->displayAs('descricao', 'Descrição');
        $crud->callbackBeforeInsert(function ($stateParameters) {
            $admin = new LinhaModel();
            $stateParameters->data = $admin->defineValor((array) $stateParameters)['data'];
            return $stateParameters;
        });
        $crud->callbackBeforeUpdate(function ($stateParameters) {
            $admin = new LinhaModel();
            $stateParameters->data = $admin->defineValor((array) $stateParameters)['data'];
            return $stateParameters;
        });
    }
}
