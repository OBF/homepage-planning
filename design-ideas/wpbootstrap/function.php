<?php 
function b2w_theme_styles{
    
    wp_enqueue_style('bootstrap_css', get_template_directory_uri().'/css/bootstrap.min.css');
    
    wp_enqueue_style('style_css', get_template_directory_uri().'/style.css');
}

add_action('wp_enqueue_scripts','b2w_theme_styles');

function b2w_theme_js(){
    wp_enqueue_script('bootstrap_js', get_template_directory_uri().'js/bootstrap.min.js', array('jquery'), '', true);
    wp_enqueue_script('contactform_js', get_template_directory_uri().'contactform/contactform.js', array('jquery'), '', true);
    wp_enqueue_script('custom_js', get_template_directory_uri().'js/custom.js', array('jquery'), '', true);
}

add_action('wp_enqueue_scripts','b2w_theme_js');

function b2w_theme_setup(){
    add_theme_support('post-thumbnails');
}
?>
