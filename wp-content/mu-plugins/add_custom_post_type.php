<?php

function university_post_types()
{
    register_taxonomy('category_event', 'book', [
        'labels' => 'Danh muc su kien',
    ]);
    register_post_type('event', array(
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom_fields'), // ACF tự động xử lý trường tùy chỉnh
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'su-kien'),
        'taxonomies' => ['category_event'],
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-calendar',
    ));
    register_taxonomy('category_program', 'book', [
        'labels' => 'Danh muc chuong trinh',
    ]);
    register_post_type('program', array(
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom_fields'), // ACF tự động xử lý trường tùy chỉnh
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'blogs'),
        'taxonomies' => ['category_program'],
        'labels' => array(
            'name' => 'Programs',
            'add_new_item' => 'Add New Program',
            'edit_item' => 'Edit Program',
            'all_items' => 'All Programs',
            'singular_name' => 'Program'
        ),
        'menu_icon' => 'dashicons-calendar',
    ));
}
add_action('init', 'university_post_types');

