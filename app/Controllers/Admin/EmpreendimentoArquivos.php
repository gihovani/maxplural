<?php
declare(strict_types=1);

namespace App\Controllers\Admin;

use App\Models\EmpreendimentoArquivoModel;
use App\Models\EmpreendimentoModel;
use GroceryCrud\Core\GroceryCrud;

class EmpreendimentoArquivos extends CrudAbstract
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

        $crud->setTable('empreendimento_arquivo');
        $crud->setSubject('Empreendimento Arquivo', 'Empreendimento Arquivos');
        $crud->uniqueFields(['titulo']);
        $crud->requiredFields(['titulo']);
        $crud->setFieldUpload('arquivo', EmpreendimentoArquivoModel::IMG_PATH, base_url(EmpreendimentoArquivoModel::IMG_PATH));
        $crud->setRelation('empreendimento_id','empreendimento','titulo', $where);
        $crud->setRule('titulo', 'lengthBetween', ['2', '100']);
        $crud->displayAs('titulo', 'Título');
        $crud->displayAs('tabela_valores', 'Tabela de Valores');
        $crud->fieldType('tabela_valores', 'dropdown', ['Não', 'Sim']);
        $crud->setRule('tabela_valores', 'in', [[0, 1]]);
        $crud->callbackBeforeInsert(function ($stateParameters) {
            $admin = new EmpreendimentoArquivoModel();
            $stateParameters->data = $admin->defineValor((array) $stateParameters)['data'];
            return $stateParameters;
        });
        $crud->callbackBeforeUpdate(function ($stateParameters) {
            $admin = new EmpreendimentoArquivoModel();
            $stateParameters->data = $admin->defineValor((array) $stateParameters)['data'];
            return $stateParameters;
        });
    }
}
