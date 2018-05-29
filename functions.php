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

//widgets to sidebar
function reb_create_widget($name, $id, $description){
  register_sidebar(array(
    'name'=>__($name),
    'id'=>$id,
    'description'=>__($description),
    'before_widget'=>'<div class="widget">',
    'after_widget'=>'</div>',
    'before_title'=>'<h2 class="module_heading">',
    'after_title'=>'</h2>',
  ));
}

reb_create_widget("Page Sidebar", 'page', "Displays on the side of pages");
