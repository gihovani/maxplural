<?= $this->extend('layout/site') ?>

<?= $this->section('title') ?>
<?= $emp->titulo ?>
<?= $this->endSection() ?>

<?= $this->section('meta') ?>
<?php $meta = $emp;?>
<?php if ($meta->palavras_chave) :?>
<meta name="keywords" content="<?= $meta->palavras_chave?>" />
<?php endif;?>
<?php if ($meta->descricao) :?>
<meta name="description" content="<?= $meta->descricao?>" />
<?php endif;?>
<?php if ($meta->imagem) :?>
<meta itemprop="image" content="<?= base_url(\App\Models\EmpreendimentoModel::IMG_PATH . $meta->imagem)?>" />
<?php endif;?>
<link rel="canonical" href="<?= site_url('site/empreendimento/'.$meta->slug)?>" />
<?= $this->endSection() ?>

<?= $this->section('styles')?>
    <link rel="stylesheet" href="<?= base_url('assets/css/projeto.min.css')?>?v=<?= $version?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/galeria.min.css')?>?v=<?= $version?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/form.min.css')?>?v=<?= $version?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/tabs.min.css')?>?v=<?= $version?>" />
    <?php if (isset($emp->style) && !empty($emp->style)):?>
        <style>
            <?= $emp->style ?>
        </style>
    <?php endif;?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<?php if (isset($emp->imagens['Banner']) && count($emp->imagens['Banner'])):?>
    <section id="topo">
        <div class="slider-1__only-dots">
            <?php foreach ($emp->imagens['Banner'] as $b):?>
            <div>
                <div class="w-100 slide-projeto" style='background-image: url(<?= base_url(\App\Models\EmpreendimentoImagemModel::IMG_PATH . $b->imagem)?>)'></div>
            </div>
            <?php endforeach;?>
        </div>
    </section>
<?php endif; ?>
    <section id="desc">
        <div class="container relative">
            <div class="title-section d-flex w-100">
                <div class="logo" >
                    <img src="<?= base_url(\App\Models\LinhaModel::IMG_PATH . $emp->linha->imagem)?>" alt="<?=$emp->linha->titulo?>">
                </div>
                <div class="titulo-box">
                    <div class="nome titulo">
                        <h1><?= $emp->titulo?></h1>
                    </div>
                    <h5 class="endereco"><?= $emp->descricao?></h5>
                </div>
            </div>
            <div class="d-flex descricao-box">
                <div class="w-50">
                    <div class="ph-2">
                        <div class="titulo"><h2><?= $emp->titulo?></h2></div>
                        <div class="descricao">
                            <p><?= $emp->conteudo?></p>
                        </div>
                    </div>
                </div>
                <div class="w-50">
                    <?php if (isset($emp->caracteristica) && count($emp->caracteristica)):?>
                    <div class="ph-2">
                        <ul class="d-flex">
                            <?php foreach ($emp->caracteristica as $c):?>
                            <li class="d-flex">
                                <img src="<?= base_url(\App\Models\CaracteristicaModel::IMG_PATH . $c->imagem)?>" alt="<?= $c->titulo;?>">
                                <span class="w-100 text-center"><?= $c->titulo;?></span>
                            </li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                    <?php endif;?>
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
                    <?php $active = 'class="active"'; ?>
                    <?php if (isset($emp->imagens['Fachada']) && count($emp->imagens['Fachada'])):?>
                        <span <?= $active;?> data-filter="fachada">FACHADA</span>
                        <?php $active = ''; ?>
                    <?php endif; ?>
                    <?php if (isset($emp->imagens['Área de Lazer']) && count($emp->imagens['Área de Lazer'])):?>
                        <span <?= $active;?> data-filter="areas">ÁREAS DE LAZER / ÁREAS COMUNS</span>
                        <?php $active = ''; ?>
                    <?php endif; ?>
                    <?php if (isset($emp->imagens['Decorado']) && count($emp->imagens['Decorado'])):?>
                        <span <?= $active;?> data-filter="decorado">DECORADO</span>
                        <?php $active = ''; ?>
                    <?php endif; ?>
                </div>
                <div class="filter-box-content d-flex mv-3 pv-3">
                    <?php if (isset($emp->imagens['Fachada']) && count($emp->imagens['Fachada'])):?>
                        <?php foreach ($emp->imagens['Fachada'] as $b):?>
                            <div class="filter-box-content-item" data-filtered="fachada">
                                <img src="<?= base_url(\App\Models\EmpreendimentoImagemModel::IMG_PATH . $b->imagem)?>" alt="<?= $b->titulo?>">
                                <span><?= $b->titulo?></span>
                            </div>
                        <?php endforeach;?>
                        <div class="clearfix"></div>
                    <?php endif; ?>
                    <?php if (isset($emp->imagens['Área de Lazer']) && count($emp->imagens['Área de Lazer'])):?>
                        <?php foreach ($emp->imagens['Área de Lazer'] as $b):?>
                            <div class="filter-box-content-item" data-filtered="areas">
                                <img src="<?= base_url(\App\Models\EmpreendimentoImagemModel::IMG_PATH . $b->imagem)?>" alt="<?= $b->titulo?>">
                                <span><?= $b->titulo?></span>
                            </div>
                        <?php endforeach;?>
                        <div class="clearfix"></div>
                    <?php endif; ?>
                    <?php if (isset($emp->imagens['Decorado']) && count($emp->imagens['Decorado'])):?>
                        <?php foreach ($emp->imagens['Decorado'] as $b):?>
                            <div class="filter-box-content-item" data-filtered="decorado">
                                <img src="<?= base_url(\App\Models\EmpreendimentoImagemModel::IMG_PATH . $b->imagem)?>" alt="<?= $b->titulo?>">
                                <span><?= $b->titulo?></span>
                            </div>
                        <?php endforeach;?>
                        <div class="clearfix"></div>
                    <?php endif; ?>
                </div>
            </div>
            <?php if (isset($emp->video) && $emp->video):?>
            <hr>
            <div class="titulo">
                <h2 class="text-center">TOUR VIRTUAL 360º</h2>
            </div>
            <div>
                <div class="video-container">
                    <iframe src="<?= $emp->video?>" allowfullscreen></iframe>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <section id="planta" class="bg-white">
        <div class="titulo">
            <h2 class="text-center">PLANTAS E ESPECIFICAÇÕES TÉCNICAS</h2>
        </div>
        <div class="d-flex container">
            <?php if (isset($emp->imagens['Especificação']) && count($emp->imagens['Especificação'])):?>
                <div class="w-40 planta-slider-box">
                    <span class="prev">
                        <img class="w-100" src="<?= base_url('assets/imgs/prevArrow.svg')?>" alt="Slide Anterior">
                    </span>
                    <div class="slider-1 ">
                            <?php foreach ($emp->imagens['Especificação'] as $b):?>
                                <div class="filter-box-content-item">
                                    <img class="w-100" src="<?= base_url(\App\Models\EmpreendimentoImagemModel::IMG_PATH . $b->imagem)?>" alt="<?= $b->titulo ?>">
                                    <span><?= $b->titulo ?></span>
                                </div>
                            <?php endforeach;?>
                    </div>
                    <span class="next">
                        <img class="w-100" src="<?= base_url('assets/imgs/nextArrow.svg')?>" alt="Slide Próximo">
                    </span>
                </div>
            <div class="w-40 planta-content">
                <h2 class="subtitle">ESPECIFICAÇÕES<br />TÉCNICAS</h2>
                <?= $emp->especificacoes_tecnicas ?>
            </div>
            <?php else: ?>
                <div class="w-40 planta-content m-auto">
                    <h2 class="subtitle">ESPECIFICAÇÕES<br />TÉCNICAS</h2>
                    <?= $emp->especificacoes_tecnicas ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <?php if (isset($emp->status) && $emp->status):?>
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
                            <img src="<?= base_url('assets/imgs/projetos/status/escavadeira.png')?>" alt="Terraplenagem">
                            <p>Terraplenagem</p>
                        </div>
                        <div class="etapa-status" data-status="<?= $emp->status->terraplenagem?>">
                            <span class="value">0%</span>
                            <span class="progress"></span>
                        </div>
                    </div>
                    <div class="w-30 status-box-itens__item">
                        <div class="etapa-title">
                            <img src="<?= base_url('assets/imgs/projetos/status/furadeira.png')?>" alt="Fundação">
                            <p>Fundação</p>
                        </div>
                        <div class="etapa-status" data-status="<?= $emp->status->fundacao?>">
                            <span class="value">0%</span>
                            <span class="progress"></span>
                        </div>
                    </div>
                    <div class="w-30 status-box-itens__item">
                        <div class="etapa-title">
                            <img src="<?= base_url('assets/imgs/projetos/status/casa.png')?>" alt="Revestimentos">
                            <p>Revestimentos</p>
                        </div>
                        <div class="etapa-status" data-status="<?= $emp->status->revestimento?>">
                            <span class="value">0%</span>
                            <span class="progress"></span>
                        </div>
                    </div>
                    <div class="w-30 status-box-itens__item">
                        <div class="etapa-title">
                            <img src="<?= base_url('assets/imgs/projetos/status/parede.png')?>" alt="Alvenaria">
                            <p>Alvenaria</p>
                        </div>
                        <div class="etapa-status" data-status="<?= $emp->status->alvenaria?>">
                            <span class="value">0%</span>
                            <span class="progress"></span>
                        </div>
                    </div>
                    <div class="w-30 status-box-itens__item">
                        <div class="etapa-title">
                            <img src="<?= base_url('assets/imgs/projetos/status/projeto.png')?>" alt="Infraestrutura">
                            <p>Infraestrutura</p>
                        </div>
                        <div class="etapa-status" data-status="<?= $emp->status->infraestrutura?>">
                            <span class="value">0%</span>
                            <span class="progress"></span>
                        </div>
                    </div>
                    <div class="w-30 status-box-itens__item">
                        <div class="etapa-title">
                            <img src="<?= base_url('assets/imgs/projetos/status/pincel.png')?>" alt="Acabamentos">
                            <p>Acabamentos</p>
                        </div>
                        <div class="etapa-status" data-status="<?= $emp->status->acabamento?>">
                            <span class="value">0%</span>
                            <span class="progress"></span>
                        </div>
                    </div>
                </div>
                <div class="status-box-total">
                    <div class="status-box-total__item">
                        <h3 class="text-center colorGray">STATUS DE CONCLUSÃO DA OBRA</h3>
                        <div class="etapa-status" data-status="<?= $emp->status->total?>">
                            <span class="value">0%</span>
                            <span class="progress"></span>
                        </div>
                    </div>
                </div>
<!--                <a class="text-center imgsObra" href="">-->
<!--                    ACOMPANHE IMAGENS DA EVOLUÇÃO DA OBRA-->
<!--                </a>-->
            </div>
        </div>
    </section>
    <?php endif;?>
    <?php if (isset($emp->endereco) && isset($emp->google_map)):?>
    <section id="maps">
        <div class="d-flex">
            <div class="w-50">
                <div class="maps-text">
                    <img src="<?= base_url('assets/imgs/projetos/pin.svg')?>" alt="Localização">
                    <h2 class="title">
                        LOCALIZAÇÃO DO<br />EMPREENDIMENTO
                    </h2>
                    <h3 class="colorGray thin"><?= $emp->endereco ?></h3>
                    <a target="_blank" class="btn-default" href="<?= str_replace('/embed', '', $emp->google_map) ?>">VER NO MAPA</a>
                </div>
            </div>
            <div class="w-50  mapa-img">
                <iframe src="<?= $emp->google_map ?>" width="600" height="450" class="w-100" style="border:0;"></iframe>
                <!-- <img class="w-100" src="<?= base_url('assets/imgs/projetos/map.png')?>" alt="Mapa">-->
            </div>
        </div>
    </section>
    <?php endif;?>
    <section id="download-e-orcamento">
        <div class="d-flex">
            <div class="w-50 download-content d-flex">
                <div class=" mv-3 pv-3">
                    <?php if (isset($emp->arquivos) && count($emp->arquivos)):?>
                    <h2 class="title text-center mv-3 pv-3">FAÇA O DOWNLOAD</h2>
                    <?php foreach ($emp->arquivos as $a):?>
                        <a download href="<?= base_url(\App\Models\EmpreendimentoArquivoModel::IMG_PATH . $a->arquivo)?>" class="btn-default"><?= $a->titulo?></a>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="w-50 orcamento-form">
                <div class="form mv-3 pv-3">
                    <?php if (!$success):?>
                    <h2 class="title text-center">SIMULE SEU FINANCIAMENTO</h2>
                    <?= form_open('site/empreendimento/'.$emp->slug. '#form', ['name' => 'form']) ?>
                        <input type="hidden" name="assunto" value="SIMULE SEU FINANCIAMENTO: <?= $emp->titulo?>">
                        <input type="hidden" name="empreendimento_id" value="<?= $emp->id?>">
                        <div class="formgroup">
                            <label for="form-nome">NOME:</label>
                            <input id="form-nome" type="text" required name="nome">
                        </div>
                        <div class="formgroup">
                            <label for="form-email">E-MAIL:</label>
                            <input id="form-email" type="email" required name="email">
                        </div>
                        <div class="formgroup">
                            <label for="form-telefone">TELEFONE:</label>
                            <input class="telefone" id="form-telefone" type="text" required name="telefone">
                        </div>
                        <button type="submit" class="btn-default">ENVIAR</button>
                    <?= form_close() ?>
                    <?php else: ?>
                    <div class="card show">
                        <div class="card-success">
                            <h3 class="pv-3 mv-3 text-center">MENSAGEM ENVIADA COM SUCESSO!</h3>
                            <img style="width: 150px;margin: auto; display: block;" src="<?= base_url('assets/imgs/sucess.svg')?>" alt="Mensagem Enviada com Sucesso" />
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>

<?= $this->section('scripts')?>
    <script type="text/javascript" src="<?= base_url('assets/js/galeria-min.js')?>?v=<?= $version?>" ></script>
    <script type="text/javascript" src="<?= base_url('assets/js/progress-bar-min.js')?>?v=<?= $version?>" ></script>
    <script type="text/javascript" src="<?= base_url('assets/jquery/phone-mask.min.js')?>?v=<?= $version?>" ></script>
    <script type="text/javascript" src="<?= base_url('assets/js/form-min.js')?>?v=<?= $version?>" ></script>
    <?php if (isset($emp->javascript) && !empty($emp->javascript)):?>
        <script>
            <?= $emp->javascript ?>
        </script>
    <?php endif;?>
<?= $this->endSection() ?>
