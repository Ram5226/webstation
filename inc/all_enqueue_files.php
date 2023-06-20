<?php



function webstation_css_js_files_calling()
{
  wp_enqueue_style('webstation_main_css', get_template_directory_uri() . './assets/css/scss/style.css');
  wp_enqueue_style('webstation_main_js', get_template_directory_uri() . './assets/js/main.js', array(), '1.0.1', true);
}
add_action('wp_enqueue_scripts', 'webstation_css_js_files_calling');