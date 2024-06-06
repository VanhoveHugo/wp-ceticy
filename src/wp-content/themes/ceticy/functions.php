<?php

require_once get_stylesheet_directory() . '/functions-newsletter.php';

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('ceticy-style', get_stylesheet_uri());
});