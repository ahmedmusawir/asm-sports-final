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

      // PULLING ALL UNIVERSITY DATA
      // Location: _functions/wp-to-json/get-all-university-data.php
      // get_all_university_data();
      // PULLING ALABAMA STATE UNIVERSITY DATA
      // Location: _functions/wp-to-json/get-state-university-data.php
      // get_state_university_data();

      $args = [
        'post_type' => 'universities',
        'posts_per_page' => 3,
      ];
      $posts = new WP_Query($args);
      
        // DECLARING MAIN JSON HOLDER EMPTY ARRAYS
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
            $mens_sports_tax = get_the_terms(the_ID(), 'mens-sports');

            foreach ( $mens_sports_tax as $tax ) {
              if ( $tax->taxonomy == 'mens-sports' ) {
                array_push($mens_sports, $tax->slug);
              }
            }

            // GETTING WOMEN'S SPORTS FROM CPT
            $womens_sports_tax = get_the_terms(the_ID(), 'womens-sports');

            foreach ( $womens_sports_tax as $tax ) {
              if ( $tax->taxonomy == 'womens-sports' ) {
                array_push($womens_sports, $tax->slug);
              }
            }

            // GETTING WOMEN'S SPORTS FROM CPT
            $divisions_tax = get_the_terms(the_ID(), 'divisions');

            foreach ( $divisions_tax as $tax ) {
              if ( $tax->taxonomy == 'divisions' ) {
                array_push($divisions, $tax->slug);
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

        echo '<pre>';
        print_r($results);
        echo '</pre>';

    ?>

      <!-- <section id="univ-json-data-container" class="p-5 card">University Data Goes Here...</section> -->


    </main><!-- #main -->

  </div> <!-- END ROW -->
</div><!-- #primary -->


<?php
get_footer();