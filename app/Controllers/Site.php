<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Models\ConfiguracaoModel;

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
    public function tabelas_de_valores(): string
    {
        return $this->show('tabelas-de-valores');
    }
    public function contato(): string
    {
        return $this->show('contato');
    }
    public function noticias(): string
    {
        return $this->show('noticias');
    }
    public function noticia(): string
    {
        return $this->show('noticia');
    }

    private function show(string $page, array $params = []): string
    {
        $config = new ConfiguracaoModel();
        $params['config'] = $config->first();
        return view('pages/' . $page, $params);
    }
}
