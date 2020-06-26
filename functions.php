<?php


function laadstijlbladenScripts() {
    wp_enqueue_style( 'stijl', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style( 'font RickThema', '//fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap');
    wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array ( 'jquery' ), 1.5, true);
}

add_action('init', 'laadstijlbladenScripts');


function registreer_menu()  {
    $argumenten = array(
        'hoofd-menu' => __( 'Hoofd menu ')
    );
    register_nav_menus($argumenten);
}
add_action('init', 'registreer_menu');


function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'init', 'register_navwalker' );

function registreer_widgets() {
    register_sidebar(
        array(
            'id' => 'aside',
            'name' => __('widget aside'),
            'description' => __('widget voor het aside-element'),
            'before_widget' => '<div class="widget-aside">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-titel">',
            'after_title'   => '</h3>',

        )
    );
    register_sidebar(
        array(
            'id' => 'onder',
            'name' => __('widget footer'),
            'description' => __('widget voor de footer'),
            'before_widget' => '<div class="widget-footer">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-footer-titel">',
            'after_title'   => '</h3>',

        )
    );
}
add_action( 'init', 'registreer_widgets' );
