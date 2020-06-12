<?php

function laadStijlblad() {
  wp_enqueue_style('stijl', get_stylesheet_uri() );
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );

}

add_action('init', 'laadStijlblad');

function registreer_menu() {
  $argumenten = array(
    'hoofd-menu' => __('Hoofd menu')
  );
  registreer_nav_menus();
}
add_action('init', 'registreer_menu');
