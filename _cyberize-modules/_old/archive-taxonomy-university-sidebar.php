<?php
/**
 *
 * MODULE: Blog Index ASM
 *
 */
?>

<section id="" class="blog-index-block-asm">

  <div id="primary" class="content-area">
    <main id="main" class="site-main">

      <!-- Page Header with image -->
      <section id="general-blog-page-header">
        <section class="top-page-menu clearfix">
          <h3 class="menu-title float-left">Filters:</h3>
          <ul class="list-inline menu-box float-left">
            <a href="/universities/">
              <li class="list-inline-item">All</li>
            </a>
          </ul>
          <?php
          wp_nav_menu( array( 
              'theme_location' => 'univ-cat', 
              'container_class' => 'menu-box' ) ); 
          ?>

        </section>
      </section>

      <section class="container-fluid">

        <div class="row">

          <div class="col-sm-12 col-md-12 col-lg-6">

            <div class="blog-index-header py-3">
              <h2 class="header-title">All Universities:</h2>
              <h5 class="header-title">Find the right university for you ...</h5>
            </div>

            <article class="post-item-container">

              <?php	if ( have_posts() ) :	?>

              <div class="masonry">
                <?php
									/* Start the Loop */
									while ( have_posts() ) : the_post();

										/*
										 * Include the Post-Format-specific template for the content.
										 * If you want to override this in a child theme, then include a file
										 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
										 */
										get_template_part( 'template-parts/content', 'univ-item-asm' );

									endwhile;

									?>
              </div>
              <div class="post-nav-holder col-12"><?php the_posts_navigation(); ?></div>
              <?php

								else :

									get_template_part( 'template-parts/content', 'none' );

								endif;
							?>

            </article>

          </div> <!-- 9 COLS END -->

          <div class="col-sm-12 col-md-12 col-lg-6">

            <!-- ACF MAP START -->
            <!-- <div class=""> -->
            <div class="acf-map">

              <?php 

							rewind_posts();
							// wp_reset_postdata();

							
							if (have_posts()) :
							
							    while(have_posts()) : the_post();
								
								$mapLocation = get_field('university_address');

						?>


              <div class="marker" data-lat="<?php echo $mapLocation['lat'] ?>"
                data-lng="<?php echo $mapLocation['lng']; ?>">
                <a href="<?php the_permalink(); ?>">
                  <figure style="width: 100% !important;">
                    <?php the_post_thumbnail( 'map-image' ); ?>
                  </figure>
                  <h6><?php the_title(); ?></h6>
                  <?php echo $mapLocation['address']; ?>
                </a>
              </div>
              <?php echo $mapLocation['lat'] ?>
              <?php echo $mapLocation['lng']; ?>

              <?php 	endwhile;
								
								wp_reset_postdata();
								
							endif;

						?>


            </div> <!-- ACF-MAP END -->

          </div> <!-- 3 COLS END -->

        </div> <!-- ROW END -->



      </section>

    </main><!-- #main -->
  </div><!-- #primary -->


</section>