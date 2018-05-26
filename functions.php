<?php
add_action('wp_enqueue_scripts', 'reb_theme_styles');
function reb_theme_styles(){
  wp_enqueue_style("main_css", get_template_directory_uri()."/style.css");
}
