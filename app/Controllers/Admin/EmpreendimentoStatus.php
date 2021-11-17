<?php
declare(strict_types=1);

namespace App\Controllers\Admin;

use App\Models\EmpreendimentoStatusModel;
use GroceryCrud\Core\GroceryCrud;

class EmpreendimentoStatus extends CrudAbstract
{
    public function configureCrud(GroceryCrud $crud): void
    {
        $crud->setTable('empreendimento_status');
        $crud->setSubject('Empreendimento Status', 'Empreendimento Status');
        $crud->setRelation('empreendimento_id','empreendimento','titulo');
        $crud->displayAs('fundacao', 'Fundação');
        $crud->callbackBeforeInsert(function ($stateParameters) {
            $admin = new EmpreendimentoStatusModel();
            $stateParameters->data = $admin->defineValor((array) $stateParameters)['data'];
            return $stateParameters;
        });
        $crud->callbackBeforeUpdate(function ($stateParameters) {
            $admin = new EmpreendimentoStatusModel();
            $stateParameters->data = $admin->defineValor((array) $stateParameters)['data'];
            return $stateParameters;
        });
    }
}
