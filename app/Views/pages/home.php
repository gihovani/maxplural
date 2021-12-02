<?= $this->extend('layout/site') ?>

<?= $this->section('title') ?>
Apartamentos Personalizados para Quem Busca um Morar Contemporâneo - Max Plural
<?= $this->endSection() ?>

<?= $this->section('meta') ?>
<meta name="keywords" content="valor apartamento, site de vendas de apartamentos, imóveis para comprar, apartamentos novos, apartamentos a venda, recife, pernambuco, porto de galinhas, piedade" />
<meta name="description" content="Apartamentos personalizados, para quem busca um morar contemporâneo. Imóveis com estrutura completa de lazer, localização estratégica e projetos únicos." />
<meta itemprop="image" content="<?= base_url('assets/icons/icon-512x512.png')?>" />
<link rel="canonical" href="<?= base_url()?>" />
<?= $this->endSection() ?>

<?= $this->section('styles') ?>
<link rel="stylesheet" href="<?= base_url('assets/css/home.min.css') ?>?v=<?= $version?>"/>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<?php if (isset($banners) && count($banners)): ?>
    <section class="relative">
        <div class="slider-1 slider-custom-theme">
            <?php foreach ($banners as $b): ?>
                <div>
                    <?php if ($b->link): ?><a href="<?= $b->link ?>"><?php endif; ?>
                        <div class="slider-box-content container">
                            <?= $b->conteudo ?>
                        </div>
                        <picture>
                            <?php if ($b->imagem_mobile): ?>
                                <source srcset="<?= base_url(\App\Models\BannerImagemModel::IMG_PATH . $b->imagem_mobile) ?>" media="(max-width: 991px)">
                            <?php endif; ?>
                            <img src="<?= base_url(\App\Models\BannerImagemModel::IMG_PATH . $b->imagem) ?>" alt="<?= $b->titulo ?>"/>
                        </picture>
                        <?php if ($b->link): ?></a><?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="sliderArrows relative container">
            <ul class="navigation d-flex">
                <li class="prev d-flex">
                    <img class="w-30" src="<?= base_url('assets/imgs/prevArrow.svg') ?>" alt="Slide Voltar"/>
                </li>
                <li class="next d-flex">
                    <img class="w-30" src="<?= base_url('assets/imgs/nextArrow.svg') ?>" alt="Slide Próximo"/>
                </li>
            </ul>
        </div>
    </section>
<?php endif; ?>
<?php if (isset($destaques) && count($destaques)): ?>
    <section id="empreendimentos" class="relative">
        <div class="navegacao">
            <a class="relative" href="<?= site_url('site/empreendimentos/?q=Lancamento') ?>">Lançamentos <span class="nextArrow-icon"></span></a>
            <a class="relative" href="<?= site_url('site/empreendimentos/?q=Entregue') ?>">Obras Entregues <span class="nextArrow-icon"></span></a>
            <a class="relative" href="<?= site_url('site/empreendimentos/?q=Construcao') ?>">Obras em Construção <span class="nextArrow-icon"></span></a>
        </div>
        <div class="empreendimentos__box d-flex">
            <?php foreach ($destaques as $i => $emp): ?>
                <div class="item relative" data-item="item<?= $i ?>">
                    <img src="<?= base_url(\App\Models\EmpreendimentoModel::IMG_PATH . $emp->imagem) ?>" alt="<?= $emp->titulo ?>"/>
                    <div class="hover">
                        <?php if (($l = $linha->getById($emp->linha_id)) && $l->imagem):?>
                            <img src="<?= base_url(\App\Models\LinhaModel::IMG_PATH . $l->imagem)?>" alt="<?=$l->titulo?>">
                        <?php endif;?>
                        <div class="local relative"><i><?= $emp->titulo ?></i></div>
                        <?php $caracteristicas = explode(',', $emp->palavras_chave) ?>
                        <ul class="desc">
                            <?php foreach ($caracteristicas as $c) : ?>
                                <?php list($key, $value) = explode(':', $c); ?>
                                <li class="<?= $key; ?> relative"><?= $value; ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="<?= site_url('site/empreendimento/' . $emp->slug) ?>" class="saiba-mais relative">Saiba mais <span class="nextArrow-icon"></span></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
<?php endif; ?>
<section id="sobre" class="relative">
    <div class="content d-flex">
        <div class="texto d-flex">
            <div>
                <h4 class="title">A MAXPLURAL</h4>
                <p>Desde 2005 temos feito a diferença no mercado imobiliário de Pernambuco. Unimos incorporação, engenharia e design para criar experiências. Com a busca incessante pelo melhor, investimos na qualidade e inovação sem deixar de atender as necessidades essenciais de cada morador. Com empreendimentos em localizações nobres como Boa Viagem, Piedade, Porto de Galinhas, Serrambi, entre outros, buscamos oferecer em cada produto um morar diferenciado, unindo design e funcionalidade.</p>
            </div>
            <div class="d-flex w-100 sobre-marcas">
                <div class="w-30 text-center">
                    <img src="<?= base_url('assets/imgs/marcas/m-derby-logo.svg') ?>" alt="Derby Logo"/>
                </div>
                <div class="w-30 text-center">
                    <img src="<?= base_url('assets/imgs/marcas/m-carneiros-logo.svg') ?>" alt="Carneiros Logo"/>
                </div>
                <div class="w-30 text-center">
                    <img src="<?= base_url('assets/imgs/marcas/loft-logo.svg') ?>" alt="Loft Logo"/>
                </div>
            </div>
            <div class="premio">
                <img src="<?= base_url('assets/imgs/marcas/premio.png') ?>" alt="Selo Premio"/>
            </div>
        </div>
        <div class="links relative">
            <a href="<?= site_url('site/sobre') ?>" class="relative">Nossa História <span class="nextArrow-icon"></span></a>
            <a href="<?= site_url('site/linhas') ?>" class="relative">Nossas Linhas <span class="nextArrow-icon"></span></a>
        </div>
    </div>
</section>
<?php if (isset($noticias) && count($noticias)): ?>
    <section id="noticias" class="relative">
        <div class="container">
            <div class="noticias-header d-flex">
                <h4 class="thin"><i>Novidades para você</i></h4>
                <a href="<?= site_url('site/noticias') ?>" class="relative">Ir para o Blog <span class="nextArrow-icon dark"></span></a>
            </div>
            <div class="noticias-content">
                <div class="slider-3">
                    <?php foreach ($noticias as $emp): ?>
                        <div>
                            <a href="<?= site_url('site/noticia/' . $emp->slug) ?>">
                                <img class="w-100" src="<?= site_url(\App\Models\NoticiaModel::IMG_PATH . $emp->imagem) ?>" alt="<?= $emp->titulo ?>"/>
                                <div class="noticias-content__box">
                                    <p class="noticias-content__title"><?= $emp->titulo ?></p>
                                    <p class="noticias-content__desc"><?= $emp->descricao ?></p>
                                    <p class="relative">saiba mais <span class="nextArrow-icon dark"></span></p>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?= $this->endSection() ?>
