<?php

/*
 *
 * please include files in alphabetical order
 *
 */
include_once('inc/remove-junk.php');

include_once('inc/customizer/theme-customizer.php');

add_theme_support('post-thumbnails');

function add_theme_scripts() {
    wp_enqueue_style('wesrom', get_stylesheet_uri());
    wp_enqueue_script('wesrom', get_template_directory_uri() . '/assets/js/wesrom.js', array('jquery'), false, false);

    $error_messages = array(
        'required' => __('This field is required'),
        'email' => __('Please insert a valid email'),
        'website' => __('Please insert a valid website URL')
    );
    
    wp_localize_script('wesrom', 'errors', $error_messages);
}

error_log(get_template_directory_uri() . '/assets/js/wesrom.js');
add_action('wp_enqueue_scripts', 'add_theme_scripts');

//add_filter('use_block_editor_for_post', '__return_false');
add_filter('use_widgets_block_editor', '__return_false');

if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'Footer widget 1',
        'before_widget' => '<div class = "footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
            )
    );
    register_sidebar(array(
        'name' => 'Footer widget 2',
        'before_widget' => '<div class = "footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
            )
    );
    register_sidebar(array(
        'name' => 'Footer widget 3',
        'before_widget' => '<div class = "footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
            )
    );
    register_sidebar(array(
        'name' => 'Footer widget 4',
        'before_widget' => '<div class = "footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
            )
    );
}