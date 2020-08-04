<?php 
/**
 * UNIVERSITY LOAD MORE FOR THE LOCATION TAXONOMY TEMPLATE
 * WP FUNCITON FOR JQUERY AJAX
 */

add_action('wp_ajax_nopriv_univ_location_load_more', 'univ_location_load_more');
add_action('wp_ajax_univ_location_load_more', 'univ_location_load_more');

 function univ_location_load_more() {
   // LOAD MORE UNIV POSTS

  $paged = $_POST['page'] + 1;

  $location = $_POST['locationState'];

  $args = array (
    'post_type' => 'universities',
    'tax_query' => array(
      array(
          'taxonomy' => 'locations',
          'field' => 'slug',
          'terms' => $location
      )
  ),
    'paged' => $paged
  );

  $query = new WP_Query($args);

  if ( $query->have_posts() ) : 

    while ( $query->have_posts() ) : $query->the_post();
                  
    /*
     * Include the Post-Format-specific template for the content.
     * If you want to override this in a child theme, then include a file
     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
     */
    get_template_part( 'template-parts/content', 'univ-item-asm' );

    endwhile;

   else :

    get_template_part( 'template-parts/content', 'load-no-more' );

  endif;

  wp_reset_postdata();
  
  die();
 }