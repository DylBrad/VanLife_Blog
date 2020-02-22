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

    <!-- This is the sidebar for vanLife posts. Main sidebar is for vanBuild posts -->
    <aside class="sidebar">
        <?php
            if( is_active_sidebar('sidebar') ):
            dynamic_sidebar('sidebar-van-life');
            endif;
        ?>
    </aside>
    
</main>

<?php get_footer(); ?>