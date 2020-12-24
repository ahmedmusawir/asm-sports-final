<?php
/**
 * THIS GETS THE ALL UNIVERSITY DATA AND WRITES INTO
 * A FILE LIKE THIS: university_data.json INSIDE THE 
 * wp-content/upload folder 
 */
function get_all_university_data() {

  $args = [
    'post_type' => 'universities',
    'posts_per_page' => -1,
  ];
  $posts = new WP_Query($args);
  
    // DECLARING EMPTY ARRAY
    $results = [];
  
  
    if ( $posts->have_posts() ) {
      echo 'TOTAL UNIVERSITIES: ' . $posts->found_posts;
      while ( $posts->have_posts() ) {
        $posts->the_post();

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
  
        // BUILDING THE UNIVERSITY DATA ARRAY
        array_push( $results, [
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
  
    $json_data = json_encode($results, JSON_PRETTY_PRINT);

    echo '<pre>';
    print_r($json_data);
    echo '</pre>';
    
    // WRITING UNIVERSITY DATA (2096 items) TO A JSON FILE
    $cat_json_dir = wp_upload_dir()['basedir'];
    $json_file = '/_DATA/university_data.json';
    $file_location = $cat_json_dir . $json_file;
    file_put_contents($file_location, $json_data);
}