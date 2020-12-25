<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cyberize
 */

?>

<!-- THIS BLOCK IS FOR DATA TESTING ONLY - START -->
<?php 
$division_list = get_the_terms(get_the_ID(), 'divisions'); // THIS IS FOR CPT TAXONOMIES
$men_list = get_the_terms(get_the_ID(), 'mens-sports'); // THIS IS FOR CPT TAXONOMIES
$women_list = get_the_terms(get_the_ID(), 'womens-sports'); // THIS IS FOR CPT TAXONOMIES
// print_r($division_list);

// $cat_list = get_the_category(); // THIS IS GOOD FOR REGULAR POSTS

if ($division_list) {

//  echo $division_list[0]->name;
  
$division_class = $division_list[0]->name;
  
} else {

  $division_list = null;

}
?>
<!-- THIS BLOCK IS FOR DATA TESTING ONLY - END -->

<article id="post-<?php the_ID(); ?>" <?php post_class("col-md-12 univ-post-item item animated bounceIn"); ?>>

  <div class="entry-content row">

    <section class="col-sm-5">

      <?php if (has_post_thumbnail()) : ?>

      <figure class="featured-image-box">
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail( 'featured-size' ); ?>
        </a>
      </figure>


      <!-- DATA TESTING START - REMOVE LATER   -->
      <h4><?php echo $division_class ?></h4>

      <?php 

        foreach ($men_list as $men_sport) {
          echo '<pre>';
          
          echo $men_sport->name;
          
          echo '</pre>';
        }
        
        foreach ($women_list as $women_sport) {
          echo '<pre>';
          
          echo $women_sport->name;
          
          echo '</pre>';
        }
        
      ?>

      <!-- DATA TESTING END - REMOVE LATER   -->


      <?php else : ?>

      <figure class="featured-image-box">
        <a href="<?php the_permalink(); ?>">
          <img class="attachment-featured-size size-featured-size wp-post-image"
            src="/wp-content/uploads/image-not-found-500x300.jpg" alt="" width="500" height="300">
        </a>
      </figure>


      <!-- DATA TESTING START - REMOVE LATER   -->
      <h4><?php echo $division_class ?></h4>

      <?php 

        foreach ($men_list as $men_sport) {
          echo '<pre>';
          
          echo $men_sport->name;
          
          echo '</pre>';
        }

        foreach ($women_list as $women_sport) {
          echo '<pre>';
          
          echo $women_sport->name;
          
          echo '</pre>';
        }
        
      ?>

      <!-- DATA TESTING END - REMOVE LATER   -->

      <?php endif; ?>

    </section>



    <section id="university-item-box" class="col-sm-7">

      <div class="university-text">
        <?php

        $mapLocation = get_field('university_address');

    
        if ( is_singular() ) :
          the_title( '<h1 class="entry-title">', '</h1>' );
        else :
          the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
        endif;

      ?>
        <h5 class="university-address">
          <strong><?php echo $mapLocation['address']; ?></strong>
        </h5>
      </div>
      <div class="university-item-content">

        <?php if (get_field('university_logo') ) : ?>
        <figure class="university-logo">
          <img class="img-fluid" src="<?php the_field('university_logo'); ?>" alt="">
        </figure>
        <?php else : ?>
        <figure class="university-logo">
          <img class="img-fluid" src="/wp-content/uploads/no-logo.jpg" alt="">
        </figure>
        <?php endif; ?>

        <a class="detail-link" href="<?php the_permalink(); ?>">
          <span class="btn btn-primary btn-sm">
            View Details
          </span>
        </a>

        <?php
        // <!-- CONTENT -->
          // the_excerpt();
        ?>
      </div>

    </section>

    <hr>


  </div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->