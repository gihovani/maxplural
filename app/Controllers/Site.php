<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Models\ConfiguracaoModel;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class Site extends BaseController
{
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        helper('form');
    }

    public function index(): string
    {
        $model = new \App\Models\EmpreendimentoModel();
        $data = [
            'destaques' => $model->paginate(4),
            'empreendimentos' => $model->paginate(4, 'default', 2)
        ];
        return $this->show('home', $data);
    }

    public function sobre(): string
    {
        return $this->show('sobre');
    }

    public function linhas(): string
    {
        $model = new \App\Models\LinhaModel();
        return $this->show('linhas', ['linhas' => $model->findAll()]);
    }

    private function getEmpreendimentos(int $page = 6): array
    {
        $model = new \App\Models\EmpreendimentoModel();
        $search = $this->request->getGet('q');
        if ($search == '') {
            $empreendimentos = $model;
        } else {
            $empreendimentos = $model->select('*')
                ->orLike('tipo', $search)
                ->orLike('titulo', $search)
                ->orLike('conteudo', $search);
        }
        return [
            'empreendimentos' => $empreendimentos->paginate($page),
            'pager' => $empreendimentos->pager,
            'active' => $search
        ];
    }
    public function empreendimentos(): string
    {
        return $this->show('empreendimentos', $this->getEmpreendimentos());
    }
    private function saveForm(): bool
    {
        return false;
    }
    public function empreendimento(string $slug = '')
    {
        $model = new \App\Models\EmpreendimentoModel();
        if (!$empreendimento = $model->getBySlug($slug)) {
            return redirect()->to('site/empreendimentos');
        }

        $success = $this->saveForm();
        return $this->show('empreendimento', ['emp' => $empreendimento, 'success' => $success]);
    }
    public function tabelas_de_valores(): string
    {
        $success = $this->saveForm();
        return $this->show('tabelas-de-valores', ['success' => $success]);
    }
    public function contato(): string
    {
        $success = $this->saveForm();
        return $this->show('contato', ['success' => $success]);
    }
    public function noticias(): string
    {
        return $this->show('noticias', $this->getEmpreendimentos(7));
    }
    public function noticia_bkp(): string
    {
        return $this->show('noticia.bkp');
    }

    private function show(string $page, array $params = []): string
    {
        $config = new ConfiguracaoModel();
        $params['config'] = $config->first();
        return view('pages/' . $page, $params);
    }
}
