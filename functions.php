<?php
function alpha_bootstraping(){
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	load_theme_textdomain('alpha');
}
add_action('after_setup_theme','alpha_bootstraping');

/*style sheet enqueue*/
function alpha_asstes(){
	wp_enqueue_style("alpha",get_stylesheet_uri());
	wp_enqueue_style("bootstrap","//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css");
}

add_action('wp_enqueue_scripts','alpha_asstes');