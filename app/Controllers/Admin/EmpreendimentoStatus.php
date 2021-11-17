<?php
declare(strict_types=1);

namespace App\Controllers\Admin;

use App\Models\EmpreendimentoModel;
use App\Models\EmpreendimentoStatusModel;
use GroceryCrud\Core\GroceryCrud;

class EmpreendimentoStatus extends CrudAbstract
{
    public function configureCrud(GroceryCrud $crud): void
    {
        $empreendimento = new EmpreendimentoModel();
        $id = (int)$this->request->getUri()->getSegment(4, '0');
        $where = [];
        if ($empreendimento->getWhere(['id' => $id])->getFirstRow()) {
            $crud->where(['empreendimento_id' => $id]);
            $where = ['id' => $id];
            $crud->unsetSearchColumns(['empreendimento_id']);
        }

        $crud->setTable('empreendimento_status');
        $crud->setSubject('Empreendimento Status', 'Empreendimento Status');
        $crud->setRelation('empreendimento_id','empreendimento','titulo', $where);
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
