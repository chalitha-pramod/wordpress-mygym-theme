<?php



// Register Theme Scripts
function andgo_theme_scripts(){
   
    wp_enqueue_script('jquery', get_template_directory_uri(). '/assets/js/ js/jquery-3.4.1.min.js');
    
    wp_enqueue_script('bootstrap.js', get_template_directory_uri(). '/assets/js/bootstrap.js');
}
add_action('wp_enqueue_scripts','andgo_theme_scripts');

//Register Theme Styles
function andgo_theme_styles(){
    wp_enqueue_style('bootstrap.css',get_template_directory_uri(). '/assets/css/bootstrap.css');
    wp_enqueue_style('style', get_template_directory_uri(). '/assets/css/style.css');
    wp_enqueue_style('bootstrap.css',get_template_directory_uri(). '/assets/css/responsive.css');
    wp_enqueue_style('style', get_template_directory_uri(). '/assets/css/style.css.map');

} 

add_action('wp_enqueue_scripts', 'andgo_theme_styles');
?>

<?php

function register_andgo_navs(){
    register_nav_menus(array(
        'andgo-top-nav'=> __('Andgo Top Menu'),
        'andgo-bot-footer'=> __('Andgo Bottom Menu'),
    ));
}
add_action('init', 'register_andgo_navs');

?>