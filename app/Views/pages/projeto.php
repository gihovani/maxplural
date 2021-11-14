<?= $this->extend('layout/site') ?>

<?= $this->section('title') ?>
    Projeto (nome do empreendimento)
<?= $this->endSection() ?>

<?= $this->section('styles')?>
    <link rel="stylesheet" href="<?= base_url('assets/css/projeto.min.css')?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/galeria.min.css')?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/form.min.css')?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/tabs.min.css')?>" />
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <section id="topo">
        <div class="slider-1__only-dots">
            <div>
                <div class="w-100 slide-projeto" style='background-image: url(<?= base_url('assets/imgs/projetos/max-derby-boulevard/maxdrb-1.jpg')?>)'></div>
            </div>
            <div>
                <div class="w-100 slide-projeto" style='background-image: url(<?= base_url('assets/imgs/projetos/max-derby-boulevard/maxdrb-2.jpg')?>)'></div>
            </div>
            <div>
                <div class="w-100 slide-projeto" style='background-image: url(<?= base_url('assets/imgs/projetos/max-derby-boulevard/maxdrb-3.jpg')?>)'></div>
            </div>
            <div>
                <div class="w-100 slide-projeto" style='background-image: url(<?= base_url('assets/imgs/projetos/max-derby-boulevard/maxdrb-4.jpg')?>)'></div>
            </div>
        </div>
    </section>
    <section id="desc">
        <div class="container relative">
            <div class="title-section d-flex w-100">
                <div class="logo">
                    <img src="<?= base_url('assets/imgs/marcas/m-derby-logo.svg')?>" alt="">
                </div>
                <div class="titulo-box">
                    <div class="nome titulo">
                        <h1>MAX DERBY BOULEVARD</h1>
                    </div>
                    <h5 class="endereco">Endereço 000 - Cidade / Estado</h5>
                </div>
            </div>
            <div class="d-flex descricao-box">
                <div class="w-50">
                    <div class="ph-2">
                        <div class="titulo"><h2>MAX DERBY BOULEVARD</h2></div>
                        <div class="descricao">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vestibulum pretium sodales. Suspendisse consectetur ullamcorper efficitur. Nulla dapibus laoreet lorem ac lacinia. Nullam congue tincidunt volutpat. Ut scelerisque, augue vel ultrices mattis, erat nulla bibendum sem, sed consequat neque est quis ante. Quisque vestibulum malesuada dui in interdum. Mauris arcu tortor, tristique at dapibus eu, eleifend in elit.</p>
                        </div>
                    </div>
                </div>
                <div class="w-50">
                    <div class="ph-2">
                        <ul class="d-flex">
                            <li class="d-flex">
                                <img src="<?= base_url('../assets/imgs/projetos/icons/localizacao.svg')?>" alt="">
                                <span class="w-100 text-center">Localização privilegiada</span>
                            </li>
                            <li class="d-flex">
                                <img src="<?= base_url('../assets/imgs/projetos/icons/fechadura.svg')?>" alt="">
                                <span class="w-100 text-center">Fechadura<br />digital</span>
                            </li>
                            <li class="d-flex">
                                <img src="<?= base_url('../assets/imgs/projetos/icons/lavanderia.svg')?>" alt="">
                                <span class="w-100 text-center">Lavanderia compartilhada</span>
                            </li>
                            <li class="d-flex">
                                <img src="<?= base_url('../assets/imgs/projetos/icons/pet.svg')?>" alt="">
                                <span class="w-100 text-center">Pet Place</span>
                            </li>
                            <li class="d-flex">
                                <img src="<?= base_url('../assets/imgs/projetos/icons/bike.svg')?>" alt="">
                                <span class="w-100 text-center">Bicicletário</span>
                            </li>
                            <li class="d-flex">
                                <img src="<?= base_url('../assets/imgs/projetos/icons/academia.svg')?>" alt="">
                                <span class="w-100 text-center">Academia</span>
                            </li>
                            <li class="d-flex">
                                <img src="<?= base_url('../assets/imgs/projetos/icons/piscina.svg')?>" alt="">
                                <span class="w-100 text-center">Piscina<br />panorâmica</span>
                            </li>
                            <li class="d-flex">
                                <img src="<?= base_url('../assets/imgs/projetos/icons/work.svg')?>" alt="">
                                <span class="w-100 text-center">Work zone</span>
                            </li>
                            <li class="d-flex">
                                <img src="<?= base_url('../assets/imgs/projetos/icons/diamond.svg')?>" alt="">
                                <span class="w-100 text-center">Áreas gourmet individuais</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="galeria" class="bg-dark">
        <div class="container">
            <div class="titulo">
                <h2 class="text-center">VEJA COMO SERÁ O SEU NOVO LAR</h2>
            </div>
            <div class="filter-box">
                <div class="filter-box-nav d-flex mv-3">
                    <span data-filter="fachada">FACHADA</span>
                    <span data-filter="areas" class="active">ÁREAS DE LAZER / ÁREAS COMUNS</span>
                    <span data-filter="decorado">DECORADO</span>
                </div>
                <div class="filter-box-content d-flex mv-3 pv-3">
                    <div class="filter-box-content-item" data-filtered="fachada"><img src="<?= base_url('assets/imgs/projetos/max-derby-boulevard/1.png')?>" alt=""><span>texto 1</span></div>
                    <div class="filter-box-content-item" data-filtered="fachada"><img src="<?= base_url('assets/imgs/projetos/max-derby-boulevard/2.png')?>" alt=""><span>texto 1</span></div>
                    <div class="filter-box-content-item" data-filtered="fachada"><img src="<?= base_url('assets/imgs/projetos/max-derby-boulevard/3.png')?>" alt=""><span>texto 1</span></div>
                    <div class="filter-box-content-item" data-filtered="areas"><img src="<?= base_url('assets/imgs/projetos/max-derby-boulevard/4.png')?>" alt=""><span>texto 3</span></div>
                    <div class="filter-box-content-item" data-filtered="areas"><img src="<?= base_url('assets/imgs/projetos/max-derby-boulevard/5.png')?>" alt=""><span>texto 3</span></div>
                    <div class="filter-box-content-item" data-filtered="areas"><img src="<?= base_url('assets/imgs/projetos/max-derby-boulevard/6.png')?>" alt=""><span>texto 3</span></div>
                    <div class="filter-box-content-item" data-filtered="areas"><img src="<?= base_url('assets/imgs/projetos/max-derby-boulevard/7.png')?>" alt=""><span>texto 3</span></div>
                    <div class="filter-box-content-item" data-filtered="areas"><img src="<?= base_url('assets/imgs/projetos/max-derby-boulevard/8.png')?>" alt=""><span>texto 3</span></div>
                    <div class="filter-box-content-item" data-filtered="decorado"><img src="<?= base_url('assets/imgs/projetos/max-derby-boulevard/9.png')?>" alt=""><span>texto 2</span></div>
                    <div class="filter-box-content-item" data-filtered="decorado"><img src="<?= base_url('assets/imgs/projetos/max-derby-boulevard/10.png')?>" alt=""><span>texto 2</span></div>
                </div>
            </div>
            <div class="titulo">
                <h2 class="text-center">TOUR VIRTUAL 360º</h2>
            </div>
            <div>
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/ec5ZpPkv2IU" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    <section id="planta" class="bg-white">
        <div class="titulo">
            <h2 class="text-center">PLANTAS E ESPECIFICAÇÕES TÉCNICAS</h2>
        </div>
        <div class="d-flex container">
            <div class="w-40 planta-slider-box">
                <span class="prev">
                    <img class="w-100" src="<?= base_url('assets/imgs/prevArrow.svg')?>" alt="Slide Anterior">
                </span>
                <div class="slider-1">
                    <div>
                        <img class="w-100" src="<?= base_url('assets/imgs/projetos/slider/slide-1.png')?>" alt="">
                        <span>TÉRREO</span>
                    </div>
                    <div>
                        <img class="w-100" src="<?= base_url('assets/imgs/projetos/slider/slide-1.png')?>" alt="">
                        <span>TÉRREO</span>
                    </div>
                    <div>
                        <img class="w-100" src="<?= base_url('assets/imgs/projetos/slider/slide-1.png')?>" alt="">
                        <span>TÉRREO</span>
                    </div>
                </div>
                <span class="next">
                    <img class="w-100" src="<?= base_url('assets/imgs/nextArrow.svg')?>" alt="Slide Próximo">
                </span>
            </div>
            <div class="w-40 planta-content">
                <h2 class="subtitle">ESPECIFICAÇÕES<br />TÉCNICAS</h2>
                <ul class="no-style">
                    <li>22 andares</li>
                    <li>7 unidades por andar</li>
                    <li>Depósitos individuais</li>
                    <li>Unidades com 25 e 41m²</li>
                    <li>Vagas de Garagem Rotativas</li>
                    <li>Suítes / 1 e 2 quartos</li>
                    <li>1 Banheiro</li>
                </ul>
            </div>
        </div>
    </section>
    <section id="status-da-obra" class="bg-dark">
        <div class="titulo">
            <h2 class="text-center">ACOMPANHE A EVOLUÇÃO DA OBRA</h2>
            <h3 class="text-center">Todas as unidades vendidas!</h3>
        </div>
        <div class="status-box">
            <div class="container">
                <div class="status-box-itens d-flex">
                    <div class="w-30 status-box-itens__item">
                        <div class="etapa-title">
                            <img src="<?= base_url('assets/imgs/projetos/status/escavadeira.png')?>" alt="">
                            <p>Terraplenagem</p>
                        </div>
                        <div class="etapa-status" data-status="90">
                            <span class="value">0%</span>
                            <span class="progress"></span>
                        </div>
                    </div>
                    <div class="w-30 status-box-itens__item">
                        <div class="etapa-title">
                            <img src="<?= base_url('assets/imgs/projetos/status/furadeira.png')?>" alt="">
                            <p>Fundação</p>
                        </div>
                        <div class="etapa-status" data-status="70">
                            <span class="value">0%</span>
                            <span class="progress"></span>
                        </div>
                    </div>
                    <div class="w-30 status-box-itens__item">
                        <div class="etapa-title">
                            <img src="<?= base_url('assets/imgs/projetos/status/casa.png')?>" alt="">
                            <p>Revestimentos</p>
                        </div>
                        <div class="etapa-status" data-status="40">
                            <span class="value">0%</span>
                            <span class="progress"></span>
                        </div>
                    </div>
                    <div class="w-30 status-box-itens__item">
                        <div class="etapa-title">
                            <img src="<?= base_url('assets/imgs/projetos/status/parede.png')?>" alt="">
                            <p>Alvenaria</p>
                        </div>
                        <div class="etapa-status" data-status="12">
                            <span class="value">0%</span>
                            <span class="progress"></span>
                        </div>
                    </div>
                    <div class="w-30 status-box-itens__item">
                        <div class="etapa-title">
                            <img src="<?= base_url('assets/imgs/projetos/status/projeto.png')?>" alt="">
                            <p>Infraestrutura</p>
                        </div>
                        <div class="etapa-status" data-status="20">
                            <span class="value">0%</span>
                            <span class="progress"></span>
                        </div>
                    </div>
                    <div class="w-30 status-box-itens__item">
                        <div class="etapa-title">
                            <img src="<?= base_url('assets/imgs/projetos/status/pincel.png')?>" alt="">
                            <p>Acabamentos</p>
                        </div>
                        <div class="etapa-status" data-status="30">
                            <span class="value">0%</span>
                            <span class="progress"></span>
                        </div>
                    </div>
                </div>
                <div class="status-box-total">
                    <div class="status-box-total__item">
                        <h3 class="text-center colorGray">STATUS DE CONCLUSÃO DA OBRA</h3>
                        <div class="etapa-status">
                            <span class="value">0%</span>
                            <span class="progress"></span>
                        </div>
                    </div>
                </div>
                <a class="text-center imgsObra" href="">
                    ACOMPANHE IMAGENS DA EVOLUÇÃO DA OBRA
                </a>
            </div>
        </div>
    </section>
    <section id="maps">
        <div class="d-flex">
            <div class="w-50">
                <div class="maps-text">
                    <img src="<?= base_url('assets/imgs/projetos/pin.svg')?>" alt="">
                    <h2 class="title">
                        LOCALIZAÇÃO DO<br />EMPREENDIMENTO
                    </h2>
                    <h3 class="colorGray thin">Nome da rua, 000, Bairro, Cidade - UF</h3>
                    <a class="btn-default" href="">VER NO MAPA</a>
                </div>
            </div>
            <div class="w-50  mapa-img">
                <img class="w-100" src="<?= base_url('assets/imgs/projetos/map.png?v=2')?>" alt="">
            </div>
        </div>
    </section>
    <section id="download-e-orcamento">
        <div class="d-flex">
            <div class="w-50 download-content d-flex">
                <div class=" mv-3 pv-3">
                    <h2 class="title text-center mv-3 pv-3">FAÇA O DOWNLOAD</h2>
                    <a href="" class="btn-default">E-BOOK DO EMPREENDIMENTO</a>
                    <a href="" class="btn-default">PDF COM IMAGENS</a>
                    <a href="" class="btn-default">IMAGENS 3D</a>
                    <a href="" class="btn-default">TABELA DE VALORES</a>
                </div>
            </div>
            <div class="w-50 orcamento-form">
                <div class=" mv-3 pv-3">
                    <h2 class="title text-center">SIMULE SEU FINANCIAMENTO</h2>
                    <form action="">
                        <div class="formgroup">
                            <label for="nome">NOME:</label>
                            <input id="nome" type="text" required>
                        </div>
                        <div class="formgroup">
                            <label for="email">E-MAIL:</label>
                            <input id="email" type="email" required>
                        </div>
                        <div class="formgroup">
                            <label for="telefone">TELEFONE:</label>
                            <input class="telefone" id="telefone" type="text" required>
                        </div>
                        <button class="btn-default">ENVIAR</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>

<?= $this->section('scripts')?>
    <script type="text/javascript" src="<?= base_url('assets/js/galeria.js')?>" ></script>
    <script type="text/javascript" src="<?= base_url('assets/js/progress-bar.js')?>" ></script>
    <script type="text/javascript" src="<?= base_url('assets/jquery/phone-mask.min.js')?>" ></script>
    <script type="text/javascript" src="<?= base_url('assets/js/form.js')?>" ></script>
<?= $this->endSection() ?>