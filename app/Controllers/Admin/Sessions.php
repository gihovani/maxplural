<?php
declare(strict_types=1);

namespace App\Controllers\Admin;

use GroceryCrud\Core\GroceryCrud;

class Sessions extends CrudAbstract
{
    public function configureCrud(GroceryCrud $crud): void
    {
        $crud->setTable('mp_sessions');
        $crud->setSubject('Session', 'Sessions');
        $crud->columns(['id', 'ip_address', 'timestamp', 'data']);
        $crud->fields(['id', 'ip_address', 'timestamp', 'data']);
    }
}
