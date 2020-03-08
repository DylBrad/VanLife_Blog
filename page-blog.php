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

<main class="container page section van-build-index">
    <?php 
        // Call function from queries.php
        van_life_post_list(); 
    ?>

</main>

<?php get_footer(); ?>