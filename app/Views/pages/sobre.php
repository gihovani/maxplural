<?= $this->extend('layout/site') ?>

<?= $this->section('title') ?>
<?= $pagina->titulo ?>
<?= $this->endSection() ?>

<?= $this->section('styles')?>
<link rel="stylesheet" href="<?= base_url('assets/css/tabs.min.css')?>" />
<style>
    <?= $pagina->style ?>
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section id="title-page" class="relative pv-3">
    <div class="container">
        <h1 class="title"><i><?= $pagina->titulo ?></i></h1>
    </div>
</section>

<section id="content" class="pv-3 historia">
    <div class="container">
        <?= $pagina->conteudo ?>
    </div>
</section>
<?= $this->endSection() ?>

<?= $this->section('scripts')?>
    <script type="text/javascript" src="<?= base_url('assets/js/tabsController-min.js')?>" ></script>
<?= $this->endSection() ?>