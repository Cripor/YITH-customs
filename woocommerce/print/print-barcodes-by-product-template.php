<?php
/**
 * Template to print barcode of a specific product
 *
 * @package YITH\Barcodes\Templates\Print
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $context === 'browser' ){

	?>
	<style>
		table {
			border: 0.5px solid grey;
			border-collapse: collapse;
			border-spacing: 25px;
		}
		tr {
			border-bottom: 0.5px solid grey;
		}
		td.main-barcode-container{
			border-right: 0.5px solid grey;
			padding: 20px;
		}
		.ywbc-barcode-display-container{
			text-align: center;
		}
		.product-image{
			padding: 20px;
		}
	</style>

	<?php
}

if ( isset( $product_id ) && isset( $quantity ) ) {

	?>

	<table>

	<?php

	$item_ids = array();

	$show_images            = get_option( 'tool_print_barcodes_show_image', 'no' );
	$show_name              = get_option( 'tool_print_barcodes_show_name', 'yes' );
	$show_price             = get_option( 'tool_print_barcodes_show_price', 'no' );
	$show_sku               = get_option( 'tool_print_barcodes_show_sku', 'yes' );
	$show_short_description = get_option( 'tool_print_barcodes_show_short_description', 'no' );
	$number_of_columns      = get_option( 'tool_print_barcodes_number_of_columns', '2' );

	for ( $i = 0; $i < $quantity; $i++ ) {
		$item_ids[ $i ] = $product_id;
	}

	foreach ( array_chunk( $item_ids, $number_of_columns ) as $row ) {
		?>

			<tr>

				<?php foreach ( $row as $product_id ) { ?>

					<?php

					$product = wc_get_product( $product_id );

					if ( is_object( $product ) ) {
						$upload_dir = wp_upload_dir();
						$image_path = $product->get_image_id() ? current(
							wp_get_attachment_image_src(
								$product->get_image_id(),
								'thumbnail'
							)
						) : wc_placeholder_img_src( 'thumbnail' );
					} else {
						$image_path = wc_placeholder_img_src( 'thumbnail' );
					}
					?>

					<?php if ( 'yes' === $show_images ) : ?>
						<?php if ( $image_path ) : ?>
							<td class="image-container" >
								<img class="product-image" src="<?php echo esc_url( $image_path ); ?>"/>
							</td>
						<?php endif; ?>
					<?php endif; ?>

					<td class="image-container" style="padding: 10px">

						<?php if ( 'yes' === $show_name ) : ?>
							<div><?php echo wp_kses_post( $product->get_name() ); ?></div>
						<?php endif; ?>

						<?php if ( 'yes' === $show_sku ) : ?>
							<div><?php echo wp_kses_post( $product->get_sku() ); ?></div>
						<?php endif; ?>

						<?php if ( 'yes' === $show_price ) : ?>
							<div><?php echo wp_kses_post( $product->get_price_html() ); ?></div>
						<?php endif; ?>

						<?php if ( 'yes' === $show_short_description ) : ?>
							<div><?php echo wp_kses_post( $product->get_short_description() ); ?></div>
						<?php endif; ?>

						<div><?php 
						$atts = $product->get_attributes();
						echo 'Attributes: ';
						foreach( $atts as $att ) {
							error_log( print_r( $att, true) );
							echo $att . '<br>';
						}
						?></div>

						<div class="main-barcode-container">
							<?php YITH_YWBC()->show_barcode( $product_id, '1', '', '' ); ?>
						</div>
					</td>



				<?php } ?>

			</tr>

		<?php } ?></table>

	<?php

}
