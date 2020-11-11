<?php
/**
 * ASM WOOCOM FUNCTIONS
 */

// REDIRECT ADD TO CART OR SIGNUP BUTTON STRAIGHT TO CHECKOUT
add_filter('woocommerce_add_to_cart_redirect', 'themeprefix_add_to_cart_redirect');
function themeprefix_add_to_cart_redirect() {
 global $woocommerce;
 $checkout_url = wc_get_checkout_url();
 return $checkout_url;
}

/**
 * 
 * GRAVITY REGISTRATION FORM + BRAND NEW USER REGISTRATION + WOOCOM MEMBERSHIP ASSIGNMENT
 * 
 */
// Get Registered User ID
add_action( 'gform_user_registered', 'asm_set_registered_coach_membership', 10, 4 );

function asm_set_registered_coach_membership($user_id, $feed, $entry, $user_pass) {

  $coach_role = $entry['23.3'];
  
  if ( $coach_role == 'coach' ) {

    $args = array(
        // Enter the ID (post ID) of the plan to grant at registration
        'plan_id'	=> 8741,
        'user_id'	=> $user_id,
    );
  
    wc_memberships_create_user_membership( $args );
  }

  GFCommon::log_debug( __METHOD__ . '(): entry => ' . print_r( $entry, true ) );
  GFCommon::log_debug( __METHOD__ . '(): entry => ' . print_r( $form, true ) );
} 