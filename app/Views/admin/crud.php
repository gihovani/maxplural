<?= $this->extend('layout/admin') ?>

<?= $this->section('title') ?>
Admin Maxplural
<?= $this->endSection() ?>

<?= $this->section('styles') ?>
<?php if (isset($css_files) && is_array($css_files)):?>
    <?php foreach($css_files as $file): ?>
        <link type="text/css" rel="stylesheet" href="<?= $file; ?>" />
    <?php endforeach; ?>
<?php endif;?>
<style>
    body {
        margin: 0;
        font-family: Verdana, Tahoma, Helvetica, sans-serif;
        background-color: #f4f4f4;
    }
    a {
        color: #000;
    }

    /* header */
    header {
        background-color: #fff;
        box-shadow: 1px 1px 4px 0 rgba(0,0,0,.1);
        position: fixed;
        width: 100%;
        z-index: 3;
    }

    header ul {
        margin: 0;
        padding: 0;
        list-style: none;
        overflow: hidden;
        background-color: #fff;
    }

    header li a {
        display: block;
        padding: 20px 20px;
        border-right: 1px solid #f4f4f4;
        text-decoration: none;
    }

    header li a:hover,
    header .menu-btn:hover {
        background-color: #f4f4f4;
    }

    header .logo {
        display: block;
        float: left;
        font-size: 2em;
        padding: 10px 20px;
        text-decoration: none;
    }

    /* menu */
    header .menu {
        clear: both;
        max-height: 0;
        transition: max-height .2s ease-out;
    }

    /* menu icon */
    header .menu-icon {
        cursor: pointer;
        display: inline-block;
        float: right;
        padding: 28px 20px;
        position: relative;
        user-select: none;
    }

    header .menu-icon .navicon {
        background: #333;
        display: block;
        height: 2px;
        position: relative;
        transition: background .2s ease-out;
        width: 18px;
    }

    header .menu-icon .navicon:before,
    header .menu-icon .navicon:after {
        background: #333;
        content: '';
        display: block;
        height: 100%;
        position: absolute;
        transition: all .2s ease-out;
        width: 100%;
    }

    header .menu-icon .navicon:before {
        top: 5px;
    }

    header .menu-icon .navicon:after {
        top: -5px;
    }

    /* menu btn */
    header .menu-btn {
        display: none;
    }

    header .menu-btn:checked ~ .menu {
        max-height: 240px;
        overflow: scroll;
    }

    header .menu-btn:checked ~ .menu-icon .navicon {
        background: transparent;
    }

    header .menu-btn:checked ~ .menu-icon .navicon:before {
        transform: rotate(-45deg);
    }

    header .menu-btn:checked ~ .menu-icon .navicon:after {
        transform: rotate(45deg);
    }

    header .menu-btn:checked ~ .menu-icon:not(.steps) .navicon:before,
    header .menu-btn:checked ~ .menu-icon:not(.steps) .navicon:after {
        top: 0;
    }

    main {
        padding-top: 50px;
        padding-bottom: 10px;
    }

    @media (min-width: 1200px) {
        header li {
            float: left;
        }
        header li a {
            padding: 20px 10px;
        }
        header .menu {
            clear: none;
            float: right;
            max-height: none;
        }
        header .menu-icon {
            display: none;
        }
    }
</style>
<link rel="stylesheet" href="<?= base_url('assets/css/admin.css') ?>"/>
<?= $this->endSection() ?>

<?= $this->section('header') ?>
<a href="" class="logo"><img src="<?= base_url('/assets/imgs/admin/admin-logo.svg')?>" alt=""></a>
<input class="menu-btn" type="checkbox" id="menu-btn" />
<label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
<ul class="menu">
    <li><a href="<?= site_url('admin/banners') ?>">Banners</a></li>
    <li><a href="<?= site_url('admin/paginas') ?>">Páginas</a></li>
    <li><a href="<?= site_url('admin/linhas') ?>">Linhas</a></li>
    <li><a href="<?= site_url('admin/empreendimentos') ?>">Empreendimentos</a></li>
    <li><a href="<?= site_url('admin/caracteristicas') ?>">Características</a></li>
    <li><a href="<?= site_url('admin/contatos') ?>">Contatos</a></li>
    <li><a href="<?= site_url('admin/admins') ?>">Admins</a></li>
    <li><a href="<?= site_url('admin/configuracoes') ?>">Configurações</a></li>
    <li><a href="<?= site_url('admin/index/logout') ?>">Logout</a></li>
</ul>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<?php if (isset($output)):?>
    <?= $output; ?>
<?php endif;?>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<?php if (isset($js_files) && is_array($js_files)):?>
    <?php foreach($js_files as $file): ?>
        <script src="<?= $file; ?>"></script>
    <?php endforeach; ?>
<?php endif;?>
<?= $this->endSection() ?>
