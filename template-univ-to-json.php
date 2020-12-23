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
        'posts_per_page' => 1,
      ];
      $posts = new WP_Query($args);
      
        $results = [];
        $mens_sports = [];
        $womens_sports = [];
        $divisions = [];

      
        if ( $posts->have_posts() ) {
          echo 'TOTAL UNIVERSITIES: ' . $posts->found_posts;
          while ( $posts->have_posts() ) {
            $posts->the_post();
            
            the_title();

            $mapLocation = get_field('university_address');

            $taxonomies = get_terms();
            echo '<pre>';
            // print_r($taxonomies);
            echo '</pre>';

            $university_tax = [];
            foreach ( $taxonomies as $tax ) {
              if ( $tax->taxonomy == 'mens-sports' ) {
                // echo $tax->slug . '<br>';
                array_push($mens_sports, $tax->slug);
              }

            }
            echo '<pre>';
            print_r($mens_sports);
            echo '</pre>';


      
            array_push( $results, [
              'title' => get_the_title(),
              'permalink' => get_the_permalink(),
              'featured_img_url' => get_the_post_thumbnail_url(get_the_ID(),'featured-size'),
              'university_logo' => get_field('university_logo'),
              'university_address' => $mapLocation['address']
            ] );
            
          }
        }

        echo '<pre>';
        // print_r($results);
        echo '</pre>';

    ?>

      <!-- <section id="univ-json-data-container" class="p-5 card">University Data Goes Here...</section> -->


    </main><!-- #main -->

  </div> <!-- END ROW -->
</div><!-- #primary -->


<?php
get_footer();