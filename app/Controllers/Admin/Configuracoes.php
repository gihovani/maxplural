<?php
declare(strict_types=1);

namespace App\Controllers\Admin;

use App\Models\ConfiguracaoModel;
use GroceryCrud\Core\GroceryCrud;

class Configuracoes extends CrudAbstract
{
    public function configureCrud(GroceryCrud $crud): void
    {
        $this->unsetColumns = ['deleted_at', 'created_at', 'updated_at'];
        $crud->setTable('configuracao');
        $crud->setSubject('Configuração', 'Configurações');
        $crud->displayAs('horario_atendimento', 'Horário de Atendimento');
        $crud->displayAs('endereco', 'Endereço');

        $count = new ConfiguracaoModel();
        $count = $count->countAllResults();
        if ($count > 0) {
            $crud->unsetAdd();
        }
        $crud->unsetDelete();
    }
}
