<?php

function university_post_types()
{
    register_taxonomy('category_event', 'book', [
        'labels' => 'Danh muc su kien',
    ]);
    register_post_type('event', array(

        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'excerpt','thumbnail',),
        'rewrite' => array('slug' => 'su-kien'),
        'has_archive' => true,
        'public' => true,
        'taxonomies' => ['category_event'],
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-calendar'
    ));
    // register_post_type('progeam', array(

    //     'show_in_rest' => true,
    //     'supports' => array('title', 'editor', 'excerpt','thumbnail',),
    //     // 'rewrite' => array('slug' => 'su-kien'),
    //     // 'has_archive' => true,
     
    //     'public' => true,
    //     'labels' => array(
    //         'name' => 'Programs',
    //         'add_new_item' => 'Add New Program',
    //         'edit_item' => 'Edit Programs',
    //         'all_items' => 'All Programs',
    //         'singular_name' => 'Program'
    //     ),
    //     'menu_icon' => 'dashicons-calendar'
    // ));
}
add_action('init', 'university_post_types');

