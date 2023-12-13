<?php



// Register Theme Scripts
function andgo_theme_scripts(){
    wp_enqueue_script('bootstrap.bundle.js', get_template_directory_uri(). '/assets/js/bootstrap.bundle.js');
}
add_action('wp_enqueue_scripts','andgo_theme_scripts');

//Register Theme Styles
function andgo_theme_styles(){
    wp_enqueue_style('bootstrap.css',get_template_directory_uri(). '/assets/css/bootstrap.css');
    wp_enqueue_style('style', get_template_directory_uri(). 'style.css');
    wp_enqueue_style('bootstrap.css',get_template_directory_uri(). '/assets/css/responsive.css');
    wp_enqueue_style('style', get_template_directory_uri(). 'style.css.map');

} 

add_action('wp_enqueue_scripts', 'andgo_theme_styles');