<?php 
/**
 * CUSTOM FUNCTIONS FOR ASM PROJECT
 */

/**
 * LOG OUT REDIRECTION TO HOME
 */
function ps_redirect_after_logout(){
  wp_redirect( '/' );
  exit();
}
add_action('wp_logout','ps_redirect_after_logout');

/**
 * LOGIN REDIRECT FOR ATHLETE AND COACH USERS BY ROLE
 * The following was over ridden by Member Type plugin. The default
 * was [user_profile_url] which is a shortcode and would redirected to 
 * Member's Profile by BuddyPress
*/

// function my_login_redirect( $redirect_to, $request, $user ) {
//     //validating user login and roles
//     if (isset($user->roles) && is_array($user->roles)) {
//         //is this a gold plan subscriber?
//         if (in_array('athlete', $user->roles)) {
//             // redirect them to their special plan page
//             $redirect_to = "/dashboard-athlete";
//         } elseif (in_array('coach', $user->roles)) {
//           //all other members
//           $redirect_to = "/dashboard-coach";
//         } else {
//             //all other members
//             $redirect_to = "/wp-admin";
//         }
//     }
//     return $redirect_to;
// }
 
// add_filter( 'login_redirect', 'my_login_redirect', 10, 3 );

 /**
  * LOGIN PAGE REGISTER URL CHANGE  
  */
 add_filter( 'register_url', 'asm_register_url' );
  function asm_register_url( $url ) {
      if( is_admin() ) {
          return $url;
      }
      return "/signup/";
  }

 /**
 * LOAD ALL THE PHP FUNCTION FILES FOR AJAX 
 */
require get_template_directory() . '/_functions/univ-loadmore-function.php';
require get_template_directory() . '/_functions/univ-location-loadmore-function.php';
require get_template_directory() . '/_functions/athlete-loadmore-function.php';
require get_template_directory() . '/_functions/athlete-dynamic-location-ajax-function.php';
require get_template_directory() . '/_functions/athlete-dynamic-sports-ajax-function.php';
require get_template_directory() . '/_functions/univ-men-sports-ajax-function.php';
require get_template_directory() . '/_functions/univ-women-sports-ajax-function.php';

/**
 * SETTING UP THE JS SCRIPTS & LOCALIZE GLOBAL VARIABLE FOR AJAX
 */
function load_asm_globals() {

  if ( is_front_page() ) {
   
    wp_enqueue_script( 
      'ASM-GLOBAL', 
      get_template_directory_uri() . '/assets/dist/js/loadASMFiltersToLocalStorage.js', 
      array('jquery'), 
      '2015121X', 
      false 
    );
    
  }
  
  wp_localize_script('ASM-GLOBAL', 'asmGlobals', array(
    'ajaxUrl' => admin_url( 'admin-ajax.php' ),
  ));  
}
add_action('wp_enqueue_scripts', 'load_asm_globals');

// ASM DYNAMIC FILTER LOADER
function load_asm_dynamic_filter_scripts() {
  // LOCATION FILTER SCRIPT
	wp_enqueue_script( 
		'asm-locations-filter-script', 
		get_template_directory_uri() . '/assets/dist/js/loadASMLocationFiltersWithLocalStorage.js', 
		array('jquery'), 
		'2015121X', 
		false 
  );
  
  // SPORTS FILTER SCRIPT
  wp_enqueue_script( 
		'asm-sports-filter-script', 
		get_template_directory_uri() . '/assets/dist/js/loadASMSportsFiltersWithLocalStorage.js', 
		array('jquery'), 
		'2015121Y', 
		false
  );

  // UNIVERSITY WOMEN'S SPORTS FILTER SCRIPT
  wp_enqueue_script( 
    'unv-womens-sports-filter-script', 
    get_template_directory_uri() . '/assets/dist/js/loadUnivWomenSportsFromLocalStorage.js', 
    array('jquery'), 
    '2020121X', 
    false
  );
  
  // UNIVERSITY MEN'S SPORTS FILTER SCRIPT
  wp_enqueue_script( 
		'unv-mens-sports-filter-script', 
		get_template_directory_uri() . '/assets/dist/js/loadUnivMenSportsFromLocalStorage.js', 
		array('jquery'), 
		'2015121Y', 
		false
  );
  

}
add_action('wp_enqueue_scripts', 'load_asm_dynamic_filter_scripts');