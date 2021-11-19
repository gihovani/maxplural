<!doctype html>
<html lang="pt-BR" dir="ltr">
<head>
    <title><?= $this->renderSection('title') ?></title>
    <base id="baseUrl" href="<?= base_url() ?>/"/>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="dark" name="color-scheme" />
    <?= $this->renderSection('meta') ?>
    <link rel="stylesheet" href="<?= base_url('assets/css/newsletter.min.css') ?>"/>
    <link rel="stylesheet" href="<?= base_url('assets/css/master.css') ?>"/>
    <link rel="stylesheet" href="<?= base_url('assets/slick-1.8.1/slick/slick.css') ?> "/>
    <?= $this->renderSection('styles') ?>

    <link rel="manifest" href="<?= base_url('manifest.json')?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,200&display=swap" rel="stylesheet"/>
    <link rel="icon" type="image/x-icon" href="<?= base_url('favicon.ico') ?>" />
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('favicon.ico') ?>" />
    <link rel="shortcut icon" type="image/png" href="<?= base_url('assets/img/favicon.png') ?>" />
    <script type="module">
        import 'https://cdn.jsdelivr.net/npm/@pwabuilder/pwaupdate';
        const el = document.createElement('pwa-update');
        document.body.appendChild(el);
    </script>
</head>
<body id="topo" class="relative">
<div class="loader"></div>
<header>
    <div class="mutantMenu d-flex container">
        <div class="hamburguerMenu">
            <ul>
                <li>&nbsp;</li>
                <li>&nbsp;</li>
                <li>&nbsp;</li>
            </ul>
            <span>MENU</span>
        </div>
        <div class="logo">
            <a href="<?= base_url() ?>">
                <img src="<?= base_url('assets/imgs/logo.svg') ?>" alt="Logo Max Plural"/>
            </a>
        </div>
        <a class="contact" href="<?= $config->whatsapp ?>" target="_blank">
            <div>
                <img src="<?= base_url('assets/imgs/whatsapp-64.png') ?>" alt="Logo WhatsApp"/>
            </div>
            <div class="contact__text-number">
                <h4>Fale Conosco</h4>
                <h4>
                    <?php list($ddd, $phone) = explode(' ', $config->telefone_whatsapp) ?>
                    <?= sprintf('<span class="thin">%s</span> <strong>%s</strong>', $ddd, $phone) ?>
                </h4>
            </div>
        </a>
        <div class="social d-flex">
            <a href="<?= $config->facebook ?>" target="_blank">
                <img src="<?= base_url('assets/imgs/facebook-64.svg') ?>" alt="Logo Facebook"/>
            </a>
            <a href="<?= $config->instagram ?>" target="_blank">
                <img src="<?= base_url('assets/imgs/instagram-64.svg') ?>" alt="Logo Instagram"/>
            </a>
            <a href="<?= $config->linkedin ?>" target="_blank">
                <img src="<?= base_url('assets/imgs/linkedin-64.svg') ?>" alt="Logo Linkedin"/>
            </a>
            <a href="<?= $config->youtube ?>" target="_blank">
                <img src="<?= base_url('assets/imgs/youtube-64.svg') ?>" alt="Logo Youtube"/>
            </a>
        </div>
        <div class="central">
            <a href="<?= site_url('site/contato') ?>">
                <h4>Central de Vendas</h4>
                <h5 class="thin">(Fale conosco)</h5>
            </a>
        </div>
        <div id="headerSearch" class="search">
            <img class="icon-search" src="<?= base_url('assets/imgs/search-96.svg') ?>" alt="Ícone Search"/>
            <?= form_open('site/noticias', ['method' => 'get']) ?>
                <label for="headerSearchQuery" class="sr-only">Termo</label>
                <input id="headerSearchQuery" type="text" placeholder="O que você procura? Digite aqui." name="q"/>
                <button type="submit">
                    <img src="<?= base_url('assets/imgs/search-96.svg') ?>" alt="Ícone Search"/>
                </button>
            <?= form_close() ?>
        </div>
    </div>
    <?= $this->renderSection('header') ?>
</header>
<nav>
    <ul class="no-style text-center">
        <li class="closeMenu"><a href="<?= base_url() ?>">INÍCIO</a></li>
        <li class="closeMenu"><a href="<?= site_url('site/sobre') ?>">A MAXPLURAL</a></li>
        <li class="closeMenu"><a href="<?= site_url('site/linhas') ?>">NOSSAS LINHAS</a></li>
        <li class="closeMenu"><a href="<?= site_url('site/empreendimentos') ?>">EMPREENDIMENTOS</a></li>
        <li class="closeMenu"><a href="<?= site_url('site/noticias') ?>">NOTÍCIAS</a></li>
        <!--<li class="closeMenu"><a href="<?= site_url('site/projeto') ?>">PROJETOS</a></li>-->
        <li class="closeMenu"><a href="<?= site_url('site/tabelas-de-valores') ?>">TABELAS DE VALORES</a></li>
        <li class="closeMenu"><a href="<?= site_url('site/contato') ?>">CONTATO</a></li>
    </ul>
    <span class="closeMenu"></span>
</nav>

<!-- CONTENT -->
<main>
    <div class="content">
        <?= $this->renderSection('content') ?>
    </div>

    <section id="newsletter">
        <div class="d-flex relative">
            <div>
                <img src="<?= base_url('assets/imgs/news-max.png') ?>" alt="Newsletter"/>
            </div>
            <div id="newsBox">
                <span>Seu melhor e-mail <span class="nextArrow-icon"></span></span>
                <?= form_open('site/newsletter', ['name' => 'form']) ?>
                <input type="hidden" name="assunto" value="Inscrição NewsLetter" />
                <input type="hidden" name="nome" value="Guest" />
                <label for="newsBoxEmail" class="sr-only">E-mail</label>
                    <input type="email" id="newsBoxEmail" placeholder="exemplo@dominio.com" name="email">
                    <button type="submit">Enviar</button>
                <?= form_close() ?>
            </div>
        </div>
    </section>
</main>
<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->
<div id="btnwhats" class="container relative">
    <a href="<?= $config->whatsapp ?>">
        <div class="absolute d-flex">
            <span><h4>VAMOS CONVERSAR AGORA?</h4></span>
            <img src="<?= base_url('assets/imgs/whatsapp-64.png') ?>" alt="Logo WhatsApp"/>
        </div>
    </a>
</div>
<footer>
    <div class="linha-1">
        <div class="container d-flex">
            <div class="w-30 text-center">
                <p class="destaque">PLANTÃO DE VENDAS</p>
                <h4>
                    <?php list($ddd, $phone) = explode(' ', $config->telefone_fixo) ?>
                    <?= sprintf('<span class="thin">%s</span> <strong>%s</strong>', $ddd, $phone) ?>
                </h4>
            </div>
            <div class="w-30  text-center">
                <a href="#topo" class="anchor logo backToTop">
                    <img src="<?= base_url('assets/imgs/logo.svg') ?>" alt="Logo Max Plural"/>
                    <p class="relative">
                        <span>VOLTAR PARA O TOPO</span>
                        <img class="btt" src="<?= base_url('assets/imgs/prevArrow.svg') ?>" alt="Seta Topo" />
                    </p>
                </a>
            </div>
            <div class="w-30 redes text-center">
                <p class="text-center destaque">ACOMPANHE NOSSOS PERFIS</p>
                <div class="d-flex">
                    <a href="<?= $config->facebook ?>" target="_blank">
                        <img src="<?= base_url('assets/imgs/facebook-64.svg') ?>" alt="Logo Facebook"/>
                    </a>
                    <a href="<?= $config->instagram ?>" target="_blank">
                        <img src="<?= base_url('assets/imgs/instagram-64.svg') ?>" alt="Logo Instagram"/>
                    </a>
                    <a href="<?= $config->linkedin ?>" target="_blank">
                        <img src="<?= base_url('assets/imgs/linkedin-64.svg') ?>" alt="Logo Linkedin"/>
                    </a>
                    <a href="<?= $config->youtube ?>" target="_blank">
                        <img src="<?= base_url('assets/imgs/youtube-64.svg') ?>" alt="Logo Youtube"/>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="linha-2">
        <div class="container d-flex">
            <div class="w-30 text-center">
                <p><?= $config->endereco ?></p>
            </div>
            <div class="w-25 text-center v-divider">
                <ul class="no-style">
                    <li><a href="<?= base_url() ?>">INÍCIO</a></li>
                    <li><a href="<?= site_url('site/sobre') ?>">A MAXPLURAL</a></li>
                    <li><a href="<?= site_url('site/linhas') ?>">NOSSAS LINHAS</a></li>
                    <li><a href="<?= site_url('site/empreendimentos') ?>">EMPREENDIMENTOS</a></li>
                    <li><a href="<?= site_url('site/noticias') ?>">NOTÍCIAS</a></li>
                    <!--<li><a href="<?= site_url('site/projeto') ?>">PROJETOS</a></li>-->
                    <li><a href="<?= site_url('site/tabelas-de-valores') ?>">TABELAS DE VALORES</a></li>
                    <li><a href="<?= site_url('site/contato') ?>">CONTATO</a></li>
                </ul>
            </div>
            <div class="w-30 text-center">
                <p class="destaque mv-2">HORÁRIOS DE FUNCIONAMENTO</p>
                <p><?= $config->horario_atendimento ?></p>
            </div>
        </div>
    </div>
    <div class="linha-3">
        <div class="container d-flex">
            <div class="w-50">© MaxPlural - Todos os direitos reservados | <a href="<?= site_url('site/privacidade') ?>" class="destaque">Termos de Privacidade</a></div>
            <div class="w-40 d-flex">
                <img class="mh-1" src="<?= base_url('assets/imgs/logo-2.svg') ?>" alt="Logo Explay"> Certificado e desenvolvido por
                <a href="https://www.explay.com.br/" class="destaque mh-1" target="_blank"> Explay Web Agency</a>
            </div>
        </div>
    </div>
    <?= $this->renderSection('footer') ?>
</footer>

<!-- SCRIPTS -->
<script type="text/javascript" src="<?= base_url('assets/jquery/jquery-v-3-6-0.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/slick-1.8.1/slick/slick.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/master-min.js') ?>"></script>
<?= $this->renderSection('scripts') ?>
</body>
</html>
