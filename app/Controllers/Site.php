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
        $empreendimentos = new \App\Models\EmpreendimentoModel();
        $noticias = new \App\Models\NoticiaModel();
        $data = [
            'banners' => $banner->orderBy('prioridade')->findAll(),
            'destaques' => $empreendimentos->paginate(4),
            'noticias' => $noticias->paginate(4)
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

    public function empreendimentos(): string
    {
        return $this->show('empreendimentos', $this->getEmpreendimentos());
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
        return $this->show('noticias', $this->getNoticias(7));
    }

    public function noticia(string $slug = ''): string
    {
        $noticia = new \App\Models\NoticiaModel();
        return $this->show('noticia', ['noticia' => $noticia->getBySlug($slug)]);
    }

    private function show(string $page, array $params = []): string
    {
        $config = new \App\Models\ConfiguracaoModel();
        $params['config'] = $config->first();
        return view('pages/' . $page, $params);
    }

    private function getNoticias(int $page = 6): array
    {
        $model = new \App\Models\NoticiaModel();
        $search = $this->request->getGet('q');
        if ($search == '') {
            $noticias = $model;
        } else {
            $noticias = $model->select('*')
                ->orLike('categoria', $search)
                ->orLike('titulo', $search)
                ->orLike('conteudo', $search);
        }
        return [
            'noticias' => $noticias->paginate($page),
            'pager' => $noticias->pager,
            'active' => $search
        ];
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

    private function saveForm(): bool
    {
        $data = $this->request->getPost();
        $model = new \App\Models\ContatoModel();
        return $data && (bool)$model->insert($data);
    }


}
