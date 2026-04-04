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


// WOOCOMMERCE STYLING - Match NovaShop theme
// Styles shop, cart, checkout, account pages

function novashop_woo_styles() { ?>
<style>

/* Orange buttons on all WooCommerce pages */
.woocommerce a.button,
.woocommerce button.button,
.woocommerce input.button,
.woocommerce #place_order,
.woocommerce .checkout-button,
.woocommerce button.button.alt,
.woocommerce a.button.alt {
    background:#ff9900 !important;
    color:#131921 !important;
    font-weight:700 !important;
    border-radius:6px !important;
    border:none !important;
}
.woocommerce a.button:hover,
.woocommerce button.button:hover,
.woocommerce button.button.alt:hover,
.woocommerce #place_order:hover {
    background:#e47911 !important;
    color:#131921 !important;
}

/* Shop page - product grid */
.woocommerce ul.products {
    display:grid !important;
    grid-template-columns:repeat(3,1fr) !important;
    gap:24px !important;
    float:none !important;
    margin:0 !important;
    padding:0 !important;
    list-style:none !important;
}
.woocommerce ul.products li.product {
    float:none !important;
    width:auto !important;
    margin:0 !important;
    background:#fff !important;
    border:1px solid #d5d9d9 !important;
    border-radius:8px !important;
    overflow:hidden !important;
    box-shadow:0 2px 8px rgba(0,0,0,0.08) !important;
    transition:all 0.2s !important;
}
.woocommerce ul.products li.product:hover {
    transform:translateY(-4px) !important;
    box-shadow:0 8px 24px rgba(0,0,0,0.14) !important;
    border-color:#ff9900 !important;
}
.woocommerce ul.products li.product img {
    width:100% !important;
    height:200px !important;
    object-fit:cover !important;
    display:block !important;
    margin:0 !important;
}
.woocommerce ul.products li.product .woocommerce-loop-product__title {
    font-size:15px !important;
    font-weight:600 !important;
    color:#0f1111 !important;
    padding:12px 14px 4px !important;
}
.woocommerce ul.products li.product .price {
    padding:4px 14px 8px !important;
    font-size:16px !important;
    font-weight:700 !important;
}
.woocommerce ul.products li.product .price del {
    color:#999 !important;
    font-size:13px !important;
}
.woocommerce ul.products li.product .price ins {
    text-decoration:none !important;
    color:#cc0c39 !important;
}
.woocommerce ul.products li.product a.button {
    margin:4px 14px 14px !important;
    width:calc(100% - 28px) !important;
    display:block !important;
    text-align:center !important;
}

/* Sale badge */
.woocommerce span.onsale {
    background:#cc0c39 !important;
    border-radius:4px !important;
    min-height:auto !important;
    min-width:auto !important;
    padding:3px 8px !important;
    font-size:11px !important;
    font-weight:700 !important;
}

/* Shop page container */
.woocommerce-page .woocommerce,
.woocommerce {
    max-width:1200px !important;
    margin:0 auto !important;
    padding:40px 24px !important;
}

/* Shop page title */
h1.woocommerce-page-title {
    font-size:26px !important;
    font-weight:700 !important;
    border-left:4px solid #ff9900 !important;
    padding-left:14px !important;
    margin-bottom:28px !important;
}

/* Product single page */
.woocommerce div.product .product_title {
    font-size:26px !important;
    font-weight:800 !important;
    color:#0f1111 !important;
}
.woocommerce div.product p.price {
    font-size:28px !important;
    font-weight:800 !important;
}
.woocommerce div.product p.price del { color:#999 !important; }
.woocommerce div.product p.price ins {
    text-decoration:none !important;
    color:#cc0c39 !important;
}
.woocommerce div.product .single_add_to_cart_button {
    background:#ff9900 !important;
    color:#131921 !important;
    font-size:16px !important;
    font-weight:700 !important;
    padding:14px 32px !important;
    border-radius:6px !important;
    border:none !important;
}
.woocommerce div.product .single_add_to_cart_button:hover {
    background:#e47911 !important;
}

/* Cart page table */
.woocommerce-cart table.cart th {
    background:#131921 !important;
    color:#fff !important;
    padding:14px 16px !important;
}
.woocommerce-cart table.cart td {
    padding:16px !important;
    border-bottom:1px solid #f0f0f0 !important;
    vertical-align:middle !important;
}
.woocommerce-cart table.cart img {
    width:80px !important;
    height:80px !important;
    object-fit:cover !important;
    border-radius:6px !important;
}
.woocommerce-cart .cart_totals h2 {
    font-size:20px !important;
    font-weight:700 !important;
    padding-left:12px !important;
    border-left:4px solid #ff9900 !important;
    margin-bottom:16px !important;
}

/* Checkout page */
.woocommerce-checkout h3 {
    font-size:20px !important;
    font-weight:700 !important;
    padding-left:12px !important;
    border-left:4px solid #ff9900 !important;
    margin-bottom:20px !important;
}
.woocommerce-checkout .form-row input,
.woocommerce-checkout .form-row select,
.woocommerce-checkout .form-row textarea {
    border:1px solid #d5d9d9 !important;
    border-radius:6px !important;
    padding:10px 14px !important;
    font-size:15px !important;
    width:100% !important;
}
.woocommerce-checkout .form-row input:focus {
    border-color:#ff9900 !important;
}

/* My Account page */
.woocommerce-account .woocommerce-MyAccount-navigation {
    background:#fff !important;
    border-radius:8px !important;
    padding:16px !important;
    box-shadow:0 2px 8px rgba(0,0,0,0.08) !important;
}
.woocommerce-account .woocommerce-MyAccount-navigation ul {
    list-style:none !important;
    padding:0 !important;
    margin:0 !important;
}
.woocommerce-account .woocommerce-MyAccount-navigation ul li {
    border-bottom:1px solid #f0f0f0 !important;
}
.woocommerce-account .woocommerce-MyAccount-navigation ul li a {
    display:block !important;
    padding:12px 16px !important;
    color:#0f1111 !important;
    text-decoration:none !important;
    font-weight:600 !important;
    transition:all 0.2s !important;
}
.woocommerce-account .woocommerce-MyAccount-navigation ul li a:hover,
.woocommerce-account .woocommerce-MyAccount-navigation ul li.is-active a {
    background:#ff9900 !important;
    color:#131921 !important;
    border-radius:6px !important;
}
.woocommerce-account .woocommerce-MyAccount-content {
    background:#fff !important;
    border-radius:8px !important;
    padding:28px !important;
    box-shadow:0 2px 8px rgba(0,0,0,0.08) !important;
}

/* Responsive shop grid */
@media(max-width:900px) {
    .woocommerce ul.products {
        grid-template-columns:repeat(2,1fr) !important;
    }
}
@media(max-width:500px) {
    .woocommerce ul.products {
        grid-template-columns:1fr !important;
    }
}

</style>
<?php }
add_action('wp_head', 'novashop_woo_styles');




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