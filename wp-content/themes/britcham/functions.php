<?php
function add_css()
{
   wp_register_style('first', get_template_directory_uri() . '/style.css', false,'1.1','all');
   wp_enqueue_style( 'first');
}
add_action('wp_enqueue_scripts', 'add_css');

function add_script()
{
   wp_register_script('js-script', get_template_directory_uri() . 'js/jquery-3.5.1.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'js-script');
  
   
  
   wp_register_script('bootstrap', get_template_directory_uri() . 'js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'bootstrap');
}
add_action('wp_enqueue_scripts', 'add_script');