<!doctype html>
<html lang="pt-BR" dir="ltr">
<head>
    <title><?= $this->renderSection('title') ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no" />
    <?= $this->renderSection('meta') ?>
    <?= $this->renderSection('styles') ?>
    <link rel="stylesheet" href="<?= base_url('assets/css/newsletter.css')?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/master.css')?>" />
    <link rel="stylesheet" href="<?= base_url('assets/slick-1.8.1/slick/slick.css')?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,200&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" type="image/png" href="<?= base_url('assets/img/favicon.png')?>"/>
</head>
<body class="relative">

<header>
    <div class="mutantMenu d-flex container">
        <div class="hamburguerMenu">
            <ul>
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <span>MENU</span>
        </div>
        <div class="logo">
            <a href="#">
                <img src="<?= base_url('assets/imgs/logo.svg')?>')?>" alt="">
            </a>
        </div>
        <div class="contact">
            <div class="">
                <img src="<?= base_url('assets/imgs/whatsapp-64.png')?>')?>" alt="">
            </div>
            <div class="contact__text-number">
                <h4>Fale Conosco</h4>
                <h4><span class="thin">(81)</span> <strong>9 9827.0035</strong></h4>
            </div>
        </div>
        <div class="social d-flex">
            <a href="#">
                <img src="<?= base_url('assets/imgs/facebook-64.svg')?>" alt="">
            </a>
            <a href="#">
                <img src="<?= base_url('assets/imgs/instagram-64.svg')?>" alt="">
            </a>
            <a href="#">
                <img src="<?= base_url('assets/imgs/youtube-64.svg')?>" alt="">
            </a>
        </div>
        <div class="central">
            <a href="#">
                <h4>Central de Vendas</h4>
                <h5 class="thin">(Fale conosco)</h5>
            </a>
        </div>
        <div class="search">
            <a href="#">
                <img src="<?= base_url('assets/imgs/search-96.svg')?>" alt="">
            </a>
        </div>
    </div>
    <?= $this->renderSection('header') ?>
</header>
<nav>
    <ul class="no-style text-center">
        <li class="closeMenu"><a href="<?= base_url()?>">INÍCIO</a></li>
        <li class="closeMenu"><a href="<?= base_url('site/sobre')?>">A MAXPLURAL</a></li>
        <li class="closeMenu"><a href="<?= base_url('site/linhas')?>">NOSSAS LINHAS</a></li>
        <li class="closeMenu"><a href="<?= base_url('site/empreendimentos')?>">EMPREENDIMENTOS</a></li>
        <li class="closeMenu"><a href="#noticias">NOTÍCIAS</a></li>
        <li class="closeMenu"><a href="#">CLIENTES</a></li>
        <li class="closeMenu"><a href="#">TABELAS DE VALORES</a></li>
        <li class="closeMenu"><a href="#">CONTATO</a></li>
    </ul>
    <span class="closeMenu"></span>
</nav>

<!-- CONTENT -->
<main>
    <div class="content">
    <?= $this->renderSection('content') ?>
    </div>

    <section id="newsletter">
        <div class="d-flex">
            <div>
                <img src="<?= base_url('assets/imgs/news-max.png')?>" alt="" />
            </div>
            <div>
                <a href="#" class="relative">Seu melhor e-mail <span class="nextArrow-icon"></span></a>
            </div>
        </div>
    </section>
</main>
<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->
<footer>
    <div class="linha-1">
        <div class="container d-flex">
            <div class="w-30 text-center">
                <p class="destaque">PLANTÃO DE VENDAS</p>
                <h4><span class="thin">(81)</span> <strong>3032.2261</strong></h4>
            </div>
            <div class="w-30  text-center">
                <a href="#topo" class="anchor logo backToTop">
                    <img src="<?= base_url('assets/imgs/logo.svg')?>" alt="" />
                    <p class="relative">
                        <span>VOLTAR PARA O TOPO</span>
                        <img class="btt" src="<?= base_url('assets/imgs/prevArrow.svg')?>" alt="" />
                    </p>
                </a>
            </div>
            <div class="w-30 redes text-center">
                <p class="text-center destaque">ACOMPANHE NOSSOS PERFIS</p>
                <div class="d-flex">
                    <a href="#" target="_blank">
                        <img src="<?= base_url('assets/imgs/facebook-64.svg')?>" alt="" />
                    </a>
                    <a href="#" target="_blank">
                        <img src="<?= base_url('assets/imgs/instagram-64.svg')?>" alt="" />
                    </a>
                    <a href="#" target="_blank">
                        <img src="<?= base_url('assets/imgs/linkedin-64.svg')?>" alt="" />
                    </a>
                    <a href="#" target="_blank">
                        <img src="<?= base_url('assets/imgs/youtube-64.svg')?>" alt="" />
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="linha-2">
        <div class="container d-flex">
            <div class="w-30 text-center">
                <p>Rua Antonio Lumack de Monte, 128.</p>
                <p>Salas 1501 e 1502</p>
                <p>Empresatial Center 3</p>
                <p>Boa Viagem - Recife/PE - CEP 51020-350</p>
            </div>
            <div class="w-25 text-center v-divider">
                <ul class="no-style">
                    <li><a href="<?= base_url()?>">INÍCIO</a></li>
                    <li><a href="<?= base_url('site/sobre')?>">A MAXPLURAL</a></li>
                    <li><a href="<?= base_url('site/linhas')?>">NOSSAS LINHAS</a></li>
                    <li><a href="<?= base_url('site/empreendimentos')?>">EMPREENDIMENTOS</a></li>
                    <li><a class="anchor" href="#noticias">NOTÍCIAS</a></li>
                    <li><a href="#">CLIENTES</a></li>
                    <li><a href="#">TABELAS DE VALORES</a></li>
                    <li><a href="#">CONTATO</a></li>
                </ul>
            </div>
            <div class="w-30 text-center">
                <p class="destaque mv-2">HORÁRIOS DE FUNCIONAMENTO</p>
                <p>Segunda-Quinta: 08h ás 18h</p>
                <p>Sexta: 08h ás 17h</p>
            </div>
        </div>
    </div>
    <div class="linha-3">
        <div class="container d-flex">
            <div class="w-50">© MaxPlural - Todos os direitos reservados | <a href="#" class="destaque">Termos de Privacidade</a></div>
            <div class="w-40 d-flex"><img class="mh-1" src="<?= base_url('assets/imgs/logo-2.svg')?>" alt=""> Certificado e desenvolvido por <a href="#" class="destaque mh-1"> Explay Web Agency</a></div>
        </div>
    </div>
    <?= $this->renderSection('footer') ?>
</footer>

<!-- SCRIPTS -->
<script type="text/javascript" src="<?= base_url('assets/jquery/jquery-v-3-6-0.min.js')?>"></script>
<script type="text/javascript" src="<?= base_url('assets/slick-1.8.1/slick/slick.min.js')?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/master.js')?>"></script>
<?= $this->renderSection('scripts') ?>
</body>
</html>
