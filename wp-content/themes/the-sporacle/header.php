<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Thesporacle.com - HOME</title>
    <link rel="shortcut icon" href="assets/images/thesporacle-favicon.webp" type="image/x-icon">
    <link rel="icon" href="<?php echo theme_path; ?>assets/images/thesporacle-favicon.webp" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo theme_path; ?>library/style/app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="<?php echo theme_path; ?>style.css">
    <?php wp_head(); ?>
</head>
<body>

<header class="nav_area" id="sticklynavbar">
    <div class="container">
        <ul class="logo-area">
            <li class="left order-1 order-md-1">
                <a class="navbar-brand" href="index.html">
                    <img src="<?php echo theme_path; ?>assets/images/thesporacle-logo.webp" alt="Logo" loading="lazy">
                </a>
            </li>
            <!-- <li class="right order-2 order-md-2">
                <form class="my-form">
                    <div class="form-group mb-0">
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="search here..">
                      <i class="fas fa-search"></i>
                    </div>
                </form>
            </li> -->
        </ul>
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light w-100">
                <button class="navbar-toggler order-3 order-lg-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- <button type="button" class="btn4" data-toggle="modal" data-target="#exampleModal">
                  newsletter
                </button>  -->
                <div class="collapse navbar-collapse order-4 order-lg-3" id="navbarSupportedContent">
                    <?php wp_nav_menu(array(
                            'theme_location'=>'header_menu',
                             'container'=>'ul',
                             'menu_class'=>'navbar-nav',
                             'depth'=>2,
                             'walker'=>new WP_Bootstrap_Navwalker())); ?>
                </div>

                <div class="nav-icons order-2 order-lg-4">
                    <ul>
                        <li><a href="#"><i class="fad fa-user"></i></a></li>
                        <li><a href="#"><i class="fad fa-cart-plus"></i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
