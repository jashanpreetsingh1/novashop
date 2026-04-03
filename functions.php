<?php


// THEME SETUP - Enable block styles and patterns

function mytheme_setup() {
    add_theme_support('wp-block-styles');
    add_theme_support('block-patterns');
    add_editor_style('style.css');
}
add_action('after_setup_theme', 'mytheme_setup');


// ENQUEUE STYLESHEET - Load main CSS file

function mytheme_enqueue_styles() {
    wp_enqueue_style(
        'mytheme-main-style',
        get_template_directory_uri() . '/assets/css/style.css',
        array(),
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');


// PATTERN CATEGORY - Register NovaShop patterns

function novashop_pattern_category() {
    register_block_pattern_category(
        'novashop',
        array( 'label' => __( 'NovaShop Patterns', 'novashop' ) )
    );
}
add_action('init', 'novashop_pattern_category');


// WOOCOMMERCE STYLING - Match theme colors

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


// CUSTOM POST TYPE - Student Reviews
// Registers post type for student testimonials
// shown on homepage using Query Loop block

function novashop_register_student_reviews() {
    register_post_type( 'student_review', array(
        'labels' => array(
            'name'          => 'Student Reviews',
            'singular_name' => 'Student Review',
            'add_new'       => 'Add New Review',
            'add_new_item'  => 'Add New Student Review',
            'edit_item'     => 'Edit Student Review',
            'view_item'     => 'View Student Review',
            'all_items'     => 'All Student Reviews',
        ),
        'public'        => true,
        'has_archive'   => true,
        'show_in_rest'  => true,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'menu_icon'     => 'dashicons-star-filled',
        'rewrite'       => array( 'slug' => 'student-reviews' ),
    ) );
}
add_action( 'init', 'novashop_register_student_reviews' );