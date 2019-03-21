<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title(); ?></title>
    <link rel="icon" href="assets/img/favicon.png" type="image/png" />
    <link rel="shortcut icon" href="assets/img/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php wp_head(); ?>

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
</head>

<body>
    <header class="header" id="myTopnav">
        <a href="<?php echo site_url(); ?>" class="logo"><?php 
                //get_field('field_name'); - reiksme grazina
                //the_field('field_name'); - reiksme atspausdina
                if(get_field('logo_type', 'option')):?>
                    <h2><?php the_field('logo_text', 'option'); ?></h2>
                <?php
                else:
                    //img isvedimas
                    $image = get_field('logo_image', 'option');
                    //dump($image);
                    echo '<img src="'.$image['sizes']['logo'].'" alt="'.get_bloginfo('name').'">';
                endif; ?></a>
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <?php 
                        $args = [
                            'menu_class' => 'menu',
                            'container' => false,
                            'theme_location' => 'primary-navigation',
                        ];
                            wp_nav_menu($args);
                            ?>

    </header>