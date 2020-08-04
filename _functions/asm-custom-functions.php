<?php 
/**
 * CUSTOM FUNCTIONS FOR ASM PROJECT
 */

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
 * UNIVERSITY LOAD MORE AJAX FUNCTION
 */
require get_template_directory() . '/_functions/univ-loadmore-function.php';
require get_template_directory() . '/_functions/univ-location-loadmore-function.php';
require get_template_directory() . '/_functions/athlete-loadmore-function.php';
require get_template_directory() . '/_functions/athlete-dynamic-location-ajax-function.php';
require get_template_directory() . '/_functions/athlete-dynamic-sports-ajax-function.php';

/**
 * LOCALIZE GLOBAL VARIABLE FOR AJAX
 */
function load_asm_globals() {

  if ( is_front_page() ) {
   
    wp_enqueue_script( 
      'ASM-GLOBAL', 
      get_template_directory_uri() . '/assets/dist/js/loadASMFiltersToLocalStorage.js', 
      array('jquery'), 
      '2015121X', 
      true 
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
		true 
  );
  
  // SPORTS FILTER SCRIPT
  wp_enqueue_script( 
		'asm-sports-filter-script', 
		get_template_directory_uri() . '/assets/dist/js/loadASMSportsFiltersWithLocalStorage.js', 
		array('jquery'), 
		'2015121Y', 
		true 
	);
}
add_action('wp_head', 'load_asm_dynamic_filter_scripts');