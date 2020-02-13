<?php
function adicionar_estilos() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap');

    wp_register_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('style');
}
function adicionar_scripts(){
    wp_deregister_script('jquery');
    wp_register_script('jquery',
    get_template_directory_uri() . '/js/jquery-3.4.1.min.js' , 
    array(), 1, true);
    wp_enqueue_script('jquery');

    wp_register_script('scripts',
    get_template_directory_uri() . '/js/scripts.js' , 
    array(), 1, true);
    wp_enqueue_script('scripts');
}



add_action('wp_enqueue_scripts', 'adicionar_estilos');
add_action('wp_enqueue_scripts', 'adicionar_scripts');
add_theme_support('menus');
register_nav_menus(
    array(
        'top-menu' => __('Top Menu','theme'),
        'footer-menu' => __('Footer Menu', 'theme')

    )


);


?>