<?php
declare(strict_types=1);

namespace App\Controllers\Admin;

use App\Models\PaginaModel;
use GroceryCrud\Core\GroceryCrud;

class Paginas extends CrudAbstract
{
    public function configureCrud(GroceryCrud $crud): void
    {
        $this->unsetColumns = ['deleted_at', 'conteudo', 'style', 'javascript', 'palavras_chave'];
        array_unshift($this->unsetFields, 'tipo', 'slug');
        $crud->setTable('pagina');
        $crud->setSubject('Página', 'Páginas');
        $crud->uniqueFields(['slug']);
        $crud->requiredFields(['titulo', 'descricao', 'conteudo']);
        $crud->setFieldUpload('imagem', PaginaModel::IMG_PATH, base_url(PaginaModel::IMG_PATH));
        $crud->setRule('titulo', 'lengthBetween', ['1', '100']);
        $crud->displayAs('titulo', 'Título');
        $crud->setRule('descricao', 'lengthBetween', ['1', '200']);
        $crud->displayAs('descricao', 'Descrição');
        $crud->setRule('conteudo', 'lengthMin', ['1']);
        $crud->setTexteditor(['conteudo']);
        $crud->displayAs('conteudo', 'Conteúdo');
        $crud->displayAs('situacao', 'Situação');
        $crud->fieldType('situacao', 'dropdown', ['Inativo', 'Ativo']);
        $crud->setRule('situacao', 'in', [[0, 1]]);
        $crud->callbackBeforeInsert(function ($stateParameters) {
            $admin = new PaginaModel();
            $stateParameters->data = $admin->defineValor((array)$stateParameters)['data'];
            return $stateParameters;
        });
        $crud->callbackBeforeUpdate(function ($stateParameters) {
            $admin = new PaginaModel();
            $stateParameters->data = $admin->defineValor((array)$stateParameters)['data'];
            return $stateParameters;
        });
    }
}
