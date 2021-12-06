<?= $this->extend('layout/site') ?>

<?= $this->section('title') ?>
Nossos Empreendimentos
<?= $this->endSection() ?>

<?= $this->section('meta') ?>
<meta name="keywords" content="empreendimentos, valor apartamento, site de vendas de apartamentos, imóveis para comprar, apartamentos novos, apartamentos a venda, simular financiamento, recife, pernambuco, porto de galinhas, piedade" />
<meta name="description" content="Se na hora de escolher um imóvel você não abre mão de sofisticação, exclusividade e design, você precisa conhecer os empreendimentos Maxplural. Encontre empreendimentos em um dos destinos mais procurados do litoral nordestino." />
<meta itemprop="image" content="<?= base_url('assets/icons/icon-512x512.png')?>" />
<link rel="canonical" href="<?= site_url('site/empreendimentos')?>" />
<?= $this->endSection() ?>

<?= $this->section('styles') ?>
<link rel="stylesheet" href="<?= base_url('assets/css/empreendimentos.min.css') ?>?v=<?= $version?>"/>
<link rel="stylesheet" href="<?= base_url('assets/css/pagination.min.css') ?>?v=<?= $version?>"/>
<link rel="stylesheet" href="<?= base_url('assets/css/tabs.min.css') ?>?v=<?= $version?>"/>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section id="title-page" class="relative pv-3">
    <div class="container">
        <h1 class="title"><i>EMPREENDIMENTOS</i></h1>
    </div>
</section>
<section id="content" class="pv-3 empreendimentos">
    <div class="container">
        <div class="tabs-container empreendimentos__tabs d-flex">
            <div class="tab <?= $active === 'Lancamento' ? 'active' : ''; ?>"><a href="<?= site_url('site/empreendimentos/?q=Lancamento') ?>">Lançamentos</a></div>
            <div class="tab <?= $active === 'Entregue' ? 'active' : ''; ?>"><a href="<?= site_url('site/empreendimentos/?q=Entregue') ?>">Entregues</a></div>
            <div class="tab <?= $active === 'Construcao' ? 'active' : ''; ?>"><a href="<?= site_url('site/empreendimentos/?q=Construcao') ?>">Em Construção</a></div>
        </div>
        <?php if ($cidades):?>
        <div class="tabs-container empreendimentos__tabs d-flex">
            <?php foreach ($cidades as $cidade):?>
            <div class="tab <?= $cidade === $city ? 'active' : ''; ?>"><a href="<?= site_url('site/empreendimentos/?q='.$active.'&c=' . $cidade) ?>"><?= $cidade;?></a></div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
        <?php if (isset($empreendimentos) && count($empreendimentos)): ?>
            <div class="empreendimentos__contents pv-3">
                <div class="empreendimentos__contents--content tab-content active">
                    <div class="d-flex">
                        <?php foreach ($empreendimentos as $emp): ?>
                            <div class="w-30 pv-1 ph-1 item">
                                <a href="<?= site_url('site/empreendimento/' . $emp->slug) ?>">
                                    <img class="w-100" src="<?= base_url(\App\Models\EmpreendimentoModel::IMG_PATH . $emp->imagem) ?>" alt="<?= $emp->titulo ?>"/>
                                    <span class="info">
                                        <?php if (($l = $linha->getById($emp->linha_id)) && $l->imagem):?>
                                            <img class="info_logo" src="<?= base_url(\App\Models\LinhaModel::IMG_PATH . $l->imagem)?>" alt="<?=$l->titulo?>">
                                        <?php endif;?>
                                        <p class="info_nome"><?= $emp->titulo; ?></p>
                                        <?php $caracteristicas = explode(',', $emp->palavras_chave) ?>
                                        <?php foreach ($caracteristicas as $c) : ?>
                                            <?php list($key, $value) = explode(':', $c); ?>
                                            <p class="info_<?= $key; ?>"><?= $value; ?></p>
                                        <?php endforeach; ?>
                                        <p class="info_statusObra"><?= $emp->tipo; ?></p>
                                        <p class="info_saibaMais">Saiba Mais </p>
                                    </span>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <?php if (isset($pager)) : ?>
                <?= $pager->links() ?>
            <?php endif; ?>
        <?php else: ?>
            <div class="d-flex conteudo">
                <div class="w-100 text-center">
                    <h3>Nenhuma empreendimento encontrado.</h3>
                    <p>
                        Verifique os parâmetros informados e tente novamente.
                    </p>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
<?= $this->endSection() ?>
