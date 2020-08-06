<?php
/**
 *
 * MODULE: Univ LOCATION Index ASM
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

          <!-- WP LOCATION MENU START -->

          <?php
              // wp_nav_menu( array( 
              //   'theme_location' => 'univ-cat', 
              //   'container_class' => 'menu-box' ) ); 
            ?>

          <!-- WP LOCATION MENU END -->

          <ul class="list-inline menu-box">

            <li id="location-dropdown-btn" class="list-inline-item">

              <span class="btn-text select-filter">All States</span>

            </li>

            <li class="list-inline-item">

              <select class="select-filter" id="division-select">

                <option value="all">All Divisions</option>
                <option value="divisions-cccaa">CCCAA</option>
                <option value="divisions-uscaa">USCAA</option>
                <option value="divisions-naia-division-i">NAIA Division I</option>
                <option value="divisions-naia-division-ii">NAIA Division II</option>
                <option value="divisions-ncaa-division-i">NCAA Division I</option>
                <option value="divisions-ncaa-division-i-fbs">NCAA Division I-FBS</option>
                <option value="divisions-ncaa-division-i-fcs">NCAA Division I-FCS</option>
                <option value="divisions-ncaa-division-ii">NCAA Division II</option>
                <option value="divisions-ncaa-division-iii">NCAA Division III</option>
                <option value="divisions-njcaa-division-i">NJCAA Division I</option>
                <option value="divisions-njcaa-division-ii">NJCAA Division II</option>
                <option value="divisions-njcaa-division-iii">NJCAA Division III</option>

              </select>

            </li>


            <li class="list-inline-item">

              <select class="select-filter" id="men-select">

                <option value="all">All Men's Sports</option>
                <option value="mens-sports-baseball-men">Baseball – Men</option>
                <option value="mens-sports-basketball-men">Basketball – Men</option>
                <option value="mens-sports-football-men">Football – Men</option>
                <option value="mens-sports-golf-men">Golf – Men</option>
                <option value="mens-sports-soccer-men">Soccer – Men</option>

              </select>

            </li>

            <li class="list-inline-item">
              <select class="select-filter" id="women-select">

                <option value="all">All Women's Sports</option>
                <option value="womens-sports-baseball-women">Baseball – Women</option>
                <option value="womens-sports-basketball-women">Basketball – Women</option>
                <option value="womens-sports-softball-women">Softball – Women</option>
                <option value="womens-sports-golf-women">Golf – Women</option>
                <option value="womens-sports-soccer-women">Soccer – Women</option>

              </select>
            </li>

            <a class="moose-item" id="univ-filter-reset">
              <li class="list-inline-item">
                <span class="btn-text">RESET FILTERS</span>
              </li>
            </a>
          </ul>

        </section>

      </div>

      <!-- TOP FILTER BAR END-->

      <!-- WP LOCATION MENU START -->

      <?php
        wp_nav_menu( array( 
          'theme_location' => 'univ-cat', 
          'container_class' => 'location-menu-box container-fluid',
          'menu_class' => 'row d-none animated bounceInDown'
        ) ); 
      ?>

      <!-- WP LOCATION MENU END -->


      <section class="container-fluid">

        <div class="row">

          <div class="col-sm-12 col-md-12 col-lg-6">

            <article class="post-item-container">

              <header class="blog-index-header py-1">
                <?php
                  the_archive_title( '<h2 class="archive-location">', '</h2>' );
                ?>
                <!-- <div class="long-underline"></div>	 -->

              </header><!-- .page-header -->

              <!-- NO DATA FOUND START -->

              <div class="no-data-found text-center d-none">
                <h3 class="no-data-title">NO MATCHED DATA FOUND! ... PLEASE CLICK RESET FILTERS & TRY AGAIN</h3>
              </div>

              <!-- NO DATA FOUND END -->

              <?php	if ( have_posts() ) :	?>

              <div class="row">
                <section class="univ-post-container">

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
                </section>
              </div>
              <!-- <div class="post-nav-holder col-12"><?php //the_posts_navigation(); ?></div> -->
              <!-- THE LOAD MORE STARTS -->

              <div class="text-center">
                <a id="univ-load-more-btn" class="btn btn-light btn-lg" data-page="1"
                  data-url="<?php echo admin_url('admin-ajax.php'); ?>" data-univ="location">
                  <span class="asm-loading pr-3"><i class="fas fa-spinner"></i></span>Load More
                </a>
              </div>

              <!-- THE LOAD MORE ENDS -->
              <?php

								else :

									get_template_part( 'template-parts/content', 'none' );

								endif;
							?>

            </article>

          </div> <!-- 9 COLS END -->

          <div class="google-map-holder col-sm-12 col-md-12 col-lg-6">
            <section class="google-map-innerbox">
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

            </section> <!-- GOOGLE MAP INNER BOX END -->

          </div> <!-- 3 COLS END -->

        </div> <!-- ROW END -->



      </section>

    </main><!-- #main -->
  </div><!-- #primary -->


</section>