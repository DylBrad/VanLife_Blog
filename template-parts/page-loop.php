<?php while(have_posts() ): the_post(); ?>
    
    <h1 class="text-center text-primary"><?php the_title(); ?></h1>

    <div class="text-center">
        <?php the_content(); ?>
    </div>

<?php endwhile; ?>