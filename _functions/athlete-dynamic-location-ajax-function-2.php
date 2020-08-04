<?php 
/**
 * ATHLETE LOAD MORE WP FUNCITON FOR JQUERY AJAX
 */

add_action('wp_ajax_nopriv_athlete_dynamic_location_ajax_function', 'athlete_dynamic_location_ajax_function');
add_action('wp_ajax_athlete_dynamic_location_ajax_function', 'athlete_dynamic_location_ajax_function');

 function athlete_dynamic_location_ajax_function() {
   // LOAD MORE UNIV POSTS

 $item_count = 0;

 $locations = array();

  $args = array(
    'role' => 'athlete'
  );

  // The Query
  $user_query = new WP_User_Query( $args );

    // User Loop
    if ( ! empty( $user_query->get_results() ) ) {
      foreach ( $user_query->get_results() as $user ) {
        $user_id = $user->id;

        // SPORTS & LOCATION
        // $sport = xprofile_get_field_data( 49, $user_id, $multi_format = 'array' );
        $nationality = xprofile_get_field_data( 11, $user_id, $multi_format = 'array' );
        $item_count++;

        $option = '<option value="' . $nationality . '">' . $nationality . '</option>';

        array_push($locations, $option);

        // echo '<li>';
        // echo $nationality; 
        // echo '</li>';

        // echo '<pre>';
        // print_r($user);
        // echo '</pre>';
        
      }
    } else {

      echo 'No users found.';
      
    }
        
  $unique_location_list = array_unique($locations);

  foreach ($unique_location_list as $single_option) {
    echo $single_option;
  }

  
  // echo $item_count; 
  // echo '<pre>';
  // // print_r($locations);
  // echo 'UNIQUE LIST:';
  // print_r($unique_location_list);
  // echo '</pre>';


  die();
}