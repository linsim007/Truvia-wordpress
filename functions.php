<?php
/**
 * Truvia functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Truvia
 */

if ( ! function_exists( 'Truvia_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function Truvia_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Truvia, use a find and replace
		 * to change 'Truvia' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'Truvia', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'main-menu' => esc_html__( 'Main menu', 'Truvia' ),
			'footer-menu' => esc_html__( 'Footer menu', 'Truvia' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'Truvia_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'Truvia_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function Truvia_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'Truvia_content_width', 640 );
}
add_action( 'after_setup_theme', 'Truvia_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function Truvia_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'Truvia' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'Truvia' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	
}
add_action( 'widgets_init', 'Truvia_widgets_init' );

/**
 * Register a custom post type called "book".
 *
 * @see get_post_type_labels() for label keys.
 */
function wpdocs_codex_book_init() {
    $labels = array(
        'name'                  => _x( 'Executive leadership', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Executive leadership', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Executive leadership', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Executive leadership', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add Executive', 'textdomain' ),
        'add_new_item'          => __( 'Add New Executive', 'textdomain' ),
        'new_item'              => __( 'New Executive', 'textdomain' ),
        'edit_item'             => __( 'Edit Executive', 'textdomain' ),
        'view_item'             => __( 'View Executive', 'textdomain' ),
        'all_items'             => __( 'All Executive', 'textdomain' ),
        'search_items'          => __( 'Search Executive', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Executive:', 'textdomain' ),
        'not_found'             => __( 'No Executive found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No Executive found in Trash.', 'textdomain' ),
        'featured_image'        => _x( 'Executive Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set Executive image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Remove Executive image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as Executive image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'Executive archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
        'insert_into_item'      => _x( 'Insert into Executive', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Executive', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
        'filter_items_list'     => _x( 'Filter Executive list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
        'items_list_navigation' => _x( 'Executive list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
        'items_list'            => _x( 'Executive list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
		'menu_icon' => 'dashicons-businesswoman',
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'executive' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title','editor', 'thumbnail' ),
    );
 
    register_post_type( 'executive', $args );
}
 
add_action( 'init', 'wpdocs_codex_book_init' );


function truvia_directors() {
    $labels = array(
        'name'                  => _x( 'Directors', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Director', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Directors', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Directors', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add Director', 'textdomain' ),
        'add_new_item'          => __( 'Add New Director', 'textdomain' ),
        'new_item'              => __( 'New Director', 'textdomain' ),
        'edit_item'             => __( 'Edit Director', 'textdomain' ),
        'view_item'             => __( 'View Director', 'textdomain' ),
        'all_items'             => __( 'All Director', 'textdomain' ),
        'search_items'          => __( 'Search Director', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Director:', 'textdomain' ),
        'not_found'             => __( 'No Director found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No Director found in Trash.', 'textdomain' ),
        'featured_image'        => _x( 'Director Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set Director image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Remove Director image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as Director image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'Director archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
        'insert_into_item'      => _x( 'Insert into Director', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Director', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
        'filter_items_list'     => _x( 'Filter Director list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
        'items_list_navigation' => _x( 'Director list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
        'items_list'            => _x( 'Director list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
		'menu_icon' => 'dashicons-businessperson',
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'directors' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title','editor' ),
    );
 
    register_post_type( 'directors', $args );
}
 
add_action( 'init', 'truvia_directors' );

/**
 * Enqueue scripts and styles.
 */
function Truvia_scripts() {
	wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css?family=Barlow&display=swap' );
	wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' );
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/plugins/css/owl.carousel.min.css' );
	wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/plugins/css/owl.theme.default.min.css' );
	wp_enqueue_style( 'owl-green', get_template_directory_uri() . '/plugins/css/owl.theme.green.min.css' );
	wp_enqueue_style( 'master', get_template_directory_uri() . '/dist/master.css' );
	wp_enqueue_style( 'Truvia-style', get_stylesheet_uri() );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' );
	wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' );
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/plugins/js/owl.carousel.min.js' );
	wp_enqueue_script( 'alljs', get_template_directory_uri() . '/dist/all.js' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'Truvia_scripts' );

/*
* Adding CMB2
*/
require get_template_directory() . '/inc/cmb/init.php';
require get_template_directory() . '/inc/cmb/config.php';

/*
* Adding Redux
*/
require get_template_directory() . '/inc/redux/ReduxCore/framework.php';
require get_template_directory() . '/inc/redux/sample/config.php';


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
 * Including nav walker.
 */
require get_template_directory() . '/mynav.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


