<?php
declare(strict_types=1);

namespace App\Controllers\Admin;

use Exception;

class Sessions extends CrudAbstract
{
    public function index(): string
    {
        try {
            $crud = $this->getGroceryCrudEnterprise();
        } catch (Exception $e) {
            return $this->show([
                'output' => $e->getMessage()
            ]);
        }

        $crud->setCsrfTokenName(csrf_token());
        $crud->setCsrfTokenValue(csrf_hash());

        $crud->setTable('mp_sessions');
        $crud->setSubject('Session', 'Sessions');
        $crud->columns(['id', 'ip_address', 'timestamp', 'data']);
        $crud->fields(['id', 'ip_address', 'timestamp', 'data']);

        try {
            $output = $crud->render();
        } catch (Exception $e) {
            return $this->show([
                'output' => $e->getMessage()
            ]);
        }

        return $this->show($output);
    }
}
