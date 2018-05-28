<?php
//css
add_action('wp_enqueue_scripts', 'reb_theme_styles');
function reb_theme_styles(){
  wp_enqueue_style("main_css", get_template_directory_uri()."/style.css");
}

//js
add_action('wp_enqueue_scripts', 'reb_theme_js');
function reb_theme_js(){
  wp_enqueue_script("nav_js", get_template_directory_uri()."/hamburger.js", '', '', true);
}

//remove admin bar
add_filter('show_admin_bar', '__return_false');
