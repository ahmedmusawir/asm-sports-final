<?php
/**
 *
 * MODULE: Univ Index ASM
 *
 */
?>

<section id="" class="univ-index-block-asm">

  <div id="primary" class="content-area">
    <main id="main" class="site-main">

      <!-- Blue Top Bar -->
      <section id="general-univ-page-header">
        <h4 class="page-header-title">Universities</h4>
      </section>
      <!-- Blue Top Bar End-->

      <!-- TOP FILTER BAR -->
      <div class="top-filter-navbar-index">

        <section class="top-page-menu clearfix">
          <h3 class="menu-title float-left">Filters</h3>
          <ul class="list-inline menu-box">

            <li class="list-inline-item">

              <select class="select-filter" id="division-select">

                <option value="all">All Divisions</option>
                <option value="cccaa">CCCAA</option>
                <option value="uscaa">USCAA</option>
                <option value="naia-division-i">NAIA Division I</option>
                <option value="naia-division-ii">NAIA Division II</option>
                <option value="ncaa-division-i">NCAA Division I</option>
                <option value="ncaa-division-i-fbs">NCAA Division I-FBS</option>
                <option value="ncaa-division-i-fcs">NCAA Division I-FCS</option>
                <option value="ncaa-division-ii">NCAA Division II</option>
                <option value="ncaa-division-iii">NCAA Division III</option>
                <option value="njcaa-division-i">NJCAA Division I</option>
                <option value="njcaa-division-ii">NJCAA Division II</option>
                <option value="njcaa-division-iii">NJCAA Division III</option>

              </select>

            </li>


            <li class="list-inline-item">

              <select class="select-filter" id="men-select">

                <option value="all">All Men's Sports</option>
                <option value="baseball-men">Baseball – Men</option>
                <option value="basketball-men">Basketball – Men</option>
                <option value="football-men">Football – Men</option>
                <option value="golf-men">Golf – Men</option>
                <option value="soccer-men">Soccer – Men</option>
                <option value="tennis-men">Tennis – Men</option>

              </select>

            </li>

            <li class="list-inline-item">
              <select class="select-filter" id="women-select">

                <option value="all">All Women's Sports</option>
                <option value="baseball-women">Baseball – Women</option>
                <option value="basketball-women">Basketball – Women</option>
                <option value="softball-women">Softball – Women</option>
                <option value="golf-women">Golf – Women</option>
                <option value="soccer-women">Soccer – Women</option>

              </select>
            </li>

            <li class="list-inline-item">
              <select class="select-filter" id="location-state-select">

                <option value="all">Location</option>
                <option value="california">California</option>
                <option value="new-york">New York</option>
                <option value="texas">Texas</option>
                <option value="florida">Florida</option>
                <option value="georgia">Georgia</option>
                <option value="alabama">Alabama</option>
                <option value="alaska">Alaska</option>

              </select>
            </li>

            <a class="moose-item" href="#" id="univ-filter-reset">
              <li class="list-inline-item">
                <span class="btn-text">RESET FILTERS</span>
              </li>
            </a>
          </ul>

        </section>

      </div>

      <!-- TOP FILTER BAR END-->


      <section class="container-fluid">

        <div class="row">

          <div class="col-sm-12 col-md-12 col-lg-6">

            <!-- <div class="blog-index-header py-3">
              <h2 class="header-title">All Colleges & Universities:</h2>
              <h5 class="header-title">Find the right College or University for you ...</h5>
            </div> -->

            <article class="post-item-container">

              <?php	if ( have_posts() ) :	?>

              <div class="row">
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
              <?php // echo $mapLocation['lat'] ?>
              <?php // echo $mapLocation['lng']; ?>

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