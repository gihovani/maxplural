<?= $this->extend('layout/site') ?>

<?= $this->section('title') ?>
    Blog
<?= $this->endSection() ?>

<?= $this->section('styles')?>
    <link rel="stylesheet" href="<?= base_url('assets/css/noticias.min.css')?>" />
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section id="title-page" class="relative pv-3">
    <div class="container">
        <h1 class="title"><i>Notícias e novidades<br />para você</i></h1>
    </div>
</section>
<section id="blog-box">
    <div class="container">
        <div class="filtros_e_buscas d-flex">
            <div>
                <span>Categorias</span>
                <a class="mh-1" href="">TODOS</a>
                <a class="mh-1" href="">EMPREENDIMENTOS</a>
                <a class="mh-1" href="">EVENTOS</a>
            </div>
            <div>
                <form id="searchPost" class="relative" action="">
                    <input type="text" placeholder="o que você procura?">
                    <button class="d-flex" type="submit"><img class="icon-search" src="<?= base_url('assets/imgs/search-96.svg') ?>" alt="Ícone Search" /></button>
                </form>
            </div>
        </div>
        <div class="d-flex conteudo">
            <div class="post-destaque d-flex w-100">
                <div class="w-50 img-post d-flex">
                    <img class="w-100" src="<?= base_url('/assets/imgs/blog/img-post-destaque.png')?>" alt="">
                </div>
                <div class="w-50">
                    <div class="post-descricao">
                        <div class="post-descricao__info d-flex">
                            <span class="cat">categoria</span>
                            <span class="data">{{tempo}} minutos atrás</span>
                        </div>
                        <div class="post-descricao__content">
                            <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In pretium porttitor nulla non dapibus. Proin quis</h3>
                            <p class="truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In pretium porttitor nulla non dapibus. Proin quis ipsum massa. Vestibulum consectetur eleifend dictum. Sed libero quam, tempor vel tellus eget, sodales tincidunt lacus. Etiam sit amet tristique metus, vitae molestie erat. Duis blandit orci vel blandit maximus. Suspendisse potenti. Mauris non condimentum neque, vitae laoreet sem. Ut pharetra posuere tortor vel pulvinar. Mauris condimentum arcu justo, nec tempus nibh euismod id.</p>
                            <a href="<?= base_url('site/post')?>" class="leia-mais">Leia mais</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post">
                <a href="">
                    <img src="<?= base_url('/assets/imgs/blog/img-post-destaque.png')?>" alt="">
                    <div class="post-descricao__info">
                        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In pretium porttitor nulla non dapibus. Proin quis</h3>
                        <p class="truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In pretium porttitor nulla non dapibus. Proin quis ipsum massa. Vestibulum consectetur eleifend dictum. Sed libero quam, tempor vel tellus eget, sodales tincidunt lacus. Etiam sit amet tristique metus, vitae molestie erat. Duis blandit orci vel blandit maximus. Suspendisse potenti. Mauris non condimentum neque, vitae laoreet sem. Ut pharetra posuere tortor vel pulvinar. Mauris condimentum arcu justo, nec tempus nibh euismod id.</p>
                        <span class="leia-mais">Leia mais</span>
                    </div>
                </a>
            </div>
            <div class="post">
                <a href="">
                    <img src="<?= base_url('/assets/imgs/blog/img-post-destaque.png')?>" alt="">
                    <div class="post-descricao__info">
                        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In pretium porttitor nulla non dapibus. Proin quis</h3>
                        <p class="truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In pretium porttitor nulla non dapibus. Proin quis ipsum massa. Vestibulum consectetur eleifend dictum. Sed libero quam, tempor vel tellus eget, sodales tincidunt lacus. Etiam sit amet tristique metus, vitae molestie erat. Duis blandit orci vel blandit maximus. Suspendisse potenti. Mauris non condimentum neque, vitae laoreet sem. Ut pharetra posuere tortor vel pulvinar. Mauris condimentum arcu justo, nec tempus nibh euismod id.</p>
                        <span class="leia-mais">Leia mais</span>
                    </div>
                </a>
            </div>
            <div class="post">
                <a href="">
                    <img src="<?= base_url('/assets/imgs/blog/img-post-destaque.png')?>" alt="">
                    <div class="post-descricao__info">
                        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In pretium porttitor nulla non dapibus. Proin quis</h3>
                        <p class="truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In pretium porttitor nulla non dapibus. Proin quis ipsum massa. Vestibulum consectetur eleifend dictum. Sed libero quam, tempor vel tellus eget, sodales tincidunt lacus. Etiam sit amet tristique metus, vitae molestie erat. Duis blandit orci vel blandit maximus. Suspendisse potenti. Mauris non condimentum neque, vitae laoreet sem. Ut pharetra posuere tortor vel pulvinar. Mauris condimentum arcu justo, nec tempus nibh euismod id.</p>
                        <span class="leia-mais">Leia mais</span>
                    </div>
                </a>
            </div>
            <div class="post">
                <a href="">
                    <img src="<?= base_url('/assets/imgs/blog/img-post-destaque.png')?>" alt="">
                    <div class="post-descricao__info">
                        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In pretium porttitor nulla non dapibus. Proin quis</h3>
                        <p class="truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In pretium porttitor nulla non dapibus. Proin quis ipsum massa. Vestibulum consectetur eleifend dictum. Sed libero quam, tempor vel tellus eget, sodales tincidunt lacus. Etiam sit amet tristique metus, vitae molestie erat. Duis blandit orci vel blandit maximus. Suspendisse potenti. Mauris non condimentum neque, vitae laoreet sem. Ut pharetra posuere tortor vel pulvinar. Mauris condimentum arcu justo, nec tempus nibh euismod id.</p>
                        <span class="leia-mais">Leia mais</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="pagination d-flex">
            <span class="prev"></span>
            <div class="paginationItens d-flex">
                <a href="">1</a>
                <a href="">2</a>
                <a href="">3</a>
                <a href="">4</a>
                <a href="">5</a>
            </div>
            <span class="next"></span>
        </div>
    </div>
</section>
<?= $this->endSection() ?>

<?= $this->section('scripts')?>
<script type="text/javascript" src="<?= base_url('assets/js/noticia-min.js')?>" ></script>
<?= $this->endSection() ?>
