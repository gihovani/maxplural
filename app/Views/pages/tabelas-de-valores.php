<?= $this->extend('layout/site') ?>

<?= $this->section('title') ?>
    Baixe as Tabelas
<?= $this->endSection() ?>

<?= $this->section('meta') ?>
<meta name="keywords" content="Tabela de valores, valor apartamento, site de vendas de apartamentos, imóveis para comprar, apartamentos novos, apartamentos a venda, simular financiamento, recife, pernambuco, porto de galinhas, piedade" />
<meta name="description" content="Se na hora de escolher um imóvel você não abre mão de sofisticação, exclusividade e design, você precisa conhecer os empreendimentos Maxplural. Baixa nossa tabela de valores dos empreendimentos em um dos destinos mais procurados do litoral nordestino." />
<meta itemprop="image" content="<?= base_url('assets/icons/icon-512x512.png')?>" />
<link rel="canonical" href="<?= site_url('site/tabelas-de-valores')?>" />
<?= $this->endSection() ?>

<?= $this->section('styles')?>
    <link rel="stylesheet" href="<?= base_url('assets/css/tabelas-de-valores.min.css')?>?v=<?= $version?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/form.min.css')?>?v=<?= $version?>" />
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <section id="content" class="downloads">
        <div class="d-flex">
            <div class="w-50 d-flex downloads__form-box">
                <div class="form">
                    <h1>BAIXE AS TABELAS</h1>
                    <?php if (!$success):?>
                    <h4>Preencha o fomrulário e baixe nossas tabelas</h4>
                    <?= form_open('site/tabelas-de-valores', ['name' => 'form', 'target' => '_blank']) ?>
                        <input type="hidden" class="select-input-1" id="tabela" name="assunto" value="Tabelas-de Valores">
                        <div class="input-group">
                            <label for="form-nome">NOME:</label>
                            <input type="text" id="form-nome" name="nome" required>
                        </div>
                        <div class="input-group">
                            <label for="form-email">E-MAIL:</label>
                            <input type="email" id="form-email" name="email" required>
                        </div>
                        <div class="input-group">
                            <label for="form-telefone">TELEFONE:</label>
                            <input class="telefone" type="text" id="form-telefone" name="telefone" required>
                        </div>
                        <?php if (isset($arquivos) && count($arquivos)) :?>
                        <div class="input-group empreendimentos-tabelas">
                            <label>EMPREENDIMENTO:</label>
                            <div class="fake-input" data-select-id="1" data-selected="">Selecione...</div>
                            <ul id="select-input-1" data-id="1">
                                <?php foreach ($arquivos as $a):?>
                                <li class="tabela" data-value="<?=$a->arquivo?>"><?=$a->empreendimento?></li>
                                <?php endforeach; ?>
                            </ul>
                            <span class="dropdown-button" data-select-id="1"><img src="<?= base_url('assets/imgs/prevArrow.svg')?>" alt="prevArrow"></span>
                        </div>
                        <?php endif;?>
                        <button class="d-flex download-btn" type="submit">BAIXE AGORA <img src="<?= base_url('assets/imgs/download-icon.svg')?>" alt="download"></button>
                    <?= form_close() ?>
                    <?php else : ?>
                    <div class="card show">
                        <div class="card-success">
                            <h3 class="pv-3 mv-3 text-center">MENSAGEM ENVIADA COM SUCESSO!</h3>
                            <img style="width: 150px;margin: auto; display: block;" src="<?= base_url('assets/imgs/sucess.svg')?>" alt="MENSAGEM ENVIADA COM SUCESSO" />
                        </div>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class="w-50 bg-download">
            </div>
        </div>
    </section>
<?= $this->endSection() ?>

<?= $this->section('scripts')?>
<script type="text/javascript" src="<?= base_url('assets/jquery/phone-mask.min.js')?>?v=<?= $version?>" ></script>
<script type="text/javascript" src="<?= base_url('assets/js/tabelas-de-valores-min.js') ?>?v=<?= $version?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/mask-min.js') ?>?v=<?= $version?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/form-min.js') ?>?v=<?= $version?>"></script>
<?= $this->endSection() ?>
