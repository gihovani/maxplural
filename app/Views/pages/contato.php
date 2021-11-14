<?= $this->extend('layout/site') ?>

<?= $this->section('title') ?>
    Contato
<?= $this->endSection() ?>

<?= $this->section('styles')?>
<link rel="stylesheet" href="<?= base_url('assets/css/contato.min.css')?>" />
<link rel="stylesheet" href="<?= base_url('assets/css/form.min.css')?>" />
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
                <h2 class="text-center">CONVERSE AGOR COM<br />UM CORRETOR MAXPLURAL</h2>
                <div class="contato-btns">
                    <a href="" class="contato d-flex">
                        <img class="icon-invert" src="<?= base_url('assets/imgs/whatsapp-64.png')?>" alt="">
                        <div>
                            <h4>Whatsapp:</h4>
                            <p>(00) 0 0000 0000</p>
                        </div>
                    </a>
                </div>
                <div class="contato-btns">
                    <a href="" class="contato d-flex">
                        <img src="<?= base_url('assets/imgs/chat-icon.svg')?>" alt="">
                        <div class="relative">
                            <h4>Chat Online:</h4>
                            <p>Fale com um<br/>atendente</p>
                        </div>
                    </a>
                </div>
                <div class="contato-btns">
                    <a href="" class="contato d-flex">
                        <img src="<?= base_url('assets/imgs/contato/atendente-icon.svg')?>" alt="">
                        <div>
                            <h4>Central de Vendas:</h4>
                            <p>Nós ligamos pra você</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="form">
                <h2 class="text-center">Fale com a gente</h2>
                <h3 class="text-center thin">Envie sua mensagem no formulário a seguir</h3>
                <form action="" class="d-flex">
                    <div class="formgroup w-100">
                        <label for="nome">NOME:</label>
                        <input type="text" id="nome" name="nome" required>
                    </div>
                    <div class="formgroup w-50">
                        <label for="telefone">TELEFONE:</label>
                        <input type="text" class="telefone" id="telefone" name="telefone" required>
                    </div>
                    <div class="formgroup w-50">
                        <label for="email">E-MAIL:</label>
                        <input type="email" required>
                    </div>
                    <div class="input-group empreendimentos-tabelas w-100">
                        <label>ÁREA QUE DESEJA FALAR:</label>
                        <div class="fake-input" data-select-id="1">SETOR 1</div>
                        <ul id="lista-tabelas-1" data-id="1" data-selected="">
                            <li class="tabela" data-value="tabela-1">SETOR 1</li>
                            <li class="tabela" data-value="tabela-2">SETOR 2</li>
                            <li class="tabela" data-value="tabela-3">SETOR 3</li>
                            <li class="tabela" data-value="tabela-4">SETOR 4</li>
                            <li class="tabela" data-value="tabela-5">SETOR 5</li>
                            <li class="tabela" data-value="tabela-6">SETOR 6</li>
                        </ul>
                        <span class="dropdown-button" data-select-id="1"><img src="<?= base_url('assets/imgs/prevArrow.svg')?>" alt=""></span>
                    </div>
                    <div class="formgroup w-100">
                        <label for="mensagem">MENSAGEM:</label>
                        <textarea name="mensagem" id="mensagem" rows="6" required></textarea>
                    </div>
                    <div class="w-100 d-flex last-form-section">
                        <span>Ao clicar em enviar, você concorda com os termos de uso e política de privacidade da Rottas Construtora e Incorporadora.</span>
                        <button class="default-btn" type="submit">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>

<?= $this->section('scripts')?>
<script type="text/javascript" src="<?= base_url('assets/jquery/phone-mask.min.js')?>" ></script>
<script type="text/javascript" src="<?= base_url('assets/js/form.js')?>" ></script>
<script type="text/javascript" src="<?= base_url('assets/js/download.js')?>" ></script>
<?= $this->endSection() ?>
