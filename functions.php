<?php

function university_files()
{
    // load CSS or JS files
    wp_enqueue_style('university_main_styles', get_stylesheet_uri());
    // wp function('main stylesheet', 'location of file' (or wp function))
}

add_action('wp_enqueue_scripts', 'university_files'); // wp function('load a CSS or JS file', 'function')