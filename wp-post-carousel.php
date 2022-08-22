<?php 
/**
 * Plugin Name: WP Post Carousel
 * Plugin URI: #
 * Description: Post carousel (Gutenberg block)
 * Version: 1.0.0
 * Author: Mike
 * Author URI: #
 * Text Domain: wp-post-carousel
 * Domain Path: /languages/
 * Requires at least: 5.8
 * Requires PHP: 7.2
 *
 * @package WooCommerce
 */

{
  /**
   * Define 
   */
  define('WP_PC_VER', '1.0.0');
  define('WP_PC_DIR', plugin_dir_path(__FILE__));
  define('WP_PC_URI', plugin_dir_url(__FILE__));
}

{
  /**
   * Include
   */
  require(WP_PC_DIR . '/inc/static.php');
  require(WP_PC_DIR . '/inc/helpers.php');
  require(WP_PC_DIR . '/inc/hooks.php');
  require(WP_PC_DIR . '/inc/ajax.php');
}