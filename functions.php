<?php

function mofi_enqueue_scripts()
{
    wp_enqueue_style('mofi-style', get_stylesheet_directory_uri() . '/style.css', [], '0.1.0');
}
add_action('wp_enqueue_scripts', 'mofi_enqueue_scripts');

function mofi_admin_init()
{
    add_editor_style('style.css');
}
add_action('admin_init', 'mofi_admin_init');
