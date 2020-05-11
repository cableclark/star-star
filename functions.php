<?php

function swork_script_enqueue () {

    wp_enqueue_style('sworkstyle', get_template_directory_uri() . '/css/swork.css', array(), '1.0.0', 'all');

    wp_enqueue_script('swork', get_template_directory_uri() . '/js/swork.js', array(), '1.0.0', true);
   
    wp_enqueue_script('sworkscript', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true);

    wp_enqueue_style('bulma',  'https://cdn.jsdelivr.net/npm/bulma@0.8.2/css/bulma.min.css', array(), '1.0.0', 'all');

 

}

add_action('wp_enqueue_scripts', 'swork_script_enqueue');


function swork_theme_setup () {

    add_theme_support('menus');

    register_nav_menus(array(
        "primary" => __('The main menu', 'Sworktheme')
        )
    );
    add_theme_support('title-tag');

}

add_action('after_setup_theme', 'swork_theme_setup');

add_theme_support('custom-background');

add_theme_support('custom-header');

add_theme_support('post-thumbnails');

add_theme_support('post-formats', array('aside','video','image'));


function wp_nav_menu_no_list()
{
    $options = array(
        'echo' => false,
        'container' => false,
        'theme_location' => 'primary',
        'fallback_cb'=> 'fall_back_menu'
    );

    $menu = wp_nav_menu($options);
    $noul=  preg_replace(array(
        '#^<ul[^>]*>#',
        '#</ul>$#'
    ), '', $menu);

    echo preg_replace(array(
        '#^<li[^>]*>#',
        '#</li>$#'
    ), '', $noul);

}

function fall_back_menu(){
    return;
}


