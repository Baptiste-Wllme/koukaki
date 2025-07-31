<?php
// Charger le style parent + le style enfant compilé
function foce_child_enqueue_assets() {
    // Style du thème parent
    wp_enqueue_style(
        'foce-parent-style',
        get_template_directory_uri() . '/style.css'
    );

    // Style compilé Sass du thème enfant
    wp_enqueue_style(
        'foce-child-style',
        get_stylesheet_directory_uri() . '/assets/css/style.css',
        array('foce-parent-style'),
        filemtime(get_stylesheet_directory() . '/assets/css/style.css')
    );

    // JavaScript du thème enfant
    wp_enqueue_script(
        'foce-child-script',
        get_stylesheet_directory_uri() . '/assets/js/main.js',
        array(),
        filemtime(get_stylesheet_directory() . '/assets/js/main.js'),
        true    // placer le tout dans le footer
    );
}
add_action('wp_enqueue_scripts', 'foce_child_enqueue_assets');


function foce_enqueue_parallax_script() {
    wp_enqueue_script(
        'foce-parallax',
        get_stylesheet_directory_uri() . '/assets/js/parallax.js',
        array(),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'foce_enqueue_parallax_script');


// slider //

function foce_enqueue_swiper_assets() {
    wp_enqueue_style(
        'swiper-css',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
        array(),
        null
    );

    wp_enqueue_script(
        'swiper-js',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
        array(),
        null,
        true
    );

    wp_enqueue_script(
        'swiper-init',
        get_stylesheet_directory_uri() . '/assets/js/swiper-init.js',
        array('swiper-js'),
        filemtime(get_stylesheet_directory() . '/assets/js/swiper-init.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'foce_enqueue_swiper_assets');
