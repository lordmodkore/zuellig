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
//** Set save location of ACF **/
add_filter('acf/settings/save_json', 'acf_json_save');

function acf_json_save($path)
{
    $path = get_stylesheet_directory() . '/resources/acf_json';
    return $path;
}

add_filter('acf/settings/load_json', 'acf_json_load');

function acf_json_load($paths)
{
    unset($paths[0]);

    $paths[] = get_stylesheet_directory() . '/resources/acf_json';

    return $paths;
}
function my_acf_google_map_api($api)
{
    $google_map_api = get_field('google_map_api_key','option');
    if (is_admin() && $google_map_api) {
//        $api['key'] = 'AIzaSyAEMIoWvgIBlg7CZONGIrA5ChBkapn6EE4';
        $api['key'] = $google_map_api;
    }

    return $api;
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
