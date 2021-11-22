<?php
declare(strict_types=1);

namespace App\Controllers\Admin;

use App\Models\NoticiaModel;
use GroceryCrud\Core\GroceryCrud;

class Noticias extends CrudAbstract
{
    public function configureCrud(GroceryCrud $crud): void
    {
        $this->unsetColumns = ['deleted_at', 'conteudo', 'style', 'javascript', 'palavras_chave'];
        $crud->setTable('noticia');
        $crud->setSubject('Notícia', 'Notícias');
        $crud->uniqueFields(['slug']);
        $crud->requiredFields(['slug', 'titulo', 'descricao', 'conteudo']);
        $crud->setFieldUpload('imagem', NoticiaModel::IMG_PATH, base_url(NoticiaModel::IMG_PATH));
        $crud->displayAs('imagem', 'Imagem (1200x620px)');
        $crud->setRule('titulo', 'lengthBetween', ['1', '100']);
        $crud->displayAs('titulo', 'Título');
        $crud->setRule('descricao', 'lengthBetween', ['1', '200']);
        $crud->displayAs('descricao', 'Descrição');
        $crud->fieldType('conteudo', 'text');
        $crud->displayAs('conteudo', 'Conteúdo');
        $crud->setTexteditor(['conteudo']);
        $crud->displayAs('situacao', 'Situação');
        $crud->fieldType('situacao', 'dropdown', ['Inativo', 'Ativo']);
        $crud->setRule('situacao', 'in', [[0, 1]]);
        $crud->callbackBeforeInsert(function ($stateParameters) {
            $admin = new NoticiaModel();
            $stateParameters->data = $admin->defineValor((array)$stateParameters)['data'];
            return $stateParameters;
        });
        $crud->callbackBeforeUpdate(function ($stateParameters) {
            $admin = new NoticiaModel();
            $stateParameters->data = $admin->defineValor((array)$stateParameters)['data'];
            return $stateParameters;
        });
    }
}
