<?php 

function fo_theme_support() {
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'fo_theme_support');

function fo_menus() {
  $locations = array(
    'primary' => 'desktop sidebar',
    'footer' => 'footer menu'
  );

  register_nav_menus($locations);
}

add_action('init', 'fo_menus');

function fo_register_styles() {
  $version = wp_get_theme()->get('Version');
  wp_enqueue_style('fo-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
  /* wp_enqueue_style('fo-bootstrap', get_template_directory_uri() . "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '1.0', 'all'); */
  /* wp_enqueue_style('fo-fontawesome', get_template_directory_uri() . "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '1.0', 'all'); */
}

add_action('wp_enqueue_scripts', 'fo_register_styles');

function fo_register_scripts() {
  wp_enqueue_script('fo-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
  wp_enqueue_script('fo-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
  wp_enqueue_script('fo-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true);
  wp_enqueue_script('fo-main', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'fo_register_scripts');
