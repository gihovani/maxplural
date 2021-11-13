<!DOCTYPE html>
<html lang="en">
<head>
    <title>Crud</title>
    <meta charset="utf-8" />
    <?php if (isset($css_files) && is_array($css_files)):?>
        <?php foreach($css_files as $file): ?>
            <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
        <?php endforeach; ?>
    <?php endif;?>
    <style>
        body {
            font-family: Arial, serif;
            font-size: 14px;
        }
    </style>
</head>
<body>
<!-- Beginning header -->
<div>
    <a href='<?php echo site_url('crud/sessions')?>'>Customers</a>
</div>
<!-- End of header-->

<!-- Beginning of main content -->
<div style='height:20px;'></div>
<div style='padding: 10px;'>
    <?php if (isset($output)):?>
        <?= $output; ?>
    <?php endif;?>
</div>
<!-- End of main content -->

<!-- Beginning footer -->
<?php if (isset($js_files) && is_array($js_files)):?>
    <?php foreach($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
<?php endif;?>
<!-- End of Footer -->
</body>
</html>
