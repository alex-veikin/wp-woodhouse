<?php

require( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );
require( trailingslashit( get_template_directory() ) . 'ot-functions.php' );
require( trailingslashit( get_template_directory() ) . 'ot-theme-options.php' );
require( trailingslashit( get_template_directory() ) . 'ot-meta-boxes.php' );
add_filter( 'ot_theme_options_parent_slug', 'theme_options_parent', 20 );
function theme_options_parent( $parent ) {
	$parent = '';

	return $parent;
}

show_admin_bar( false );

require get_template_directory() . '/bootstrap-navwalker.php';

if ( ! function_exists( 'woodhouse_setup' ) ) {
	function woodhouse_setup() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

		register_nav_menus( [
			'menu-header' => esc_html__( 'Primary', 'theme-textdomain' ),
		] );

		add_theme_support( 'html5', [
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		] );
	}
}
add_action( 'after_setup_theme', 'woodhouse_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function woodhouse_widgets_init() {
	register_sidebar( [
		'name'          => 'Область виджетов',
		'id'            => 'sidebar-1',
		'description'   => 'Добавьте виджеты.',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	] );
}

add_action( 'widgets_init', 'woodhouse_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function woodhouse_scripts() {
	//	wp_enqueue_style( 'woodhouse-style', get_stylesheet_uri() );
	wp_enqueue_style( 'woodhouse-styles',
		get_template_directory_uri() . '/dist/style.css', [], true );
	wp_enqueue_script( 'woodhouse-scripts',
		get_template_directory_uri() . '/dist/main.js', [], true, true );
}

add_action( 'wp_enqueue_scripts', 'woodhouse_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
//require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
//require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
//require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
//if ( defined( 'JETPACK__VERSION' ) ) {
//	require get_template_directory() . '/inc/jetpack.php';
//}

