<!-- Header Container
        ================================================== -->
<header id="header-container" class="header head-tr">
    <!-- Header -->
    <div id="header" class="head-tr bottom">
        <div class="container container-header">
            <!-- Left Side Content -->
            <div class="left-side">
                <!-- Logo -->
                <div id="logo">
                    <a href="<?= base_url() ?>" class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <img src="<?= base_url() ?>public/assets/images/logo-papalogeur.png"
                                data-sticky-logo="<?= base_url() ?>public/assets/images/logo-papalogeur.png"
                                alt="Logo Papalogeur">
                        </div>
                        <div class="logo-text flex-grow-1 ml-3">
                            <span class="logo-title">Papalogeur</span><br>
                            <span class="logo-subtitle">Votre partenaire immobilier</span>
                        </div>
                    </a>
                </div>
                <!-- Mobile Navigation -->
                <div class="mmenu-trigger">
                    <button class="hamburger hamburger--collapse" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
                <!-- Main Navigation -->
                <nav id="navigation" class="style-1 head-tr">
                    <ul id="responsive">
                        <li><a href="#">Acceuil</a></li>
                        <li><a href="#">A vendre</a></li>
                        <li><a href="#">Location</a></li>
                        <li><a href="#">Sociétés immobilières</a>
                            <ul>
                                <li><a href="#">Agences immobilières</a></li>
                                <li><a href="#">Promoteurs immobiliers</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Faire une demande</a></li>

                        <li><a href="<?= base_url() ?>contact">Contact</a></li>
                        <li class="d-none d-xl-none d-block d-lg-block"><a href="login.html">Login</a></li>
                        <li class="d-none d-xl-none d-block d-lg-block"><a href="register.html">Register</a>
                        </li>
                        <li class="d-none d-xl-none d-block d-lg-block mt-5 pb-4 ml-5 border-bottom-0"><a
                                href="add-property.html" class="button border btn-lg btn-block text-center">Add
                                Listing<i class="fas fa-laptop-house ml-2"></i></a></li>
                    </ul>
                </nav>
                <!-- Main Navigation / End -->
            </div>
            <!-- Left Side Content / End -->



            <div class="right-side d-none d-none d-lg-none d-xl-flex sign ml-0">
                <!-- Header Widget -->
                <div class="header-widget sign-in">
                    <div class="show-reg-form modal-open"><a href="#">Se connecter</a></div>
                </div>
                <!-- Header Widget / End -->
            </div>
            <!-- Right Side Content / End -->

            <!-- lang-wrap-->
            <div class="header-user-menu user-menu add d-none d-lg-none d-xl-flex">
                <div class="lang-wrap">
                    <div class="show-lang"><span><i class="fas fa-globe-americas"></i><strong>ENG</strong></span><i
                            class="fa fa-caret-down arrlan"></i></div>
                    <ul class="lang-tooltip lang-action no-list-style">
                        <li><a href="#" class="current-lan" data-lantext="En">English</a></li>
                        <li><a href="#" data-lantext="Fr">Francais</a></li>
                        <li><a href="#" data-lantext="Es">Espanol</a></li>
                        <li><a href="#" data-lantext="De">Deutsch</a></li>
                    </ul>
                </div>
            </div>
            <!-- lang-wrap end-->

        </div>
    </div>
    <!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->