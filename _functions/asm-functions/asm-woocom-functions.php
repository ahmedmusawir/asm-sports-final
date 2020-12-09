<?php
/**
 * ASM WOOCOM FUNCTIONS
 */

// REDIRECT ADD TO CART OR SIGNUP BUTTON STRAIGHT TO CHECKOUT
add_filter('woocommerce_add_to_cart_redirect', 'moose_add_to_cart_redirect');
function moose_add_to_cart_redirect() {
 global $woocommerce;
 $checkout_url = wc_get_checkout_url();
 return $checkout_url;
}

// SELL ONE PRODUCT AT A TIME
add_filter( 'woocommerce_add_to_cart_validation', 'moose_only_one_in_cart', 99, 2 );
   
function moose_only_one_in_cart( $passed, $added_product_id ) {
   wc_empty_cart();
   return $passed;
}

/**
 * 
 * GRAVITY REGISTRATION FORM + BRAND NEW USER REGISTRATION + WOOCOM MEMBERSHIP ASSIGNMENT
 * 
 */
// Get Registered User ID
add_action( 'gform_user_registered', 'asm_set_registered_coach_membership', 10, 4 );

function asm_set_registered_coach_membership($user_id, $feed, $entry, $user_pass) {

  // WRITING USER ID AND PASSWORD OF A NEWLY REGISTERED USER TO A COOKIE
  $cookie_name = "USER_INFO";
  
  setcookie($cookie_name, $user_id . "," . $user_pass, time() + (86400 * 1), "/"); // 86400 = 1 day
  
  // COLLECTING MEMBER TYPE FROM GRAVITY FORM
  $coach_role = $entry['25'];
  
  if ( $coach_role == 'Coach' ) {

    // ASSIGNING COACH'S MEMBERSHIP MANUALLY
    $args = array(
        // Enter the ID (post ID) of the plan to grant at registration
        'plan_id'	=> 8741,
        'user_id'	=> $user_id,
    );
  
    wc_memberships_create_user_membership( $args );
  }

  // GFCommon::log_debug( __METHOD__ . '(): entry => ' . print_r( $entry, true ) );
  // GFCommon::log_debug( __METHOD__ . '(): entry => ' . print_r( $feed, true ) );
}

// GRAVITY FORM SUBMISSION
// add_action( 'gform_after_submission', 'set_post_content', 10, 2 );
// function set_post_content( $entry, $form ) {
 
//    GFCommon::log_debug( __METHOD__ . '(): entry => ' . print_r( $entry, true ) );
//    GFCommon::log_debug( __METHOD__ . '(): form => ' . print_r( $form, true ) );

// }

 /**
 * @author        MOOSE
 * @compatible    WC 3.7
 */
  