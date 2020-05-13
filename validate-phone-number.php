<?php 

add_action('woocommerce_checkout_process', 'custom_validate_billing_phone');
function custom_validate_billing_phone() {
    $is_correct = preg_match('/^[0-9]{11,11}$/', $_POST['billing_phone']);
    if ( $_POST['billing_phone'] && !$is_correct) {
        wc_add_notice( __( 'Please enter your 11 digit mobile number e.g. 09171234567' ), 'error' );
    }
}
?>