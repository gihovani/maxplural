<?= $this->extend('layout/site') ?>

<?= $this->section('title') ?>
Sobre Nossas Linhas
<?= $this->endSection() ?>

<?= $this->section('styles')?>
<link rel="stylesheet" href="<?= base_url('assets/css/linhas.css')?>" />
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section id="title-page" class="relative pv-3">
    <div class="container">
        <h1 class="title"><i>Nossas Linhas</i></h1>
    </div>
</section>

<section id="content" class="pv-3 linhas">
    <div class="container">
        <div class="linhas-text text-center mv-3">
            <h2 class="title">TÍTULO SOBRE NOSSAS LINHAS</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus venenatis molestie elit. Nulla tristique mi at ligula eleifend, vitae tincidunt risus rutrum. Etiam mattis pellentesque dictum.
                Mauris euismod sem est. Sed vehicula rutrum scelerisque. Proin vel maximus ipsum. Phasellus efficitur ipsum nec ullamcorper finibus. Morbi urna libero, hendrerit id gravida quis, accumsan ac
                tellus. Duis id lectus et augue volutpat feugiat.</p>
        </div>

        <div class="linhas-cards d-flex mv-3 pv-3">
            <div class="linhas-cards__card text-center">
                <div>
                    <img src="<?= base_url('assets/imgs/linhas/MAX-beach.png')?>" />
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus venenatis molestie elit. Nulla tristique mi at ligula eleifend, vitae tincidunt risus rutrum.</p>
                </div>
            </div>
            <div class="linhas-cards__card text-center">
                <div>
                    <img src="<?= base_url('assets/imgs/linhas/MAX-compact.png')?>" />
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus venenatis molestie elit. Nulla tristique mi at ligula eleifend, vitae tincidunt risus rutrum.</p>
                </div>
            </div>
            <div class="linhas-cards__card text-center">
                <div>
                    <img src="<?= base_url('assets/imgs/linhas/MAX-concept.png')?>" />
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus venenatis molestie elit. Nulla tristique mi at ligula eleifend, vitae tincidunt risus rutrum.</p>
                </div>
            </div>
            <div class="linhas-cards__card text-center">
                <div>
                    <img src="<?= base_url('assets/imgs/linhas/pbqp.png')?>" />
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus venenatis molestie elit. Nulla tristique mi at ligula eleifend, vitae tincidunt risus rutrum.</p>
                </div>
            </div>
            <div class="linhas-cards__card text-center">
                <div>
                    <img src="<?= base_url('assets/imgs/linhas/gptw.png')?>" />
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus venenatis molestie elit. Nulla tristique mi at ligula eleifend, vitae tincidunt risus rutrum.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
