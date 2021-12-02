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
            'destaques' => $empreendimentos
                ->orderBy('updated_at', 'desc')
                ->paginate(4),
            'noticias' => $noticias
                ->orderBy('updated_at', 'desc')
                ->paginate(4),
            'linha' => new \App\Models\LinhaModel()

        ];
        return $this->show('home', $data);
    }

    public function sobre(): string
    {
        return $this->page('sobre');
    }

    public function privacidade(): string
    {
        return $this->page('privacidade');
    }

    public function offline(): string
    {
        return $this->page('offline');
    }

    public function linhas(): string
    {
        $linha = new \App\Models\LinhaModel();
        $pagina = new \App\Models\PaginaModel();
        return $this->show('linhas', [
            'linhas' => $linha->orderBy('prioridade')
                ->getWhere(['situacao' => 1])->getResult(),
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

    public function manifest(): ResponseInterface
    {
        $data = [
            'theme_color' => '#111111',
            'background_color' => '#1c1c1c',
            'display' => 'fullscreen',
            'scope' => '/',
            'start_url' => base_url(),
            'name' => 'Incorporadora Max Plural',
            'short_name' => 'Max Plural',
            'description' => 'Website da incorporadora Max Plural',
            'icons' => [[
                'src' => base_url('/favicon.ico'),
                'type' => 'image/x-icon',
            ], [
                'src' => base_url('/assets/icons/icon-192x192.png'),
                'sizes' => '192x192',
                'type' => 'image/png',
            ], [
                'src' => base_url('/assets/icons/icon-256x256.png'),
                'sizes' => '256x256',
                'type' => 'image/png',
            ], [
                'src' => base_url('/assets/icons/icon-384x384.png'),
                'sizes' => '384x384',
                'type' => 'image/png',
            ], [
                'src' => base_url('/assets/icons/icon-512x512.png'),
                'sizes' => '512x512',
                'type' => 'image/png',
            ]]
        ];
        return $this->response->setJSON($data);
    }

    private function page(string $slug): string
    {
        $pagina = new \App\Models\PaginaModel();
        return $this->show($slug, ['pagina' => $pagina->getBySlug($slug)]);
    }

    private function show(string $page, array $params = []): string
    {
        $config = new \App\Models\ConfiguracaoModel();
        $params['config'] = $config->first();
        $params['version'] = '1.0.6';
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
            'noticias' => $noticias
                ->orderBy('updated_at', 'desc')
                ->paginate($page),
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
            'linha' => new \App\Models\LinhaModel(),
            'empreendimentos' => $empreendimentos
                ->orderBy('updated_at', 'desc')
                ->paginate($page),
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

    public function checkImages()
    {
        $end = ' <br />' . PHP_EOL;
        $model = new \App\Models\EmpreendimentoImagemModel();
        print $model::IMG_PATH . $end;
        foreach ($model->findAll() as $img) {
            if (!file_exists($model::IMG_PATH . $img->imagem)) {
//                print $img->empreendimento_id . ' - ' . $img->tipo . ' - '.
                print $img->imagem . $end;
            }
        }
        print '';
    }

}
