<?= $this->extend('layout/site') ?>

<?= $this->section('title') ?>
Empreendimentos
<?= $this->endSection() ?>

<?= $this->section('styles')?>
<link rel="stylesheet" href="<?= base_url('assets/css/empreendimentos.css')?>" />
<link rel="stylesheet" href="<?= base_url('assets/css/tabs.css')?>" />
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section id="title-page" class="relative pv-3">
    <div class="container">
        <h1 class="title"><i>EMPREENDIMENTOS</i></h1>
    </div>
</section>

<section id="content" class="pv-3 empreendimentos">
    <div class="container">
        <div id="tabs" class="empreendimentos__tabs d-flex">
            <div class="tab active" id="tab-1">ENTREGUES</div>
            <div class="tab" id="tab-2">OBRAS EM ANDAMENTO</div>
            <div class="tab" id="tab-3">LANÇAMENTOS</div>
        </div>
        <div class="empreendimentos__contents pv-3">
            <div class="empreendimentos__contents--content tab-content active" data-target="tab-1">
                <div class="d-flex">
                    <?php for($i=1;$i<=6;$i++):?>
                    <div class="w-30 pv-1 ph-1 item">
                        <a href="#">
                            <img src="<?= base_url('assets/imgs/empreendimento/emp-' . $i . '.png')?>" alt="Empreendimento <?= $i ?>" class="w-100" />
                        </a>
                    </div>
                    <?php endfor;?>

                </div>
            </div>
            <div class="empreendimentos__contents--content tab-content" data-target="tab-2">
                t2
            </div>
            <div class="empreendimentos__contents--content tab-content" data-target="tab-3">
                t3
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
