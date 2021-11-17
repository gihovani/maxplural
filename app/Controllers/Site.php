<?php
declare(strict_types=1);

namespace App\Controllers;

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
        $banner = new \App\Models\BannerImagemModel();
        $model = new \App\Models\EmpreendimentoModel();
        $data = [
            'banners' => $banner->orderBy('prioridade')->findAll(),
            'destaques' => $model->paginate(4),
            'empreendimentos' => $model->paginate(4, 'default', 2)
        ];
        return $this->show('home', $data);
    }

    public function sobre(): string
    {
        $pagina = new \App\Models\PaginaModel();
        return $this->show('sobre', ['pagina' => $pagina->getBySlug('sobre')]);
    }

    public function privacidade(): string
    {
        $pagina = new \App\Models\PaginaModel();
        return $this->show('privacidade', ['pagina' => $pagina->getBySlug('privacidade')]);
    }

    public function linhas(): string
    {
        $linha = new \App\Models\LinhaModel();
        $pagina = new \App\Models\PaginaModel();
        return $this->show('linhas', [
            'linhas' => $linha->findAll(),
            'pagina' => $pagina->getBySlug('linhas')
        ]);
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
        $data = $this->request->getPost();
        $model = new \App\Models\ContatoModel();
        return $data && (bool)$model->insert($data);
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

    public function tabelas_de_valores()
    {
        $model = new \App\Models\EmpreendimentoArquivoModel();
        if ($success = $this->saveForm()) {
            $arquivo = $this->request->getPost('assunto');
            if (file_exists(\App\Models\EmpreendimentoArquivoModel::IMG_PATH . $arquivo)) {
                return $this->response->download(\App\Models\EmpreendimentoArquivoModel::IMG_PATH . $arquivo);
            }
            return $this->response->download($arquivo . '.txt', 'Arquivo não encontrado, em breve nossa equipe entrará em contato!');
        }
        return $this->show('tabelas-de-valores', [
            'success' => $success,
            'arquivos' => $model->getTabelaValores()
        ]);
    }

    public function contato(): string
    {
        $success = $this->saveForm();
        return $this->show('contato', ['success' => $success]);
    }

    public function newsletter(): string
    {
        $success = $this->saveForm();
        $pagina = new \App\Models\PaginaModel();
        return $this->show('newsletter', [
            'success' => $success,
            'pagina' => $pagina->getBySlug('newsletter')
        ]);
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
        $config = new \App\Models\ConfiguracaoModel();
        $params['config'] = $config->first();
        return view('pages/' . $page, $params);
    }
}
