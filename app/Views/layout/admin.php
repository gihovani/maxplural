<!doctype html>
<html lang="pt-BR" dir="ltr">
<head>
    <title><?= $this->renderSection('title') ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?= $this->renderSection('meta') ?>
    <?= $this->renderSection('styles') ?>
    <link rel="stylesheet" href="<?= base_url('assets/css/admin.css') ?>"/>
    <link rel="shortcut icon" type="image/png" href="<?= base_url('assets/img/favicon.png') ?>"/>
</head>
<body>
<!-- Beginning header -->
<header>
    <?= $this->renderSection('header') ?>
</header>
<!-- End of header-->

<!-- Beginning of main content -->
<main>
    <?= $this->renderSection('content') ?>
</main>
<!-- End of main content -->

<!-- Beginning footer -->
<footer>
    <?= $this->renderSection('footer') ?>
</footer>
<!-- End of Footer -->

<?= $this->renderSection('scripts') ?>
</body>
</html>
