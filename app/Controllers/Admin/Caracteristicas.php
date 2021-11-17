<?php
declare(strict_types=1);

namespace App\Controllers\Admin;

use App\Models\CaracteristicaModel;
use GroceryCrud\Core\GroceryCrud;

class Caracteristicas extends CrudAbstract
{
    public function configureCrud(GroceryCrud $crud): void
    {
        $crud->setTable('caracteristica');
        $crud->setSubject('Característica', 'Características');
        $crud->uniqueFields(['titulo']);
        $crud->requiredFields(['titulo']);
        $crud->setFieldUpload('imagem', CaracteristicaModel::IMG_PATH, base_url(CaracteristicaModel::IMG_PATH));
        $crud->setRule('titulo', 'lengthBetween', ['2', '100']);
        $crud->displayAs('titulo', 'Título');
        $crud->callbackBeforeInsert(function ($stateParameters) {
            $admin = new CaracteristicaModel();
            $stateParameters->data = $admin->defineValor((array) $stateParameters)['data'];
            return $stateParameters;
        });
        $crud->callbackBeforeUpdate(function ($stateParameters) {
            $admin = new CaracteristicaModel();
            $stateParameters->data = $admin->defineValor((array) $stateParameters)['data'];
            return $stateParameters;
        });
    }
}
