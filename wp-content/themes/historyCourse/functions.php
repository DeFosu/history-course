<?php

add_action("wp_enqueue_scripts", "course_styles");
add_theme_support('title-tag');
add_theme_support('automatic-feed-links');


function course_styles()
{
    wp_enqueue_style("style", get_stylesheet_uri());
}
