<?php

add_theme_support('post-thumbnail');
add_theme_support('woocommerce');
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );



define('theme_path', get_template_directory_uri().'/');

require "lib/class-wp-bootstrap-navwalker.php";

if( ! function_exists('my_custom_function')) {

    function my_custom_function()
    {
        register_nav_menus(array(
            'header_menu' => __('Primari Menu','text demo'),
            'footer_menu' => __('Secondary Menu','text demo'),
        ));
    }

    add_action('after_setup_theme', 'my_custom_function');

}






