<?= $this->extend('layout/site') ?>

<?= $this->section('title') ?>
    Post
<?= $this->endSection() ?>

<?= $this->section('styles')?>
    <link rel="stylesheet" href="<?= base_url('assets/css/noticia.min.css')?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/form.min.css')?>" />
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <section id="title-page" class="relative pv-3">
        <div class="container">
            <h1 class="title"><i>Título da notícia em<br />duas linhas</i></h1>
        </div>
    </section>
    <section id="post-content">
        <div class="container d-flex pv-3">
            <div class="w-60">
                <div class="content-posted pv-3 ph-2">
                    <img class="w-100" src="<?= base_url('assets/imgs/post/img-post-content.png')?>" alt="">
                    <div class="post-date">
                        <h5>{{dia}} <span>.</span> {{mes}} <span>.</span> {{ano}} </h5>
                    </div>
                    <h2 class="title">Título da notícia</h2>
                    <div class="post-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu ultrices dui. Praesent lacinia ligula dolor. Proin vitae nisl suscipit, ultrices lacus vitae, scelerisque quam. Fusce dui turpis, luctus at accumsan vel, maximus at dolor. Morbi lobortis metus augue, a porttitor nibh ullamcorper id. Praesent ultrices porttitor arcu, sed bibendum lacus commodo eget. Cras non eros sapien. Ut facilisis est arcu, nec convallis purus rhoncus vel. In hac habitasse platea dictumst. Integer eu pellentesque ante. Phasellus sem diam, malesuada vitae sem non, posuere pretium diam.</p>
                        <p>Vivamus imperdiet elit eget tortor posuere porta. Suspendisse facilisis, enim a euismod iaculis, lacus ligula aliquam elit, vel vulputate tortor dolor at justo. Suspendisse in scelerisque odio, quis pharetra leo. Sed pretium tortor eget tristique convallis. Aenean rhoncus volutpat quam, vel imperdiet nulla accumsan non. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec augue lacus, fringilla a laoreet sed, malesuada id nisi. Pellentesque sit amet vehicula nunc. Vivamus ullamcorper tortor eu augue ultrices, sed molestie nulla vestibulum.</p>
                        <p>Curabitur ultrices dolor vulputate urna molestie, in accumsan purus volutpat. Maecenas porttitor euismod accumsan. Aenean leo enim, lacinia nec cursus a, pharetra in magna. Vestibulum congue ante dolor, non consectetur libero tincidunt id. Suspendisse at tellus non elit dapibus mollis. Maecenas at nisi semper felis sollicitudin congue. Aenean luctus mi ac enim egestas consectetur.</p>
                    </div>
                    <div class="post-footer d-flex">
                        <div class="cat">
                            <span>Categorias:</span>
                            <span><a href="">ROTTAS</a></span>
                            <span><a href="">LANÇAMENTOS</a></span>
                        </div>
                        <div class="social d-flex">
                            <a href=""><img src="<?= base_url('assets/imgs/linkedin-64.svg')?>" alt=""></a>
                            <a href=""><img src="<?= base_url('assets/imgs/facebook-64.svg')?>" alt=""></a>
                            <a href=""><img src="<?= base_url('assets/imgs/twitter-64.svg')?>" alt=""></a>
                            <a href=""><img src="<?= base_url('assets/imgs/pinterest-64.svg')?>" alt=""></a>
                            <a href=""><img src="<?= base_url('assets/imgs/g-plus-64.svg')?>" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-25 pv-3 coluna-direita">
                <span class="mob-d-block closeBusca"></span>
                <div class="busca">
                    <div class="busca_por-texto">
                        <h2 class="title">REALIZE SUA BUSCA:</h2>
                        <form id="busca-texto" action="">
                            <input type="text" name="query" required="required" />
                            <button class="btn-default" type="submit">
                                <img src="<?= base_url('assets/imgs/search-96.svg') ?>" alt=""> BUSCAR
                            </button>
                        </form>
                    </div>
                    <div class="busca_por-select">
                        <h2 class="title">ENCONTRE SEU IMÓVEL</h2>
                        <h4 class="thin">A <strong>MAXPLURAL</strong> tem o imóvel perfeito para o seu sonho.</h4>
                        <form id="busca-select" action="">
                            <input type="hidden" class="select-input-1" id="estado" name="estado-cidade" value="">
                            <input type="hidden" class="select-input-2" id="bairro" name="bairro" value="">
                            <div class="formgroup">
                                <label for="">Estado / Cidade</label>
                                <div class="fake-input" data-select-id="1" data-selected="">Selecione</div>
                                <ul id="select-input-1" data-id="1">
                                    <li class="tabela" data-value="{{estado / cidade}}">{{estado / cidade}}</li>
                                </ul>
                                <span class="dropdown-button" data-select-id="1"><img src="<?= base_url('assets/imgs/prevArrow.svg')?>" alt=""></span>
                            </div>
                            <div class="formgroup">
                                <label for="">Bairro</label>
                                <div class="fake-input" data-select-id="2" data-selected>Selecione</div>
                                <ul id="select-input-2" data-id="2">
                                    <li class="tabela" data-value="{{bairro}}">{{bairro}}</li>
                                </ul>
                                <span class="dropdown-button" data-select-id="2"><img src="<?= base_url('assets/imgs/prevArrow.svg')?>" alt=""></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="mob-d-block openBusca">
                <div class="bg-filtro">
                    <img class="w-100" src="<?= base_url('assets/imgs/filter-icon.svg')?>" alt="">
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>

<?= $this->section('scripts')?>
    <script type="text/javascript" src="<?= base_url('assets/js/tabelas-de-valores-min.js')?>" ></script>
    <script type="text/javascript" src="<?= base_url('assets/js/noticia-min.js')?>" ></script>
    <script type="text/javascript" src="<?= base_url('assets/js/form-min.js')?>" ></script>
<?= $this->endSection() ?>
