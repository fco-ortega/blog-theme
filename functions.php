<?php 

function fo_theme_support() {
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
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
  wp_enqueue_style('fo-style', get_template_directory_uri() . "/style.css", array('fo-bootstrap'), $version, 'all');
  wp_enqueue_style('fo-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
  wp_enqueue_style('fo-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
  wp_enqueue_style('fo-slick', "https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css", array(), '1.8.1', 'all');
}

add_action('wp_enqueue_scripts', 'fo_register_styles');

function fo_register_scripts() {
  wp_enqueue_script('fo-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
  wp_enqueue_script('fo-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
  wp_enqueue_script('fo-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true);
  wp_enqueue_script('fo-slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), '1.8.1', true);
  wp_enqueue_script('fo-main', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'fo_register_scripts');

function fo_widget_areas() {
  register_sidebar(
    array(
      'before_title' => '',
      'after_title' => '',
      'before_widget' => '',
      'after_widget' => '',
      'name' => 'Sidebar Area',
      'id' => 'sidebar-1',
      'description' => 'Sidebar Widget Area'
    )
  );
  register_sidebar(
    array(
      'before_title' => '<h4>',
      'after_title' => '</h4>',
      'before_widget' => '<div class="col-md-auto">',
      'after_widget' => '</div>',
      'name' => 'Footer Area',
      'id' => 'footer-1',
      'description' => 'Footer Widget Area'
    )
  );
}

add_action('widgets_init', 'fo_widget_areas');
