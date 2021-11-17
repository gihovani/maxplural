<?php
declare(strict_types=1);

namespace App\Controllers\Admin;

use App\Models\EmpreendimentoArquivoModel;
use GroceryCrud\Core\GroceryCrud;

class EmpreendimentoArquivo extends CrudAbstract
{
    public function configureCrud(GroceryCrud $crud): void
    {
        $crud->setTable('empreendimento_arquivo');
        $crud->setSubject('Empreendimento Arquivo', 'Empreendimento Arquivos');
        $crud->uniqueFields(['titulo']);
        $crud->requiredFields(['titulo']);
        $crud->setFieldUpload('arquivo', EmpreendimentoArquivoModel::IMG_PATH, base_url(EmpreendimentoArquivoModel::IMG_PATH));
        $crud->setRelation('empreendimento_id','empreendimento','titulo');
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
