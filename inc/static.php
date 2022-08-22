<?php 
/**
 * Static
 */

function wppc_enqueue_scripts() {
  wp_enqueue_style('wp-post-carousel-style', WP_PC_URI . '/dist/css/wppc.bundle.css', false, WP_PC_VER);
  wp_enqueue_script('wp-post-carousel-script', WP_PC_URI . '/dist/wppc.bundle.js', ['jquery'], WP_PC_VER, true);

  wp_localize_script('wp-post-carousel-script', 'PHP_WPPC_DATA', [
    'ajax_url' => admin_url('admin-ajax.php'),
    'lang' => [],
  ]);
}

add_action('wp_enqueue_scripts', 'wppc_enqueue_scripts', 30);