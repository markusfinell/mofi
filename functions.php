<?php

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('mofi-style', get_stylesheet_directory_uri() . '/style.css', [], '0.1.0');
});

add_action('admin_init', function () {
    add_editor_style('style.css');
});
