<?php
declare(strict_types=1);

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Contatos extends BaseController
{
    public function index(): string
    {
        return view('admin/crud', ['output' =>  '<h1>Contatos</h1>']);
    }
}
