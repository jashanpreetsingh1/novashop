<?php
/**
 * Admin new order email - NovaShop Styled
 */

use Automattic\WooCommerce\Utilities\FeaturesUtil;
defined( 'ABSPATH' ) || exit;
$email_improvements_enabled = FeaturesUtil::feature_is_enabled( 'email_improvements' );
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<style>
    body { margin:0; padding:0; background:#f0f2f2; font-family:Arial,sans-serif; }
    .email-wrapper { max-width:600px; margin:0 auto; background:#ffffff; }
    
    /* HEADER */
    .email-header { background:#131921; padding:24px 32px; text-align:center; }
    .email-header .logo { color:#ffffff; font-size:26px; font-weight:800; text-decoration:none; }
    .email-header .logo span { color:#ff9900; }
    .email-header p { color:#aaa; font-size:13px; margin:6px 0 0; }
    
    /* BANNER */
    .email-banner { background:linear-gradient(135deg,#1a2744,#131921); padding:28px 32px; text-align:center; }
    .email-banner h1 { color:#ffffff; font-size:22px; font-weight:800; margin:0 0 8px; }
    .email-banner p { color:#ccc; font-size:14px; margin:0; }
    .email-badge { display:inline-block; background:#ff9900; color:#131921; font-size:12px; font-weight:700; padding:4px 14px; border-radius:20px; margin-bottom:12px; }

    /* CONTENT */
    .email-body { padding:32px; }
    .email-body p { font-size:15px; color:#333; line-height:1.7; margin-bottom:16px; }
    
    /* ORDER BOX */
    .order-box { background:#f0f2f2; border-radius:8px; padding:20px 24px; margin:20px 0; border-left:4px solid #ff9900; }
    .order-box h2 { font-size:16px; font-weight:700; color:#131921; margin:0 0 12px; }
    
    /* BUTTON */
    .email-btn { display:inline-block; background:#ff9900; color:#131921; font-weight:700; font-size:15px; padding:12px 28px; border-radius:6px; text-decoration:none; margin:16px 0; }

    /* FOOTER */
    .email-footer { background:#131921; padding:20px 32px; text-align:center; }
    .email-footer p { color:#888; font-size:12px; margin:4px 0; }
    .email-footer a { color:#ff9900; text-decoration:none; }
</style>
</head>
<body>
<div class="email-wrapper">

    <!-- HEADER -->
    <div class="email-header">
        <div class="logo">Nova<span>Shop</span></div>
        <p>Student Tech & Gadgets Store</p>
    </div>

    <!-- BANNER -->
    <div class="email-banner">
        <span class="email-badge">🛒 New Order Received</span>
        <h1>You've Got a New Order!</h1>
        <p>A customer just placed an order on NovaShop</p>
    </div>

    <!-- BODY -->
    <div class="email-body">
        <p>Hi NovaShop Admin,</p>
        <p>
            <?php
            $text = __( 'You\'ve received a new order from %s:', 'woocommerce' );
            printf( esc_html( $text ), '<strong>' . esc_html( $order->get_formatted_billing_full_name() ) . '</strong>' );
            ?>
        </p>

        <div class="order-box">
            <h2>📦 Order Details</h2>
            <?php do_action( 'woocommerce_email_order_details', $order, $sent_to_admin, $plain_text, $email ); ?>
        </div>

        <?php do_action( 'woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text, $email ); ?>
        <?php do_action( 'woocommerce_email_customer_details', $order, $sent_to_admin, $plain_text, $email ); ?>

        <?php if ( $additional_content ) : ?>
            <?php echo wp_kses_post( wpautop( wptexturize( $additional_content ) ) ); ?>
        <?php endif; ?>

        <center>
            <a href="<?php echo esc_url( admin_url( 'post.php?post=' . $order->get_id() . '&action=edit' ) ); ?>" class="email-btn">
                View Order →
            </a>
        </center>
    </div>

    <!-- FOOTER -->
    <div class="email-footer">
        <p>© 2026 <a href="#">NovaShop</a> — Smart Tech for Students</p>
        <p>Toronto, ON, Canada | hello@novashop.demo</p>
    </div>

</div>
</body>
</html>

<?php do_action( 'woocommerce_email_footer', $email ); ?>
