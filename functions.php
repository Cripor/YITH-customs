<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'yith-proteo-linearicons','yith-proteo-simple-line-icons' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION


/* add_filter( 'woocommerce_before_shop_loop_item_title', 'get_single_product_message_loop', 10, 1 ); */

/* function print_messages_in_loop_custom() {
    $shortcode = '[yith_points_product_message_loop]';
    echo is_callable( 'apply_shortcodes' ) ? apply_shortcodes( $shortcode ) : do_shortcode( $shortcode ); //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}

function get_single_product_message_loop_custom() {
    print_messages_in_loop_custom();
}

add_filter( 'woocommerce_before_shop_loop_item_title', 'get_single_product_message_loop_custom', 10, 1); */

/* $show_in_loop = apply_filters(
    'woocommerce_after_shop_loop_item_title',
    in_array(
        $woocommerce_loop['name'],
        array(
            'up-sells',
            'related',
        ),
        true
    ),
    $product_id
); */

/* if ( ! function_exists( 'ywpar_loop_position_before_product_title' ) ) {
    function ywpar_loop_position_before_product_title( $show_in_loop, $product_id ) {
        $show_in_loop = apply_filters(
            'woocommerce_after_shop_loop_item_title',
            in_array(
                $woocommerce_loop['name'],
                array(
                    'up-sells',
                    'related',
                ),
                true
            ),
            $product_id
        );
    }

}

add_filter( 'ywpar_loop_position', 'ywpar_loop_position_before_product_title' ); */

//woocommerce_after_shop_loop_item_title

/* function show_in_loop_custom() {
    $show_in_loop = apply_filters(
        'yith_ywraq_render_button_check_loop',
        in_array(
            $woocommerce_loop['name'],
            array(
                'up-sells',
                'related',
            ),
            true
        ),
        $product_id
    );
} */

/* function show_button_single_page() {
    global $product;

    if ( ! $product ) {
        global $post;
        if ( ! $post || ! is_object( $post ) || ! is_singular() ) {
            return;
        }
        $product = wc_get_product( $post->ID );

        if ( ! $product ) {
            return;
        }
    }

    $show_button_near_add_to_cart = get_option( 'ywraq_show_button_near_add_to_cart', 'no' );

    if ( yith_plugin_fw_is_true( $show_button_near_add_to_cart ) && $product->is_in_stock() && $product->get_price() !== '' ) {
        if ( $product->is_type( 'variable' ) ) {
            add_action( 'woocommerce_after_single_variation', array( $this, 'add_button_single_page' ), 15 );
        } else {
            add_action( 'woocommerce_after_add_to_cart_button', array( $this, 'add_button_single_page' ), 15 );
        }
    } else {
        add_action( 'woocommerce_single_product_summary', array( $this, 'add_button_single_page' ), 35 );
        add_action( 'yith_wcqv_product_summary', array( $this, 'add_button_single_page' ), 27 );
    }
} */

/* function add_button_single_page_custom() {
    $show_button = apply_filters( 'yith_ywraq-show_btn_single_page', false ); //phpcs:ignore
    if ( yith_plugin_fw_is_true( $show_button ) ) {
        yith_ywraq_render_button();
    }
}

add_filter( 'woocommerce_before_shop_loop_item_title', 'add_button_single_page_custom' ); */

/*     remove_action( 'woocommerce_single_product_summary', array( 'YITH_YWRAQ_Frontend', 'add_button_single_page' ), 35 );
    remove_action( 'yith_wcqv_product_summary', array( 'YITH_YWRAQ_Frontend', 'add_button_single_page' ), 27 );
    remove_action( 'woocommerce_after_add_to_cart_button', array( 'YITH_YWRAQ_Frontend', 'add_button_single_page' ), 15 );
    remove_action( 'woocommerce_after_single_variation', array( 'YITH_YWRAQ_Frontend', 'add_button_single_page' ), 15 );

    add_action( 'woocommerce_before_shop_loop_item', 'ywraq_change_loop_button_position' );

function ywraq_change_loop_button_position() { */

/*     remove_action( 'woocommerce_after_shop_loop_item', array( YITH_Request_Quote_Premium(), 'add_button_shop' ), 15 ); */

/*     add_action( 'woocommerce_shop_loop_item_title', array( YITH_Request_Quote_Premium(), 'add_button_shop' ), 10 );

} */


/*     add_action( 'woocommerce_after_shop_loop_item_title', array( YITH_Request_Quote_Premium(), 'add_button_single_page') , 9 );
 */

/* remove_action( 'woocommerce_product_thumbnails', array( 'YITH_YWGC_Frontend', '__construct'['yith_ywgc_display_gift_card_form_preview_below_image'] ) , 10 ); */

/* function remove_form() {
remove_action( 'woocommerce_product_thumbnails', array( 'YWGC_Gift_Card_Premium', 'yith_ywgc_display_gift_card_form_preview_below_image' ), 20 );
}

add_action( 'woocommerce_product_thumbnails', 'remove_form', 10); */



/* add_action( 'wp_head', 'remove_my_class_action' );
function remove_my_class_action() {
    global start()->frontend;
    remove_action( 'wp_footer', array( $my_class, 'class_function_being_removed' ) );
}
 */


/* add_filter('init', 'ywgc_custom_preview');
function ywgc_custom_preview(){
    if ( function_exists( 'YITH_YWGC_Frontend' ) ) {
        remove_action( 'woocommerce_product_thumbnails', array( YITH_YWGC_Frontend(), 'yith_ywgc_display_gift_card_form_preview_below_image'), 10 );
    }
} */

/* if ( function_exists( 'YITH_YWGC_Frontend' ) ) {
    remove_action( 'woocommerce_before_cart', array( YITH_YWGC_Frontend(), 'show_field_for_gift_code' ) );
}

add_filter('init', 'ywgc_custom_gift_code_field');
function ywgc_custom_gift_code_field(){
    if ( function_exists( 'YITH_YWGC_Frontend' ) ) {
        add_filter( 'woocommerce_after_cart_table', array( YITH_YWGC_Frontend(), 'show_field_for_gift_code' ) );
    } else {
        return;
    }
}



add_filter( 'init', 'ywbc_product_position_custom' );
if ( ! function_exists( 'ywbc_product_position_custom' ) ) {
    function ywbc_product_position_custom() {
        if ( class_exists( 'YITH_YWBC_Frontend' ) ){
            remove_action(
                'woocommerce_single_product_summary',
                array(
                    YITH_YWBC_Frontend::get_instance(),
                    'show_barcode_on_single_product_page',
                ),
                25
            );
            add_action(
                'woocommerce_single_product_summary',
                array(
                    YITH_YWBC_Frontend::get_instance(),
                    'show_barcode_on_single_product_page',
                ),
                5
            );
        }
    }
}

add_filter( 'yith_wcas_submit_label', 'yith_custom_button' );
if ( ! function_exists( 'yith_custom_button' ) ) {
    function yith_custom_button() {
        echo '';
    }
}

add_filter( 'wp_header', 'yith_ajax_search_custom', 9999 );
if ( ! function_exists( 'yith_ajax_search_custom' ) ) {
    function yith_ajax_search_custom() {
	    echo do_shortcode('[yith_woocommerce_ajax_search]');
    }
} */

/* add_action( 'yith_ywraq_email_before_raq_table', 'hola' );
function hola() {
    echo 'HOLA';
} */

/* add_filter( 'yith_wcact_show_pay_now_button', 'remove_pay_now_button' );
if ( ! function_exists( 'remove_pay_now_button') ) {
    function remove_pay_now_button()  {
        remove_filter( 'yith_wcact_show_pay_now_button', true );
    }
} 
O el de abajo:
*/
/* add_filter( 'yith_wcact_show_pay_now_button', '__return_false' ); */

/* When a gift card is purchased, generate the gift card only in the order “Completed” status (by default it’s generated in the Processing and completed statuses).   */

/* if ( ! function_exists( 'remove_send_on_processing') ) {

    function remove_send_on_processing() {

        $allowed_status = array( 'completed' );

        return $allowed_status;

    }

    add_filter( 'yith_ywgc_generate_gift_card_on_order_status', 'remove_send_on_processing', 5 );

} */

/* Using a custom code, avoid the PDF being attached to the gift card email. */

/* if ( class_exists( 'YITH_WooCommerce_Gift_Cards_Premium' ) ){
    remove_filter( 'woocommerce_email_attachments', array( YITH_WooCommerce_Gift_Cards_Premium::get_instance(), 'attach_documents_to_email' ), 99, 3 );
} */

/* Don’t allow the admin to download the gift card PDF in the gift card table  */

// add_filter( 'ywgc_show_download_pdf_button', '__return_false' );


/* With a custom code, make the gift card codes generated automatically, to start by “YITH-” */

/* if( !function_exists( 'yith_wcgc_generated_code_yith' ) ) {

    function yith_wcgc_generated_code_yith( $code ) {

    return 'YITH'. $code;

    }
add_filter( 'ywgc_random_generate_gift_card_code', 'yith_wcgc_generated_code_yith' );
} */


/* In the “gift this product”, don’t ask for sender name and message, only the recipient data should be filled 
Hecho en template gift-card-details
*/

/* add_filter( 'ywgc_edit_message_label', 'remove_message' );
if ( ! function_exists( 'remove_message') ) {
    function remove_message()  {
        remove_filter( 'ywgc_edit_message_label', esc_html__( 'Message: ', 'yith-woocommerce-gift-cards' ) );
    }
}  */


/* Enable the option to display a QR Code in the gift card template, and then, with a custom code, generate the QR Code just with the gift card code as info, not with an URL as by default. When I scan the QR Code, I only want to see the gift card code.  */

/* if ( ! function_exists( 'preview_digital_gift_cards_custom' ) ) {
    $gift_id   = $_GET['id'];

    $gc = new YWGC_Gift_Card_Premium( array( 'ID' => $gift_id  ) );

    $gift_card_code = $gc->get_code();

    $apply_discount_url = $gift_card_code;

    return $apply_discount_url;
}
add_filter( 'yith_wcgc_qr_code_content', 'preview_digital_gift_cards_custom' ); */

//OR:

/* if ( ! function_exists( 'yith_wcgc_qr_code_content_custom' ) ) {
    function yith_wcgc_qr_code_content_custom( $apply_discount_url, $object, $gift_card_code ) {
        return $gift_card_code;
    }
    add_filter( 'yith_wcgc_qr_code_content', 'yith_wcgc_qr_code_content_custom', 99, 3 );
}
 */

/* On the cart page, if the option to use the gift cards in the coupons fields is disabled, hide the coupons field.  */


/* if ( ! function_exists( 'yith_ywgc_enqueue_scripts_custom_cart_field' ) ) {

    function yith_ywgc_enqueue_scripts_custom_cart_field() {

        $jquery = '';

        if ( get_option( 'ywgc_apply_gift_card_on_coupon_form', 'no' ) === 'no' ) {

            $jquery = 'jQuery( document ).ready( function( $ ){        

                $( ".actions .coupon label, .actions .coupon #coupon_code, .actions .coupon .button" ).css( "display", "none" );

            });';

        }

        wp_add_inline_script( 'ywgc-frontend-script', $jquery );

    }

    add_action( 'wp_enqueue_scripts', 'yith_ywgc_enqueue_scripts_custom_cart_field', 999 );

} */


/* Enable the manual amount to the gift cards, to allow the customers to enter a custom amount. When the customer enter a custom amount, display a message before to show the price in the gift card template, which let me know that the amount is custom, something like “This is a custom amount: “ and the gift card price  */

/* if ( ! function_exists( 'manual_amount_check' ) ){
    function manual_amount_check( $formatted_price, $object) {
        if ( $object->is_manual_amount ) {
            return 'This is a custom amount: <br><br>' . $formatted_price;
        } else {
            return $formatted_price;
        }
    }
add_filter( 'yith_wcgc_template_formatted_price', 'manual_amount_check', 10, 2 );
} */


/* Also, if the gift card amount is custom, hide the gift card code in the template.  */

/* if ( ! function_exists( 'hide_gc_code' ) ){
    function hide_gc_code( $gift_card_code, $object ) {
        if ( $object->is_manual_amount ) {
            $gift_card_code = '';
            return $gift_card_code;
        } else {
            return $gift_card_code;
        }
    }
add_filter( 'ywgc_gift_card_code', 'hide_gc_code', 99, 2 );
} */


/* Only allow to use a gift card code once, so, when a gift card code is used, empty the balance. Example: I have a gift card with 100$ and use it in a 50$ order, instead of have 50$ in the balance, make it 0$.  */

/* function ywgc_new_balance_after_use() {
    $new_balance = 0;
    return $new_balance;
}
add_filter( 'yith_ywgc_new_balance_before_update_balance', 'ywgc_new_balance_after_use' ); */



//Ejercicios WL 1 al 4 hechos en twentytwentytwo, 5 no hacer



//EJERCICIOS AUCTIONS:

//1. The auction countdown doesn't work on custom pages, like when using the WooCommerce shortcodes (https://woocommerce.com/document/woocommerce-shortcodes/). Is there a way to make it work in these custom pages?
/* if( ! function_exists( 'yith_wcact_shop_scripts' ) ) {
    function yith_wcact_shop_scripts() {
        wp_enqueue_style( 'yith-wcact-frontend-css' );
        wp_enqueue_script( 'yith_wcact_frontend_shop_premium' );
    } 
    add_filter( 'yith_wcact_load_script_everywhere', 'yith_wcact_shop_scripts' );
}  */

//OR (mejor forma)

/* add_filter( 'yith_wcact_load_script_everywhere', '__return_true' ); */


//2. Remove "Bid time" column on Bids tab in product page (WITHOUT USING CSS) -> hecho en template list-bids

/* add_filter( 'yith_wcact_datetime_table', '__return_false'); */


//3. Can I hide the seconds on auctions countdown in the product page? I want to leave only days, hours and minutes (WITHOUT USING CSS) -> hecho en template auction-timeleft


//4. Change the message displayed when an auction has not started yet in the product page


/* if( ! function_exists( 'yith_unstarted_auction_message' ) ) {
    function yith_unstarted_auction_message() {
        echo 'Auctions starting in: ';
    } 
add_filter( 'yith_wcact_time_left_to_start_text',  'yith_unstarted_auction_message' );
} */

/* if( ! function_exists( 'yith_unstarted_auction_top_message' ) ) {
    function yith_unstarted_auction_top_message() {
        echo 'Not started yet: ';
    } 
add_filter( 'yith_wcact_auction_not_available_message',  'yith_unstarted_auction_top_message' );
}
 */

//5. Change how the username is displayed in the bids list. Display the username and lastname in the bids list

/* if( ! function_exists( 'yith_user_name' ) ) {
    function yith_user_name( $username, $user ) {
        $username = $user->first_name . ' ' . $user->last_name;
        return $username;
    } 
add_filter( 'yith_wcact_display_username', 'yith_user_name', 10, 2 );
} */

//6. How to hide "Others auctions you may like" section when an auction is closed (WITHOUT USING CSS AND CHANGING PLUGIN OPTIONS)

/* 
add_filter( 'yith_wcact_display_other_auctions', '__return_false' );

 */
//7. Show the auction start price after the product title in the product page:(ya aparece)

/* if( ! function_exists( 'yith_show_start_price' ) ) {
    function yith_show_start_price( $current_bid, $price, $product ) {
            global $product;
            $price = $current_bid . '<br>' . sprintf( esc_html__( 'Start price: $ %s', 'yith-auctions-for-woocommerce' ), $product->get_start_price() );
            return $price;
    }
add_filter( 'yith_wcact_frontend_current_bid_message', 'yith_show_start_price', 10, 3 );
}
 */
//8. Add the auction winner to Auctions table in the backend and in the CSV export:

/* if( ! function_exists( 'yith_admin_auction_columns' ) ) {
    function yith_admin_auction_columns( $columns) {
        $columns['winner'] = __( 'Winner', 'yith-auctions-for-woocommerce' );
        return $columns;
    }
add_filter( 'yith_wcact_auction_list_columns', 'yith_admin_auction_columns' );  
}

if( ! function_exists( 'column_default_custom' ) ) {
    function column_default_custom( $output, $column_name, $product ) {
        $user = '';
        $username = '';
        if ( $column_name == 'winner') {
                $instance   = YITH_Auctions()->bids;
                $max_bidder = $instance->get_max_bid( $product->get_id() );
                if ( $max_bidder ) {
                    $user     = get_user_by( 'id', $max_bidder->user_id );
                    $username = ( $user ) ? $user->first_name . ' ' . $user->last_name : 'anonymous';
                }
                $output = $username;
            }
            return $output;
        }
add_filter( 'yith_wcact_auction_list_output_column', 'column_default_custom', 10, 3 );
} */


//9. I would like to execute a piece of code whenever an auction ends. What action hook do I need to do that?

/* do_action( 'yith_wcact_auction_winner', $product, $user, $max_bidder );
do_action( 'yith_wcact_finished_without_any_bids', $product );
*/




//GC ticket de Fran:

/* if ( ! function_exists( 'ywgc_price_display_in_mail' ) ){
    function ywgc_price_display_in_mail( $boolean, $formatted_price, $object ) {
        if ( $object->is_manual_amount ) {
            return true;
        } else {
            return false;
        }
    }
add_filter( 'ywgc_display_price_template', 'ywgc_price_display_in_mail', 10, 3 );
} */


//ejercicio 4 WL v2:

/* if ( ! function_exists( 'yith_show_total_price' ) ){
    function yith_show_total_price( $var ) {

        $wishlist = $var['wishlist'];

        if ( $wishlist && $wishlist->has_items() ) :
            $finalprice = 0;
            $wishlist_items = $wishlist->get_items();
            $show_price = 'show_price';
            $show_price_variations = 'show_price_variations';

            foreach ( $wishlist_items as $item ) :
                if ( $show_price ) {
                    $finalprice += $item->get_product_price();
                }
                if ( $show_price_variations ) {
                    $finalprice += $item->get_product_price();
                }
            endforeach;

            echo "Total price: $" . $finalprice;
        endif;
    }
add_filter( 'yith_wcwl_wishlist_after_wishlist_content', 'yith_show_total_price' );
} */

//OR

/* if ( ! function_exists( 'yith_wcwl_items_total' ) ) {
    function yith_wcwl_items_total( $args ) {
        $wishlist = isset( $args['wishlist'] ) ? $args['wishlist'] : false;
        if ( ! $wishlist || ! $wishlist instanceof YITH_WCWL_Wishlist ) {
            return;
        }
        $total = 0;
        if ( $wishlist->has_items() ) {
            foreach ( $wishlist->get_items() as $item ) {
                $total += $item->get_product_price();
            }
        }
        if ( $total ) {
            echo '<p><b>Total:</b> ' . wc_price( $total ) . '</p>';
        }
    }
    add_action( 'yith_wcwl_wishlist_after_wishlist_content', 'yith_wcwl_items_total', 5, 1 );
} */



//EJERCICIOS EVENT TICKETS:

//1)hi, how can I edit the ticket template in html (as promised in plugin description)? Besides, I need to add the purchase date to the ticket, do you know the shortcode for that?

/* if ( ! function_exists( 'yith_add_date_ticket' ) ) {
    function yith_add_date_ticket( $post ) {
        $order_id = get_post_meta( $post->id, 'wc_order_id', true );
        $order    = wc_get_order( $order_id );
        $date_format    = get_option( 'date_format' );
        $order_date     = yit_get_prop( $order, 'order_date' );
        $purchased_date = date_i18n( $date_format, strtotime( $order_date ) );

        echo 'Purchased on: <b>' . wp_kses_post( $purchased_date ) . '</b>';
    }
add_action( 'yith_wcevti_default_html_preview_end_price', 'yith_add_date_ticket' );
}
 */

//2)Show the start and finish dates from the event in the loop (shop page) after the product title.

/* if ( ! function_exists( 'yith_event_date_shop_loop' ) ) {
    function yith_event_date_shop_loop() {
        global $product;
        if ( $product && $product->is_type( 'ticket-event' ) ) {
            $start_date  = yit_get_prop( $product, '_start_date_picker', true );
            $end_date    = yit_get_prop( $product, '_end_date_picker', true );

            echo $start_date . '<br>' . $end_date;
        }
    }
add_filter( 'woocommerce_after_shop_loop_item_title', 'yith_event_date_shop_loop', 99 );
}
 */

//3)By default, the Check-in Ticket shortcode can only be used by administrators. How would you handle to allow another user (test as unlogged user) to see and use this shortcode?


/* add_filter( 'yith_wcevt_display_checking_event', '__return_true' );
add_filter( 'yith_wcevti_load_tickets_permission', '__return_true' ); */


/* 4)I have a question about the Check in Page. If you are using the sort code [check_in_ticket] all tickets will be displayed only by ticket id. But there is given no information about Event name / Ticket name.

Is there a way to add in php code the information? If yes, what I have to add to get the following information to get the name of event / ticket? */

#37 (EVENT NAME) Purchased by yithuser 3 - Order: #36

//hecho en template check_in_row_panel.php


/* 5)Hi, in the file /yith-event-tickets-for-woocommerce-premium/templates/frontend/fields_services_row.php, line 10, the title of the event is used as the name of the ticket (“Event Title */ #1”). I’d like to change that into “Ticket #1”. I don’t want to edit plugin’s files, so is there a simple snippet I could add to functions.php to change it? Thank you!

/* if ( ! function_exists( 'yith_custom_event_title_form' ) ) {
    function yith_custom_event_title_form( $first_text, $product_id, $event_title, $row ) {
        $first_text = 'Ticket # ' . ( $row + 1 );
        return $first_text;
    }
add_filter( 'yith_wcevti_event_title_form', 'yith_custom_event_title_form', 99, 4 );
} */


//Ejercicios Affiliates:

/* if ( defined( 'YITH_WCAF' ) ) {
    if ( ! function_exists( 'yith_wcaf_get_extra_fields' ) ) {
    function yith_wcaf_get_extra_fields() {
    return array(
    'account_name' => array(
    'type' => 'text',
    'label' => __( 'Account name', 'yith-woocommerce-affiliates' ),
    'mandatory' => false,
                   ),
    'bank_name' => array(
    'type' => 'text',
    'label' => __( 'Bank name', 'yith-woocommerce-affiliates' ),
    'mandatory' => false,
                   ),'account_number' => array(
    'type' => 'text',
    'label' => __( 'Account number', 'yith-woocommerce-affiliates' ),
    'mandatory' => false,
                   ),'branch_code' => array(
    'type' => 'text',
    'label' => __( 'Branch code', 'yith-woocommerce-affiliates' ),
    'mandatory' => false,
                   ),
               );
           }
       }
   
    if ( ! function_exists( 'yith_wcaf_add_custom_fields' ) ) {
    function yith_wcaf_add_custom_fields( $user = false ) {
    $yith_wcaf_additional_fields = yith_wcaf_get_extra_fields();
   
    $user_id = $user instanceof WP_User ? $user->ID : false;
    $user_id = ( ! $user_id && is_user_logged_in() ) ? get_current_user_id() : $user_id;
    $fields = '';
    $admin = doing_action( 'show_user_profile' ) || doing_action( 'edit_user_profile' );
   
    if ( $admin ) {
    $fields .= "<hr/>
                   <h3>Additional Affiliate Fields</h3>
                   <table class='form-table'>";
               }
   
    foreach ( $yith_wcaf_additional_fields as $field => $opts ) {
    if ( $user_id ) {
    $value = get_user_meta( $user_id, 'yith_wcaf_' . $field, true );
                   } else {
    $value = ! empty( $_POST[ 'yith_wcaf_' . $field ] ) ? $_POST[ 'yith_wcaf_' . $field ] : '';
                   }
   
    $fields .= $admin ? '<tr><th>' : "<p class='form-row form-row-wide'>";
    $fields .= "<label for='yith_wcaf_" . $field . "'>" . $opts['label'] . ': ' . ( $opts['mandatory'] ? "<span class='required'>*</span>" : '' ) . '</label>';
    $fields .= $admin ? '</th><td>' : '';
    $fields .= "<input type='" . $opts['type'] . "' class='input-text' name='yith_wcaf_" . $field . "' id='yith_wcaf_" . $field . "' value='$value' " . ( $opts['mandatory'] ? 'required' : '' ) . ' />';
    $fields .= $admin ? '</td></tr>' : '</p>';
               }
   
    if ( $admin ) {
    $fields .= '</table>';
               }
   
    echo $fields;
           }
   
    add_action( 'yith_wcaf_register_form', 'yith_wcaf_add_custom_fields' );
    add_action( 'yith_wcaf_settings_form_after_payment_email', 'yith_wcaf_add_custom_fields' );
    add_action( 'show_user_profile', 'yith_wcaf_add_custom_fields', 21, 1 );
    add_action( 'edit_user_profile', 'yith_wcaf_add_custom_fields', 21, 1 );
       }
   
    if ( ! function_exists( 'yith_wcaf_register_custom_field' ) ) {
    function yith_wcaf_register_custom_field( $param1, $param2 = false ) {
    $yith_wcaf_additional_fields = yith_wcaf_get_extra_fields();
   
    if ( doing_action( 'yith_wcaf_new_affiliate' ) ) {
    $id = $param1;
    $affiliate = YITH_WCAF_Affiliate_Handler()::get_instance()->get_affiliate_by_id( $id );
    $user_id = $affiliate['user_id'];
               } elseif ( doing_action( 'yith_wcaf_save_affiliate_settings' ) ) {
    $user_id = $param2;
               } elseif ( doing_action( 'personal_options_update' ) || doing_action( 'edit_user_profile_update' ) ) {
    $user_id = $param1;
   
    if ( ! current_user_can( 'edit_user', $user_id ) ) {
    return false;
                   }
               }
   
    if ( empty( $user_id ) ) {
    return false;
               }
   
    foreach ( $yith_wcaf_additional_fields as $field => $opts ) {
    if ( isset( $_REQUEST[ 'yith_wcaf_' . $field ] ) ) {
    update_user_meta( $user_id, 'yith_wcaf_' . $field, sanitize_text_field( $_REQUEST[ 'yith_wcaf_' . $field ] ) );
                   }
               }
   
    if ( doing_action( 'yith_wcaf_save_affiliate_settings' ) ) {
    return true;
               }
   
           }
   
    add_action( 'yith_wcaf_new_affiliate', 'yith_wcaf_register_custom_field', 10, 1 );
    add_action( 'yith_wcaf_save_affiliate_settings', 'yith_wcaf_register_custom_field', 10, 2 );
    add_action( 'personal_options_update', 'yith_wcaf_register_custom_field', 10, 1 );
    add_action( 'edit_user_profile_update', 'yith_wcaf_register_custom_field', 10, 1 );
       }
   
    if ( ! function_exists( 'yith_wcaf_custom_fields_validation' ) ) {
    function yith_wcaf_custom_fields_validation( $errors ) {
    $yith_wcaf_additional_fields = yith_wcaf_get_extra_fields();
   
    foreach ( $yith_wcaf_additional_fields as $field => $opts ) {
    if ( ! empty( $opts['mandatory'] ) && empty( $_REQUEST[ 'yith_wcaf_' . $field ] ) ) {
    $errors->add( 'missing_' . $field, $opts['label'] . ' is mandatory' );
    continue;
                   }
   
    if ( isset( $opts['validation'] ) && is_callable( $opts['validation'] ) ) {
    $result = call_user_func( $opts['validation'], $_REQUEST[ 'yith_wcaf_' . $field ] );
   
    if ( ! $result ) {
    $errors->add( 'invalid_' . $field, 'Value entered for ' . $opts['label'] . ' is invalid' );
    continue;
                       }
                   }
               }
   
    return $errors;
           }
    add_filter( 'yith_wcaf_check_affiliate_validation_error', 'yith_wcaf_custom_fields_validation' );
       }
   }
   If you want to add more fields, you can add them to the function yith_wcaf_get_extra_fields() adding this to the array:
   'field_slug' => array(
       'type'      => 'numeric, text, textare...',
       'label'     => __( 'Field name', 'yith-woocommerce-affiliates' ),
       'mandatory' => true or false,
   ), */


//Ejercicio 2 SALTADO

//3. I want to add the customer first name and last name that did the order in the recent commissions information. How can I show this information? Thanks.

/* function yith_wcaf_dashboard_commissions_table_columns_custom( $columns ) {

//Adding columns:
    $columns = array(        
        'created_at' => esc_html_x( 'Date', '[FRONTEND] Dashboard table', 'yith-woocommerce-affiliates' ),
        'product'    => esc_html_x( 'Product', '[FRONTEND] Dashboard table', 'yith-woocommerce-affiliates' ),
        'amount'     => esc_html_x( 'Amount', '[FRONTEND] Dashboard table', 'yith-woocommerce-affiliates' ),
        'name'       => esc_html_x( 'Customer', '[FRONTEND] Dashboard table', 'yith-woocommerce-affiliates' ),
        'status'     => '',
    );
    return $columns;
}
add_filter( "yith_wcaf_dashboard_commissions_table_columns", 'yith_wcaf_dashboard_commissions_table_columns_custom' ); */

//OR:

/* function yith_wcaf_dashboard_commissions_table_columns_custom( $columns ) {
    $columns['name'] = __( 'Customer', '[FRONTEND] Dashboard table', 'yith-woocommerce-affiliates' );        
    return $columns;
}
add_filter( "yith_wcaf_dashboard_commissions_table_columns", 'yith_wcaf_dashboard_commissions_table_columns_custom' ); */


//Adding columns data:
function yith_render_table_content( $object, $dashboard_table ) {
    $instance = $dashboard_table;
    $order_id = $object['order_id'];
    $order = wc_get_order( $order_id );
    $user = $order->get_user();
    $username = ( $user ) ? $user->first_name . ' ' . $user->last_name : 'anonymous';

    echo $username;
}
add_action( "yith_wcaf_dashboard_commissions_table_render_name_column", 'yith_render_table_content', 99, 2 );

/*anotación (no es parte del código)-> add_filter( "yith_wcaf_dashboard_{$this->args['items']}_table_columns", $args['columns'] ); */


/* ·I want to show specific content to only affiliates. 
I.e: I want to show this string “You are already an affiliate in this site” in a specific page.
PISTA: HAY UN SHORTCODE QUE ES PARA ESO. */

/* Hi there.
Hope you’re doing fine.
In order to achieve this, you can use the following shortcode, just paste it on the page where you want it to be displayed:
[yith_wcaf_show_if_affiliate] You are already an affiliate in this site [/yith_wcaf_show_if_affiliate]
If you want to know more about this shortcode and their attributes, you can read this documentation:
https://docs.yithemes.com/yith-woocommerce-affiliates/category/shortcodes/
Please, let us know if you need anything else.
Best regards.
Cristian R. */



/* ·Currently on my site, customers are able to choose an affiliate at checkout (/misitio.com/cart). Is it possible to display the currently chosen affiliate if an affiliate is already set for the customer? This would be *incredible* and would resolve the last of my workflow issues with the plugin.*/

/* function current_affiliate_name( $affiliate_token ) {
    $affiliate_token = _x( 'This is your referrer affiliate: ' . do_shortcode('[yith_wcaf_current_affiliate]') . ' ' , '[FRONTEND] Set referrer shortcode', 'yith-woocommerce-affiliates' ) . ' <a href="#" class="show-referrer-form">' . _x( 'This is no your referrer? Click here to enter his/her affiliate code', '[FRONTEND] Set referrer shortcode', 'yith-woocommerce-affiliates' ) . '</a>';
    return $affiliate_token;
}
add_filter( 'yith_wcaf_set_referrer_message', 'current_affiliate_name' );
 */

/* ·Hi, Is it possible with YITH WOOCOMMERCE AFFILIATES to have a commission taking into account the user and the product in combination.
Ex .: User1 - Product1: 4% | User2 - Product1: 5% | User3 - Product1: 7%.
If yes, can you show me how? */

/*Hi there

Yes, it's possible. You have to enter to Dashboard->YITH->Affiliates->Affiliates->Rates
Here you have to add a new rule, but in the rule type selection, you have to select the "User/product rate" option.

Please let us know if you need anything else.

Best regards
Cristian R.


/* ·Is it possible to change the structure of an affiliate shortlink? If possible we'd like to use the user nicename instead of an ID */

/* if ( ! function_exists( 'custom_affiliate_url' ) ) {
    function custom_affiliate_url( $referal_url, $ref_name, $token, $base_url) {
        $ref_name = YITH_WCAF_Session()->get_ref_name();
        $base_url = home_url();
        $user   = wp_get_current_user();
        $username = $user->nickname;
        $referal_url = esc_url( add_query_arg( $ref_name, $username, $base_url ) );
        return $referal_url;
    }
add_filter( 'yith_wcaf_get_referral_url', 'custom_affiliate_url', 99, 4 );
}
 */

/* ·Hello, our client need to add in the CSV affiliate export also the column with name and surname. She has used these to field to insert client code and agent code and she has to make some internal report and to correctly pay commissions.It is possible to add this two information in the export file result? YA APARECE EL NOMBRE EN EL ARCHIVO*/




//EJERCICIOS BRANDS:

//1. Do you have a snippet so the brand description appears below the products in the brand page?

add_filter( 'yith_wcbr_print_brand_description', '__return_false', 10 );

/* function wcbr_add_description_below(){
    $qo               = get_queried_object();
    $term_id          = $qo->term_id;
    $p_term           = get_term( $term_id, YITH_WCBR::$brands_taxonomy );
    $term_description = $p_term->description;
    if ( ! empty( $term_description ) ) {
        echo wpautop( do_shortcode( $term_description ) );
    }
}
add_action( 'woocommerce_after_main_content', 'wcbr_add_description_below', 99 ); */

//OR(defining the shortcode to print the term and description):

if ( class_exists( 'YITH_WCBR' ) && ! function_exists( 'yith_wcbr_brand_shortcode_content' ) ) {
    function yith_wcbr_brand_shortcode_content( $atts, $content = null ) {
        global $product;

        if ( $product && $product instanceof WC_Product ) {
            $terms = get_the_terms( $product->get_id(), YITH_WCBR::$brands_taxonomy );

            if ( $terms && ! is_wp_error( $terms ) ) {
                foreach ( $terms as $term ) {
                    echo '<h2>' . $term->name . '</h2>';
                    echo '<p>' . $term->description . '</p>';
                }
            }
        }
    }
    add_shortcode( 'yith_wcbr_brand_shortcode', 'yith_wcbr_brand_shortcode_content' );
}

function add_brands_shortcode() {
    echo wpautop( do_shortcode( '[yith_wcbr_brand_shortcode]' ) );
}
add_action( 'woocommerce_after_main_content', 'add_brands_shortcode' );


//2. Using the Brand Filter widget, I need to show the brand logo before the brand name. Could you tell me how to achieve it? hecho en template brand-filter.php



/*  3. Hi,
I would like to know how to add the brand description with the shortcode.
I'm adding a tab for each product with the brand name (in my case, author) and I want to add the description (biography) of the author.

I used this shortcode:
[yith_wcbr_product_brand show_logo="yes" show_title="yes"]

Description missing */


/* Hi there
Unfortunately, the shortcode doesn't do that, but you can copy the following code and paste it on the functions.php of your current theme in order to do it: */

if ( class_exists( 'YITH_WCBR' ) && ! function_exists( 'yith_wcbr_brand_shortcode_content' ) ) {
    function yith_wcbr_brand_shortcode_content( $atts, $content = null ) {
        global $product;

        if ( $product && $product instanceof WC_Product ) {
            $terms = get_the_terms( $product->get_id(), YITH_WCBR::$brands_taxonomy );

            if ( $terms && ! is_wp_error( $terms ) ) {
                foreach ( $terms as $term ) {
                    echo '<h2>' . $term->name . '</h2>';
                    echo '<p>' . $term->description . '</p>';
                }
            }
        }
    }
    add_shortcode( 'yith_wcbr_brand_shortcode', 'yith_wcbr_brand_shortcode_content' );
}
function add_single_product_description_shortcode() {
    echo wpautop( do_shortcode( '[yith_wcbr_brand_shortcode]' ) );
}
add_action( 'woocommerce_product_meta_end', 'add_single_product_description_shortcode' );

/* Let us know if it works or if you need anything else
Best regards.
Cristian R. */


/* 4. Hi, how can i hide the div "yith-wcbr-archive-header" with the brand description that appear on the brand page? (WITHOUT USING CSS) */

/* Hi there.
Hope you're doing fine.

You can hide the brand description by adding the following code to the functions.php of your current theme:

add_filter( 'yith_wcbr_print_brand_description', '__return_false', 10 );

Let us know if it works or if you need anything else.
Best Regards.
Cristian R. */


/* 5. Add a new product tab to show the Brands information. Show the brand name and the brand description in this new tab created: */

add_filter( 'woocommerce_product_tabs', 'woo_custom_product_tabs' );
function woo_custom_product_tabs( $tabs ) {
    //Description tab
    $tabs['brand_desc_tab'] = array(
        'title'     => __( 'Brand', 'woocommerce' ),
        'priority'  => 100,
        'callback'  => 'woo_brand_desc_tab_content'
    );
    return $tabs;

}
function woo_brand_desc_tab_content( $brands_taxonomy ) {
    // The brand description tab content
    global $product;
    if ( class_exists( 'YITH_WCBR' ) ) {
        $brands = wp_get_post_terms( $product->get_id(), YITH_WCBR::$brands_taxonomy );
    }
    if ( isset( $brands[0]->taxonomy ) && $brands[0]->taxonomy === 'yith_product_brand' ){
        echo '<h2>Description</h2>';
        echo do_shortcode( '[yith_wcbr_brand_shortcode]' );
    } else {
        echo "There's no brands asociated to this product";
    }
}


//6. Could you please let me know the best method to slow down the brand carousel time?

if ( ! function_exists( 'yith_carousel_custom_time' ) ) {
    function yith_carousel_custom_time(){
        $new_time = 4000;
        return $new_time;
    }
add_filter( 'yith_wcbr_brand_thumbnail_carousel_time', 'yith_carousel_custom_time' );
}

/* 7. Is there any conditional statement like is_yith_brand or whatever that sends me a true/false? I have a code snippet that moves out of stock products to the bottom of the page and it works on category pages, but not brand pages. */

/* Hi There
You can use the following conditional to filter brands only

if ( isset( $brands[0]->taxonomy ) && $brands[0]->taxonomy === 'yith_product_brand' ) ->usado como ejemplo en ejercicio 5

Let us know if it works or if you need anything else
Best regards.
Cristian R. */




/* Is it possible to display the event date and time in the product archive/category page? Is it also possible to replace the "Add to basket" with "Get Tickets" but only for event products... our website has a mixture of products to buy and events. */

/* if ( ! function_exists( 'yith_event_date_shop_loop' ) ) {
    function yith_event_date_shop_loop() {
        global $product;
        if ( $product && $product->is_type( 'ticket-event' ) ) {
            $start_date  = yit_get_prop( $product, '_start_date_picker', true );
            $end_date    = yit_get_prop( $product, '_end_date_picker', true );
            $start_time = yit_get_prop( $product, '_start_time_picker' );
            $end_time   = yit_get_prop( $product, '_end_time_picker', true );

            echo 'Start : ' . $start_date . ' / ' . $start_time . '<br>' . 'End: ' . $end_date . ' / ' . $end_time;
        }
    }
add_filter( 'woocommerce_after_shop_loop_item_title', 'yith_event_date_shop_loop', 99 );
}



function change_add_to_cart_link( $html, $product, $args ) {
    global $product;
    if ( $product && $product->is_type( 'ticket-event' ) ) { 
        $html = sprintf( '<a href="%s" data-quantity="%s" class="%s" %s>%s</a>',
		esc_url( $product->add_to_cart_url() ),
		esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
		esc_attr( isset( $args['class'] ) ? $args['class'] : 'button' ),
		isset( $args['attributes'] ) ? wc_implode_html_attributes( $args['attributes'] ) : '',
		esc_html( 'Get tickets' ) );
    return $html;
    } else {
        $html = sprintf(
            '<a href="%s" data-quantity="%s" class="%s" %s>%s</a>',
            esc_url( $product->add_to_cart_url() ),
            esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
            esc_attr( isset( $args['class'] ) ? $args['class'] : 'button' ),
            isset( $args['attributes'] ) ? wc_implode_html_attributes( $args['attributes'] ) : '',
            esc_html( $product->add_to_cart_text() )
        );
        return $html;
    }
}
add_filter( 'woocommerce_loop_add_to_cart_link', 'change_add_to_cart_link', 10, 3 ); */

//OR(easy and better way):


/* if ( function_exists( 'yith_wecvti_get_date_message' ) && function_exists( 'yith_wcevti_get_template' ) && ! function_exists( 'yith_wecvti_show_event_dates_loop' ) ) {
    function yith_wecvti_show_event_dates_loop() {
        global $product;
        if ( $product && $product instanceof WC_Product && 'ticket-event' === $product->get_type() ) { 
            $date_message = yith_wecvti_get_date_message( $product->get_id() );
            yith_wcevti_get_template( 'date_panel', $date_message, 'frontend' );
        }
    }
add_action( 'woocommerce_after_shop_loop_item_title', 'yith_wecvti_show_event_dates_loop', 5 );
}

if ( ! function_exists( 'yith_change_text_event_ticket_product' ) ) {
    function yith_change_text_event_ticket_product( $text, $product ) {
        if ( $product && $product instanceof WC_Product && 'ticket-event' === $product->get_type() ) {
            $text = 'Get Tickets';
        }
        return $text;
    }
add_filter( 'woocommerce_product_add_to_cart_text', 'yith_change_text_event_ticket_product', 20, 2 );
add_filter( 'woocommerce_product_single_add_to_cart_text', 'yith_change_text_event_ticket_product', 20, 2 );
}
 */


//Is there any way we can move the date/time above the pricing and remove “Start:” and “From:”?

/* if ( ! function_exists( 'custom_start_message' ) && ! function_exists( 'custom_end_message' ) ) {
    function custom_start_message( $message_start, $time_attributes, $id ) {
        global $product;
        $at_text    = __( 'at', 'yith-event-tickets-for-woocommerce' );
        $start_date = yit_get_prop( $product, '_start_date_picker', true );
		$start_time = yit_get_prop( $product, '_start_time_picker', true );
        $time_attributes = array(
			'start_date' => $start_date,
			'start_time' => $start_time,
		);
        $message_start = $start_date . '</b> ' . $at_text . ' <b>' . $start_time . '</b> ';
        echo $message_start . '<br>';
    }
    function custom_end_message( $message_end, $time_attributes, $id ) {
        global $product;
        $at_text    = __( 'at', 'yith-event-tickets-for-woocommerce' );
        $end_date   = yit_get_prop( $product, '_end_date_picker', true );
		$end_time   = yit_get_prop( $product, '_end_time_picker', true );
        $end_text   = __( 'Finish', 'yith-event-tickets-for-woocommerce' );
        $time_attributes = array(
			'end_date'   => $end_date,
			'end_time'   => $end_time,
		);
        $message_end   = $end_text . ': <b>' . $end_date . '</b> ' . $at_text . ' <b>' . $end_time . '</b>';
        echo $message_end;
    }
add_filter( 'yith_start_date_message', 'custom_start_message', 10, 3 );
add_filter( 'yith_end_date_message', 'custom_end_message', 10, 3 );
} */

/* $message_start = apply_filters( 'yith_start_date_message', $message_start, $time_attributes, $id );
$message_end = apply_filters( 'yith_end_date_message', $message_end, $time_attributes, $id ); */

/* if ( ! function_exists( 'yith_event_date_shop_loop' ) ) {
    function yith_event_date_shop_loop() {
        global $product;
        if ( $product && $product->is_type( 'ticket-event' ) ) {
            $start_date  = yit_get_prop( $product, '_start_date_picker', true );
            $end_date    = yit_get_prop( $product, '_end_date_picker', true );
            $start_time = yit_get_prop( $product, '_start_time_picker' );
            $end_time   = yit_get_prop( $product, '_end_time_picker', true );

            echo 'Start : ' . $start_date . ' / ' . $start_time . '<br>' . 'End: ' . $end_date . ' / ' . $end_time;
        }
    }
add_filter( 'woocommerce_after_shop_loop_item_title', 'yith_event_date_shop_loop', 5 );
} */


//Intenta crear por código un endpoint (del my-account) donde dentro se vean las wishlists


//ESTO NO
/* add_action( 'rest_api_init', function () {
    register_rest_route( 'dcms-wl-table-list/v1', '/wishlists', array(
    'methods' => 'GET',
    'callback' => 'dcms_get_wl_from_post',
    ) );
} );

function dcms_get_wl_from_post() {
    global $wpdb;

    $table = $wpdb->base_prefix . 'yith_wcwl_lists';
    $sql = "SELECT * FROM $table";

    $result = $wpdb->get_results( $wpdb->prepare( $sql ) );

    return $result;
} */

add_action('init', function() {
	add_rewrite_endpoint('wishlists', EP_PAGES);
});

add_filter('woocommerce_account_menu_items', function($items) {
	$items['wishlists'] = __('Wishlists', 'txtdomain');
	return $items;
});

add_action('woocommerce_account_wishlists_endpoint', 'yith_wishlists_in_account_content' );

if ( ! function_exists( 'yith_wishlists_in_account_content' ) ) {
    function yith_wishlists_in_account_content() { 
        $wishlists = do_shortcode( '[yith_wcwl_wishlist pagination="no"]' );
        echo $wishlists;
    }
}


/* Hello! I have your barcodes plugin installed. In the option "print barcodes" ---> "Print barcodes by product" I need that when selecting a variable product (example t-shirt) the chosen color and size appear on the label. Example: (blue shirt L).

Is this possible? YA LO HACE*/




/* [11:23] Hector Garcia
Que el botón de Add to Wishlist, cuando sea un producto variable

[11:23] Hector Garcia
Solo se vea el botón cuando se ha seleccionado una variación

[11:23] Hector Garcia
Si no se ha seleccionado nada, entonces no se ve el botón */

