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
	wp_enqueue_style( "featherlight-css", "//cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.css" );


	wp_enqueue_script( "featherlight-js", "//cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.js", array( "jquery" ), "0.0.1", true );
	wp_enqueue_script('alpha-min', get_template_directory_uri().'/assets/js/main.js',  ['jquery'] , true, true);
}

add_action('wp_enqueue_scripts','alpha_asstes');

function alpha_sidebar(){
	register_sidebar( array(
        'name' => __( 'Right Sidebar', 'alpha' ),
        'id' => 'sidebar-1',
        'description' => __( 'Right Sidebar 1', 'alpha' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'alpha_sidebar' );