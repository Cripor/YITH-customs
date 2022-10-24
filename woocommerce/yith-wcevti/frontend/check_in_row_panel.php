<?php // phpcs:ignore WordPress.NamingConventions
/**
 * Single row for checkin shortcode
 *
 * @author YITH
 * @package YITH\EventTickets
 * @version 1.0.0
 */

if ( ! defined( 'YITH_WCEVTI_VERSION' ) ) {
	exit;
} // Exit if accessed directly

$order_id = get_post_meta( $ticket_id, 'wc_order_id', true );

?>

<div class="list_row_panel">
	<div class="row_header">
		<div class="list_colum ticket_status">
			<?php
			if ( 'yi-checked' === $ticket_status ) {
				?>
				<span class="ticket_status_icon fa fa-thumbs-o-up status_checked" title="Checked"></span>
				<?php
			} elseif ( 'yi-cancelled' === $ticket_status ) {
				?>
				<span class="ticket_status_icon fa fa-ban status_cancelled" title="Cancelled"></span>
				<?php
			} else {
				?>
				<span class="ticket_status_icon fa fa-hand-paper-o status_pending_check" title="Pending check"></span>
				<?php
			}
			?>
		</div>
		<div class="list_colum ticket_id toggle">
			<span>
				<b><?php  echo '(' . esc_html( get_the_title( $ticket_id ) ) . ')'; ?></b>
				<b><?php echo '#' . esc_html( $ticket_id ); ?></b>
				<small><?php echo ' ' . esc_html__( 'Purchased by', 'yith-event-tickets-for-woocommerce' ) . ' '; ?></small>
				<b><?php echo esc_html( $purchased_by['display_name'] ); ?></b>
				<small> - Order: </small>
				<b><?php echo '#' . esc_html( $order_id ); ?></b>
			</span>
		</div>
		<div class="list_colum row_actions">
			<span class="item_action toggle fa fa-caret-down" aria-hidden="true"></span>
			<?php
			if ( 'yi-pending-check' === $ticket_status ) {
				?>
				<button class="item_action make_checkin_button fa fa-thumbs-o-up tips" title="<?php esc_html_e( 'Make check in', 'yith-event-tickets-for-woocommerce' ); ?>" aria-hidden="true" data-ticket_id="<?php echo esc_attr( $ticket_id ); ?>" data-status="yi-checked" href=""></button>
				<?php
			} elseif ( 'yi-checked' === $ticket_status ) {
				?>
				<button class="item_action make_checkout_button fa fa-thumbs-o-down tips" title="<?php esc_html_e( 'Make check out', 'yith-event-tickets-for-woocommerce' ); ?>" aria-hidden="true" data-ticket_id="<?php echo esc_attr( $ticket_id ); ?>" data-status="yi-pending-check" href=""></button>
				<?php
			}
			?>
		</div>
	</div>
	<div class="row_more_info">
		<div class="row_more_info_header">
			<div class="fields_info">
				<span><b><?php esc_html_e( 'Fields', 'yith-event-tickets-for-woocommerce' ); ?></b></span>
			</div>
			<div class="services_info">
				<span><b><?php esc_html_e( 'Services', 'yith-event-tickets-for-woocommerce' ); ?></b></span>
			</div>
		</div>
		<div class="fields_info">
			<?php
			if ( ! empty( $fields ) ) {
				foreach ( $fields as $field ) {
					?>
					<span class="field_item"><small><b><?php echo esc_html( $field['label'] ); ?>:</b> <?php echo esc_html( $field['value'] ); ?></small></span>
					<?php
				}
			} else {
				?>
				<span class="field_item"><small><?php esc_html_e( 'This ticket not have fields', 'yith-event-tickets-for-woocommerce' ); ?></small></span>
				<?php
			}
			?>
		</div>
		<div class="services_info">
			<?php
			if ( ! empty( $services ) ) {
				foreach ( $services as $service ) {
					?>
					<span class="service_item"><small><b><?php echo esc_html( wp_unslash( $service['label'] ) ); ?>:</b> <?php echo esc_html( $service['value'] ); ?></small></span>
					<?php
				}
			} else {
				?>
				<span class="service_item"><small><?php esc_html_e( 'This ticket not have services', 'yith-event-tickets-for-woocommerce' ); ?></small></span>
				<?php
			}
			?>
		</div>
	</div>
</div>
