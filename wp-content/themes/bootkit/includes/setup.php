<?php
function bootkit_setup_theme()
{
    add_theme_support('post-thumbnails');
    register_nav_menu('primary', __('Primary Menu', 'bootkit'));
}

function posts_link_attributes()
{
    return 'class="page-link"';
}