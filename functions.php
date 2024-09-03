<?php 

function recipe_assets() {
    wp_enqueue_style('main-style', get_template_directory_uri() . '/style/main.css', microtime());
}

add_action('wp_enqueue_scripts', 'recipe_assets');

function recipe_theme_support() {

    add_theme_support( 'post-thumbnails');
    add_theme_support( 'custom-logo');
    add_theme_support( 'menus');
    add_theme_support( 'title-tag');

    register_nav_menu('header_menu', 'Header Menu');
} 

add_action('after_setup_theme', 'recipe_theme_support');

function recipe_custom_post() {
    // WEEKLY
    $weekly_label = array(
        'name' => __('Weekly', 'textdomain'),
        'singular_name' => __('Weekly', 'textdomain'),
        'add_new' => __('Add Weekly', 'textdomain'),
        'edit_item' => __('Edit Weekly', 'textdomain'),
        'add_new_item' => __('Add New Weekly', 'textdomain'),
        'all_items' => __('Weekly', 'textdomain'),

    );
    $weekly_args = array(
        'labels' => $weekly_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
    );
        register_post_type('weekly', $weekly_args);

    // CLASSIC
    $classic_label = array(
        'name' => __('Classic', 'textdomain'),
        'singular_name' => __('Classic', 'textdomain'),
        'add_new' => __('Add Classic', 'textdomain'),
        'edit_item' => __('Edit Classic', 'textdomain'),
        'add_new_item' => __('Add New Classic', 'textdomain'),
        'all_items' => __('Classic', 'textdomain'),
    );

    $classic_args = array(
        'labels' => $classic_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
    );
        register_post_type('classic', $classic_args);
}

add_action ('init', 'recipe_custom_post');

