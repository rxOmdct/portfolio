<?php
/**
 * Configuration du thème et chargement des assets.
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

/* ------------------------------------------------------------
 * Setup
 * ------------------------------------------------------------ */
function prd_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );

    register_nav_menus( array(
        'primary' => __( 'Menu principal', 'portfolio-rd' ),
    ) );
}
add_action( 'after_setup_theme', 'prd_setup' );

/* ------------------------------------------------------------
 * Assets
 * ------------------------------------------------------------ */
function prd_enqueue_assets() {
    wp_enqueue_style(
        'prd-fonts',
        'https://fonts.googleapis.com/css2?family=Fraunces:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap',
        array(),
        null
    );
    wp_enqueue_style( 'prd-main', get_stylesheet_uri(), array( 'prd-fonts' ), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_script( 'prd-main', get_template_directory_uri() . '/assets/js/main.js', array(), wp_get_theme()->get( 'Version' ), true );
}
add_action( 'wp_enqueue_scripts', 'prd_enqueue_assets' );
