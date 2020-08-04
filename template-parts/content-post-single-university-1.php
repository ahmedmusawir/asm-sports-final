<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cyberize
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-single'); ?>>
  <section class="post-asm">

    <div class="entry-content container">

      <div class="row">

        <div class="col-sm-12 col-md-12 col-lg-9">

          <figure class="featured-img-holder">
            <?php cyberize_post_thumbnail(); ?>
          </figure>

          <main class="">
            <!-- CATEGORY -->
            <!-- <h5 class="post-category"><?php // cyberize_entry_footer(); ?></h5> -->
            <?php
						if ( is_singular() ) :
							the_title( '<h1 class="entry-title mx-auto">', '</h1>' );
							// the_title( '<h1 class="entry-title text-center">', '</h1>' );
						else :
							the_title( '<h2 class="entry-title mx-auto"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
						endif;

						if ( 'listing' === get_post_type() ) : ?>
            <div class="entry-meta pl-2 mb-5 row">
              <?php
								cyberize_posted_by();
								echo '<span class="divider p-2">/</span>';
								cyberize_posted_on();
								echo '<span class="divider p-2">/</span>';
								// cyberize_entry_footer();

							?>

            </div><!-- .entry-meta -->
            <?php
						endif; ?>

          </main>

          <!-- SINGLE LIST ITEM MAP -->
          <div class="acf-map acf-map-single">

            <?php 

							$mapLocation = get_field('university_address');

						    // print_r($mapLocation);
						?>
            <div class="marker" data-lat="<?php echo $mapLocation['lat'] ?>"
              data-lng="<?php echo $mapLocation['lng']; ?>">
              <h6 class=""><?php the_title(); ?></h6>
              <?php echo $mapLocation['address']; ?>
            </div>

          </div> <!-- ACF-MAP END -->

          <?php
						the_content();


						// If comments are open or we have at least one comment, load up the comment template.
						// if ( comments_open() || get_comments_number() ) :
						// 	comments_template();
						// endif;						
					?>

        </div>
        <aside id="sidebar" class="col-sm-12 col-md-12 col-lg-3">

          <?php get_sidebar();  ?>

        </aside>
      </div>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
    </footer><!-- .entry-footer -->
  </section>
</article><!-- #post- -->