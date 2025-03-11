<?php

function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/css/style.css', array('parent-style'), filemtime(get_stylesheet_directory() . '/css/style.css'));
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}


/////////////  Ajout des fichiers JavaScript  /////////////
function enqueue_custom_scripts() {
    // Pour main.js avec version 1.1
    wp_enqueue_script(
        'foce-main-script',
        get_stylesheet_directory_uri() . '/scripts/main.js',
        array(), // dépendances (vide dans ce cas)
        '1.1',
        true // charger dans le footer
    );
    
    // Pour slider.js
    wp_enqueue_script(
        'foce-slider-script',
        get_stylesheet_directory_uri() . '/scripts/slider.js',
        array(), // dépendances (vide ou spécifier jQuery si nécessaire)
        null, // pas de version spécifiée
        true // charger dans le footer
    );
}

// Ajouter l'action pour exécuter la fonction lors du chargement des scripts
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');


/////////////  Ajout de SwiperJS  ///////////// 
function ajouter_swiper() {
    // Ajouter le CSS de Swiper
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), null);

    // Ajouter le JS de Swiper
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'ajouter_swiper');



?>