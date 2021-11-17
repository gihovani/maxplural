<?= $this->extend('layout/site') ?>

<?= $this->section('title') ?>
<?= $pagina->titulo ?>
<?= $this->endSection() ?>

<?= $this->section('styles')?>

<link rel="stylesheet" href="<?= base_url('assets/css/linhas.min.css') ?>"/>
<style>
    <?= $pagina->style ?>
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section id="title-page" class="relative pv-3">
    <div class="container">
        <h1 class="title"><i><?= $pagina->titulo?></i></h1>
    </div>
</section>

<section id="content" class="pv-3 linhas">
    <div class="container">
        <?= $pagina->conteudo?>

        <?php if (isset($linhas) && count($linhas)):?>
        <div class="linhas-cards d-flex mv-3 pv-3">
            <?php foreach($linhas as $linha):?>
            <div class="linhas-cards__card text-center">
                <div>
                    <img src="<?= base_url(\App\Models\LinhaModel::IMG_PATH . $linha->imagem)?>" alt="<?=$linha->titulo?>">
                    <h3 class="sr-only"><?=$linha->titulo?></h3>
                    <p><?=$linha->descricao?></p>
                </div>
            </div>
            <?php endforeach;?>
        </div>
        <?php endif;?>
    </div>
</section>
<?= $this->endSection() ?>
