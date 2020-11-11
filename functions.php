<?php
/**
 * Theme Setup Functions
 */
require get_template_directory() . '/_functions/theme-setup.php';

/**
 * Widget Setup Functions
 */
require get_template_directory() . '/_functions/widget-setup.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/_functions/scripts-setup.php';


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/*======================================
=            MOOSE INCLUDES            =
======================================*/

/**
 * Bootstrap 4 Nav Walker
 */
require get_template_directory() . '/_functions/bootstrap-navwalker.php';
require get_template_directory() . '/_functions/moose-navwalker.php';
/**
 * Helper Functions
 */
require get_template_directory() . '/_functions/helpers-setup.php';

/**
 *
 * React App Setup
 *
 */
require get_template_directory() . '/_functions/react-setup.php';

/**
 *
 * Adding Breadcrums
 *
 */

require get_template_directory() . '/_functions/breadcrum-function.php';

/**
 *
 * CUSTOMIZING THE LOGIN SCREEN
 *
 */

require get_template_directory() . '/_functions/wp-logon-screen.php';


/**
 * 
 * ASM CUSTOM FUNCTIONS		
 * 		
 */

require get_template_directory() . '/_functions/asm-functions/asm-custom-functions.php';
require get_template_directory() . '/_functions/asm-functions/asm-get-profile-views.php';
require get_template_directory() . '/_functions/asm-functions/asm-get-loggedin-profile-views.php';

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

// add_action('gform_enqueue_scripts_1', 'enqueue_scroll_to_top', 10, 2);
// function enqueue_scroll_to_top($form, $is_ajax) {
//     // enqueue the scroll to top script which is stored in the child theme /js/ subdirectory, and depends on jQuery
//     wp_enqueue_script('scroll_to_top', get_stylesheet_directory_uri() . '/assets/dist/js/scroll-to-top.js', array('jquery'));
// }

/**
 * ASM WOOCOM FUNCTIONS
 */
require get_template_directory() . '/_functions/asm-functions/asm-woocom-functions.php';