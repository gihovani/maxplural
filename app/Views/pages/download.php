<?= $this->extend('layout/site') ?>

<?= $this->section('title') ?>
    Baixe as Tabelas
<?= $this->endSection() ?>

<?= $this->section('styles')?>
    <link rel="stylesheet" href="<?= base_url('assets/css/download.min.css')?>" />
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <section id="content" class="downloads">
        <div class="d-flex">
            <div class="w-50 d-flex downloads__form-box">
                <div class="">
                    <h1>BAIXE AS TABELAS</h1>
                    <h4>Preencha o fomrulário e baixe nossas tabelas</h4>
                    <form action="">
                        <div class="input-group">
                            <label for="nome">NOME:</label>
                            <input type="text" id="nome" name="nome">
                        </div>
                        <div class="input-group">
                            <label for="email">E-MAIL:</label>
                            <input type="email" id="email" name="email">
                        </div>
                        <div class="input-group">
                            <label for="telefone">TELEFONE:</label>
                            <input type="text" id="telefone" name="telefone">
                        </div>
                        <div class="input-group empreendimentos-tabelas">
                            <label>EMPREENDIMENTO:</label>
                            <div class="fake-input" data-selected="">Empreendimento 1</div>
                            <ul id="lista-tabelas">
                                <li class="tabela" data-value="tabela-1">Empreendimento 1</li>
                                <li class="tabela" data-value="tabela-2">Empreendimento 2</li>
                                <li class="tabela" data-value="tabela-3">Empreendimento 3</li>
                                <li class="tabela" data-value="tabela-4">Empreendimento 4</li>
                                <li class="tabela" data-value="tabela-5">Empreendimento 5</li>
                                <li class="tabela" data-value="tabela-6">Empreendimento 6</li>
                            </ul>
                            <span class="dropdown-button" ><img src="<?= base_url('assets/imgs/prevArrow.svg')?>" alt=""></span>
                        </div>
                        <button class="d-flex">BAIXE AGORA <img src="<?= base_url('assets/imgs/downloadTabelas.svg')?>" alt=""></button>
                    </form>
                </div>
            </div>
            <div class="w-50 bg-download">
            </div>
        </div>
    </section>
<?= $this->endSection() ?>

<?= $this->section('scripts')?>
<script type="text/javascript" src="<?= base_url('assets/js/download.js') ?>"></script>
<?= $this->endSection() ?>
