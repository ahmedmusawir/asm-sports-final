<?php
/**
 * Template Name: Univ To Json
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Moose_Framework_2
 */

get_header(); ?>

<section id="general-page-header" class="text-center">

</section>


<div id="page-asm" class="content-area container">
  <div class="row">
    <main id="main" class="site-main col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-5">

      <?php 
    
/**
 * 
 * GETTING FIRST 25 POSTS
 * 
 */
// $args_25 = [
//   'post_type' => 'universities',
//   'posts_per_page' => 25,
// ];
// $posts_25 = new WP_Query($args_25);

// $results_25 = [];

// if ( $posts_25->have_posts() ) {

//   while ( $posts_25->have_posts() ) {
//     $posts_25->the_post();

//     array_push( $results_25, [
//       'title' => get_the_title(),
//       'permalink' => get_the_permalink(),
//     ] );
    
//   }
// }

// $json_data_25 = json_encode($results_25, JSON_PRETTY_PRINT);

// // WRITING UNIVERSITY DATA (25 items) TO A JSON FILE
// $cat_json_dir = wp_upload_dir()['basedir'];
// $json_file = '/_DATA/university_data_25.json';
// $file_location = $cat_json_dir . $json_file;
// file_put_contents($file_location, $json_data_25);

// wp_die();

/**
 * 
 * GETTING ALL THE POSTS
 * 
 */
    $args = [
      'post_type' => 'universities',
      'posts_per_page' => -1,
    ];
    $posts = new WP_Query($args);

      // echo '<pre>';
      // print_r($posts);
      // echo '</pre>';

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
      // echo '<pre>';
      // echo $json_data;
      // echo '</pre>';

      // WRITING UNIVERSITY DATA (2096 items) TO A JSON FILE
      $cat_json_dir = wp_upload_dir()['basedir'];
      $json_file = '/_DATA/university_data.json';
      $file_location = $cat_json_dir . $json_file;
      file_put_contents($file_location, $json_data);

    ?>

      <section id="univ-json-data-container" class="p-5 card">University Data Goes Here...</section>


    </main><!-- #main -->

  </div> <!-- END ROW -->
</div><!-- #primary -->


<?php
get_footer();