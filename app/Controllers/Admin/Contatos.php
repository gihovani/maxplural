<?php
declare(strict_types=1);

namespace App\Controllers\Admin;

use GroceryCrud\Core\GroceryCrud;

class Contatos extends CrudAbstract
{
    public function configureCrud(GroceryCrud $crud): void
    {
        $crud->setTable('contato');
        $crud->setSubject('Contato', 'Contatos');
        $crud->requiredFields(['nome', 'email', 'assunto']);
        $crud->setRelation('empreendimento_id','empreendimento','titulo');
        $crud->setRule('nome', 'lengthBetween', ['2', '100']);
        $crud->setRule('email', 'lengthMax', ['200']);
        $crud->setRule('email', 'email');
        $crud->setRule('telefone', 'lengthMax', ['20']);
        $crud->setRule('assunto', 'lengthBetween', ['1', '200']);
        $crud->setRule('mensagem', 'lengthMax', ['65000']);
    }
}
