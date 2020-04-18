<?php

  function vantage_files() {
    wp_enqueue_script('vantage_js', get_theme_file_uri('/js/app.js'), array('jquery'), NULL, '1.0', true);
    wp_enqueue_style('vantage_main_style', get_stylesheet_uri());
  }

  add_action('wp_enqueue_scripts', 'vantage_files');

  function vantage_features() {
    add_theme_support('post-thumbnails');
  }

  add_action('after_setup_theme', 'vantage_features');

  function remove_img_attr($html) {
    return preg_replace('/(width|height)="\d+"\s/', "", $html);
  }

  add_filter('post_thumbnail_html', 'remove_img_attr');