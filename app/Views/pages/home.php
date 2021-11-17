<?= $this->extend('layout/site') ?>

<?= $this->section('title') ?>
Página Inicial
<?= $this->endSection() ?>

<?= $this->section('styles')?>
<link rel="stylesheet" href="<?= base_url('assets/css/home.min.css')?>" />
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section id="topo" class="relative">
    <div class="slider-1 slider-custom-theme">
        <?php for($i=0;$i<4;$i++):?>
        <div>
            <div class="slider-box-content container">
                <div class="slider-text container">
                    <h5>Viva com</h5>
                    <h4><i>PERSONALIDADE</i></h4>
                </div>
                <div class="marca-saiba-mais d-flex relative container">
                    <img src="<?= base_url('assets/imgs/marcas/m-derby-logo.svg')?>" alt="Derby Logo" />
                    <a href="#">Saiba mais <span class="nextArrow-icon"></span></a>
                </div>
            </div>
            <picture>
                <source srcset="<?= base_url('assets/imgs/bg-slide-1-mob.png')?>" media="(max-width: 991px)">
                <img src="<?= base_url('assets/imgs/bg-slide-1.png')?>" alt="Slide 01"/>
            </picture>
        </div>
        <?php endfor;?>
    </div>
    <div class="sliderArrows relative container">
        <ul class="navigation d-flex">
            <li class="prev d-flex">
                <img class="w-30" src="<?= base_url('assets/imgs/prevArrow.svg')?>" alt="Slide Voltar" />
            </li>
            <li class="next d-flex">
                <img class="w-30" src="<?= base_url('assets/imgs/nextArrow.svg')?>" alt="Slide Próximo" />
            </li>
        </ul>
    </div>
</section>
<?php if (isset($destaques) && count($destaques)): ?>
<section id="empreendimentos" class="relative">
    <div class="navegacao">
        <a class="relative" href="<?= site_url('site/noticias/?q=Lancamentos') ?>">Lançamentos <span class="nextArrow-icon"></span></a>
        <a class="relative" href="<?= site_url('site/noticias/?q=Entregue') ?>">Obras Entregues <span class="nextArrow-icon"></span></a>
        <a class="relative" href="<?= site_url('site/noticias/?q=Construcao') ?>">Obras em Construção <span class="nextArrow-icon"></span></a>
    </div>
    <div class="empreendimentos__box d-flex">
        <?php foreach ($destaques as $i => $emp):?>
        <div class="item relative" data-item="item<?= $i ?>">
            <img src="<?= base_url(\App\Models\EmpreendimentoModel::IMG_PATH . $emp->imagem)?>" alt="<?= $emp->titulo?>" />
            <div class="hover">
<!--                <img src="<?= base_url('assets/imgs/marcas/m-derby-logo.svg')?>" alt="Derby Logo" />-->
                <div class="local relative"><i><?= $emp->titulo?></i></div>
                <?php $caracteristicas = explode(',', $emp->palavras_chave) ?>
                <ul class="desc">
                    <?php foreach ($caracteristicas as $c) :?>
                    <?php list($key, $value) = explode(':', $c);?>
                    <li class="<?= $key;?> relative"><?= $value;?></li>
                    <?php endforeach; ?>
                </ul>
                <a href="<?= base_url('site/empreendimento/'.$emp->slug) ?>" class="saiba-mais relative">Saiba mais <span class="nextArrow-icon"></span></a>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</section>
<?php endif; ?>
<section id="sobre" class="relative">
    <div class="content d-flex">
        <div class="texto d-flex">
            <div>
                <h4 class="title">A MAXPLURAL</h4>
                <p>Lorem Ipsum is simply dummy text of it to make a type specimen book. It has survived specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                    remaining essentially unchanged. It was popularised in the 1960s with the release</p>
                <p>of Letraset sheets containing Lorem more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
            <div class="d-flex w-100 sobre-marcas">
                <div class="w-30 text-center">
                    <img src="<?= base_url('assets/imgs/marcas/m-derby-logo.svg')?>" alt="Derby Logo" />
                </div>
                <div class="w-30 text-center">
                    <img src="<?= base_url('assets/imgs/marcas/m-carneiros-logo.svg')?>" alt="Carneiros Logo" />
                </div>
                <div class="w-30 text-center">
                    <img src="<?= base_url('assets/imgs/marcas/loft-logo.svg')?>" alt="Loft Logo" />
                </div>
            </div>
            <div class="premio">
                <img src="<?= base_url('assets/imgs/marcas/premio.png')?>" alt="Selo Premio" />
            </div>
        </div>
        <div class="links relative">
            <a href="<?= base_url('site/sobre') ?>#historia" class="relative">Nossa História <span class="nextArrow-icon"></span></a>
            <a href="<?= base_url('site/sobre') ?>#diferenciais" class="relative">Diferenciais <span class="nextArrow-icon"></span></a>
        </div>
    </div>
</section>
<?php if (isset($empreendimentos) && count($empreendimentos)): ?>
<section id="noticias" class="relative">
    <div class="container">
        <div class="noticias-header d-flex">
            <h4 class="thin"><i>Novidades para você</i></h4>
            <a href="<?= base_url('site/noticias') ?>" class="relative">Ir para o Blog <span class="nextArrow-icon dark"></span></a>
        </div>
        <div class="noticias-content">
            <div class="slider-3">
                <?php foreach ($empreendimentos as $emp):?>
                <div>
                    <a href="<?= base_url('site/empreendimento/'.$emp->slug) ?>">
                        <img class="w-100" src="<?= base_url(\App\Models\EmpreendimentoModel::IMG_PATH . $emp->imagem)?>" alt="<?= $emp->titulo ?>" />
                        <div class="noticias-content__box">
                            <p class="noticias-content__title"><?= $emp->titulo ?></p>
                            <p class="noticias-content__desc"><?= $emp->descricao ?></p>
                            <p class="relative">saiba mais <span class="nextArrow-icon dark"></span></p>
                        </div>
                    </a>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</section>
<?php endif;?>
<?= $this->endSection() ?>
