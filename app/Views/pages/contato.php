<?= $this->extend('layout/site') ?>

<?= $this->section('title') ?>
Fale Conosco - Max Plural
<?= $this->endSection() ?>

<?= $this->section('meta') ?>
<meta name="keywords" content="valor apartamento, site de vendas de apartamentos, imóveis para comprar, apartamentos novos, apartamentos a venda, simular financiamento, recife, pernambuco, porto de galinhas, piedade" />
<meta name="description" content="Tirar dúvidas, faça orçamentos, simule financiamento com a Max Plural. Entrar em contato com a Ouvidoria da Incorporadora Max Plural." />
<meta itemprop="image" content="<?= base_url('assets/icons/icon-512x512.png')?>" />
<link rel="canonical" href="<?= site_url('site/contato')?>" />
<?= $this->endSection() ?>

<?= $this->section('styles')?>
<link rel="stylesheet" href="<?= base_url('assets/css/contato.min.css')?>?v=<?= $version?>" />
<link rel="stylesheet" href="<?= base_url('assets/css/form.min.css')?>?v=<?= $version?>" />
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section id="title-page" class="relative pv-3">
    <div class="container">
        <h1 class="title"><i>Fale Conosco</i></h1>
    </div>
</section>
<section id="contato-box" class="">
    <div class="container">
        <div class="d-flex conato-wrapper">
            <div class="corretor">
                <h2 class="text-center">CONVERSE AGORA COM<br />A MAXPLURAL</h2>
                <div class="contato-btns">
                    <a href="<?= $config->whatsapp_vendas ?>" class="contato d-flex" target="_blank">
                        <img class="icon-invert" src="<?= base_url('assets/imgs/whatsapp-64.png')?>" alt="whatsapp">
                        <div>
                            <h4>Fale com um vendedor:</h4>
                            <p><?= $config->telefone_vendas_fixo ?></p>
                            <p><?= $config->telefone_vendas_whatsapp ?></p>
                        </div>
                    </a>
                </div>
                <div class="contato-btns">
                    <a href="<?= $config->whatsapp ?>" class="contato d-flex" target="_blank">
                        <img src="<?= base_url('assets/imgs/chat-icon.svg')?>" alt="chat">
                        <div class="relative">
                            <h4>Fale com um atendente:</h4>
                            <p><?= $config->telefone_fixo ?></p>
                            <p><?= $config->telefone_whatsapp ?></p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="form">
                <h2 class="text-center">FALE COM A GENTE</h2>
                <?php if (!$success):?>
                <h3 class="text-center thin">Envie sua mensagem no formulário a seguir</h3>
                <?= form_open('site/contato#form', ['class' => 'd-flex', 'name' => 'form']) ?>
                    <input type="hidden" class="select-input-1" id="setor" name="setor" value="">
                    <div class="formgroup w-100">
                        <label for="form-nome">NOME:</label>
                        <input type="text" id="form-nome" name="nome" required>
                    </div>
                    <div class="formgroup w-50">
                        <label for="form-telefone">TELEFONE:</label>
                        <input type="text" class="telefone" id="form-telefone" name="telefone" required>
                    </div>
                    <div class="formgroup w-50">
                        <label for="form-email">E-MAIL:</label>
                        <input type="email" id="form-email" name="email" required>
                    </div>
                    <div class="input-group empreendimentos-tabelas w-100">
                        <label for="form-assunto">ASSUNTO:</label>
                        <input type="text" id="form-assunto" name="assunto" required>
<!--                        <div class="fake-input" data-select-id="1">Selecione o setor</div>-->
<!--                        <ul id="select-input-1" data-id="1" data-selected="">-->
<!--                            <li class="tabela" data-value="{{SETOR}}">{{SETOR}}</li>-->
<!--                            <li class="tabela" data-value="{{SETOR2}}">{{SETOR2}}</li>-->
<!--                            <li class="tabela" data-value="{{SETOR3}}">{{SETOR3}}</li>-->
<!--                            <li class="tabela" data-value="{{SETOR4}}">{{SETOR4}}</li>-->
<!--                            <li class="tabela" data-value="{{SETOR5}}">{{SETOR5}}</li>-->
<!--                            <li class="tabela" data-value="{{SETOR6}}">{{SETOR6}}</li>-->
<!--                        </ul>-->
<!--                        <span class="dropdown-button" data-select-id="1"><img src="--><?//= base_url('assets/imgs/prevArrow.svg')?><!--" alt=""></span>-->
                    </div>
                    <div class="formgroup w-100">
                        <label for="form-mensagem">MENSAGEM:</label>
                        <textarea name="mensagem" id="form-mensagem" rows="6" required></textarea>
                    </div>
                    <div class="w-100 d-flex last-form-section">
                        <span>Ao clicar em enviar, você concorda com os termos de uso e política de privacidade da Rottas Construtora e Incorporadora.</span>
                        <button class="default-btn" type="submit">ENVIAR</button>
                    </div>
                <?= form_close() ?>
                <?php else: ?>
                <div class="card show">
                    <div class="card-success">
                        <h3 class="pv-3 mv-3 text-center">MENSAGEM ENVIADA COM SUCESSO!</h3>
                        <img style="width: 150px;margin: auto; display: block;" src="<?= base_url('assets/imgs/sucess.svg')?>" alt="Mensagem Enviada com Sucesso" />
                    </div>
                </div>
                <?php endif;?>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>

<?= $this->section('scripts')?>
<script type="text/javascript" src="<?= base_url('assets/jquery/phone-mask.min.js')?>?v=<?= $version?>" ></script>
<script type="text/javascript" src="<?= base_url('assets/js/form-min.js')?>?v=<?= $version?>" ></script>
<script type="text/javascript" src="<?= base_url('assets/js/mask-min.js')?>?v=<?= $version?>" ></script>
<script type="text/javascript" src="<?= base_url('assets/js/tabelas-de-valores-min.js')?>?v=<?= $version?>" ></script>
<?= $this->endSection() ?>
