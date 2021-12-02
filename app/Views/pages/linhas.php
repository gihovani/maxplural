<?= $this->extend('layout/site') ?>

<?= $this->section('title') ?>
<?= $pagina->titulo ?>
<?= $this->endSection() ?>

<?= $this->section('meta') ?>
<?php $meta = $pagina;?>
<?php if ($meta->palavras_chave) :?>
    <meta name="keywords" content="<?= $meta->palavras_chave?>" />
<?php endif;?>
<?php if ($meta->descricao) :?>
    <meta name="description" content="<?= $meta->descricao?>" />
<?php endif;?>
<?php if ($meta->imagem) :?>
    <meta itemprop="image" content="<?= base_url(\App\Models\PaginaModel::IMG_PATH . $meta->imagem)?>" />
<?php endif;?>
<link rel="canonical" href="<?= site_url('site/linhas')?>" />
<?= $this->endSection() ?>

<?= $this->section('styles')?>
<link rel="stylesheet" href="<?= base_url('assets/css/linhas.min.css') ?>?v=<?= $version?>"/>
<?php if (isset($pagina->style) && !empty($pagina->style)):?>
    <style>
        <?= $pagina->style ?>
    </style>
<?php endif;?>
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

<?= $this->section('scripts')?>
<?php if (isset($pagina->javascript) && !empty($pagina->javascript)):?>
    <script>
        <?= $pagina->javascript ?>
    </script>
<?php endif;?>
<?= $this->endSection() ?>
