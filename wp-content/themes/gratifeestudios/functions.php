<?php
/**
 * Gratifee Studios functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 */

function add_theme_scripts() {
  wp_enqueue_style('style',get_stylesheet_uri());
  wp_enqueue_style( 'normalize-css', get_template_directory_uri() . '/css/normalize.min.css', array(), '1.1', 'all');
  wp_enqueue_style( 'custom-style-css', get_template_directory_uri() . '/css/style.lite.min.css', array(), '1.1', 'all');
 
  wp_enqueue_script( 'custom-jquery-library', get_template_directory_uri() . '/js/jquery-1.10.2.min.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'freewall-js', get_template_directory_uri() . '/js/freewall.min.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'cycle2-js', get_template_directory_uri() . '/js/jquery.cycle2.min.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'slimmenu-js', get_template_directory_uri() . '/js/jquery.slimmenu.min.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'custom-script-js', get_template_directory_uri() . '/js/custom-script.min.js', array ( 'jquery' ), 1.1, true);
 
    /*if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }*/
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

function gratifeestudios_theme_setup() {
  register_nav_menus( array( 
    'header' => 'Header menu', 
    'footer' => 'Footer menu' 
  ) );
 }

add_action( 'after_setup_theme', 'gratifeestudios_theme_setup' );

// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Projects', 'Projects', 'projects' ),
		'singular_name'         => _x( 'Projects', 'Projects', 'projects' ),
		'menu_name'             => __( 'Projects', 'projects' ),
		//'name_admin_bar'        => __( 'Post Type', 'projects' ),
		//'archives'              => __( 'Item Archives', 'text_domain' ),
		//'attributes'            => __( 'Item Attributes', 'text_domain' ),
		//'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Projects', 'projects' ),
		'add_new_item'          => __( 'Add Projects', 'projects' ),
		'add_new'               => __( 'Add Projects', 'projects' ),
		'new_item'              => __( 'New Projects', 'projects' ),
		'edit_item'             => __( 'Edit Projects', 'projects' ),
		'update_item'           => __( 'Update Projects', 'projects' ),
		'view_item'             => __( 'View Projects', 'projects' ),
		'view_items'            => __( 'View Projects', 'projects' ),
		'search_items'          => __( 'Search Projects', 'projects' ),
		//'not_found'             => __( 'Not found', 'projects' ),
		//'not_found_in_trash'    => __( 'Not found in Trash', 'projects' ),
		'featured_image'        => __( 'Featured Image', 'projects' ),
		'set_featured_image'    => __( 'Set featured image', 'projects' ),
		'remove_featured_image' => __( 'Remove featured image', 'projects' ),
		'use_featured_image'    => __( 'Use as featured image', 'projects' ),
		'insert_into_item'      => __( 'Insert into projects', 'projects' ),
		'uploaded_to_this_item' => __( 'Uploaded to this projects', 'projects' ),
		'items_list'            => __( 'Projects list', 'projects' ),
		'items_list_navigation' => __( 'Projects list navigation', 'projects' ),
		'filter_items_list'     => __( 'Filter Projects list', 'projects' ),
	);
	$args = array(
		'label'                 => __( 'Projects', 'projects' ),
		'description'           => __( 'Projects Description', 'projects' ),
		'labels'                => $labels,
		'supports'              => array( ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'post_type', $args );

}
add_action( 'init', 'custom_post_type', 0 );


