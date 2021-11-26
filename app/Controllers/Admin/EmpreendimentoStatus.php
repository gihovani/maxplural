<?php
declare(strict_types=1);

namespace App\Controllers\Admin;

use App\Models\ConfiguracaoModel;
use App\Models\EmpreendimentoModel;
use App\Models\EmpreendimentoStatusModel;
use GroceryCrud\Core\GroceryCrud;

class EmpreendimentoStatus extends CrudAbstract
{
    public function configureCrud(GroceryCrud $crud): void
    {
        $where = [];
        $titulo = '';
        $id = (int)$this->request->getUri()
            ->setSilent()
            ->getSegment(4, '0');
        $empreendimento = new EmpreendimentoModel();
        if ($emp = $empreendimento->getWhere(['id' => $id])->getFirstRow()) {
            $where = ['id' => $id];
            $titulo = ' - ' . $emp->titulo;
            $crud->where(['empreendimento_id' => $id]);
            $crud->unsetSearchColumns(['empreendimento_id']);
            $count = new EmpreendimentoStatusModel();
            $count = $count
                ->where(['empreendimento_id' => $id])
                ->countAllResults();

            if ($count > 0) {
                $crud->unsetAdd();
            }
            $crud->unsetDelete();
        }
        if (!in_array($this->request->getPost('action'), ['remove', 'remove-multiple'])) {
            $crud->setRelation('empreendimento_id', 'empreendimento', 'titulo', $where);
        }
        $crud->setTable('empreendimento_status');
        $crud->setSubject('Empreendimento Status' . $titulo, 'Empreendimento Status' . $titulo);
        $crud->displayAs('fundacao', 'Fundação');
        $crud->callbackBeforeInsert(function ($stateParameters) {
            $admin = new EmpreendimentoStatusModel();
            $stateParameters->data = $admin->defineValor((array)$stateParameters)['data'];
            return $stateParameters;
        });
        $crud->callbackBeforeUpdate(function ($stateParameters) {
            $admin = new EmpreendimentoStatusModel();
            $stateParameters->data = $admin->defineValor((array)$stateParameters)['data'];
            return $stateParameters;
        });
    }
}
