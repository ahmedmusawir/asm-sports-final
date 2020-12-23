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
  
    $results = [];
  
    if ( $posts->have_posts() ) {
      echo 'TOTAL UNIVERSITIES: ' . $posts->found_posts;
      while ( $posts->have_posts() ) {
        $posts->the_post();
  
        $mapLocation = get_field('university_address');
  
        array_push( $results, [
          'title' => get_the_title(),
          'permalink' => get_the_permalink(),
          'featured_img_url' => get_the_post_thumbnail_url(get_the_ID(),'featured-size'),
          'university_logo' => get_field('university_logo'),
          'university_address' => $mapLocation['address']
        ] );
        
      }
    }
  
    $json_data = json_encode($results, JSON_PRETTY_PRINT);
    
    // WRITING UNIVERSITY DATA (2096 items) TO A JSON FILE
    $cat_json_dir = wp_upload_dir()['basedir'];
    $json_file = '/_DATA/university_data.json';
    $file_location = $cat_json_dir . $json_file;
    file_put_contents($file_location, $json_data);
}