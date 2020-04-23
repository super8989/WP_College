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
    // dynamic navigation menu
    // register_nav_menu('headerMenuLocation', 'Header Menu Location'); // adds menu option to the theme -> ('menu location', 'name to show in WP admin' )
    // register_nav_menu('footerLocationOne', 'Footer Location One');
    // register_nav_menu('footerLocationTwo', 'Footer Location Two');
    add_theme_support('title-tag'); // adds document title tag to HTML -> browser tab title
}

add_action('after_setup_theme', 'university_features');


// Creating a new post type, Event --> moved to mu-plugins folder so this data is available across all themes
/* function university_post_types()
{
    // ('name of custom post type', 'array')
    register_post_type('event', array(
        'public' => true,
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => "Add New Event",
            'edit_item' => "Edit Event",
            'all_items' => 'All Events',
            'singular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-calendar'
    ));
}

// create new post type
add_action('init', 'university_post_types');  // ('hook', 'function name') */