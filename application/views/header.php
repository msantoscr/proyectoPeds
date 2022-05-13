<!DOCTYPE html>
<html lang="es-MX">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Programa de Experiencias de Aprendizaje Híbrido | <?= $title; ?></title>
        <link rel="shortcut icon" href="<?=base_url('favicon.ico')?>" type="image/x-icon">
        
        <link rel="stylesheet" href="<?= base_url('assets/css/fontawesome.min.css') ?>" />
        <link rel="stylesheet" href="<?= base_url('assets/css/elegant-icons.min.css') ?>" />
        <link rel="stylesheet" href="<?= base_url('assets/css/animate.min.css') ?>" />
        <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>" />
        <link rel="stylesheet" href="<?= base_url('assets/css/swiper-bundle.min.css') ?>" />
        <!--<link rel="stylesheet" href="<?= base_url('assets/css/jquery.fancybox.min.css') ?>" />-->
        <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />
        
        <link rel="stylesheet" type="text/css" href="<?= base_url('slick/slick.css') ?>" />
        <link rel="stylesheet" type="text/css" href="<?= base_url('slick/slick-theme.css') ?>" />
        <?php if (isset($linkDatatable)){ echo $linkDatatable; }  ?>
        <!-- jquery CDN -->
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="<?= base_url('assets/css/dlab.css') ?>" />
        <style>
            @media screen and (min-width: 834px) {
                #logosM {
                    width: 70%;
                }
            }

            @media screen and (min-width: 325px){
            }

            @media (min-width: 220px) and (max-width: 900px) {
                #btnBanner {
                    padding-bottom: 6rem!important;
                }
                .ctaR{
                    text-align:center;
                    }
                .banner-area{
                    padding-top: 8rem !important;
                }
                .navMenu{
                    margin-left: 0px !important;
                }
                .listMenu{
                    display: contents !important;
                }

                .imglogos{
                    width: 6rem !important;
                }
                .submenuEspecialidades{
                    position: absolute !important;
                    margin-left: -10rem !important;
                }
                .divGrupos{
                    padding-left: 0px !important;
                }
            }

            .imgAzul{
                background-image: url(<?= base_url('assets/images/backAzul2.png') ?>);
                background-size: cover;
                background-repeat: no-repeat;
            }
            .iconosTarjeta{
                width: 65px;
            }
            .descripcionTarjeta{
                text-align: center;
                font-family: 'ProximaNova-Bold';
            }
            .dropdown-item.active, .dropdown-item:active{
                color: #00215B;
                text-decoration: none;
                background-color: rgba(37, 199, 217, 0.1);
                font-weight: bold;
                font-family: 'ProximaNova-Bold';
            }
            .dropdown-item:focus, .dropdown-item:hover{
                color: #00215B;
                background-color: rgba(37, 199, 217, 0.1);
                font-family: 'ProximaNova-Bold';
                font-size: 15px;
            }
            .dropdown-item{
                color: #00215B;
                font-size: 15px;
            }
            .menu > .nav-item.active .nav-link{
                color: #00215B;
                font-family: 'ProximaNova-Bold';
            }
            /* .dropstart .dropdown-menu[data-bs-popper]{
                margin-top: 70px;
                margin-right: 0.125rem;
            }

            .dropstart .dropdown-menu{
                top: 0;
                right: 0%;
                left: auto;
            } */
        </style>
    </head>
    <body>
    <header class="header-area">
            <nav class="navbar navbar-expand-lg menu_one sticky-nav">
                <div class="container-fluid">
                    <div class="col-md-6 col-sm-3">
                      <!--  <a class="navbar-brand logoEmtech" href="<?= base_url('Home') ?>" style="padding-top: 25px;">
                            <img class="imglogos" src="<?= base_url('assets/images/logoEmtech.svg') ?>" alt="logo" style="width: 8rem;">
                        </a> -->
                        <a class="navbar-brand logoFimpes" href="<?= base_url('Home') ?>" style="padding-top: 25px;">
                            <img class="imglogos" src="<?= base_url('assets/images/logoFimpes.svg') ?>" alt="logo" style="width: 8rem;">
                        </a>
                      <!--  <a class="navbar-brand logoSantander" href="<?= base_url('Home') ?>" style="padding-top: 25px;">
                            <img class="imglogos" src="<?= base_url('assets/images/logoSantander.svg') ?>" alt="logo" style="width: 8rem;">
                        </a> -->
                    </div>
                    <div class="col-md-6 col-sm-9">
                        <button class="col navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="menu_toggle">
                                <span class="hamburger">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                                <span class="hamburger-cross">
                                    <span></span>
                                    <span></span>
                                </span>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse navMenu" id="navbarText" style="float:right;">
                            <ul class="show-menu navbar-nav listMenu menu ml-auto" style="display: flex;">
                                <li class="nav-item <?= $title == "Home" ? "active" : "" ?>">
                                    <a href="<?= base_url('Home') ?>" class="nav-link dropdown-toggle">Home</a>
                                </li>
                                <li class="nav-item <?= $title != "Home" && $title != "Historial" ? "active" : "" ?> dropdown">
                                <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Especialidades
                                </a>
                                <ul class="dropdown-menu submenuEspecialidades" aria-labelledby="navbarDropdown" style="margin-left: -6rem;">
                                    <li><a class="dropdown-item <?= $title == "Creación de experiencias" ? "active" : "" ?>" href="<?= base_url('bootcamp1') ?>">Creación de Experiencias<br>de Aprendizaje Híbrido</a></li>
                                    <li><a class="dropdown-item <?= $title == "Arquitectura de experiencias" ? "active" : "" ?>" href="<?= base_url('bootcamp2') ?>">Arquitectura de Experiencias<br>de Aprendizaje Híbrido</a></li>
                                    <li><a class="dropdown-item <?= $title == "Desarrollo de contenidos" ? "active" : "" ?>" href="<?= base_url('bootcamp3') ?>">Desarrollo de Contenido para<br>Experiencias de Aprendizaje Híbrido</a></li>
                                    <li><a class="dropdown-item <?= $title == "Proyectos" ? "active" : "" ?>" href="<?= base_url('bootcamp4') ?>">Producción de Experiencias<br>de Aprendizaje Híbrido</a></li>
                                    <li><a class="dropdown-item <?= $title == "Impartición" ? "active" : "" ?>" href="<?= base_url('bootcamp5') ?>">Impartición de programas<br>Híbridos</a></li>
                                </ul>
                            </li>                       
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
    
