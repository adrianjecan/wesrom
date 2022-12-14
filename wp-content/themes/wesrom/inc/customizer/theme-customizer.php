<?php

//custom logo support
function custom_logo_setup() {
    $defaults = array(
        // 'height'      => 25,
        // 'width'       => 80,
        // 'flex-height' => false,
        // 'flex-width'  => false,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'custom_logo_setup' );

function custom_new_menu() {
  register_nav_menu('wesrom-custom-menu',__( 'Main Menu' ));
}
add_action( 'init', 'custom_new_menu' );
