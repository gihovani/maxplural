<?= $this->extend('layout/site') ?>

<?= $this->section('title') ?>
    Notícias e novidades para você
<?= $this->endSection() ?>

<?= $this->section('meta') ?>
<meta name="keywords" content="Notícias, novidades para você, valor apartamento, site de vendas de apartamentos, imóveis para comprar, apartamentos novos, apartamentos a venda, simular financiamento, recife, pernambuco, porto de galinhas, piedade" />
<meta name="description" content="Notícias e novidades para ajudar você que quer escolher um imóvel e não abre mão de sofisticação, exclusividade e design. Encontre empreendimentos em um dos destinos mais procurados do litoral nordestino." />
<meta itemprop="image" content="<?= base_url('assets/icons/icon-512x512.png')?>" />
<link rel="canonical" href="<?= site_url('site/noticias')?>" />
<?= $this->endSection() ?>

<?= $this->section('styles')?>
    <link rel="stylesheet" href="<?= base_url('assets/css/noticias.min.css')?>?v=<?= $version?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/pagination.min.css') ?>?v=<?= $version?>"/>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section id="title-page" class="relative pv-3">
    <div class="container">
        <h1 class="title"><i>Notícias e novidades<br />para você</i></h1>
    </div>
</section>
<section id="blog-box">
    <div class="container">
        <div class="filtros_e_buscas d-flex">
            <div>
                <span>Categorias:</span>
                <a class="mh-1" href="<?= site_url('site/noticias/') ?>">TODOS</a>
                <a class="mh-1" href="<?= site_url('site/noticias/?q=Empreendimentos') ?>">EMPREENDIMENTOS</a>
                <a class="mh-1" href="<?= site_url('site/noticias/?q=Eventos') ?>">EVENTOS</a>
            </div>
            <div>
                <?= form_open('site/noticias/', ['id' => 'searchPost', 'method' => 'get', 'class' => 'relative']);?>
                <label for="searchPostInput" class="sr-only">Termo</label>
                    <input type="text" placeholder="o que você procura?" id="searchPostInput" name="q" />
                    <button class="d-flex" type="submit"><img class="icon-search" src="<?= base_url('assets/imgs/search-96.svg') ?>" alt="Ícone Search" /></button>
                <?= form_close(); ?>
            </div>
        </div>
        <?php if (isset($noticias) && count($noticias)): ?>
        <?php $emp = array_shift($noticias);?>
        <div class="d-flex conteudo">
            <div class="post-destaque d-flex w-100">
                <div class="w-50 img-post d-flex">
                    <img class="w-100" src="<?= base_url(\App\Models\NoticiaModel::IMG_PATH . $emp->imagem)?>" alt="<?= $emp->titulo?>">
                </div>
                <div class="w-50">
                    <div class="post-descricao">
                        <div class="post-descricao__info d-flex">
                            <span class="cat"><?= $emp->categoria;?></span>
                            <span class="data">
                                <?php list($data, $hora) = explode(' ', $emp->created_at) ?>
                                <?php list($ano, $mes, $dia)  = explode('-', $data); ?>
                                <?=$dia?>/<?=$mes?>/<?=$ano?>
                            </span>
                        </div>
                        <div class="post-descricao__content">
                            <h3><?= $emp->titulo?></h3>
                            <p class="truncate"><?= $emp->descricao ?></p>
                            <a href="<?= site_url('site/noticia/'.$emp->slug) ?>" class="leia-mais">Leia mais</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php foreach ($noticias as $emp) : ?>
            <div class="post">
                <a href="<?= site_url('site/noticia/'.$emp->slug) ?>">
                    <div class="w-100 img-post2 d-flex">
                        <img src="<?= base_url(\App\Models\NoticiaModel::IMG_PATH . $emp->imagem)?>" alt="<?= $emp->titulo?>">
                    </div>
                    <div class="post-descricao__info">
                        <h3><?= $emp->titulo?></h3>
                        <p class="truncate"><?= $emp->descricao ?></p>
                        <span class="leia-mais">Leia mais</span>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
        <?php if (isset($pager)) :?>
        <?= $pager->links() ?>
        <?php endif; ?>
        <?php else: ?>
        <div class="d-flex conteudo">
            <div class="w-100 text-center">
                <h3>Nenhuma notícia encontrada.</h3>
                <p>
                    Verifique os parâmetros informados e tente novamente.
                </p>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>
<?= $this->endSection() ?>

<?= $this->section('scripts')?>
<script type="text/javascript" src="<?= base_url('assets/js/noticia-min.js')?>?v=<?= $version?>" ></script>
<?= $this->endSection() ?>
