<?php
declare(strict_types=1);

namespace App\Controllers\Admin;

include(APPPATH . 'Libraries/GroceryCrudEnterprise/autoload.php');

use App\Controllers\BaseController;
use Config\Database;
use Config\GroceryCrudEnterprise;
use GroceryCrud\Core\Exceptions\Exception;
use GroceryCrud\Core\GroceryCrud;

abstract class CrudAbstract extends BaseController
{
    protected $unsetFields = ['created_at', 'updated_at', 'deleted_at'];
    protected $unsetColumns = ['deleted_at'];
    abstract public function configureCrud(GroceryCrud $crud): void;
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
        $this->configureCrud($crud);
        $crud->unsetFields($this->unsetFields);
        $crud->unsetColumns($this->unsetColumns);

        try {
            $output = $crud->render();
        } catch (\Exception $e) {
            return $this->show([
                'output' => $e->getMessage()
            ]);
        }

        return $this->show($output);
    }

    protected function show($output = null): string
    {
        if (isset($output->isJSONResponse) && $output->isJSONResponse) {
            header('Content-Type: application/json; charset=utf-8');
            echo $output->output;
            exit;
        }

        return view('admin/crud', (array)$output);
    }

    protected function getDatabaseParams(): array {
        $db = (new Database())->default;
        return [
            'adapter' => [
                'driver' => 'Pdo_Mysql',
                'host'     => $db['hostname'],
                'database' => $db['database'],
                'username' => $db['username'],
                'password' => $db['password'],
                'charset' => 'utf8'
            ]
        ];
    }

    /**
     * @return GroceryCrud
     * @throws Exception
     */
    protected function getGroceryCrudEnterprise(): GroceryCrud
    {
        $db = $this->getDatabaseParams();
        $config = (new GroceryCrudEnterprise())->getDefaultConfig();

        return new GroceryCrud($config, $db);
    }
}
