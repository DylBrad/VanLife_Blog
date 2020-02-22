<?php get_header('front'); ?>
<?php while(have_posts()): the_post(); ?>

    <div class="welcome-container">
        <h2 class="text-primary text-center welcome-header">
            <?php the_field('welcome_heading'); ?>
        </h2>

        <div class="container section welcome-section">
            <?php 
                $image = get_field('welcome_image');
                if( !empty($image) ): ?>
                    <img class="world-map fade-in" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php endif; 
            ?>

            <?php 
                $image = get_field('welcome_profile_1');
                if( !empty($image) ): ?>
                    <img class="personal-icon profile-1 fade-in" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php endif; 
            ?> 

            <?php 
                $image = get_field('welcome_profile_2');
                if( !empty($image) ): ?>
                    <img class="personal-icon profile-2 fade-in" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php endif; 
            ?>
    
            <p class="welcome-text"><?php the_field('welcome_text'); ?></p>
        </div>
    </div>

    <section class="homepage-van-build">
        <div class="container section">
            <h2 class="text-primary text-center">Van Build Posts</h2>

            <?php van_build_front_page_list( 4 ); ?>

            <div class="button-container">
                <a href="<?php echo get_permalink(get_page_by_title('Van Build')); ?>" class="button">
                    Read More
                </a>
            </div>
        </div>
    </section>

    <?php 
		$image = get_field('background_image');
		if( !empty($image) ): ?>

    <section class="homepage-van-life" style="background-image: url(<?php echo $image['url']; ?>);">
        <div class="container section";>
            <h2 class="text-primary text-center">Our Van Life</h2>

            <?php van_life_front_page_list( 4 ); ?>

            <div class="button-container">
                <a href="<?php echo get_permalink(get_page_by_title('Van Life')); ?>" class="button">
                    Read More
                </a>
            </div>
        </div>
    </section>

    <?php endif; ?>



<?php endwhile; ?>
<?php get_footer(); ?>