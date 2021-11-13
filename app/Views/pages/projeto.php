<?= $this->extend('layout/site') ?>

<?= $this->section('title') ?>
    Projeto (nome do empreendimento)
<?= $this->endSection() ?>

<?= $this->section('styles')?>
    <link rel="stylesheet" href="<?= base_url('assets/css/projeto.min.css')?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/galeria.min.css')?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/tabs.min.css')?>" />
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <section id="topo">
        <div class="slider-1__only-dots">
            <div>
                <div class="w-100 slide-projeto" style='background-image: url(<?= base_url('assets/imgs/projetos/max-derby-boulevard/maxdrb-1.jpg')?>)'></div>
            </div>
            <div>
                <div class="w-100 slide-projeto" style='background-image: url(<?= base_url('assets/imgs/projetos/max-derby-boulevard/maxdrb-2.jpg')?>)'></div>
            </div>
            <div>
                <div class="w-100 slide-projeto" style='background-image: url(<?= base_url('assets/imgs/projetos/max-derby-boulevard/maxdrb-3.jpg')?>)'></div>
            </div>
            <div>
                <div class="w-100 slide-projeto" style='background-image: url(<?= base_url('assets/imgs/projetos/max-derby-boulevard/maxdrb-4.jpg')?>)'></div>
            </div>
        </div>
    </section>
    <section id="desc">
        <div class="container relative">
            <div class="title-section d-flex w-100">
                <div class="logo">
                    <img src="<?= base_url('assets/imgs/marcas/m-derby-logo.svg')?>" alt="">
                </div>
                <div class="titulo-box">
                    <div class="nome titulo">
                        <h1>MAX DERBY BOULEVARD</h1>
                    </div>
                    <h5 class="endereco">Endereço 000 - Cidade / Estado</h5>
                </div>
            </div>
            <div class="d-flex descricao-box">
                <div class="w-50">
                    <div class="ph-2">
                        <div class="titulo"><h2>MAX DERBY BOULEVARD</h2></div>
                        <div class="descricao">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vestibulum pretium sodales. Suspendisse consectetur ullamcorper efficitur. Nulla dapibus laoreet lorem ac lacinia. Nullam congue tincidunt volutpat. Ut scelerisque, augue vel ultrices mattis, erat nulla bibendum sem, sed consequat neque est quis ante. Quisque vestibulum malesuada dui in interdum. Mauris arcu tortor, tristique at dapibus eu, eleifend in elit.</p>
                        </div>
                    </div>
                </div>
                <div class="w-50">
                    <div class="ph-2">
                        <ul class="d-flex">
                            <li class="d-flex">
                                <img src="<?= base_url('../assets/imgs/projetos/icons/localizacao.svg')?>" alt="">
                                <span class="w-100 text-center">Localização privilegiada</span>
                            </li>
                            <li class="d-flex">
                                <img src="<?= base_url('../assets/imgs/projetos/icons/fechadura.svg')?>" alt="">
                                <span class="w-100 text-center">Fechadura<br />digital</span>
                            </li>
                            <li class="d-flex">
                                <img src="<?= base_url('../assets/imgs/projetos/icons/lavanderia.svg')?>" alt="">
                                <span class="w-100 text-center">Lavanderia compartilhada</span>
                            </li>
                            <li class="d-flex">
                                <img src="<?= base_url('../assets/imgs/projetos/icons/pet.svg')?>" alt="">
                                <span class="w-100 text-center">Pet Place</span>
                            </li>
                            <li class="d-flex">
                                <img src="<?= base_url('../assets/imgs/projetos/icons/bike.svg')?>" alt="">
                                <span class="w-100 text-center">Bicicletário</span>
                            </li>
                            <li class="d-flex">
                                <img src="<?= base_url('../assets/imgs/projetos/icons/academia.svg')?>" alt="">
                                <span class="w-100 text-center">Academia</span>
                            </li>
                            <li class="d-flex">
                                <img src="<?= base_url('../assets/imgs/projetos/icons/piscina.svg')?>" alt="">
                                <span class="w-100 text-center">Piscina<br />panorâmica</span>
                            </li>
                            <li class="d-flex">
                                <img src="<?= base_url('../assets/imgs/projetos/icons/work.svg')?>" alt="">
                                <span class="w-100 text-center">Work zone</span>
                            </li>
                            <li class="d-flex">
                                <img src="<?= base_url('../assets/imgs/projetos/icons/diamond.svg')?>" alt="">
                                <span class="w-100 text-center">Áreas gourmet individuais</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="galeria" class="bg-dark">
        <div class="container">
            <div class="titulo">
                <h2 class="text-center">VEJA COMO SERÁ O SEU NOVO LAR</h2>
            </div>
            <div class="filter-box">
                <div class="filter-box-nav d-flex mv-3">
                    <span data-filter="fachada">FACHADA</span>
                    <span data-filter="areas" class="active">ÁREAS DE LAZER / ÁREAS COMUNS</span>
                    <span data-filter="decorado">DECORADO</span>
                </div>
                <div class="filter-box-content d-flex mv-3 pv-3">
                    <div class="filter-box-content-item" data-filtered="fachada"><img src="<?= base_url('assets/imgs/projetos/max-derby-boulevard/1.png')?>" alt=""><span>texto 1</span></div>
                    <div class="filter-box-content-item" data-filtered="fachada"><img src="<?= base_url('assets/imgs/projetos/max-derby-boulevard/2.png')?>" alt=""><span>texto 1</span></div>
                    <div class="filter-box-content-item" data-filtered="fachada"><img src="<?= base_url('assets/imgs/projetos/max-derby-boulevard/3.png')?>" alt=""><span>texto 1</span></div>
                    <div class="filter-box-content-item" data-filtered="areas"><img src="<?= base_url('assets/imgs/projetos/max-derby-boulevard/4.png')?>" alt=""><span>texto 3</span></div>
                    <div class="filter-box-content-item" data-filtered="areas"><img src="<?= base_url('assets/imgs/projetos/max-derby-boulevard/5.png')?>" alt=""><span>texto 3</span></div>
                    <div class="filter-box-content-item" data-filtered="areas"><img src="<?= base_url('assets/imgs/projetos/max-derby-boulevard/6.png')?>" alt=""><span>texto 3</span></div>
                    <div class="filter-box-content-item" data-filtered="areas"><img src="<?= base_url('assets/imgs/projetos/max-derby-boulevard/7.png')?>" alt=""><span>texto 3</span></div>
                    <div class="filter-box-content-item" data-filtered="areas"><img src="<?= base_url('assets/imgs/projetos/max-derby-boulevard/8.png')?>" alt=""><span>texto 3</span></div>
                    <div class="filter-box-content-item" data-filtered="decorado"><img src="<?= base_url('assets/imgs/projetos/max-derby-boulevard/9.png')?>" alt=""><span>texto 2</span></div>
                    <div class="filter-box-content-item" data-filtered="decorado"><img src="<?= base_url('assets/imgs/projetos/max-derby-boulevard/10.png')?>" alt=""><span>texto 2</span></div>
                </div>
            </div>
            <div class="titulo">
                <h2 class="text-center">TOUR VIRTUAL 360º</h2>
            </div>
        </div>
    </section>
    <section id="planta" class="bg-white">
        <div class="titulo">
            <h2 class="text-center">PLANTAS E ESPECIFICAÇÕES TÉCNICAS</h2>
        </div>
    </section>
    <section id="status-da-obra" class="bg-dark">
        <div class="titulo">
            <h2 class="text-center">ACOMPANHE A EVOLUÇÃO DA OBRA</h2>
        </div>
    </section>
    <section id="maps">
        <div>
            teste
        </div>
    </section>
    <section id="download-e-orcamento">
        <div>
            teste
        </div>
    </section>
<?= $this->endSection() ?>

<?= $this->section('scripts')?>
    <script type="text/javascript" src="<?= base_url('assets/js/galeria.js')?>" ></script>
<?= $this->endSection() ?>