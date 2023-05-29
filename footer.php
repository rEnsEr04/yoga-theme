<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yoga_fitnes
 */

?>
	<footer id="colophon" class="site-footer">
        <div class="item-a"></div>
        <div class="footer1">
            <div class="days">
                <img class="logo" src="<?php bloginfo('template_url'); ?>/assets/images/logof.png" alt=""><h1>Zoyot</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit,</p>
                <hr>
                <h3>Working Hours</h3>
                <p><span class="text_color">Mon-Fri:</span> 7.00-22.00   <span class="text_color">St-Sun:</span> 9.00-20.00</p>
            </div>
            <div class="int_links_1">
                <h3>Explore Links</h3>
                <?php wp_nav_menu( array(
                    'menu'              => 'Footer-1', // ID, имя или ярлык меню
                    'theme_location'    => 'Нижня область 1', // область меню

                    ) );
                ?>
            </div>
            <div class="int_links_2">
                <h3>Explore Links</h3>
                <?php wp_nav_menu( array(
                    'menu'              => 'Footer-2', // ID, имя или ярлык меню
                    'theme_location'    => 'Нижня область 2', // область меню
                    ) );
                ?>
            </div>
            <div class="insta_posts">    
                [instagram feed="248"]
            </div>
        </div>
        <div class="item-b"></div>
        <div class="footer2"> 
            <div>
                <p>@<span class="text_color">Zoyot</span>.All rights reserved.</p>
            </div>
            <div>
                <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit</h2>
            </div>
            <div class="emailNewsletter">
                <input type="text" placeholder="Enter your ...">
                <button type="submit" form="nameform" value="Submit">S</button>
            </div>
            <div class="social_media_area" >
                <?php if( have_rows('social_media_area' , 'options') ) {
                        if( have_rows('social_media_area' , 'options') ):
                        while ( have_rows('social_media_area' , 'options') ) : the_row(); ?>
                    <?php 
                    $link = get_sub_field('link_for' , 'options');
                    if( $link ): ?>
                        <a class="social_media" href="<?php echo esc_url( $link_for ); ?>">
                            <?php 
                            $social_media_img = get_sub_field('social_media_img' , 'options');
                            if( !empty( $social_media_img ) ): ?>
                                <img src="<?php echo esc_url($social_media_img['url']); ?>" alt="<?php echo esc_attr($social_media_img['alt']); ?>" />
                            <?php endif; ?>
                            <?php 
                            $social_media_name = get_sub_field('social_media_name' , 'options');
                            if( !empty( $social_media_name ) ): ?>
                                <h3><?php the_sub_field('social_media_name' , 'options'); ?></h3>
                            <?php endif; ?>
                        </a>
                    <?php endif; ?>
                <?php endwhile; endif;} ?>
            </div> 
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
