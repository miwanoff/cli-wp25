<?php
/*
Plugin Name: Load More Button
Plugin URI: http://ex.com/
Description: Simple Load More Button plugin with AJAX
Автор: MAI
Version: 1.1
Author URI: http://ex.com/
 */

function create_button_and_script()
{
    global $wp_query;
// Не можна відтворювати button if there not enough posts
    if ($wp_query->max_num_pages > 1) {
        echo '<div class="container">
    <div id="bootkit_loadmore" class="btn btn-primary">Load more</div>
</div>';
        echo "\n<script>\n";
        echo "var ajaxurl = '". site_url(). "/wp-admin/admin-ajax.php';\n";
        echo "var bootkit_posts = '". serialize($wp_query->query_vars) . "';\n";
        $n = (get_query_var('paged')) ? get_query_var('paged'): 1;
        echo "var current_page=". $n . ";\n";
        echo "var max_pages=". $wp_query->max_num_pages . ";\n";
        echo "</script>\n";
    }
}

add_action('get_footer', 'create_button_and_script');