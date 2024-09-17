<?php
/*
Plugin Name: Add custom event
Description: Add custom event
Author: rot dep trai
Version: 1
*/
function university_post_types()
{

    register_post_type('event', array(

        'show_in_rest' => true,
        'public' => true,
        'supports' => array('title', 'editor', 'excerpt','thumbnail', 'description'),
        'labels' => array(
            'name' => 'sự kiện',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-calendar'
    ));
    register_post_type('program', array(

        'show_in_rest' => true,
        'public' => true,
        'supports' => array('title', 'editor', 'excerpt','thumbnail', 'description'),
        'labels' => array(
            'name' => 'Programs',
            'add_new_item' => 'Add New Program',
            'edit_item' => 'Edit Program',
            'all_items' => 'All Programs',
            'singular_name' => 'Program'
        ),
        'menu_icon' => 'dashicons-calendar'
    ));
}
add_action('init', 'university_post_types');

