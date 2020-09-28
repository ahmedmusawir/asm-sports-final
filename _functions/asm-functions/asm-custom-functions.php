<?php 
/**
 * CUSTOM FUNCTIONS FOR ASM PROJECT
 */

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







/**
 * LOG OUT REDIRECTION TO HOME
 */
function ps_redirect_after_logout(){
  wp_redirect( '/' );
  exit();
}
add_action('wp_logout','ps_redirect_after_logout');

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