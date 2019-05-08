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
    register_post_type('social_media', [
        'label' => 'Social media',
        'labels' => [
            'singular_name' => 'Social media',
            'add_new_item' => 'Add a social media',
        ],
        'public' => true,
        'description' => 'A list of the social media',
        'menu_icon' => 'dashicons-share',
        'menu_position' => 2
    ]);
}

add_action('init', 'dw_register_post_types');
