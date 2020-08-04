<?php
/**
 * REMOVING ADMIN FOR FOR ALL BUT ADMINS 
 */
add_action('after_setup_theme', 'remove_admin_bar');
 
function remove_admin_bar() {
  if (!current_user_can('administrator') && !is_admin()) {
    show_admin_bar(false);
  }
}

/**
 *
 * UPDATING POST NAVIGATION TEXT
 *
 */
// add_filter( 'tc_singular_nav_next_text' , 'my_nav_buttons_text' );
// add_filter( 'tc_singular_nav_previous_text' , 'my_nav_buttons_text' );

// function my_nav_buttons_text() {
//   switch ( current_filter() ) {
//     case 'tc_singular_nav_previous_text':
//       return 'previous post &larr;'; // <= your custom text here
//     case 'tc_singular_nav_next_text':
//       return '&rarr; next post'; // <= your custom text here
//   }
// }

//REMOVING FONTAWESOME STYLES BY APE GALLERY
function custom_dequeue() {
    wp_dequeue_style('wpApeGalleryFontCss-css');
    wp_deregister_style('wpApeGalleryFontCss-css');

}

add_action( 'wp_enqueue_scripts', 'custom_dequeue', 9999 );
add_action( 'wp_head', 'custom_dequeue', 9999 );




// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
       global $post;
	return ' ... <a class="moretag" href="'. get_permalink($post->ID) . '"> Read More ></a>';
}
add_filter('excerpt_more', 'new_excerpt_more');


// Remove Comments from Jetpack Carousel
// function tweakjp_rm_comments_att( $open, $post_id ) {
//     $post = get_post( $post_id );
//     if( $post->post_type == 'attachment' ) {
//         return false;
//     }
//     return $open;
// }
// add_filter( 'comments_open', 'tweakjp_rm_comments_att', 10 , 2 );

// Enable shortcodes in text widgets
add_filter('widget_text','do_shortcode');

// Update CSS within in Admin
function admin_style() {
  wp_enqueue_style('admin-styles', get_template_directory_uri().'/admin.css');
}
add_action('admin_enqueue_scripts', 'admin_style');

// LIMIT THE EXCERPT LENGTH
function custom_excerpt_length( $length ) {
  return 25;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


/**
 *
 * Adding data attributes to Menu bar item ID menu-item-2912
 * Use only the number at the end.
 *
 */

/*

add_filter( 'nav_menu_link_attributes', 'my_menu_atts', 10, 3 );
function my_menu_atts( $atts, $item, $args )
{
  // Provide the id of the targeted menu item
  $menu_target = 2974;

  // inspect $item

  if ($item->ID == $menu_target) {
    $atts['data-toggle'] = 'modal';
    $atts['data-target'] = '#myModal';
  }
  return $atts;
}


*/

/**
*
* THIS IS TO GET THE CURRENT TEMPLATE NAME FOR DEBUGGING REASON
*
*/

add_filter( 'template_include', 'var_template_include', 1000 );

function var_template_include( $t ){

$GLOBALS['current_theme_template'] = basename($t);

return $t;

}


function get_current_template( $echo = false ) {

if( !isset( $GLOBALS['current_theme_template'] ) )

return false;

if( $echo )

echo $GLOBALS['current_theme_template'];

else

return $GLOBALS['current_theme_template'];

}

/**
 *
 * Changing Comments Headline (Leave a Reply to Leave a comment)
 *
 */

//change text to leave a reply on comment form
// function freeman_comment_reform ($arg) {
//   $arg['title_reply'] = __('Leave a Reply');
//   return $arg;
//   }
//   add_filter('comment_form_defaults','freeman_comment_reform');

/**
 * Remove Archive Name from Archive Title
 * Moose is Loose
 */
	// add_filter( 'get_the_archive_title', function ($title) {    
	// 	if ( is_tax('taxonomy-name', 'courses') ) {    
	// 			$title = single_cat_title( '', false );    
	// 	} elseif ( is_tag() ) {    
	// 			$title = single_tag_title( '', false );    
	// 	} elseif ( is_author() ) {    
	// 			$title = '<span class="vcard">' . get_the_author() . '</span>' ;    
	// 	} elseif ( is_tax() ) { //for custom post types
	// 			$title = sprintf( __( '%1$s' ), single_term_title( '', false ) );
	// 	}    
	// 	return $title;    
	// });

/*======================================
=            ACF Google Map            =
======================================*/

function my_acf_init() {

	acf_update_setting('google_api_key', 'AIzaSyCLPeaPHJFYJCR0xKMI-0aGPZpuc2aru8U');
}

add_action('acf/init', 'my_acf_init');

/*=====  End of ACF Google Map  ======*/


/*=====================================
=  Remove Gravity Form Labels        =
=====================================*/

add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );

/*=====  End of Remove Gravity Form Labels  ======*/


/*========================================
=            PREPARE REST API            =
========================================*/

function prepare_rest( $data, $post, $request ) {

	$_data = $data->data;

	$thumbnail_id = get_post_thumbnail_id( $post->ID );
	$thumbnail_img = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail' );
	$medium_img = wp_get_attachment_image_src( $thumbnail_id, 'medium' );
	$full_img = wp_get_attachment_image_src( $thumbnail_id, 'full' );

	$_data['featured_thumb'] = $thumbnail_img[0];
	$_data['featured_medium'] = $medium_img[0];
	$_data['featured_full'] = $full_img[0];

	$data->data = $_data;

	return $data;
}

add_filter('rest_prepare_post', 'prepare_rest', 10, 3 );

/*=====  End of PREPARE REST API  ======*/


/*=============================================
=            ACF OPTIONS PAGE CODE            =
=============================================*/

if( function_exists('acf_add_options_page') ) {

  $option_page = acf_add_options_page(array(
    'page_title' => __('Analytics'),
    'icon_url'  => 'dashicons-chart-line',
    'menu_title'  => 'Analytics',
    'menu_slug'   => 'analytics-default-settings',
    // 'capability'   => 'edit_posts',
    // 'redirect'   => false
  ));
  $option_page = acf_add_options_page(array(
    'page_title' => __('Theme Settings'),
    'icon_url'  => 'dashicons-index-card',
    'menu_title'  => 'Theme Settings',
    'menu_slug'   => 'theme-settings',
    // 'capability'   => 'edit_posts',
    // 'redirect'   => false
  ));

}