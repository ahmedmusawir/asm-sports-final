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

// WOOCOMMERCE FUNCTIONS FOR MEMBERSHIP ASSIGNMENT AT REGISTRATION
// Automatically grant membership to a plan at registration
function asm_add_membership_at_registration( $user_id ) {

  if ( ! function_exists( 'wc_memberships' ) ) {
      return;
  }

  // Get the user object.
  $user = get_userdata( $user_id );
  // Get all the user roles as an array.
  $user_roles = $user->roles;

  // Check if the role is Coach, is present in the array.
  if ( in_array( 'coach', $user_roles, true ) ) {
      // Do something.
      $args = array(
        // Enter the ID (post ID) of the plan to grant at registration
        'plan_id'	=> 8741,
        'user_id'	=> $user_id,
    );
  
    wc_memberships_create_user_membership( $args );
  }

}
add_action( 'user_register', 'asm_add_membership_at_registration', 25 );