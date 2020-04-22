<?php

function university_files()
{
    //load JS script
    wp_enqueue_script('main-university-js', get_theme_file_uri('/js/scripts-bundled.js'), null, microtime(), true);
    // wp function('file name', 'location', 'does it have dependencies?', 'version' (during dev, microtime function to reload new scripts every refresh = avoids caching, 'load before closing body tag?')

    // load multiple CSS
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('university_main_styles', get_stylesheet_uri(), null, microtime());
    // wp function('main stylesheet', 'location of file' (or wp function), dependecies, version)
}

add_action('wp_enqueue_scripts', 'university_files'); // wp function('load a CSS or JS file', 'function name')


function university_features()
{
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'university_features');