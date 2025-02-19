<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/css/style.css', array('parent-style'), filemtime(get_stylesheet_directory() . '/css/style.css'));
    wp_enqueue_script('jquery');
    wp_enqueue_script(
        'mon-theme-enfant-main', // Identifiant du script
        get_stylesheet_directory_uri() . '/scripts/main.js', // Chemin du fichier JS
        filemtime(get_stylesheet_directory() . '/scripts/main.js'), // Version dynamique basée sur la date de modification
        true // Charge le script dans le footer pour de meilleures performances
    );
}

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