<?php


// Activate Wordpress components
add_theme_support( 'post-thumbnails' );


//Register main menu
register_nav_menu( 'main', 'navigation principale' );
register_nav_menu( 'footer', 'navigation fin de page' );

//Get menu structure as array

function dw_getMenu(){
    $menu = [];
    $locations = get_nav_menu_locations();

    foreach (wp_get_nav_menu_items($locations['main']) as $post) {
        $item = new stdClass();
        $item->url = $post->url;
        $item->label = $post->title;
        $item->children = [];

        if (!$post->menu_item_parent) {
            $menu[$post->ID] = $item;
        } else {
            $menu[$post->menu_item_parent]->children[$post->id] = $item;
        }
    };

    return $menu;
}

//Register Custom Post Type

function dw_register_post_types() {
    register_post_type('experience', [
        'label' => 'experience',
        'labels' => [
            'singular_name' => 'experience',
            'add_new_item' => 'Add a experience',
        ],
        'public' => true,
        'description' => 'A list of the experiences',
        'menu_icon' => 'dashicons-hammer',
        'menu_position' => 2
    ]);
    register_post_type('project', [
        'label' => 'project',
        'labels' => [
            'singular_name' => 'project',
            'add_new_item' => 'Add a project',
        ],
        'public' => true,
        'description' => 'A list of the projects',
        'menu_icon' => 'dashicons-admin-customizer',
        'menu_position' => 2
    ]);
}

add_action('init', 'dw_register_post_types');

/* Autoriser les fichiers SVG */
function wpc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'wpc_mime_types');


