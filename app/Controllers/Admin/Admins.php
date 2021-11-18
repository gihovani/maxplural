<?php
declare(strict_types=1);

namespace App\Controllers\Admin;

use App\Models\AdminModel;
use GroceryCrud\Core\GroceryCrud;

class Admins extends CrudAbstract
{
    public function configureCrud(GroceryCrud $crud): void
    {
        $this->unsetColumns = ['senha', 'deleted_at'];
        $crud->setTable('admin');

        $crud->setSubject('Administrador', 'Administradores');
        $crud->uniqueFields(['login', 'email']);
        $crud->requiredFields(['nome', 'email', 'login', 'senha']);
        $crud->setFieldUpload('avatar', AdminModel::IMG_PATH, base_url(AdminModel::IMG_PATH));
        $crud->setRule('login', 'lengthMax', ['20']);
        $crud->setRule('nome', 'lengthBetween', ['2', '100']);
        $crud->setRule('email', 'lengthMax', ['120']);
        $crud->setRule('email', 'email');
        $crud->setRule('login', 'lengthBetween', ['2', '20']);
        $crud->setRule('senha', 'lengthBetween', ['5', '20']);
        $crud->displayAs('situacao', 'Situação');
        $crud->fieldType('situacao', 'dropdown', ['Inativo', 'Ativo']);
        $crud->setRule('situacao', 'in', [[0, 1]]);
        $crud->callbackBeforeInsert(function ($stateParameters) {
            $admin = new AdminModel();
            $stateParameters->data = $admin->defineValor((array) $stateParameters)['data'];
            return $stateParameters;
        });
        $crud->callbackBeforeUpdate(function ($stateParameters) {
            $admin = new AdminModel();
            $stateParameters->data = $admin->defineValor((array) $stateParameters)['data'];
            return $stateParameters;
        });
    }
}
