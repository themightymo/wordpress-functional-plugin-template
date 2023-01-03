<?php
/*
 * @wordpress-plugin
 * Plugin Name:       WordPress Functional Plugin Template
 * Plugin URI:        https://themightymo.com
 * Description:       Custom functionality plugin for your website.
 * Version:           1.0
 * Author:            The Mighty Mo! WordPress Design
 * Author URI:        https://www.themightymo.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:
 * Domain Path:       /wordpress-functional-plugin-template
*/


add_action('wp_enqueue_scripts', 'tmm_enqueue_custom_js');
function tmm_enqueue_custom_js() {   
	wp_enqueue_script('jquery');
    wp_enqueue_script( 'wordpress-functional-plugin', plugin_dir_url( __FILE__ ) . 'wordpress-functional-plugin.js', array( 'jquery' ) );
}

add_action('admin_print_styles', 'tmm_enqueue_styles');
function tmm_enqueue_styles () {
	wp_enqueue_style( 'wordpress-functional-plugin-styles', plugins_url( '/wordpress-functional-plugin.css', __FILE__ ) );
}
