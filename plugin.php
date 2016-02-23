<?php
/*
Plugin Name: Sambungan Baru
Plugin URI: 
Description: Permohonan sambungan baru palyja
Version: 0.1
Author: Arya Wiratama
Author URI: 
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
	include dirname( __FILE__ ).'/includes/class-form-handler.php';
	include dirname( __FILE__ ).'/includes/sambungan-functions.php';
	
	new Sambunganbaru_Admin_Menu();
});