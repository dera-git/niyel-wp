<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory'); ?>/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_directory'); ?>/assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php bloginfo('template_directory'); ?>/assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="kl-bg-body kl-bg-gradient">
        <div class="kl-wrapper-content-body kl-bg-white">
            <!-- header -->
            <header class="kl-header sticky-top">
                <nav class="navbar navbar-expand-lg  kl-navbar">
                    <div class="container kl-container-1100">
                        <a class="navbar-brand kl-navbar-brand" href="<?php echo get_home_url(); ?>"> 
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo/logo-niyel-color.svg" class="img-fluid" alt="">
                        </a>
                        <div class="kl-toggle-menu d-flex align-items-center">
                            <button class="navbar-toggler kl-btn-toogle-navbar" type="button" data-bs-toggle="collapse" data-bs-target="#id-navbar-collapse" aria-controls="#id-navbar-collapse"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                <svg class="kl-icon" xmlns="http://www.w3.org/2000/svg" width="34.804" height="27.596" viewBox="0 0 34.804 27.596">
                                    <g id="burger-menu-icon" transform="translate(-7.448 -3.656)">
                                        <path id="Tracé_4" data-name="Tracé 4" d="M40,29c-7.022-1.8-14.231-.6-21.274-.714C16.1,28.24,12.6,29.85,10,28.208" fill="none" stroke="#f9b500" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="1.5" stroke-width="3.7"/>
                                        <path id="Tracé_5" data-name="Tracé 5" d="M35,18c-4.681-1.8-9.487-.6-14.183-.714-1.754-.045-4.086,1.564-5.817-.078" fill="none" stroke="#f9b500" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="1.5" stroke-width="3.7"/>
                                        <path id="Tracé_6" data-name="Tracé 6" d="M40,7c-7.022-1.8-14.231-.6-21.274-.714C16.1,6.24,12.6,7.85,10,6.208" fill="none" stroke="#f9b500" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="1.5" stroke-width="3.7"/>
                                    </g>
                                </svg>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse kl-navbar-collapse justify-content-between" id="id-navbar-collapse">
                            <div class="d-lg-none">
                                <div class="kl-title-welcome kl-color-yellow-secondary kl-mb-25">
                                    <h2>Bonjour !</h2>
                                </div>
                            </div>
                            <?php 
                            wp_nav_menu(
                                array(
                                    'menu_class'     => 'navbar-nav kl-navbar-nav mx-auto align-items-lg-center',
                                    'menu_id'        => '',
                                    'container'      => '',
                                    'theme_location' => 'principal',
                                    'walker'         => new bootstrap_5_wp_nav_menu_walker()
                                )
                            );
                            ?>
                            <!-- <ul class="navbar-nav kl-navbar-nav mx-auto align-items-lg-center">
                                <li class="nav-item">
                                    <div class="dropdown kl-dropdown-default">
                                        <button class="btn kl-btn-dropdown-default btn-secondary dropdown-toggle bg-transparent" type="button" id="id-dropdown-who-are" data-bs-toggle="dropdown" aria-expanded="false">
                                            who we are
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="id-dropdown-who-are">
                                            <li><a class="dropdown-item" href="#">niyel</a></li>
                                            <li><a class="dropdown-item" href="#">the team</a></li>
                                            <li><a class="dropdown-item" href="#">our creative & multimedia studio</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <div class="dropdown kl-dropdown-default">
                                        <button class="btn kl-btn-dropdown-default btn-secondary dropdown-toggle bg-transparent" type="button" id="id-dropdown-expertise" data-bs-toggle="dropdown" aria-expanded="false">
                                            our expertise
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="id-dropdown-expertise">
                                            <li><a class="dropdown-item" href="#">niyel</a></li>
                                            <li><a class="dropdown-item" href="#">the team</a></li>
                                            <li><a class="dropdown-item" href="#">our creative & <br> multimedia studio</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <div class="dropdown kl-dropdown-default">
                                        <button class="btn kl-btn-dropdown-default btn-secondary dropdown-toggle bg-transparent" type="button" id="id-dropdown-impacts" data-bs-toggle="dropdown" aria-expanded="false">
                                            impacts
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="id-dropdown-impacts">
                                            <li><a class="dropdown-item" href="#">niyel</a></li>
                                            <li><a class="dropdown-item" href="#">the team</a></li>
                                            <li><a class="dropdown-item" href="#">our creative & <br> multimedia studio</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <div class="dropdown kl-dropdown-default">
                                        <button class="btn active kl-btn-dropdown-default btn-secondary dropdown-toggle bg-transparent" type="button" id="id-dropdown-ressource" data-bs-toggle="dropdown" aria-expanded="false">
                                            our ressources
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="id-dropdown-ressource">
                                            <li><a class="dropdown-item" href="#">niyel</a></li>
                                            <li><a class="dropdown-item" href="#">the team</a></li>
                                            <li><a class="dropdown-item" href="#">our creative & <br> multimedia studio</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"  href="#">Joins us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active"  href="#">contact</a>
                                </li>
                                <div class="mt-md-0 mt-2 kl-dropdown-language-prt d-lg-none">
                                    <div class="kl-dropdown-language dropdown ms-xl-5 ms-md-2 d-inline-block">
                                        <button class="btn btn-outline-light dropdown-toggle kl-switcher-language" type="button" id="id-switch-language" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span>Fr</span>
                                        </button>
                                        <ul class="dropdown-menu  kl-dropdown-menu bg-transparent" aria-labelledby="id-switch-language">
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <span>En</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </ul> -->
                            <div class="mt-md-0 mt-2 kl-dropdown-language-prt d-lg-block d-none">
                                <div class="kl-dropdown-language dropdown ms-xl-5 ms-md-2 d-inline-block">
                                    <button class="btn btn-outline-light dropdown-toggle kl-switcher-language" type="button" id="id-switch-language" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="kl-desktop"><img src="<?php bloginfo('template_directory'); ?>/assets/images/logo/flag-united.svg" class="img-fluid" alt=""></span>
                                    </button>
                                    <ul class="dropdown-menu  kl-dropdown-menu bg-transparent" aria-labelledby="id-switch-language">
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <span><img src="<?php bloginfo('template_directory'); ?>/assets/images/logo/flag-france.svg" class="img-fluid kl-img-lang" alt=""></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
