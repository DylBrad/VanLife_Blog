<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Van Life</title>

    <?php wp_head(); ?>

    
</head>
<body <?php body_class(); ?> >

<header class="site-header">

    <?php 
    $image = get_field('hero_image');

    if( !empty($image) ): ?>
        <img class="parallax" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
    <?php endif; 
    ?>


    <div class="container header-grid">
        <div class="navigation-bar">

            <div class="logo">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri() . "/images/vanLogo.png"; ?>" alt="site logo"/>
                </a>
            </div><!-- logo -->
            
            <?php
            $args = array (
                'theme_location' => 'van-blog-menus',
                'container' => 'nav',
                'container_class' => 'main-menu'
            );

            wp_nav_menu($args);
            ?>

            <div class="menu-btn">
                <div class="menu-btn__burger"></div>
            </div>
        </div> <!-- navigation-bar -->

        <div class="tagline text-center">
            <h1><?php the_field('hero_tagline'); ?></h1>
            <p><?php the_field('hero_content'); ?></p>
        </div>

        <script>
            window.addEventListener('scroll', function () {
                const parallax = document.querySelector('.parallax');
                let scrollPosition = window.pageYOffset;

                parallax.style.transform = 'translateY(' + scrollPosition * .5 + 'px)';
            });
        </script>
    </div>
</header>

