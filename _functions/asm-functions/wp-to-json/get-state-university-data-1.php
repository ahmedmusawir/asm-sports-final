<?php
/**
 * THIS GETS THE STATE BASED UNIVERSITY DATA AND WRITES INTO
 * A FILE LIKE THIS: university_data_alabama.json INSIDE THE 
 * wp-content/upload folder 
 */
function get_state_university_data() {

  $states = [ 'alabama', 'alaska', 'arizona', 'arkansas', 'california', 'colorado', 'connecticut', 'delaware',  
              'district-of-columbia', 'florida', 'georgia', 'hawaii', 'idaho', 'illinois', 'indiana', 'iowa',
              'kansas', 'kentucky', 'louisiana', 'maine', 'maryland', 'massachusetts', 'michigan', 'minnesota',
              'mississippi', 'missouri', 'montana', 'nebraska', 'nevada', 'new-hampshire', 'new-jersey',
              'new-mexico', 'new-york', 'north-carolina', 'north-dakota', 'ohio', 'oklahoma', 'oregon', 
              'pennsylvania', 'puerto-rico', 'rhode-island', 'south-carolina', 'south-dakota', 'tennessee',
              'texas', 'utah', 'vermont', 'virgin-islands', 'virginia', 'washington', 'west-virginia', 'wisconsin',
              'wyoming' ];

  /**
 * 
 * GETTING STATES BASED POSTS
 * 
 */
  $args_state = [
    'post_type' => 'universities',
    'posts_per_page' => -1,
    'tax_query' => array(
      array (
          'taxonomy' => 'locations',
          'field' => 'slug',
          'terms' => 'alabama',
      )
    ),
  ];
  $posts_state = new WP_Query($args_state);

  $results_state = [];

  if ( $posts_state->have_posts() ) {

    while ( $posts_state->have_posts() ) {
      $posts_state->the_post();

      $mapLocation = get_field('university_address');

      array_push( $results_state, [
        'title' => get_the_title(),
        'permalink' => get_the_permalink(),
        'featured_img_url' => get_the_post_thumbnail_url(get_the_ID(),'featured-size'),
        'university_logo' => get_field('university_logo'),
        'university_address' => $mapLocation['address']
      ] );
      
    }
  }

  $json_data_state = json_encode($results_state, JSON_PRETTY_PRINT);

  // WRITING UNIVERSITY DATA (25 items) TO A JSON FILE
  $cat_json_dir = wp_upload_dir()['basedir'];
  $json_file = '/_DATA/university_data_alabama.json';
  $file_location = $cat_json_dir . $json_file;
  file_put_contents($file_location, $json_data_state);

} 