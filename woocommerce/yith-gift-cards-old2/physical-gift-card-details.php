<?php
/**
 * Gift Card product add to cart
 *
 * @author  Yithemes
 * @package YITH WooCommerce Gift Cards
 *
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>

<input type="hidden" name="ywgc-is-physical" value="1" />

<div class="gift-card-content-editor step-content">

	<?php if ( 'yes' === get_option( 'ywgc_ask_sender_name_physical', 'no' ) ) : ?>
		<h5 class="ywgc-sender-info-title">
			<?php
			echo get_option( 'ywgc_sender_info_title', esc_html__( 'YOUR INFO', 'yith-woocommerce-gift-cards' ) );
			?>
		</h5>

		<div class="ywgc-recipient-name">
			<label for="ywgc-recipient-name"><?php echo apply_filters( 'ywgc_recipient_name_label', esc_html__( "Recipient's name: ", 'yith-woocommerce-gift-cards' ) ); ?></label>
			<input type="text" name="ywgc-recipient-name" id="ywgc-recipient-name" value="<?php echo apply_filters( 'ywgc_recipient_name_value', '' ); ?>"
				   placeholder="<?php echo esc_html__( 'Enter recipient name', 'yith-woocommerce-gift-cards' ); ?>">
		</div>
	<?php endif; ?>
</div>
