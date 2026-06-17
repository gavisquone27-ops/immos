<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from code-theme.com/html/findhouses/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Jun 2026 22:21:43 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Register</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="<?= base_url() ?>public/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/assets/css/fontawesome-5-all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/assets/css/font-awesome.min.css">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>public/assets/css/animate.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/assets/css/menu.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/assets/css/styles.css">
    <link rel="stylesheet" id="color" href="<?= base_url() ?>public/assets/css/default.css">
</head>

<body class="inner-pages hd-white">
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
         <?= view('header') ?>

        <div class="clearfix"></div>
        <!-- Header Container / End -->

        <section class="headings">
            <div class="text-heading text-center">
                <div class="container">
                    <h1>Register</h1>
                    <h2><a href="index-2.html">Home </a> &nbsp;/&nbsp; Register</h2>
                </div>
            </div>
        </section>
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION 404 -->
        <div id="login">
            <div class="login">
                <form autocomplete="off">
                    <div class="form-group">
                        <label>Votre nom</label>
                        <input class="form-control" type="text">
                        <i class="ti-user"></i>
                    </div>
                    <div class="form-group">
                        <label>Votre prénoms</label>
                        <input class="form-control" type="text">
                        <i class="ti-user"></i>
                    </div>
                    <div class="form-group">
                        <label>Votre  e-mail</label>
                        <input class="form-control" type="email">
                        <i class="icon_mail_alt"></i>
                    </div>
                    <div class="form-group">
                        <label>Votre mot de passe</label>
                        <input class="form-control" type="password" id="password1">
                        <i class="icon_lock_alt"></i>
                    </div>
                    <div class="form-group">
                        <label>Confirmez votre mot de passe</label>
                        <input class="form-control" type="password" id="password2">
                        <i class="icon_lock_alt"></i>
                    </div>
                    <div id="pass-info" class="clearfix"></div>
                    <a href="#0" class="btn_1 rounded full-width add_top_30">S'inscrire!</a>
                    <div class="text-center add_top_10">Vous avez déjà un compte? <strong><a href="<?= base_url() ?>home/login">Se connecter</a></strong></div>
                </form>
            </div>
        </div>
        <!-- END SECTION 404 -->

        <!-- START FOOTER -->
         <?= view('footer') ?>


        <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
        <!-- END FOOTER -->

       

        <?php
             echo view('customjs');
        ?>

    </div>
    <!-- Wrapper / End -->
</body>


<!-- Mirrored from code-theme.com/html/findhouses/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Jun 2026 22:21:43 GMT -->
</html>
