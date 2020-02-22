<?php

// Query van build posts for index page
function van_build_post_list( $number = -1 ) { ?>
    <ul class="van-build-list post-index-list">
        <?php
            $args = array (
                'post_type' => 'van_build_posts',
                // Use this to call a number of posts on any page. -1 = all posts
                'posts_per_page' => $number
            );
            // Use WP_Query to append the results into $vanBuildPosts
            $vanBuildPosts = new WP_Query($args);

            while($vanBuildPosts->have_posts()): $vanBuildPosts->the_post();
        ?>
    
        <li class="van-build-post card gradient">
            <?php the_post_thumbnail('index-size'); ?>

            <div class="card-content">
                <a href="<?php the_permalink(); ?>">
                    <h3><?php the_title(); ?></h3>
                    <p><?php echo get_the_author() . ", "; echo get_the_date(); ?></p>
                </a>
            </div>

        </li>

        <?php 
            // Ends WP_Query
            endwhile; wp_reset_postdata(); 
        ?>
    </ul>
<?php }


// Query van build posts for FRONT page
function van_build_front_page_list( $number = -1 ) { ?>
    <ul class="van-build-list post-index-list">
        <?php
            $args = array (
                'post_type' => 'van_build_posts',
                // Use this to call a number of posts on any page. -1 = all posts
                'posts_per_page' => $number
            );
            // Use WP_Query to append the results into $vanBuildPosts
            $vanBuildPosts = new WP_Query($args);

            while($vanBuildPosts->have_posts()): $vanBuildPosts->the_post();
        ?>
    
        <li class="van-build-post front-build-card front-page-gradient">
            <?php the_post_thumbnail('rectangle'); ?>

            <div class="front-build-card-content">
                <a href="<?php the_permalink(); ?>">
                    <h3><?php the_title(); ?></h3>
                    <p><?php echo get_the_author() . ", "; echo get_the_date(); ?></p>
                </a>
            </div>

        </li>

        <?php 
            // Ends WP_Query
            endwhile; wp_reset_postdata(); 
        ?>
    </ul>
<?php }


// Query van life blog posts for index page
function van_life_post_list() { ?>
    <ul class="van-blog-list post-index-list">
        <?php
            $args = array (
                'post_type' => 'van_life_posts',
            );
            // Use WP_Query to append the results into $vanBuildPosts
            $vanLifePosts = new WP_Query($args);

            while($vanLifePosts->have_posts()): $vanLifePosts->the_post();
        ?>
    
        <li class="van-build-post card gradient">
            <?php the_post_thumbnail('index-size'); ?>

            <div class="card-content">
                <a href="<?php the_permalink(); ?>">
                    <h3><?php the_title(); ?></h3>
                    <p><?php echo get_the_author() . ", "; echo get_the_date(); ?></p>
                </a>
            </div>

        </li>

        <?php 
            // Ends WP_Query
            endwhile; wp_reset_postdata(); 
        ?>
    </ul>
<?php }

// Query van life blog posts for FRONT page
function van_life_front_page_list() { ?>
    <ul class="van-blog-list van-life-post-index-list">
        <?php
            $args = array (
                'post_type' => 'van_life_posts',
            );
            // Use WP_Query to append the results into $vanBuildPosts
            $vanLifePosts = new WP_Query($args);

            while($vanLifePosts->have_posts()): $vanLifePosts->the_post();
        ?>
    
        <li class="van-build-post">
            <?php the_post_thumbnail('rectangle'); ?>

            <div class="card-content">
                <a href="<?php the_permalink(); ?>">
                    <h3><?php the_title(); ?></h3>
                    <p><?php echo get_the_author() . ", "; echo get_the_date(); ?></p>
                </a>
            </div>

        </li>

        <?php 
            // Ends WP_Query
            endwhile; wp_reset_postdata(); 
        ?>
    </ul>
<?php }