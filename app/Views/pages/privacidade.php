<?= $this->extend('layout/site') ?>

<?= $this->section('title') ?>
<?= $pagina->titulo ?>
<?= $this->endSection() ?>

<?= $this->section('styles')?>
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

<section id="content" class="pv-3 privacidade">
    <div class="container">
        <?= $pagina->conteudo ?>
    </div>
</section>
<?= $this->endSection() ?>
