<?php
declare(strict_types=1);

namespace App\Controllers\Admin;

use App\Models\EmpreendimentoModel;
use GroceryCrud\Core\GroceryCrud;

class Empreendimentos extends CrudAbstract
{
    public function configureCrud(GroceryCrud $crud): void
    {
        $this->unsetColumns = ['deleted_at', 'conteudo', 'style', 'javascript',
            'especificacoes_tecnicas', 'palavras_chave', 'video', 'endereco', 'google_map'
        ];
        array_unshift($this->unsetFields, 'slug');
        $crud->setTable('empreendimento');
        $crud->setSubject('Empreendimento', 'Empreendimentos');
        $crud->uniqueFields(['slug']);
        $crud->requiredFields(['titulo', 'descricao', 'conteudo']);
        $crud->setFieldUpload('imagem', EmpreendimentoModel::IMG_PATH, base_url(EmpreendimentoModel::IMG_PATH));
        $crud->displayAs('imagem', 'Imagem (480x850px)');
        $crud->setRelation('linha_id','linha','titulo');
        $crud->setRelationNtoN('caracteristicas', 'empreendimento_caracteristica', 'caracteristica', 'empreendimento_id', 'caracteristica_id', 'titulo');
        $crud->setRule('titulo', 'lengthBetween', ['1', '100']);
        $crud->displayAs('titulo', 'Título');
        $crud->setRule('descricao', 'lengthBetween', ['1', '200']);
        $crud->displayAs('descricao', 'Descrição');
        $crud->setTexteditor(['conteudo', 'especificacoes_tecnicas']);
        $crud->displayAs('conteudo', 'Conteúdo');
        $crud->displayAs('especificacoes_tecnicas', 'Especificações Técnicas');
        $crud->displayAs('endereco', 'Endereço');
        $crud->displayAs('situacao', 'Situação');
        $crud->fieldType('situacao', 'dropdown', ['Inativo', 'Ativo']);
        $crud->setRule('situacao', 'in', [[0, 1]]);
        $crud->setActionButton('Imagens', 'fa fa-picture-o', function ($row) {
            return 'empreendimentoImagens/index/' . $row->id;
        }, false);
        $crud->setActionButton('Arquivos', 'fa fa-dropbox', function ($row) {
            return 'empreendimentoArquivos/index/' . $row->id;
        }, false);
        $crud->setActionButton('Status', 'fa fa-sliders', function ($row) {
            return 'empreendimentoStatus/index/' . $row->id;
        }, false);
        $crud->callbackBeforeInsert(function ($stateParameters) {
            $admin = new EmpreendimentoModel();
            $stateParameters->data = $admin->defineValor((array)$stateParameters)['data'];
            return $stateParameters;
        });
        $crud->callbackBeforeUpdate(function ($stateParameters) {
            $admin = new EmpreendimentoModel();
            $stateParameters->data = $admin->defineValor((array)$stateParameters)['data'];
            return $stateParameters;
        });
    }
}
