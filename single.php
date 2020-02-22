<?php get_header(); ?>

<div class="hero">
<?php
        if( has_post_thumbnail() ):
            the_post_thumbnail('square', array('class' => 'square-post-img'));
        // else:
        //     echo "<p>Image Not Found!!!!!</p>";
        endif;
    ?>
</div>

<main class="container page section no-sidebars">
    <?php get_template_part('template-parts/page', 'loop'); ?>
</main>

<?php get_footer(); ?>
