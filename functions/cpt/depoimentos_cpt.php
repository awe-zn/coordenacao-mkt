<?php

function register_depoimentos_cpt()
{

  $args = array(
    'labels' => array(
      'name' => 'Depoimentos',
      'singular_name' => 'Depoimento',
    ),
    'public' => true,
    'has_archive' => true,
    'supports' => array('title', 'editor', 'thumbnail', 'categories'),
    'menu_icon' => 'dashicons-admin-users',
  );

  register_post_type('depoimentos', $args);
}
add_action('init', 'register_depoimentos_cpt');