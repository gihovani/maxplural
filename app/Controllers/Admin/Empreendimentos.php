<?php
declare(strict_types=1);

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Empreendimentos extends BaseController
{
    public function index(): string
    {
        return view('admin/crud', ['output' =>  '<h1>Empreendimentos</h1>']);
    }
}
