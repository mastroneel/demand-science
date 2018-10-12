<?php

function demandscience_script_enqueue() {

  wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/demand-science.css', array(), '1.0.1', 'all');
  wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js', array(), '3.3.1', true);
  wp_enqueue_script('customjs', get_template_directory_uri() . '/js/demand-science.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'demandscience_script_enqueue');

function demandscience_theme_setup() {

  add_theme_support('menus');

  register_nav_menu('navbar', 'Upper navigation menu');
  register_nav_menu('mobilenavbar', 'Mobile navigation menu');
  register_nav_menu('logo', 'Logo home button');
  register_nav_menu('footer', 'Footer navigation menu');
  register_nav_menu('iconmenu', 'Footer icon menu');
  register_nav_menu('whymenu', 'Footer why menu');
  register_nav_menu('solutionsmenu', 'Footer solutions menu');
  register_nav_menu('contactmenu', 'Footer contact menu');
  register_nav_menu('lowerfootermenu', 'Lower footer menu');

}

add_action('init', 'demandscience_theme_setup');

?>
