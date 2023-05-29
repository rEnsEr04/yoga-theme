<?php

// Template Name: Blog

get_header();
global $wp_query;

?>

    <article id="blogPage">
        <div class="blogArea">
            <?php
                $args = array(
                    'post_type' => 'blogposts',
                    'posts_per_page' => 4,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );
                $Blog = new WP_Query($args);
                while($Blog -> have_posts()) : $Blog -> the_post();

            ?>
            <div class="blogPost">
                    <div class="blog_title_date">
                        <h1><?php the_title(); ?></h1>
                        <h4><?php the_field('blogDate'); ?></h4>
                    </div>
                    <div class="postImg">
                        <?php 
                        $image = get_field('blogImg');
                        if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="blog_text">
                        <p><?php the_field('blogText'); ?></p>
                    </div>
                    <a href="<?php the_permalink(); ?>">
                        <button  id="post_btn" class="button_info">Read more</button>
                    </a>
            </div>
            <?php endwhile;wp_reset_postdata(); ?>
            <?php //wp_reset_postdata(); ?>
        </div>

        <!-- <button id="load-more" class="btn_load_more">Load More</button> -->
    </article>

<?php
get_footer();