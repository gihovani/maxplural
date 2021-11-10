<?= $this->extend('layout/site') ?>

<?= $this->section('title') ?>
Página Inicial
<?= $this->endSection() ?>

<?= $this->section('styles')?>
<link rel="stylesheet" href="<?= base_url('assets/css/home.css')?>" />
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section id="topo" class="relative">
    <div class="slider-1 slider-custom-theme">
        <div>
            <div class="slider-box-content container">
                <div class="slider-text container">
                    <h5>Viva com</h5>
                    <h4><i>PERSONALIDADE</i></h4>
                </div>
                <div class="marca-saiba-mais d-flex relative container">
                    <img src="<?= base_url('assets/imgs/marcas/m-derby-logo.svg')?>" />
                    <a href="#">Saiba mais <span class="nextArrow-icon"></span></a>
                </div>
            </div>
            <picture>
                <source srcset="<?= base_url('assets/imgs/bg-slide-1-mob.png')?>" media="(max-width: 991px)">
                <img src="<?= base_url('assets/imgs/bg-slide-1.png')?>" />
            </picture>
        </div>
        <div>
            <div class="slider-box-content container">
                <div class="slider-text container relative">
                    <h5>Viva com</h5>
                    <h4><i>PERSONALIDADE</i></h4>
                </div>
                <div class="marca-saiba-mais d-flex relative container">
                    <img src="<?= base_url('assets/imgs/marcas/m-derby-logo.svg')?>" />
                    <a href="#">Saiba mais <span class="nextArrow-icon"></span></a>
                </div>
            </div>
            <picture>
                <source srcset="<?= base_url('assets/imgs/bg-slide-1-mob.png')?>" media="(max-width: 991px)">
                <img src="<?= base_url('assets/imgs/bg-slide-1.png')?>" />
            </picture>
        </div>
        <div>
            <div class="slider-box-content container">
                <div class="slider-text container relative">
                    <h5>Viva com</h5>
                    <h4><i>PERSONALIDADE</i></h4>
                </div>
                <div class="marca-saiba-mais d-flex relative container">
                    <img src="<?= base_url('assets/imgs/marcas/m-derby-logo.svg')?>" />
                    <a href="#">Saiba mais <span class="nextArrow-icon"></span></a>
                </div>
            </div>
            <picture>
                <source srcset="<?= base_url('assets/imgs/bg-slide-1-mob.png')?>" media="(max-width: 991px)">
                <img src="<?= base_url('assets/imgs/bg-slide-1.png')?>" />
            </picture>
        </div>
    </div>
    <div class="sliderArrows relative container">
        <ul class="navigation d-flex">
            <li class="prev d-flex">
                <img class="w-30" src="<?= base_url('assets/imgs/prevArrow.svg')?>" />
            </li>
            <li class="next d-flex">
                <img class="w-30" src="<?= base_url('assets/imgs/nextArrow.svg')?>" />
            </li>
        </ul>
    </div>
</section>
<section id="empreendimentos" class="relative">
    <div class="navegacao">
        <a href="#" class="relative">Lançamentos <span class="nextArrow-icon"></span></a>
        <a href="#" class="relative">Obras entregues <span class="nextArrow-icon"></span></a>
        <a href="#" class="relative">Obras em andamento <span class="nextArrow-icon"></span></a>
    </div>
    <div class="empreendimentos__box d-flex">
        <div class="item relative" data-item="item1">
            <img src="<?= base_url('assets/imgs/empreendimento/item-1.png')?>" />
            <div class="hover">
                <img src="<?= base_url('assets/imgs/marcas/m-derby-logo.svg')?>" />
                <div class="local relative"><i>Boa viagem</i></div>
                <ul class="desc">
                    <li class="quartos relative">3 suites</li>
                </ul>
                <a href="#" class="saiba-mais relative">Saiba mais <span class="nextArrow-icon"></span></a>
            </div>
        </div>
        <div class="item relative" data-item="item2">
            <img src="<?= base_url('assets/imgs/empreendimento/item-2.png')?>" />
            <div class="hover">
                <img src="<?= base_url('assets/imgs/marcas/m-derby-logo.svg')?>" />
                <div class="local relative"><i>Boa viagem</i></div>
                <ul class="desc">
                    <li class="quartos relative">3 suites</li>
                </ul>
                <a href="#" class="saiba-mais relative">Saiba mais <span class="nextArrow-icon"></span></a>
            </div>
        </div>
        <div class="item relative" data-item="item3">
            <img src="<?= base_url('assets/imgs/empreendimento/item-3.png')?>" />
            <div class="hover">
                <img src="<?= base_url('assets/imgs/marcas/m-derby-logo.svg')?>" />
                <div class="local relative"><i>Boa viagem</i></div>
                <ul class="desc">
                    <li class="quartos relative">3 suites</li>
                </ul>
                <a href="#" class="saiba-mais relative">Saiba mais <span class="nextArrow-icon"></span></a>
            </div>
        </div>
        <div class="item relative" data-item="item4">
            <img src="<?= base_url('assets/imgs/empreendimento/item-4.png')?>" />
            <div class="hover">
                <img src="<?= base_url('assets/imgs/marcas/m-derby-logo.svg')?>" />
                <div class="local relative"><i>Boa viagem</i></div>
                <ul class="desc">
                    <li class="quartos relative">3 suites</li>
                </ul>
                <a href="#" class="saiba-mais relative">Saiba mais <span class="nextArrow-icon"></span></a>
            </div>
        </div>
    </div>
</section>
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
                    <img src="<?= base_url('assets/imgs/marcas/m-derby-logo.svg')?>" />
                </div>
                <div class="w-30 text-center">
                    <img src="<?= base_url('assets/imgs/marcas/m-carneiros-logo.svg')?>" />
                </div>
                <div class="w-30 text-center">
                    <img src="<?= base_url('assets/imgs/marcas/loft-logo.svg')?>" />
                </div>
            </div>
            <div class="premio">
                <img src="<?= base_url('assets/imgs/marcas/premio.png')?>" />
            </div>
        </div>
        <div class="links relative">
            <a href="#" class="relative">Nossa História <span class="nextArrow-icon"></span></a>
            <a href="#" class="relative">Diferenciais <span class="nextArrow-icon"></span></a>
        </div>
    </div>
</section>
<section id="noticias" class="relative">
    <div class="container">
        <div class="noticias-header d-flex">
            <h4 class="thin"><i>Notícias e novidades para você</i></h4>
            <a href="#" class="relative">Ir para o Blog <span class="nextArrow-icon dark"></span></a>
        </div>
        <div class="noticias-content">
            <div class="slider-3">
                <div>
                    <a href="">
                        <img class="w-100" src="<?= base_url('assets/imgs/noticias/noticia-1.png')?>" />
                        <div class="noticias-content__box">
                            <p class="noticias-content__title">Lorem ipsum dolor sit amet, consectetur adispiscing elit, sed do eiusmod</p>
                            <p class="noticias-content__desc">Lorem ipsum dolor sit amet, consectetur adispiscing elit, sed tempor incidunt</p>
                            <p class="relative">saiba mais <span class="nextArrow-icon dark"></span></p>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="">
                        <img class="w-100" src="<?= base_url('assets/imgs/noticias/noticia-2.png')?>" />
                        <div class="noticias-content__box">
                            <p class="noticias-content__title">Lorem ipsum dolor sit amet, consectetur adispiscing elit, sed do eiusmod</p>
                            <p class="noticias-content__desc">Lorem ipsum dolor sit amet, consectetur adispiscing elit, sed do eiusmod tempor incidunt</p>
                            <p class="relative">saiba mais <span class="nextArrow-icon dark"></span></p>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="">
                        <img class="w-100" src="<?= base_url('assets/imgs/noticias/noticia-3.png')?>" />
                        <div class="noticias-content__box">
                            <p class="noticias-content__title">Lorem ipsum dolor sit amet, consectetur adispiscing elit, sed do eiusmod</p>
                            <p class="noticias-content__desc">Lorem ipsum dolor sit amet, consectetur adispiscing elit, sed do eiusmod tempor incidunt</p>
                            <p class="relative">saiba mais <span class="nextArrow-icon dark"></span></p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
