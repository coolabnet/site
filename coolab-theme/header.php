<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700|Montserrat+Alternates:400,600,800" rel="stylesheet">
    <title>Coolab</title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="header-index">
        <nav class="navbar navbar-expand-lg navbar-dark align-content-between d-flex flex-wrap">
            <div class="header-nav container d-flex ">
                <a class="navbar-brand col-2 " href="<?php echo home_url();?>">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/coolab_logo_branco.png" alt="" class="img-logo img-responsive">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <?php
                   wp_nav_menu(array(
<<<<<<< HEAD
                     'menu'=>'principal-home',
=======
                     'menu'=>'menu_coolab',
>>>>>>> 8aea5fe7b5d23c4c995e525cb71abf1ca4252f56
                     'menu_class'=>'navbar-nav mr-auto',
                     'theme_location'=>'menu_coolab',
                     'container'=>'div',
                     'container_class'=>'collapse navbar-collapse',
<<<<<<< HEAD
                     'container_id'=>'navbarSupportedContent'
                     ));
                 ?>


=======
                     'container_id'=>'navbarSupportedContent',
                     ));
                 ?>

              
>>>>>>> 8aea5fe7b5d23c4c995e525cb71abf1ca4252f56
            </div>

            <div class="container">
                <div class="row header-text-row">
                    <div class="header-text align-items-start col-lg-6 col-md-9">
                        <h1 class="header-title">A Coolab agrega diversas pessoas e projetos de telecomunicação
                            comunitária
                            fomentando infraestruturas autônomas,
                            através da capacitação técnica e ativação</h1>
                        <button type="submit" class="btn btn-rosa text-light"><a href="comoparticipar.html" class="text-light">Como
                            participar</a></button>
                    </div>
                </div>
            </div>
        </nav>
    </header>
