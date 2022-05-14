<?php

function stk_load_scripts(){
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '5.1.3', 'all');
  wp_enqueue_style('stk', get_template_directory_uri() . '/css/stk.css', array(), '1.0.0', 'all');

  wp_deregister_script('jquery');
  wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', false, '3.3.1', true);
  wp_enqueue_script('jquery');

  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '5.1.3', true);
  wp_enqueue_script('stk', get_template_directory_uri() . '/js/stk.js', array('jquery'), '1.0.0', true);

}
add_action('wp_enqueue_scripts', 'stk_load_scripts');