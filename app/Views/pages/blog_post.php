<?= $this->extend('layout/site') ?>

<?= $this->section('title') ?>
    Post
<?= $this->endSection() ?>

<?= $this->section('styles')?>
    <link rel="stylesheet" href="<?= base_url('assets/css/blog_post.min.css')?>" />
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<?= $this->endSection() ?>

<?= $this->section('scripts')?>
    <script type="text/javascript" src="<?= base_url('assets/js/blog_post.min.js')?>" ></script>
<?= $this->endSection() ?>