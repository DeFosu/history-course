<?php

add_action("wp_enqueue_scripts", "course_styles");


function course_styles()
{
    wp_enqueue_style("style", get_stylesheet_uri());
}
