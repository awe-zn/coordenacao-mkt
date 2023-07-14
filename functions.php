<?php

include 'functions/contact_page.php';

// cpt

include 'functions/cpt/projeto_cpt.php';
include 'functions/cpt/depoimentos_cpt.php';

add_theme_support('menus');

function theme_setup()
{
  register_nav_menus(
    array(
      'primary' => 'Menu Principal',
    )
  );
}
add_action('after_setup_theme', 'theme_setup');

function custom_excerpt()
{
  $excerpt = get_the_excerpt();

  if (mb_strlen($excerpt) > 20) {
    $excerpt = mb_substr($excerpt, 0, 150) . ' [...]';
  }

  echo $excerpt;
}