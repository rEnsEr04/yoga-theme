<?php
/**
 * yoga fitnes functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package yoga_fitnes
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function yoga_fitnes_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on yoga fitnes, use a find and replace
		* to change 'yoga-fitnes' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'yoga-fitnes', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'Header' => esc_html__( 'Top Area', 'yoga-fitnes' ),
			'Footer-1' => esc_html__( 'Нижня область 1', 'yoga-fitnes' ),
			'Footer-2' => esc_html__( 'Нижня область 2', 'yoga-fitnes' ),
		)
	);
	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'yoga_fitnes_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'yoga_fitnes_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function yoga_fitnes_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'yoga_fitnes_content_width', 640 );
}
add_action( 'after_setup_theme', 'yoga_fitnes_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function yoga_fitnes_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'yoga-fitnes' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'yoga-fitnes' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'yoga_fitnes_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function yoga_fitnes_scripts() {
	// wp_enqueue_style( 'yoga-fitnes-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'yoga-fitnes-style', 'rtl', 'replace' );


	wp_enqueue_style( 'owl-slider', get_template_directory_uri() . '/assets/css/owl.carousel.min.css' );
	wp_enqueue_style( 'min-style', get_template_directory_uri() . '/assets/css/style.min.css' );
	wp_deregister_script('jquery');
	wp_register_script('jquery','//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js');
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'owl-min-main', get_template_directory_uri() . '/assets/js/owl.carousel.min.js');
	wp_enqueue_script( 'min-main', get_template_directory_uri() . '/assets/js/main.min.js');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'yoga_fitnes_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Website Settings',
        'menu_title'    => 'Website Settings',
        'menu_slug'     => 'website-ettings',
        'capability'    => 'edit_posts',
        
    ));
    
}



/**
 * Load More Button
 */

	// function js_enqueue_script() {
	// 	wp_enqueue_script("my-ajax-hadle", get_stylesheet_directory_uri() . "/assets/js/loadmore.js", array('jquery'));
	// 	wp_localize_script('my-ajax-handle', 'the_ajax_script', array(
	// 		'ajaxurl' => admin_url('admin-ajax.php'), 
	// 		'_nonce' => wp_create_nonce('my-ajax-handle-nonce')
	// 	));
	// }
	// add_action("wp_enqueue_scripts", "js_enqueue_scripts");

	// add_action("wp_ajax_nopriv_load_more_post_ajax", "load_more_post_ajax");
	// add_action("wp_ajax_load_more_post_ajax", "load_more_post_ajax");

	// function load_more_post_ajax() {
	// 	if (wp_verify_nonce($_REQUEST['security'], 'my-ajax-handle-nonce') === false) {
	// 		wp_send_json_error();
	// 		wp_die('Invalid Request!');
	// 	}
	// 	$ppp = $_POST['ppp'] ?? 1;
	// 	$page = $_POST['pageNumber'] ?? 0;

	// 	$loop = new WP_Query([
	// 		'posts_per_page' => $ppp,
	// 		'paged' => $page,
	// 	]);

	// 	if ($loop->have_posts()) {
	// 		while ($loop->have_posts()) : $loop->the_post();
	// 		echo "<div><h1>' . get_the_tittle() . '</h1></div>";
	// 		endwhile;
	// 	}
	// 	wp_reset_postdata();
	// 	wp_die();
	// }