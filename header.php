
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('', true, 'right');?><?php bloginfo('name');?></title>
    <?php wp_head(); ?>
</head>
<body>
<main>
    <header class="site-head color-bg-prime-color">
        <div class="container">

                 <div class="my-row">
                     <div class="my-logo ">
                <a href="/">
                    <?php
                    if ( function_exists( 'the_custom_logo' ) )
                        the_custom_logo();?>
                </a>
            </div>
               <?php wp_nav_menu(
                   array(
                       'theme_location' => 'header-menu',
                       'menu' => 'header-menu',
                       'menu_class' => ' nav-info ',
                       'container' => 'ul',
                       'container_class' => 'nav-info',
                   ));?>
                 </div>
        </div>
    </header>