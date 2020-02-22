<?php get_header(); ?>

<div class="hero">
<?php
        if( has_post_thumbnail() ):
            the_post_thumbnail('rectangle', array('class' => 'featured-image'));
        // else:
        //     echo "<p>Image Not Found!!!!!</p>";
        endif;
    ?>
</div>

<main class="container page-content section no-sidebars">
    <?php get_template_part('template-parts/page', 'loop'); ?>
</main>

<?php get_footer(); ?>