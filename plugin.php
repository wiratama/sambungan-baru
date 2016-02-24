<?php
/*
Plugin Name: Sambungan Baru
Plugin URI: https://github.com/wiratama/sambungan-baru
Description: Permohonan sambungan baru palyja
Version: 0.1
Author: Arya Wiratama
Author URI: https://github.com/wiratama/
License: GPLv2 or later
Text Domain: 
Domain Path: 
*/

/*add_action( 'init', 'sambungan_baru_palyja' );

function sambungan_baru_palyja() {
	include dirname( __FILE__ ).'/includes/class-sambunganbaru-admin-menu.php';
	include dirname( __FILE__ ).'/includes/class-sambunganbaru-list-table.php';
	include dirname( __FILE__ ).'/includes/class-form-handler.php';
	include dirname( __FILE__ ).'/includes/sambunganbaru-functions.php';
	
	new Sambunganbaru_Admin_Menu();
}*/

add_action('init', function() {
	include dirname( __FILE__ ).'/includes/class-sambunganbaru-admin-menu.php';
	include dirname( __FILE__ ).'/includes/class-sambungan-list-table.php';
	include dirname( __FILE__ ).'/includes/class-form-handler-sambungan.php';
	include dirname( __FILE__ ).'/includes/sambungan-functions.php';
	wp_enqueue_script('the_js', plugins_url('/js/postal.js',__FILE__) );
	wp_register_style( 'sambungan_wp_admin_css', plugins_url( '/css/sambungan.css', __FILE__ ) );
    wp_enqueue_style( 'sambungan_wp_admin_css' );
	
	new Sambunganbaru_Admin_Menu();
});