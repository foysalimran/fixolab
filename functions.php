<?php
require('lib/codestar/codestar-framework.php');
// include_once('inc/admin-options.php');
include_once('inc/metabox-options.php');

if (site_url() == "fixolab.local") {
	define("VERSION", time());
} else {
	define("VERSION", wp_get_theme()->get("Version"));
}

// ADD THEME SUPPORT
function fixolab_initialize()
{
	load_theme_textdomain('fixolab', get_template_directory() . '/languages');

	add_theme_support('automatic-feed-links');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('wp-block-styles');
	add_theme_support('html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	));
	add_theme_support('post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	));
	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');
	// Add support for core custom logo.
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
	// REGISTER NAV MENUS
	register_nav_menus(
		array(
			'main' => __('Main Menu', 'themeatlier'),
		)
	);
}
add_action('after_setup_theme', 'fixolab_initialize');

// ENQUEUE STYLES AND SCRIPTS
function fixolab_theme_scripts()
{
	wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/style.main.css', array(), time());
	wp_enqueue_style('stylesheet', get_stylesheet_uri(), VERSION);

	wp_enqueue_script('multi-countdown', get_template_directory_uri() . '/assets/js/multi-countdown.js', array('jquery'), VERSION, true);
	wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'fixolab_theme_scripts');


require get_template_directory() . '/inc/template-tags.php';

// function remove_search_input_value($form) {
//     $form = str_replace('value="' . get_search_query() . '"', '', $form);
//     return $form;
// }
// add_filter('get_search_form', 'remove_search_input_value');


// REGISTER WIDGETS
function fixolab_widegets_init()
{
	register_sidebar(array(
		'name'	=> esc_html__('Footer Widget', 'fixolab'),
		'id'	=> 'footer__widget',
		'description'	=> esc_html__('Add widget for the footer', 'fixolab'),
		'before_widget'	=> '<div>',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3 class="mb-5 text-base ">',
		'after_title'	=> '</h3>'
	));
}
add_action('widgets_init', 'fixolab_widegets_init');

// REGISTER CUSTOM POSTS
function themeateler_register_portfolio_cpt()
{

	/**
	 * Post Type: Portfolios.
	 */

	$labels = [
		"name" => esc_html__("Portfolios", "themeatlier"),
		"singular_name" => esc_html__("Portfolio", "themeatlier"),
	];

	$args = [
		"label" => esc_html__("Portfolios", "themeatlier"),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => ["slug" => "portfolio", "with_front" => true],
		"query_var" => true,
		"menu_icon" => "dashicons-portfolio",
		"supports" => ["title", "editor", "thumbnail", "excerpt", "custom-fields", "author"],
		"show_in_graphql" => false,
	];

	register_post_type("portfolio", $args);
}

add_action('init', 'themeateler_register_portfolio_cpt');




add_action('init', 'create_portfolio_taxonomy', 0);


function create_portfolio_taxonomy()
{


	$labels = array(
		'name' => _x('Skills', 'taxonomy general name'),
		'singular_name' => _x('Skill', 'taxonomy singular name'),
		'search_items' =>  __('Search Skill'),
		'all_items' => __('All Skills'),
		'parent_item' => __('Parent Skill'),
		'parent_item_colon' => __('Parent Skill:'),
		'edit_item' => __('Edit Skill'),
		'update_item' => __('Update Skill'),
		'add_new_item' => __('Add New Skill'),
		'new_item_name' => __('New Skill Name'),
		'menu_name' => __('Skills'),
	);

	// Now register the taxonomy
	register_taxonomy('skills', array('portfolio'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_in_rest' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'skill'),
	));
}

