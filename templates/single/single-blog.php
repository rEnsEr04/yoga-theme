<?php

/*   
    Template Name: Blog Post Page
*/
get_header();
?>

<article id="blogPage">
    <div class="blogArea">
        <div id="newWdth" class="blogPost">
            <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
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
                            <div class="blog_text_all">
                                <p><?php the_field('blogText'); ?></p>
                            </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
    <div class="blogPostNav">
            <?php
            while ( have_posts() ) :
                the_post();

                //get_template_part( 'template-parts/content', get_post_type() ); // article

                the_post_navigation(
                    array(
                        'prev_text' => '<button class="button_info">' . __( 'Prev chapter' ) . '</button>',
                        'next_text' => '<button class="button_info">' . __( 'Next chapter' ) . '</button>', 
                        //'in_same_term'				 => true,
			            //'taxonomy'					 => __( 'post_tag' ),
			            //'screen_reader_text' => __( 'Continue Reading' ),
                    )
                ); // navigation
                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
            endwhile; // End of the loop.
            ?> 
    </div>
</article>

<?php
get_footer();