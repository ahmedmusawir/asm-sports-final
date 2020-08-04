<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Moose_Framework_2
 */

get_header(); ?>

<div id="primary" class="content-area single-post-asm">
  <!-- <div class="row"> -->
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
      <!-- <section class="top-page-menu clearfix">

        <h3 class="menu-title float-left">Get Recruited</h3>

      </section> -->
    </section>

    <?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'post-single-university' );

				// If comments are open or we have at least one comment, load up the comment template.
				// if ( comments_open() || get_comments_number() ) :
				// 	comments_template();
				// endif;
			?>

    <?php

			endwhile; // End of the loop.

			?>

  </main><!-- #main -->

  <!-- </div> END ROW -->
</div><!-- #primary -->



<?php
get_footer();