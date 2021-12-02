<?= $this->extend('layout/site') ?>

<?= $this->section('title') ?>
<?= $noticia->titulo?>
<?= $this->endSection() ?>

<?= $this->section('meta') ?>
<?php $meta = $noticia;?>
<?php if ($meta->palavras_chave) :?>
    <meta name="keywords" content="<?= $meta->palavras_chave?>" />
<?php endif;?>
<?php if ($meta->descricao) :?>
    <meta name="description" content="<?= $meta->descricao?>" />
<?php endif;?>
<?php if ($meta->imagem) :?>
    <meta itemprop="image" content="<?= base_url(\App\Models\NoticiaModel::IMG_PATH . $meta->imagem)?>" />
<?php endif;?>
<link rel="canonical" href="<?= site_url('site/noticia/' . $meta->slug)?>" />
<?= $this->endSection() ?>

<?= $this->section('styles')?>
    <link rel="stylesheet" href="<?= base_url('assets/css/noticia.min.css')?>?v=<?= $version?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/form.min.css')?>?v=<?= $version?>" />
    <?php if (isset($noticia->style) && !empty($noticia->style)):?>
        <style>
            <?= $noticia->style ?>
        </style>
    <?php endif;?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v12.0&appId=601443854456863&autoLogAppEvents=1" nonce="XNGmJLps"></script>
    <section id="title-page" class="relative pv-3">
        <div class="container">
            <h1 class="title"><i><?= $noticia->titulo?></i></h1>
        </div>
    </section>
    <section id="post-content">
        <div class="container d-flex pv-3">
            <div class="w-60">
                <div class="content-posted pv-3 ph-2">
                    <img class="w-100" src="<?= base_url(\App\Models\NoticiaModel::IMG_PATH . $noticia->imagem)?>" alt="<?= $noticia->titulo?>">
                    <div class="post-date">
                        <?php list($data, $hora) = explode(' ', $noticia->created_at) ?>
                        <?php list($ano, $mes, $dia)  = explode('-', $data); ?>
                        <h5><?=$dia?> <span>.</span> <?=$mes?> <span>.</span> <?=$ano?> </h5>
                    </div>
                    <h2 class="title"><?= $noticia->titulo?></h2>
                    <div class="post-text">
                        <?= $noticia->conteudo?>
                    </div>
                    <div class="post-footer d-flex">
                        <div class="cat">
                            <span>Categoria:</span>
                            <span><a href="<?= site_url('site/noticias/?q='.$noticia->categoria)?>"><?= mb_strtoupper($noticia->categoria) ?></a></span>
                        </div>
                        <div class="social d-flex">
                            <a href="<?= $config->facebook ?>" target="_blank">
                                <img src="<?= base_url('assets/imgs/facebook-64.svg') ?>" alt="Logo Facebook"/>
                            </a>
                            <a href="<?= $config->instagram ?>" target="_blank">
                                <img src="<?= base_url('assets/imgs/instagram-64.svg') ?>" alt="Logo Instagram"/>
                            </a>
                            <a href="<?= $config->linkedin ?>" target="_blank">
                                <img src="<?= base_url('assets/imgs/linkedin-64.svg') ?>" alt="Logo Linkedin"/>
                            </a>
                            <a href="<?= $config->youtube ?>" target="_blank">
                                <img src="<?= base_url('assets/imgs/youtube-64.svg') ?>" alt="Logo Youtube"/>
                            </a>
                        </div>
                    </div>
                    <div class="w-100">
                        <div class="fb-comments" data-href="<?= site_url('site/noticia/'.$noticia->slug)?>" data-width="500" data-numposts="5"></div>
                    </div>
                </div>
            </div>
            <div class="w-25 pv-3 coluna-direita">
                <span class="mob-d-block closeBusca"></span>
                <div class="busca">
                    <div class="busca_por-texto">
                        <h2 class="title">REALIZE SUA BUSCA:</h2>
                        <?= form_open('site/noticias/', ['id' => 'busca-texto', 'method' => 'get']);?>
                            <label for="searchQuery" class="sr-only">TERMO</label>
                            <input type="text" id="searchQuery" name="q" required="required" />
                            <button class="btn-default" type="submit">
                                <img src="<?= base_url('assets/imgs/search-96.svg') ?>" alt=""> BUSCAR
                            </button>
                        <?= form_close()?>
                    </div>
                    <div class="busca_por-select">
                        <h2 class="title">ENCONTRE SEU IMÓVEL</h2>
                        <h4 class="thin">A <strong>MAXPLURAL</strong> tem o imóvel perfeito para o seu sonho.</h4>
                        <?= form_open('site/empreendimentos/', ['id' => 'busca-select', 'method' => 'get']);?>
                            <div class="formgroup">
                                <label for="empreendimentoSearch" class="sr-only">Estado / Cidade</label>
                                <input type="text" id="empreendimentoSearch" name="q" required="required">
                            </div>
                            <button class="btn-default" type="submit">
                                <img src="<?= base_url('assets/imgs/search-96.svg') ?>" alt=""> BUSCAR
                            </button>
                        <?= form_close()?>
                    </div>
                </div>
            </div>

            <div class="mob-d-block openBusca">
                <div class="bg-filtro">
                    <img class="w-100" src="<?= base_url('assets/imgs/filter-icon.svg')?>" alt="">
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>

<?= $this->section('scripts')?>
    <script type="text/javascript" src="<?= base_url('assets/js/tabelas-de-valores-min.js')?>?v=<?= $version?>" ></script>
    <script type="text/javascript" src="<?= base_url('assets/js/noticia-min.js')?>?v=<?= $version?>" ></script>
    <script type="text/javascript" src="<?= base_url('assets/js/form-min.js')?>?v=<?= $version?>" ></script>
    <?php if (isset($noticia->javascript) && !empty($noticia->javascript)):?>
        <script>
            <?= $noticia->javascript ?>
        </script>
    <?php endif;?>
<?= $this->endSection() ?>
