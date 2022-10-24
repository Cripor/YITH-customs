<?php
/**
 * Default Ticket preview
 *
 * @author YITH
 * @package YITH\EventTickets
 * @version 1.0.0
 */

if ( ! defined( 'YITH_WCEVTI_VERSION' ) ) {
	exit;
} // Exit if accessed directly

?>

<div class="yith_evti_mail_template_container">
	<div class="yith_evti_mail_template_panel">
		<?php if ( ! empty( $header_image ) ) { ?>
			<div class="yith_evti_mail_template_header">
				<div id="header_title">
					<div class="title_container">
						<div class="header_image">
							<div class="title-hover">
								<h1><?php echo esc_html( $post->post_title ); ?></h1>

								<?php
								/**
								 * DO_ACTION: yith_wcevti_default_preview_after_title
								 *
								 * Allow to render some content after the ticket title in the ticket preview.
								 *
								 * @param WP_Post $ticket Ticket object
								 *
								 * @return WP_Post
								 */
								echo 'HOLAAAAAAAA';
								do_action( 'yith_wcevti_default_preview_after_title', $post );
								?>
							</div>
						</div>
					</div>
				</div>
				<?php if ( defined( 'YITH_YWBC_PREMIUM' ) && false !== $barcode ) { ?>
					<div id="header_barcode">
						<div class="barcode_container">
							<?php echo $barcode_rendered; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						</div>
					</div>
				<?php } ?>
			</div>
		<?php } ?>
		<div class="yith_evti_mail_template_content">
			<?php if ( $content_image ) { ?>
				<img class="content_image" src="<?php echo esc_url( $content_image[0] ); ?>" width="<?php echo isset( $content_image[1] ) ? esc_attr( $content_image[1] ) : ''; ?>" height="<?php echo isset( $content_image[2] ) ? esc_attr( $content_image[2] ) : ''; ?>">
			<?php } ?>
			<div id="content_main">
				<div id="content_title">
					<h2>
						<?php
						if ( 'on' === $display_ticket_number ) {
							echo '#' . esc_html( $post->ID ) . ' ';
						}

						echo esc_html( $post->post_title );
						?>
					</h2>
				</div>
				<div id="content_fields">
					<?php
					if ( isset( $fields ) ) {
						if ( is_array( $fields ) ) {
							foreach ( $fields as $field ) {
								if ( isset( $field ) & ! empty( $field ) ) {
									$label = key( $field );
									$field = $field[ $label ];

									?>
									<p class="form-field">
										<label for="_ticket_field_<?php echo esc_html( $label ); ?>"><?php echo esc_html( $label ); ?>: </label>
										<span id="_ticket_field_<?php echo esc_html( $label ); ?>"><?php echo esc_html( $field ); ?> </span>
									</p>
									<?php
								}
							}
						}
					}
					?>
				</div>

				<?php
				/**
				 * DO_ACTION: yith_wcevti_default_html_preview_end_fields
				 *
				 * Allow to render some content after the fields in the ticket preview.
				 *
				 * @param WP_Post $ticket Ticket object
				 *
				 * @return WP_Post
				 */
				do_action( 'yith_wcevti_default_html_preview_end_fields', $post );

				if ( ! empty( $date['message_start'] ) & ! empty( $date['message_end'] ) ) {
					?>
					<div id="content_date">
						<p>
							<?php echo $date['message_start']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						</p>
						<p>
							<?php echo $date['message_end']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
						</p>
					</div>
					<?php
				}

				/**
				 * DO_ACTION: yith_wcevti_default_html_preview_end_date
				 *
				 * Allow to render some content after the dates in the ticket preview.
				 *
				 * @param WP_Post $ticket Ticket object
				 *
				 * @return WP_Post
				 */
				do_action( 'yith_wcevti_default_html_preview_end_date', $post );

				$formated_price_service = sprintf( get_woocommerce_price_format(), get_woocommerce_currency_symbol(), $price );

				?>
				<div id="content_price">
					<p class="form-field">
						<label for="_content_price"><?php esc_html_e( 'Price', 'yith-event-tickets-for-woocommerce' ); ?>: </label>
						<span id="_content_price"><?php echo $price; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
					</p>
				</div>

				<?php
				/**
				 * DO_ACTION: yith_wcevti_default_html_preview_end_price
				 *
				 * Allow to render some content after the price in the ticket preview.
				 *
				 * @param WP_Post $ticket Ticket object
				 *
				 * @return WP_Post
				 */
				do_action( 'yith_wcevti_default_html_preview_end_price', $post );
				?>

				<div id="content_aditional">
					<p>
						<?php echo nl2br( esc_html( $mail_template['data']['aditional_text'] ) ); ?>
					</p>
				</div>

				<?php
				/**
				 * DO_ACTION: yith_wcevti_default_html_preview_end_aditional
				 *
				 * Allow to render some content after the additional text in the ticket preview.
				 *
				 * @param WP_Post $ticket Ticket object
				 *
				 * @return WP_Post
				 */
				do_action( 'yith_wcevti_default_html_preview_end_aditional', $post );
				?>
			</div>
		</div>
		<div class="yith_evti_mail_template_footer">
			<div class="footer_logo">
				<?php if ( $footer_image ) { ?>
					<img class="footer_image" src="<?php echo esc_url( $footer_image[0] ); ?>" width="<?php echo isset( $footer_image[1] ) ? esc_attr( $footer_image[1] ) : ''; ?>" height="<?php echo isset( $footer_image[2] ) ? esc_attr( $footer_image[2] ) : ''; ?>">
				<?php } ?>
			</div>
			<div class="footer_text">
				<p>
					<?php echo esc_html( get_home_url() ); ?>
				</p>
			</div>
		</div>
	</div>
</div>
