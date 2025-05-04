<?php

function bootkit_enqueue()
{
    $url = get_theme_file_uri();
    wp_register_style('bootkit_google_fonts', 'https://fonts.googleapis.com/css?family=Open+Sans&display=swap'); // Google fonts
    wp_register_style('bootkit_bootstrap', $url . '/assets/vendor/bootstrap/css/bootstrap.min.css'); //bootstrap.min.css
    wp_register_style('bootkit_modern_business', $url . '/assets/css/modern-business.css'); // modern-business.css
}