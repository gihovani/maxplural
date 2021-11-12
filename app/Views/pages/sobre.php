<?= $this->extend('layout/site') ?>

<?= $this->section('title') ?>
Nossa História
<?= $this->endSection() ?>

<?= $this->section('styles')?>
<link rel="stylesheet" href="<?= base_url('assets/css/sobre.min.css')?>" />
<link rel="stylesheet" href="<?= base_url('assets/css/tabs.min.css')?>" />
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section id="title-page" class="relative pv-3">
    <div class="container">
        <h1 class="title"><i>A MAXPLURAL</i></h1>
    </div>
</section>

<section id="content" class="pv-3 historia">
    <div class="container">
        <div id="tabs" class="historia__tabs d-flex">
            <div class="tab active" id="tab-1">HISTÓRIA</div>
            <div class="tab" id="tab-2">DIFERENCIAIS</div>
        </div>
        <div class="historia__contents">
            <div class="historia__contents--content tab-content active" data-target="tab-1">
                <p class="text-center">Com a proposta de investir no conceito design na construção civil, a Maxplural conta com empreendimentos que chamam a atenção, agregando funcionalidade, flexibilidade,
                    tecnologia e história, com a proposta do conforto unido ao valor estético.</p>
                <p class="text-center">Nosso escritório está localizado no Empresarial Center 3, um complexo empresarial próximo ao Shopping Recife.</p>
                <div class="d-flex logos">
                    <div class="w-30 text-center">
                        <img src="<?= base_url('assets/imgs/marcas/m-derby-logo.svg')?>" alt="Derby Logo" />
                    </div>
                    <div class="w-30 text-center">
                        <img src="<?= base_url('assets/imgs/marcas/m-carneiros-logo.svg')?>" alt="Carneiros Logo" />
                    </div>
                    <div class="w-30 text-center">
                        <img src="<?= base_url('assets/imgs/marcas/loft-logo.svg')?>" alt="Loft Logo" />
                    </div>
                    <div class="w-100 text-center">
                        <img src="<?= base_url('assets/imgs/marcas/premio.png')?>" alt="Selo Premio" />
                    </div>
                </div>
            </div>
            <div class="historia__contents--content tab-content" data-target="tab-2">
                <p class="text-center">CONTEÚDO DIFERENCIAIS</p>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
