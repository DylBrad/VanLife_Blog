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

<main class="container page section with-sidebar">

    <div class="page-content">
        <?php get_template_part('template-parts/page', 'loop'); ?>
    </div>

    <?php get_sidebar(); ?> 
    
</main>

<?php get_footer(); ?>