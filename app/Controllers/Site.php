<?php

namespace App\Controllers;

class Site extends BaseController
{
    public function index(): string
    {
        return $this->show('home');
    }

    public function sobre(): string
    {
        return $this->show('sobre');
    }

    public function linhas(): string
    {
        return $this->show('linhas');
    }

    public function empreendimentos(): string
    {
        return $this->show('empreendimentos');
    }

    private function show(string $page): string
    {
        return view('pages/' . $page);
    }
}