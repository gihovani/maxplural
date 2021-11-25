<?php
declare(strict_types=1);

namespace App\Controllers\Admin;

use App\Models\EmpreendimentoArquivoModel;
use App\Models\EmpreendimentoModel;
use GroceryCrud\Core\GroceryCrud;
use Zend\Db\Sql\Sql;
use Zend\Db\Sql\Where;

class EmpreendimentoArquivos extends CrudAbstract
{
    public function configureCrud(GroceryCrud $crud): void
    {
        $where = [];
        $titulo = '';
        $id = (int)$this->request->getUri()->getSegment(4, '0');
        $empreendimento = new EmpreendimentoModel();
        if ($emp = $empreendimento->getWhere(['id' => $id])->getFirstRow()) {
            $where = ['id' => $id];
            $titulo = ' - ' . $emp->titulo;
            $crud->where(['empreendimento_id' => $id]);
            $crud->unsetSearchColumns(['empreendimento_id']);
        }
        if (!in_array($this->request->getPost('action'), ['remove', 'remove-multiple'])) {
            $crud->setRelation('empreendimento_id', 'empreendimento', 'titulo', $where);
        }
        $crud->setTable('empreendimento_arquivo');
        $crud->setSubject('Empreendimento Arquivo' . $titulo, 'Empreendimento Arquivos' . $titulo);
        $crud->requiredFields(['titulo']);
        $crud->setFieldUpload('arquivo', EmpreendimentoArquivoModel::IMG_PATH, base_url(EmpreendimentoArquivoModel::IMG_PATH));
        $crud->setRule('titulo', 'lengthBetween', ['2', '100']);
        $crud->displayAs('titulo', 'Título');
        $crud->displayAs('tabela_valores', 'Tabela de Valores');
        $crud->fieldType('tabela_valores', 'dropdown', ['Não', 'Sim']);
        $crud->setRule('tabela_valores', 'in', [[0, 1]]);
        $crud->callbackBeforeInsert(function ($stateParameters) {
            $admin = new EmpreendimentoArquivoModel();
            $stateParameters->data = $admin->defineValor((array)$stateParameters)['data'];
            return $stateParameters;
        });
        $crud->callbackBeforeUpdate(function ($stateParameters) {
            $admin = new EmpreendimentoArquivoModel();
            $stateParameters->data = $admin->defineValor((array)$stateParameters)['data'];
            return $stateParameters;
        });
    }
}
