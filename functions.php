<?php 

add_action( 'wp_enqueue_scripts', 'portfolio_styles' );
add_action( 'wp_enqueue_scripts', 'jquery_lib' );
add_action( 'wp_footer', 'action_footer' );

function jquery_lib(){
	wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core', '//code.jquery.com/jquery-3.3.1.min.js');
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'mian', get_template_directory_uri() . '/js/main.js', array(jquery), 'null', true );
}

function portfolio_styles() {

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/libs/bootstrap/css/bootstrap.css' );
		wp_enqueue_style( 'main', get_stylesheet_uri() );
	// wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}

function action_footer(){

}

function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

add_theme_support( 'custom-logo' );