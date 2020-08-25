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
          <h3 class="bluebar-title float-left">Learn</h3>
        </section>
        <section class="top-page-menu-mobile">

          <?php
          wp_nav_menu( array( 
              'theme_location' => 'post-cat', 
              'container_class' => 'menu-box' ) ); 
          ?>

        </section>
      </section>

      <!-- TOP FILTER BAR STARTS -->
      <div class="top-filter-navbar-index">

        <section class="top-page-menu clearfix">
          <h3 class="menu-title float-left">Filters</h3>

          <?php
          wp_nav_menu( array( 
              'theme_location' => 'post-cat', 
              'container_class' => 'menu-box' ) ); 
          ?>
        </section>
      </div>
      <!-- TOP FILTER BAR ENDS -->

      <section class="container-fluid">

        <div class="row">

          <div class="col-sm-12 col-md-12 col-lg-8">

            <div class="blog-index-header py-3">
              <h2 class="header-title">All Article and Videos</h2>
              <h5 class="header-title">Browse on dozens of articles and find the right one for you</h5>
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
										get_template_part( 'template-parts/content', 'post-item-asm' );

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

          <div class="col-sm-12 col-md-12 col-lg-4">

            <?php get_sidebar(); ?>

          </div> <!-- 3 COLS END -->

        </div> <!-- ROW END -->



      </section>

    </main><!-- #main -->
  </div><!-- #primary -->


</section>