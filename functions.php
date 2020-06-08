<?php

function laadStijlblad() {
  wp_enqueue_style('stijl', get_stylesheet_uri() );
}

add_action('init', 'laadStijlblad');
