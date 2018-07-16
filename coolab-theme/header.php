<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a responsive product landing page.">
    <title>Coolab</title>

    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">

    <!--[if lte IE 8]>
        <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-old-ie-min.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css">
    <!--<![endif]-->

    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

    <!--[if lte IE 8]>
            <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/layouts/marketing-old-ie.css">
        <![endif]-->
    <!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/layouts/marketing.css">
    <!--<![endif]-->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/folha.css">
</head>

<body>
    <div class="header">
      <?php if(is_page()) : ?>
        <div class="custom-wrapper pure-g menu-blue" id="menu">
      <?php else: ?> 
        <div class="custom-wrapper pure-g" id="menu"> 
      <?php endif;?>
           <div class="pure-u-1 pure-u-md-1-5">
               <div class="pure-menu" >
                   <a href="<?php echo home_url();?>" style="padding: 0;" class="pure-menu-heading custom-brand"><img src="<?php echo get_stylesheet_directory_uri();?>/images/icons/logo.png"></a>
                   <a href="#" class="custom-toggle" id="toggle"><s class="bar"></s><s class="bar"></s></a>
               </div>
           </div>
           <div class="pure-u-1 pure-u-md-4-5">
                   <?php
                      wp_nav_menu(array(
                        'menu'=>'menu_coolab',
                        'menu_class'=>'pure-menu-list', 
                        'theme_location'=>'menu_coolab',
                        'container'=>'div',
                        'container_class'=>'pure-menu pure-menu-horizontal custom-can-transform'
                        ));
                    ?>
               <!-- </div> -->
           </div>
         </div>
    </div>