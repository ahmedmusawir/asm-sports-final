<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cyberize
 */

?>
<?php 
/**
 * Collecting University Categories
 */

$tax_list = get_the_terms(get_the_ID(), 'division'); // THIS IS FOR CPT TAXONOMIES
// $cat_list = get_the_category(); // THIS IS GOOD FOR REGULAR POSTS
$school_type = null;

if ($tax_list) {

  // $school_type = $tax_list[0]->name;
  echo '<pre>';
  // echo print_r($tax_list);
  // echo $tax_list[0]->name;
  echo '</pre>';
  
} else {

  $school_type = null;

}

?>
<article id="post-<?php the_ID(); ?>" <?php post_class("col-md-12 post-item item animated bounceIn  $school_type"); ?>>

  <div class="entry-content row">

    <?php if (has_post_thumbnail()) : ?>

    <section class="col-sm-5">

      <figure class="featured-image-box">
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail( 'featured-size' ); ?>
        </a>
      </figure>

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


        <figure class="university-logo">
          <img class="img-fluid" src="<?php the_field('university_logo'); ?>" alt="">
        </figure>

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

    <?php else : ?>

    <div class="FL-post-item-footer">
      <?php cyberize_entry_footer(); ?>
    </div>

    <?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
				endif;

				?>
    <div class="entry-meta">
      <?php
        // cyberize_posted_by();
        // cyberize_posted_on();
      ?>
    </div><!-- .entry-meta -->

    <div class="pr-3 pt-3 pb-3 d-flex justify-content-between university-item-content">

      <a class="detail-link" href="<?php the_permalink(); ?>"><span class="btn btn-primary btn-sm">View
          Details</span></a>
      <figure class="university-logo">
        <img class="img-fluid" src="<?php the_field('university_logo'); ?>" alt="">
        <!-- <img class="img-fluid" src="/wp-content/uploads/university-logos.png" alt=""> -->
      </figure>

      <?php
      // <!-- CONTENT -->
        // the_excerpt();
      ?>
    </div>

    <?php endif; ?>

  </div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->