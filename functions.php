<?php

function mytheme_setup() {
    add_theme_support('wp-block-styles');
    add_theme_support('block-patterns');
    add_editor_style('style.css');
}
add_action('after_setup_theme', 'mytheme_setup');

// Enqueue stylesheet
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
add_action('init', 'novashop_pattern_category');

// WooCommerce basic styling
function novashop_woo_styles() { ?>
<style>
.woocommerce a.button,
.woocommerce button.button,
.woocommerce #place_order,
.woocommerce .checkout-button {
    background:#ff9900 !important;
    color:#131921 !important;
    font-weight:700 !important;
    border-radius:6px !important;
    border:none !important;
}
.woocommerce a.button:hover,
.woocommerce button.button:hover,
.woocommerce #place_order:hover {
    background:#e47911 !important;
}
.woocommerce ul.products li.product img {
    height:200px !important;
    object-fit:cover !important;
}
.woocommerce span.onsale {
    background:#cc0c39 !important;
    border-radius:4px !important;
    min-height:auto !important;
    min-width:auto !important;
}
</style>
<?php }
add_action('wp_head', 'novashop_woo_styles');