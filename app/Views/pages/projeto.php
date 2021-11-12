<?= $this->extend('layout/site') ?>

<?= $this->section('title') ?>
    Projeto (nome do empreendimento)
<?= $this->endSection() ?>

<?= $this->section('styles')?>
    <link rel="stylesheet" href="<?= base_url('assets/css/projeto.min.css')?>" />
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
                    <div class="titulo"><h2>MAX DERBY BOULEVARD</h2></div>
                    <div class="descricao">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vestibulum pretium sodales. Suspendisse consectetur ullamcorper efficitur. Nulla dapibus laoreet lorem ac lacinia. Nullam congue tincidunt volutpat. Ut scelerisque, augue vel ultrices mattis, erat nulla bibendum sem, sed consequat neque est quis ante. Quisque vestibulum malesuada dui in interdum. Mauris arcu tortor, tristique at dapibus eu, eleifend in elit.</p>
                    </div>
                </div>
                <div class="w-50">
                    <ul class="d-flex">
                        <li class="w-30"><img src="" alt=""></li>
                        <li class="w-30"><img src="" alt=""></li>
                        <li class="w-30"><img src="" alt=""></li>
                        <li class="w-30"><img src="" alt=""></li>
                        <li class="w-30"><img src="" alt=""></li>
                        <li class="w-30"><img src="" alt=""></li>
                        <li class="w-30"><img src="" alt=""></li>
                        <li class="w-30"><img src="" alt=""></li>
                        <li class="w-30"><img src="" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="galeria" class="bg-dark">
        <div>
            teste
        </div>
    </section>
    <section id="planta">
        <div>
            teste
        </div>
    </section>
    <section id="status-da-obra" class="bg-dark">
        <div>
            teste
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