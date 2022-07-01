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