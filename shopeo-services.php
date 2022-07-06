<?php
/**
 * Plugin Name: SHOPEO Services
 * Plugin URI: https://www.shopeo.cn
 * Description: Custom Services Post Type
 * Author: Shopeo
 * Version: 0.0.1
 * Author URI: https://www.shopeo.cn
 * License: GPL2+
 * Text Domain: shopeo-services
 * Domain Path: /languages
 * Requires at least: 5.9
 * Requires PHP: 5.6
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Define SHOPEO_SERVICES_PLUGIN_FILE.
if ( ! defined( 'SHOPEO_SERVICES_PLUGIN_FILE' ) ) {
	define( 'SHOPEO_SERVICES_PLUGIN_FILE', __FILE__ );
}

if ( ! defined( 'SHOPEO_SERVICES_PLUGIN_BASE' ) ) {
	define( 'SHOPEO_SERVICES_PLUGIN_BASE', plugin_basename( SHOPEO_SERVICES_PLUGIN_FILE ) );
}

if ( ! defined( 'SHOPEO_SERVICES_PATH' ) ) {
	define( 'SHOPEO_SERVICES_PATH', plugin_dir_path( SHOPEO_SERVICES_PLUGIN_FILE ) );
}

if ( ! function_exists( 'shopeo_services_activate' ) ) {
	function shopeo_services_activate() {

	}
}

register_activation_hook( __FILE__, 'shopeo_services_activate' );

if ( ! function_exists( 'shopeo_services_deactivate' ) ) {
	function shopeo_services_deactivate() {
		unregister_post_type( 'shopeo_service' );
	}
}

register_deactivation_hook( __FILE__, 'shopeo_services_deactivate' );

if ( ! function_exists( 'shopeo_services_load_textdomain' ) ) {
	function shopeo_services_load_textdomain() {
		load_plugin_textdomain( 'shopeo-services', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
	}
}

add_action( 'init', 'shopeo_services_load_textdomain' );

if ( ! function_exists( 'shopeo_services_post_type' ) ) {
	function shopeo_services_post_type() {
		register_post_type( 'shopeo_service', array(
			'label'              => __( 'Services', 'shopeo-services' ),
			'labels'             => array(
				'name'               => __( 'Services', 'shopeo-services' ),
				'all_items'          => __( 'All Services', 'shopeo-services' ),
				'singular_name'      => __( 'Service', 'shopeo-services' ),
				'add_new_item'       => __( 'Add New Service', 'shopeo-services' ),
				'edit_item'          => __( 'Edit Service', 'shopeo-services' ),
				'view_item'          => __( 'View Service', 'shopeo-services' ),
				'view_items'         => __( 'View Services', 'shopeo-services' ),
				'search_items'       => __( 'Search Services', 'shopeo-services' ),
				'not_found'          => __( 'No Services found.', 'shopeo-services' ),
				'not_found_in_trash' => __( 'No Services found in trash.', 'shopeo-services' ),
				'archives'           => __( 'Service Archives', 'shopeo-services' ),
				'attributes'         => __( 'Service Attributes', 'shopeo-services' ),
			),
			'public'             => true,
			'hierarchical'       => true,
			'publicly_queryable' => true,
			'has_archive'        => true,
			'menu_position'      => 5,
			'menu_icon'          => 'dashicons-heart',
			'show_in_rest'       => true,
			'rest_base'          => 'services',
			'map_meta_cap'       => true,
			'supports'           => array(
				'title',
				'editor',
				'comments',
				'revisions',
				'trackbacks',
				'excerpt',
				'page-attributes',
				'thumbnail',
				'custom-fields',
				'post-formats'
			),
			'rewrite'            => array(
				'slug' => 'services'
			),
			'query_var'          => false,
		) );
	}
}

add_action( 'init', 'shopeo_services_post_type' );
