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

 foreach ($states as $state) {

    $args_state = [
      'post_type' => 'universities',
      'posts_per_page' => -1,
      'tax_query' => array(
        array (
            'taxonomy' => 'locations',
            'field' => 'slug',
            'terms' => $state,
        )
      ),
    ];
    $posts_state = new WP_Query($args_state);

    $results_state = [];

    if ( $posts_state->have_posts() ) {

      while ( $posts_state->have_posts() ) {
        $posts_state->the_post();

        // GETTING ADDRESS FROM ACF: LOCATION
        $mapLocation = get_field('university_address');

        // DECLARING TAXONOMY HOLDER EMPTY ARRAYS
        $mens_sports = [];
        $womens_sports = [];
        $divisions = [];

        // GETTING MEN'S SPORTS FROM CPT
        $post_id = get_the_ID();
        $mens_sports_tax = get_the_terms( $post_id, 'mens-sports' );

        if ( $mens_sports_tax ) {
          foreach ( $mens_sports_tax as $tax ) {
            if ( $tax->taxonomy == 'mens-sports' ) {
              array_push($mens_sports, $tax->slug);
            }
          }
        }

        // GETTING WOMEN'S SPORTS FROM CPT
        $womens_sports_tax = get_the_terms( $post_id, 'womens-sports' );

        if ( $womens_sports_tax ) {
          foreach ( $womens_sports_tax as $tax ) {
            if ( $tax->taxonomy == 'womens-sports' ) {
              array_push($womens_sports, $tax->slug);
            }
          }
        }

        // GETTING WOMEN'S SPORTS FROM CPT
        $divisions_tax = get_the_terms( $post_id, 'divisions' );

        if ( $divisions_tax ) {
          foreach ( $divisions_tax as $tax ) {
            if ( $tax->taxonomy == 'divisions' ) {
              array_push($divisions, $tax->slug);
            }
          }
        }

        array_push( $results_state, [
          'title' => get_the_title(),
          'permalink' => get_the_permalink(),
          'featured_img_url' => get_the_post_thumbnail_url(get_the_ID(),'featured-size'),
          'university_logo' => get_field('university_logo'),
          'university_address' => $mapLocation['address'],
          'mens_sports' => $mens_sports,
          'womens_sports' => $womens_sports,
          'divisions' => $divisions,
        ] );
        
      }
    }

    $json_data_state = json_encode($results_state, JSON_PRETTY_PRINT);

    echo '<pre>';
    print_r($json_data_state);
    echo '</pre>';

    // WRITING UNIVERSITY DATA (53 STATES DATA) TO A JSON FILE

    $cat_json_dir = wp_upload_dir()['basedir'];
    $json_file = '/_DATA/university_data_' . $state . '.json';
    $file_location = $cat_json_dir . $json_file;
    file_put_contents($file_location, $json_data_state);

 } // END STATE FOREACH LOOP


} // END FUNCTION