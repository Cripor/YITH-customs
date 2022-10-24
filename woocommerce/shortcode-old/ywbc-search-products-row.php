<?php
/**
 * Template to print products in the frontend
 *
 * @package YITH\Barcodes\Templates\Shortcode
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


$product_id = yit_get_prop( $object, 'id' );
?>
<tr class="ywbc-search-row">

	<td valign="top" style="width: 16%;">
		<?php echo wp_kses_post( $object->get_image() ); ?>
	</td>

	<td valign="top" >
		<?php
		$url = $object->get_permalink();
		?>
		<a href="<?php echo esc_url( $url ); ?>"><?php echo wp_kses_post( $object->get_name() ) . ' '; ?></a>
	</td>

	<td valign="top">
		<?php
		$barcode_instance = YITH_Barcode::get( $product_id );
		echo wp_kses_post( YITH_YWBC()->render_barcode( $barcode_instance ) );
		echo "<div style='text-align: center'>" . wp_kses_post( $barcode_instance->get_display_value() ) . '</div>';
		?>
	</td>

	<td valign="top">
		<div>
			<?php

			if ( yit_get_prop( $object, 'manage_stock' ) ) {
				/* translators: %s: Stock quantity */

				$multi_stock    = $object->get_meta( '_yith_pos_multistock' );
				$stock_quantity = $object->get_stock_quantity();
				printf( esc_html__( 'Stock units: %s', 'yith-woocommerce-barcodes' ), wp_kses_post( $stock_quantity ) );

				if ( ! empty( $multi_stock ) && function_exists( 'yith_pos_get_stores' ) ) {
					$store_ids   = yith_pos_get_stores();
					$store_names = array_map( 'yith_pos_get_register_name', $store_ids );
					$stores      = array_combine( $store_ids, $store_names );

					foreach ( $stores as $id => $name ) {

						echo '<br>';

						$stock_quantity = $multi_stock[ $id ];
						printf( esc_html__( 'Stock units in store %1$1s: %2$2s', 'yith-woocommerce-barcodes' ), $name, wp_kses_post( $stock_quantity ) );

					}
				}
			} else {
				esc_html_e( 'Manage stock not enabled', 'yith-woocommerce-barcodes' );
			}
			?>
		</div>
	</td>

	<td valign="top">

		<?php if ( 'yes' === get_option( 'ywbc_product_shortcode_stock_buttons', 'yes' ) ) : ?>
			<div style="margin-bottom: 1em;">
				<input id="ywbc-stock-unit" type="number" min="1" value="1">
				<span class="ywbc-stock-unit-description" style="font-size: 12px;"><?php echo esc_html__( 'Stock units to be increased or decreased.', 'yith-woocommerce-barcodes' ); ?></span>
			</div>
		<?php endif; ?>



		<?php
		foreach ( $barcode_actions as $barcode_action ) :
			if ( '' === $barcode_action ) {
				continue;
			}
			?>

			<button style="width: 75%; margin-bottom: 15px;"
					class="ywbc-action btn btn-primary"
					data-status="<?php echo esc_attr( sanitize_title_for_query( strtolower( $barcode_action ) ) ); ?>"
					data-id="<?php echo esc_attr( $product_id ); ?>"
					data-type="product">
				<?php

				/** APPLY_FILTERS: ywbc_barcode_actions_name_filter
				 *
				 * Filter the name of the buttons of the shortcode table to be translated.
				 *
				 * @param $barcode_action Default actions.
				 */
				echo wp_kses_post( apply_filters( 'ywbc_barcode_actions_name_filter', $barcode_action ) );
				?>
			</button>
		<?php endforeach; ?>
	</td>
	<td>
	<?php
		$price = $object->get_price();
		?>
		<p style="margin: 0px 0px 350px 5px !important">$<?php echo esc_html( $price ); ?></p>
	</td>
</tr>
