<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package yoga_fitnes
 */

get_header();
?>
	<main id="primary" class="site-main">
		<div class="main">
            
            <div class="slider">
                <div class="owl-slider1">
                    <?php
                        if( have_rows('owl_slider_1') ) {
                            if( have_rows('owl_slider_1') ):
                            while ( have_rows('owl_slider_1') ) : the_row();
                    ?>
                        <?php 
                        $image = get_sub_field('owl_slider_slide');
                        if( !empty( $image ) ): ?>
                            <img class="owl_img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                    <?php
                        endwhile;
                        endif;
                        } 
                    ?>               
                </div> 
                <section>
                    <h4>We are the best</h4>
                    <h1>Zoyot is enough to keep <br> your fitnes level</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Natus dolor ex minima magnam omnis placeat error quasi sunt quas tenetur fugiat.</p>
                    <div>
                        <button class="button_info"><a href="">Get in touch --></a></button>
                        <button class="button_info"><a href="">Contact Us --></a></button>
                    </div>
                    
                </section>    
            </div>
            <div class="sport_list">
                <?php
                if( have_rows('all_programs') ) {
                    if( have_rows('all_programs') ):
                    while ( have_rows('all_programs') ) : the_row();
                ?>
                <?php 
                $image = get_sub_field('all_programs_logo');
                if( !empty( $image ) ): ?>
                    <img class="logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                <?php
                $all_programs_description = get_sub_field('all_programs_description');
                if( !empty( $all_programs_description ) ): ?>
                    <h3><?php the_sub_field('all_programs_description'); ?></h3>
                <?php endif; ?>
                <ul>
                <?php
                if( have_rows('all_programs_list') ) {
                    if( have_rows('all_programs_list') ):
                    while ( have_rows('all_programs_list') ) : the_row();
                ?>
                    <li>
                        <?php 
                        $image = get_sub_field('program_img');
                        if( !empty( $image ) ): ?>
                            <img class="sport_list_img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                        <a class="showing"  href="#"><img src="<?php bloginfo('template_url'); ?>/assets/images/icons/icons8-right-arrow-24.png" alt=""></a>
                        <div class="img_description">
                        <?php
                            $program_title = get_sub_field('program_title');
                            if( !empty( $program_title ) ): ?>
                                <h2><?php the_sub_field('program_title'); ?></h2>
                            <?php endif; ?>
                            <?php 
                            $image = get_sub_field('program_icon');
                            if( !empty( $image ) ): ?>
                                <img class="text_icon" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                    </li>
                <?php
                    endwhile;
                    endif;
                    } 
                ?>
                <?php
                    endwhile;
                    endif;
                    } 
                ?> 
                </ul>
            </div>
            <div class="about_more">
                <div class="about_more_elements1">
                    <div class="about_more_elements_img1">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/stretching.jpg" alt="">
                    </div>
                    <!-- <div class="about_more_elements_img2">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/stretching.jpg" alt="">
                    </div> -->
                    <div class="img_description">State Of Flow</div>
                </div>
                <div class="about_more_elements2">
                    <h1>About more <span>Our About</span><br>11 Years Experience</h1>
                    <p><b>Lorem ipsum dolor sit amet consectetur adipisicing elit.</b></p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi rerum nemo eveniet tempora ut eos doloribus modi natus, quidem cumque assumenda quo non libero cum. Ullam voluptatem quae fugit illum!</p>
                    <a href="https://goo.gl/maps/2enyPjJbSbEVGksu5">Karpats'ka St, 2, Truskavets, Lviv Oblast, 82200</a>
                    <button class="button_info">About More --></button>
                </div>
            </div>
            <div class="all_programs">
                <h3>Our Projects</h3>
                <h1>My All Programs</h1>
                <div class="owl-slider2">
                    <?php
                        if( have_rows('owl_slider_2') ) {
                            if( have_rows('owl_slider_2') ):
                            while ( have_rows('owl_slider_2') ) : the_row();
                    ?>
                        <div>
                            <?php 
                            $image = get_sub_field('owl_slider_slide2');
                            if( !empty( $image ) ): ?>
                                <img class="all_programs_img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                            <a class="showing"  href="#"><img src="<?php bloginfo('template_url'); ?>/assets/images/icons/icons8-right-arrow-24.png" alt=""></a>                           
                            <div>
                                <?php
                                $slide_title = get_sub_field('slide_title');
                                if( !empty( $slide_title ) ): ?>
                                    <h2><?php the_sub_field('slide_title'); ?></h2>
                                <?php endif; ?>
                                <?php
                                $slide_description = get_sub_field('slide_description');
                                if( !empty( $slide_description ) ): ?>
                                    <p><?php the_sub_field('slide_description'); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php
                        endwhile;
                        endif;
                        } 
                    ?>
                </div>
            </div>
            <div class="video_section">
                <iframe width="100%" height="760" src="https://www.youtube.com/embed/DQBCdbV2Enc" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="team_member">
                <h3>Team Members</h3>
                <h1>Special Trainers</h1>
                <div class="about_trainers">
                    <div class="owl-slider3">
                        
                        <?php
                            if( have_rows('owl_slider_3') ) {
                                if( have_rows('owl_slider_3') ):
                                while ( have_rows('owl_slider_3') ) : the_row();
                        ?>
                            <div>
                                <?php 
                                $image = get_sub_field('trainer_photo');
                                if( !empty( $image ) ): ?>
                                    <img class="about_trainers_img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>

                                <div>
                                <?php
                                $trainer_name = get_sub_field('trainer_name');
                                if( !empty( $trainer_name ) ): ?>
                                    <h2><?php the_sub_field('trainer_name'); ?></h2>
                                <?php endif; ?>
                                    <?php if( have_rows('list_of_social_media') ) {
                                            if( have_rows('list_of_social_media') ):
                                            while ( have_rows('list_of_social_media') ) : the_row(); ?>  
                                        <?php
                                        $trainer_name = get_sub_field('trainer_name');
                                        if( !empty( $trainer_name ) ): ?>
                                            <h2><?php the_sub_field('trainer_name'); ?></h2>
                                        <?php endif; ?>
                                        
                                        <?php 
                                        $link = get_sub_field('social_link');
                                        if( $link ): ?>
                                            <a class="social_media" href="<?php echo esc_url( $link ); ?>">
                                            
                                                <?php 
                                                $social_media_icon = get_sub_field('social_media_icon');
                                                if( !empty( $social_media_icon ) ): ?>
                                                    <img src="<?php echo esc_url($social_media_icon['url']); ?>" alt="<?php echo esc_attr($social_media_icon['alt']); ?>" />
                                                <?php endif; ?>

                                            </a>
                                        <?php endif; ?>
                                    <?php endwhile; endif;} ?>
                                </div>
                                
                            </div>
                        <?php endwhile; endif;} ?>        
                    </div>
                    <div class="type_of_trainers">
                            <div class="type_of_trainers1">
                                <?php
                                    if( have_rows('type-of-trainers-1') ) {
                                        if( have_rows('type-of-trainers-1') ):
                                        while ( have_rows('type-of-trainers-1') ) : the_row();
                                ?> 
                                    <div>
                                        <?php 
                                            $image = get_sub_field('img-type-of-trainers-1');
                                            if( !empty( $image ) ): ?>
                                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                        <?php endif; ?>
                                    </div>
                                    <div>
                                        <?php
                                            $title = get_sub_field('title-1');
                                            if( !empty( $title ) ): ?>
                                                <h3><?php the_sub_field('title-1'); ?></h3>
                                        <?php endif; ?>
                                        <?php
                                            $description = get_sub_field('description-1');
                                            if( !empty( $description ) ): ?>
                                                <p><?php the_sub_field('description-1'); ?></p>
                                        <?php endif; ?>
                                        <button class="button_info">
                                            <?php 
                                                $image = get_sub_field('button-icon-1');
                                                if( !empty( $image ) ): ?>
                                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                        </button>
                                    </div>
                                <?php endwhile; endif;} ?>   
                            </div>

                            <div class="type_of_trainers2">
                                <?php
                                    if( have_rows('type-of-trainers-2') ) {
                                        if( have_rows('type-of-trainers-2') ):
                                        while ( have_rows('type-of-trainers-2') ) : the_row();
                                ?>
                                    <div>
                                        <?php 
                                            $image = get_sub_field('img-type-of-trainers-2');
                                            if( !empty( $image ) ): ?>
                                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                        <?php endif; ?>
                                    </div>
                                    <div>
                                        <?php
                                            $title = get_sub_field('title-2');
                                            if( !empty( $title ) ): ?>
                                                <h3><?php the_sub_field('title-2'); ?></h3>
                                        <?php endif; ?>
                                        <?php
                                            $description = get_sub_field('description-2');
                                            if( !empty( $description ) ): ?>
                                                <p><?php the_sub_field('description-2'); ?></p>
                                        <?php endif; ?>
                                        <button class="button_info">
                                        <?php 
                                            $image = get_sub_field('button-icon-2');
                                            if( !empty( $image ) ): ?>
                                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                        <?php endif; ?>
                                        </button>
                                    </div>
                                <?php endwhile; endif;} ?>
                            </div>
                    </div>  
                </div>
            </div>
            <div class="why_we">
                <div class="why_we1">
                    <div class="background_img">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/stretching.jpg" alt="">
                    </div>
                    <div class="more_info">
                        <h1>Why Choose Us To Join Our Fitnes?</h1>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem ducimus quibusdam esse voluptatibus, minus nemo obcaecati ex autem impedit possimus recusandae illo molestias quidem explicabo similique modi ea? Necessitatibus, eaque.
                        </p>
                        <ul>
                            <li>Some interesting info</li>
                            <li>Some interesting info</li>
                            <li>Some interesting info</li>
                        </ul>
                        <button class="button_info">About More --></button>
                    </div> 
                </div>
                <div class="why_we2">
                    <div class="more_info">
                        <h1>Why Choose Us To Join Our Fitnes?</h1>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus fugit sapiente numquam enim? Laudantium alias voluptate nesciunt blanditiis excepturi. Laboriosam mollitia enim eius quae voluptatem modi exercitationem non voluptate illum!
                        </p>
                        <ul>
                            <li>Some interesting info</li>
                            <li>Some interesting info</li>
                            <li>Some interesting info</li>
                        </ul>
                        <button class="button_info">About More --></button>
                    </div>
                    <div class="background_img">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/stretching.jpg" alt="">
                    </div>
                </div>
                
            </div>
            <!-- <hr> -->
            <div class="news_and_blog">
                <h3>Our Blog</h3>
                <h1>News & Blog</h1>
                <div class="owl-slider4">
                    <?php
                        $args = array(
                            'posts_per_page' => 4,
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'post_type' => 'blogposts'
                        );
                        $query = new WP_Query($args);
                        while($query -> have_posts()) : $query -> the_post();
                    ?>
                    <div class="gridRow">
                        <div class="blog_title_date more_info2">
                            <h1><?php the_title(); ?></h1>
                            <h5><?php the_field('blogDate'); ?></h5>
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
                        <button class="button_info">
                            <a href="<?php the_permalink(); ?>">Read more</a>
                        </button>
                    </div>



                    <?php endwhile; ?>
                </div>
            </div>
            <div class="sponsors_area">
                <div>
                <?php
                    if( have_rows('sponsors') ) {
                        if( have_rows('sponsors') ):
                        while ( have_rows('sponsors') ) : the_row();
                ?>
                    <?php 
                    $image = get_sub_field('sponsors_logo');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                <!-- <img src="images/logof.png" alt=""> -->
                <?php
                    endwhile;
                    endif;
                    } 
                ?>
                </div>
            </div>
        </div>
	</main><!-- #main -->
<?php
//get_sidebar();
get_footer();
