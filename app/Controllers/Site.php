<?php
declare(strict_types=1);

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
    public function contato(): string
    {
        return $this->show('contato');
    }
    public function blog(): string
    {
        return $this->show('blog');
    }
    public function post(): string
    {
        return $this->show('blog_post');
    }

    private function show(string $page): string
    {
        return view('pages/' . $page);
    }
}
