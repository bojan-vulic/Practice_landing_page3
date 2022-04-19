<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Ivan Bulatovic">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <!-- Font awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  
    <?php wp_head(); ?>
</head>

<body<?php body_class(); ?>>
    <!-- nav -->
    <nav>
        <section class="container">
            <!-- custom logo -->
             <?php
            if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
            }         
            ?>
             <!-- custom navigation -->
            <?php 
                $args = array(
                'menu_class' => 'nav desktop-menu',
                'theme_location' => 'primary'
                );
                ?>
            <?php wp_nav_menu(); ?>
             <!-- custom mobile navigation -->
            <?php 
              if ( function_exists('has_nav_menu') && has_nav_menu('mobile-menu') ) {
                    wp_nav_menu( array(
                    'depth' => 6,
                    'sort_column' => 'menu_order',
                    'container' => 'ul',
                    'menu_id' => 'main-nav',
                    'menu_class' => 'nav mobile-menu',
                    'theme_location' => 'mobile-menu'
                    ) );
                    } else {
                    echo "<ul class='nav mobile-menu'>
                        <font style='color:red'>Mobile Menu has not been set</font>
                    </ul>";
                    }
                ?>

            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </section>
    </nav>
