<?php
function meutema_enqueue_assets() {
    // CSS do Bootstrap & Icons
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css');
    
    // CSS Principal do Tema
    wp_enqueue_style('meutema-style', get_stylesheet_uri());

    // JS do Bootstrap
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'meutema_enqueue_assets');

function meutema_setup() {
    // Suporte a título dinâmico e imagens destacadas
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    // Registrar Menu Principal
    register_nav_menus(array(
        'primary_menu' => 'Menu Principal',
    ));
}
add_action('after_setup_theme', 'meutema_setup');