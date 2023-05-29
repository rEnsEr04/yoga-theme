<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yoga_fitnes
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<title>
        <?php
            if(is_404()) {
                echo 'Error 404';
            } else {
                the_title();
            }
        ?>
    </title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster Two"> 
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'yoga-fitnes' ); ?></a>
	<header id="masthead" class="site-header">
		<!-- <div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$yoga_fitnes_description = get_bloginfo( 'description', 'display' );
			if ( $yoga_fitnes_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $yoga_fitnes_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div>.site-branding -->
		<div class="header">
            <button onclick="topFunction()" id="returnBtn" class="returnToTop">
                Top
            </button>
            <nav class="nav">
                <a class="header_logo" href="#">
                    <img class="logo" src="<?php bloginfo('template_url'); ?>/assets/images/logof.png" alt=""><span>Zoyot</span>
                </a>
                <div class="MenuContainer">
                    <div id="top_nav" class="MenuBar">
                        <?php wp_nav_menu( array(
                            'menu'              => 'Header', // ID, имя или ярлык меню
                            'menu_class'        => 'Menu', // класс элемента <ul>
                            'container' 		=> 'false',
                            'theme_location'    => 'Top Area', // область меню
                            ) );
                        ?>
                        <a href="javascript:void(0)" class="closebtn" onclick="closeMenuBar()">&times;</a>
                    </div>
                    <div id="MenuMain">
                        <button class="openbtn" onclick="openMenuBar()">&#9776; </button>
                    </div>
                </div>
                <div class="phone_num">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/phone.png" alt="" class="phone_icon">
                    <span><?php the_field('phone-number' , 'options'); ?></span>
                </div>
                <div class="search">
                    <button type="submit" class="search_button">S</button>
                    <input type="text" placeholder="">
                </div>
                <!-- <div class="settings">
					<div id="mySidebar" class="sidebar">
                        <a href="javascript:void(0)" class="closebtn" onclick="closesidebar()">&times;</a>
                        <a href="#">About</a>
                        <a href="#">Sport list</a>
                        <a href="#">About more</a>
                        <a href="#">All programs</a>
                        <a href="#">Video</a>
                        <a href="#">Team members</a>
                        <a href="#">Why we</a>
                        <a href="#">News and blog</a>
                        <a href="#">Sponsors</a>
                    </div>
                    <div id="main">
                        <button class="openbtn" onclick="opensidebar()">&#9776; </button>
                    </div>
                </div> -->
            </nav>
        </div>
	</header><!-- #masthead -->
