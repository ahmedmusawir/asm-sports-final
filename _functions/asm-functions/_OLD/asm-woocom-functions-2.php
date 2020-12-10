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

// Automatically grant membership to a plan at registration
function asm_add_membership_at_registration( $user_id ) {

  if ( ! function_exists( 'wc_memberships' ) ) {
      return;
  }

  // Get the user object.
  $user = get_userdata( $user_id );
  // Get all the user roles as an array.
  $user_roles = $user->roles;

  echo '<pre>';
  print_r($user_roles);
  echo '</pre>';

    // Check if the role is Coach, is present in the array.
    if ( in_array( 'coach', $user_roles, true ) ) {
      // Do something.
      echo '<h1>YES, User is a Coach</h1>';
      
    }
    
    // wp_die();

    // $args = array(
    //     // Enter the ID (post ID) of the plan to grant at registration
    //     'plan_id'	=> 8741,
    //     'user_id'	=> $user_id,
    // );
  
    // wc_memberships_create_user_membership( $args );

}
/**
 * 
 * GRAVITY REGISTRATION FORM AFTER SUBMISSION 
 * 
 */
// Get Registered User ID
add_action( 'gform_user_registered', 'asm_get_registered_user', 10, 4 );

function asm_get_registered_user($user_id, $feed, $entry, $user_pass) {
  GFCommon::log_debug( __METHOD__ . '(): entry => ' . print_r( $entry, true ) );
  GFCommon::log_debug( __METHOD__ . '(): entry => ' . print_r( $form, true ) );
} 

// add_action( 'gform_after_submission_1', 'asm_member_creation_after_registration', 10, 2 );
function asm_member_creation_after_registration( $entry, $form ) {
 
  // add_action( 'user_register', 'asm_add_membership_at_registration', 15 );

  // $coach_role = $entry['23.3'];
  
  // if ( $coach_role == 'coach' ) {

  //   $args = array(
  //       // Enter the ID (post ID) of the plan to grant at registration
  //       'plan_id'	=> 8741,
  //       'user_id'	=> $user_id,
  //   );
  
  //   wc_memberships_create_user_membership( $args );
  // }

  // wp_die();
  GFCommon::log_debug( __METHOD__ . '(): entry => ' . print_r( $entry, true ) );
  GFCommon::log_debug( __METHOD__ . '(): entry => ' . print_r( $form, true ) );
}