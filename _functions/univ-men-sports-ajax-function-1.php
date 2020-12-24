<?php 
/**
 * MEN'S UNIVERSITY SPORTS FILTERS FUNCITON FOR JQUERY AJAX
 */

add_action('wp_ajax_nopriv_univ_men_sports_ajax_function', 'univ_men_sports_ajax_function');
add_action('wp_ajax_univ_men_sports_ajax_function', 'univ_men_sports_ajax_function');

 function univ_men_sports_ajax_function() {
   
  // echo "Success!";

  // COLLECTING THE CUSTOM TAXONOMY LIST
  $tax_terms = get_terms(
    array(
      'taxonomy' => 'mens-sports',
      'hide_empty' => true,
    )
  );

  // print_r($tax_terms);

  // CREATING THE OPTIONS WITH HTML
  foreach ( $tax_terms as $tax_term ) {

    $option .= '<option value="mens-sports-' . $tax_term->slug . '">' . $tax_term->name . '</option>';

  }

  echo $option;

  die();
}