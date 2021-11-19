<?php
declare(strict_types=1);

namespace App\Database\Seeds;

use App\Models\PaginaModel;
use CodeIgniter\Database\Seeder;
use Exception;

class PaginaSeeder extends Seeder
{
    public function run()
    {
        $paginas = [
            [
                'tipo' => 'Página',
                'slug' => 'linhas',
                'titulo' => 'TÍTULO SOBRE NOSSAS LINHAS',
                'descricao' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit. Vivamus venenatis molestie elit. Nulla tristique mi at ligula eleifend vitae tincidunt risus rutrum. Etiam mattis pellentesque dictum.',
                'conteudo' => "<div class='linhas-text text-center mv-3'>\r\n<h2 class='title'>Nossas Linhas</h2>\r\n</div>\r\n<p>Lorem ipsum dolor sit amet    consectetur adipiscing elit. Vivamus venenatis molestie elit. Nulla tristique mi at ligula eleifend vitae tincidunt risus rutrum. Etiam mattis pellentesque dictum.\r\nMauris euismod sem est. Sed vehicula rutrum scelerisque. Proin vel maximus ipsum. Phasellus efficitur ipsum nec ullamcorper finibus. Morbi urna libero hendrerit id gravida quis accumsan ac\r\ntellus. Duis id lectus et augue volutpat feugiat.</p>",
                'style' => 'section #title-page{background-image:url(./assets/imgs/linhas/bg-title-nossas-linhas.png)}section #title-page h1{font-size:2.5rem;font-weight:600;margin:10rem 0}#content.linhas{background:#fff}#content.linhas *{color:var(--main-bg-color)}#content.linhas-cards .linhas-cards__card{background-color:#f5f5f5;border-radius:80px;width:27%;margin:1.5%;transition:all .3s}#content.linhas-cards .linhas-cards__card:hover{box-shadow:0 20px 40px #00000044}#content.linhas-cards .linhas-cards__card>div{padding:40px 30px 20px;min-height:270px}#content.linhas-cards .linhas-cards__card>div img{max-width:235px}@media screen and (max-width:1200px){#content.linhas .linhas-cards__card:nth-child(-n+3)>div img{max-height:55px}}@media screen and (max-width:769px){#content.linhas .linhas-cards__card{width:47%}#content.linhas .linhas-cards__card>div{min-height:225px}}@media screen and (max-width:420px){#content.linhas .linhas-cards__card{width:97%}#content.linhas .linhas-cards__card>div{min-height:180px}}',
                'situacao' => 1
            ],
            [
                'tipo' => 'Página',
                'slug' => 'sobre',
                'titulo' => 'A MAXPLURAL',
                'descricao' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit. Vivamus venenatis molestie elit. Nulla tristique mi at ligula eleifend vitae tincidunt risus rutrum. Etiam mattis pellentesque dictum.',
                'conteudo' => "<div id='tabs' class='historia__tabs d-flex'>\r\n<div class='tab active' id='historia'>HISTÓRIA</div>\r\n<div class='tab' id='diferenciais'>DIFERENCIAIS</div>\r\n</div>\r\n<div class='historia__contents'>\r\n<div class='historia__contents--content tab-content active' data-target='historia'>\r\n<p class='text-center'>Com a proposta de investir no conceito design na construção civil a Maxplural conta com empreendimentos que chamam a atenção agregando funcionalidade flexibilidade,\r\ntecnologia e história com a proposta do conforto unido ao valor estético.</p>\r\n<p class='text-center'>Nosso escritório está localizado no Empresarial Center 3 um complexo empresarial próximo ao Shopping Recife.</p>\r\n<div class='d-flex logos'>\r\n<div class='w-30 text-center'>\r\n<img src='./assets/imgs/marcas/m-derby-logo.svg' alt='Derby Logo' />\r\n</div>\r\n<div class='w-30 text-center'>\r\n<img src='./assets/imgs/marcas/m-carneiros-logo.svg' alt='Carneiros Logo' />\r\n</div>\r\n<div class='w-30 text-center'>\r\n<img src='./assets/imgs/marcas/loft-logo.svg' alt='Loft Logo' />\r\n</div>\r\n<div class='w-100 text-center'>\r\n<img src='./assets/imgs/marcas/premio.png' alt='Selo Premio' />\r\n</div>\r\n</div>\r\n</div>\r\n<div class='historia__contents--content tab-content' data-target='diferenciais'>\r\n<p class='text-center'>CONTEÚDO DIFERENCIAIS</p>\r\n</div>\r\n</div>",
                'style' => '#content{background-color:#fff}#content.historia{background-image:url(./assets/imgs/sobre/bg-tabs.png);background-size:cover;background-position:center}#content.historia *{color:var(--main-bg-color)}#content .logos div:not(:last-child){width:15%;padding:40px 20px}#content .logos div:not(:last-child) img{filter:brightness(.5);width:100%}@media screen and (max-width:768px){#content .logos div:not(:last-child){width:25%}}@media screen and (max-width:520px){#content .logos div:not(:last-child){width:41%;padding:20px}}',
                'situacao' => 1
            ],
            [
                'tipo' => 'Página',
                'slug' => 'privacidade',
                'titulo' => 'Política de Privacidade',
                'descricao' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit. Vivamus venenatis molestie elit. Nulla tristique mi at ligula eleifend vitae tincidunt risus rutrum. Etiam mattis pellentesque dictum.',
                'conteudo' => "<div class='linhas-text text-center mv-3'>\r\n<h2 class='title'>Política de Privacidade</h2>\r\n</div>\r\n<p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Vivamus venenatis molestie elit. Nulla tristique mi at ligula eleifend vitae tincidunt risus rutrum. Etiam mattis pellentesque dictum.\r\nMauris euismod sem est. Sed vehicula rutrum scelerisque. Proin vel maximus ipsum. Phasellus efficitur ipsum nec ullamcorper finibus. Morbi urna libero hendrerit id gravida quis accumsan ac\r\ntellus. Duis id lectus et augue volutpat feugiat.</p>",
                'style' => '#content{background-color:#fff}#content.privacidade *{color:var(--main-bg-color)}',
                'situacao' => 1
            ],
            [
                'tipo' => 'Página',
                'slug' => 'newsletter',
                'titulo' => 'Newsletter',
                'descricao' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit. Vivamus venenatis molestie elit. Nulla tristique mi at ligula eleifend vitae tincidunt risus rutrum. Etiam mattis pellentesque dictum.',
                'conteudo' => "<div class='linhas-text text-center mv-3'>\r\n<h2 class='title'>Inscrição em nossa Newsletter</h2>\r\n</div>\r\n<p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Vivamus venenatis molestie elit. Nulla tristique mi at ligula eleifend vitae tincidunt risus rutrum. Etiam mattis pellentesque dictum.\r\nMauris euismod sem est. Sed vehicula rutrum scelerisque. Proin vel maximus ipsum. Phasellus efficitur ipsum nec ullamcorper finibus. Morbi urna libero hendrerit id gravida quis accumsan ac\r\ntellus. Duis id lectus et augue volutpat feugiat.</p>",
                'style' => '#content{background-color:#fff}#content.newsletter *{color:var(--main-bg-color)}',
                'situacao' => 1
            ],
            [
                'tipo' => 'Página',
                'slug' => 'offline',
                'titulo' => 'Página Offline',
                'descricao' => 'Página offline para o site da incorporadora Max Plural .',
                'conteudo' => "<div class='linhas-text text-center mv-3'>\r\n<h2 class='title'>Página Offline</h2>\r\n</div>\r\n<p>Você não está conectado com a Internet.</p><p>Verifique sua conexão de rede e tente novamente.</p>",
                'style' => '#content{background-color:#fff}#content.offline *{color:var(--main-bg-color);text-align:center}',
                'situacao' => 1
            ]
        ];
        foreach ($paginas as $data) {
            $this->insert($data);
        }
    }

    private function insert(array $data)
    {
        try {
            $model = new PaginaModel();
            $model->insert($data);
        } catch (Exception $e) {
            print $e->getMessage() . PHP_EOL;
        }
    }
}
