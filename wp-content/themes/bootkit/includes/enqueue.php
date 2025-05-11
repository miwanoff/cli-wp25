<?php
// echo "Hello";

function bootkit_enqueue()
{
    $ver = BOOTSTRAPTOPIC_DEV_MODE ? time() : false;
    $url = get_theme_file_uri();
    wp_register_style('bootkit_google_fonts', 'https://fonts.googleapis.com/css?family=Open+Sans&display=swap'); // Google fonts
    wp_register_style('bootkit_bootstrap', $url . '/assets/vendor/bootstrap/css/bootstrap.min.css');             //bootstrap.min.css
    wp_register_style('bootkit_modern_business', $url . '/assets/css/modern-business.css');                      // modern-business.css
    wp_enqueue_style('bootkit_google_fonts');
    wp_enqueue_style('bootkit_bootstrap');
    wp_enqueue_style('bootkit_modern_business');
    wp_enqueue_style('style', get_stylesheet_uri());
    
    wp_register_script('bootkit_bootstrap', $url .
        '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', 'jquery', $ver, true);
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootkit_bootstrap');
}