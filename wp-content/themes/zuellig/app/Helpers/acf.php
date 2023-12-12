<?php

// Add theme option menu
if (function_exists('acf_add_options_page')) {
    $parent = acf_add_options_page(array(
        'page_title' => 'Theme  Options',
        'menu_title' => 'Theme Options',
        'menu_slug'  => 'theme-options',
        'capability' => 'edit_posts',
        'redirect'   => true
    ));
}
