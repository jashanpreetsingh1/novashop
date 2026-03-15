<?php

function mytheme_setup() {

    add_theme_support('wp-block-styles');
    add_theme_support('block-patterns'); // IMPORTANT

    add_editor_style('style.css');

}

add_action('after_setup_theme', 'mytheme_setup');


// enqueue style sheet
function mytheme_enqueue_styles() {

    wp_enqueue_style(
        'mytheme-main-style',
        get_template_directory_uri() . '/assets/css/style.css',
        array(),
        '1.0'
    );

}

add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');


// Pattern category
function novashop_pattern_category() {
    register_block_pattern_category(
        'novashop',
        array( 'label' => __( 'NovaShop Patterns', 'novashop' ) )
    );
}

add_action( 'init', 'novashop_pattern_category' );