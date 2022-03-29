<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>QR Code SMPN 1 Kandat</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/images/favicon.png">
    <?php if ($this->uri->segment(1)=="dashboard"): ?>
        <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/owl-carousel/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/owl-carousel/css/owl.theme.default.min.css">
        <link href="<?= base_url() ?>assets/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <?php endif ?>
    <link href="<?= base_url() ?>assets/fontawesome/css/all.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->
