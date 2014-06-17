<?php
/**
 * Plugin Name: Slick for WordPress
 * Plugin URI: 
 * Description: Slick by Ken Wheeler packaged as a WordPress plugin
 * Version: 1.0
 * Author: Slick by Ken Wheeler. Plugin by Innovator Digital Markets AB
 * Author URI: http://kenwheeler.github.io/slick/
 * License: GPL2
 */
 

function slick_enqueue_scripts(){
	
	wp_enqueue_script('jquery');
	wp_enqueue_script('slick', plugins_url() . '/slick-wp/slick/slick.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('slick', plugins_url() . '/slick-wp/js/slick-defaults.js', array('jquery'), '1.0', true);
	wp_enqueue_style('slick', plugins_url() . '/slick-wp/slick/slick.css');
	
}

add_action('wp_enqueue_scripts', 'slick_enqueue_scripts');

?>