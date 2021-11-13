<?php

namespace App\Controllers\Crud;

class Index extends CrudAbstract
{
    public function index(): string
    {
        return $this->show([
            'output' => ''
        ]);
    }
}
