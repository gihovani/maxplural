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
    abstract public function index(): string;

    protected function show($output = null): string
    {
        if (isset($output->isJSONResponse) && $output->isJSONResponse) {
            header('Content-Type: application/json; charset=utf-8');
            echo $output->output;
            exit;
        }

        return view('admin/crud', (array)$output);
    }

    private function getDatabaseParams(): array {
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
