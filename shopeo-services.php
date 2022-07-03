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

	}
}

register_deactivation_hook( __FILE__, 'shopeo_services_deactivate' );

if ( ! function_exists( 'shopeo_services_load_textdomain' ) ) {
	function shopeo_services_load_textdomain() {
		load_plugin_textdomain( 'shopeo-services', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
	}
}

add_action( 'init', 'shopeo_services_load_textdomain' );
