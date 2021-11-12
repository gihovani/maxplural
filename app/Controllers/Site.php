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
    public function projeto(): string
    {
        return $this->show('projeto');
    }
    public function baixe_tabelas(): string
    {
        return $this->show('download');
    }

    private function show(string $page): string
    {
        return view('pages/' . $page);
    }
}
