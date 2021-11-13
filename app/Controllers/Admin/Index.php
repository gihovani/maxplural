<?php
declare(strict_types=1);

namespace App\Controllers\Admin;

class Index extends CrudAbstract
{
    public function index(): string
    {
        return $this->show([
            'output' => ''
        ]);
    }
}
