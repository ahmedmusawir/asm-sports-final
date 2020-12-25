<?php
/**
 *
 * MODULE: Univ Index ASM
 *
 */
?>
<link rel="stylesheet" href="https://maps.googleapis.com/maps/api/js?key=AIzaSyCLPeaPHJFYJCR0xKMI-0aGPZpuc2aru8U">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/dist/js/GoogleMap.min.js' ?>">

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

            <li id="location-dropdown-btn" class="list-inline-item">

              <span class="btn-text select-filter">All States</span>

            </li>

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

              <select class="select-filter" id="men-select" data-url="<?php echo admin_url('admin-ajax.php'); ?>">

                <option value="all">All Men's Sports</option>
                <!-- <option value="mens-sports-baseball-men">Baseball – Men</option>
                <option value="mens-sports-basketball-men">Basketball – Men</option>
                <option value="mens-sports-football-men">Football – Men</option>
                <option value="mens-sports-golf-men">Golf – Men</option>
                <option value="mens-sports-soccer-men">Soccer – Men</option> -->

              </select>

            </li>

            <li class="list-inline-item">
              <select class="select-filter" id="women-select" data-url="<?php echo admin_url('admin-ajax.php'); ?>">

                <option value="all">All Women's Sports</option>
                <!-- <option value="womens-sports-baseball-women">Baseball – Women</option>
                <option value="womens-sports-basketball-women">Basketball – Women</option>
                <option value="womens-sports-softball-women">Softball – Women</option>
                <option value="womens-sports-golf-women">Golf – Women</option>
                <option value="womens-sports-soccer-women">Soccer – Women</option> -->

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

              <style>
              #univ-index-data-container {
                height: 500px;
              }

              #footer-asm {
                display: none;
              }

              #spinner {
                visibility: hidden;
                width: 80px;
                height: 80px;

                border: 2px solid #f3f3f3;
                border-top: 3px solid #f25a41;
                border-radius: 100%;

                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                margin: auto;

                animation: spin 1s infinite linear;
              }

              @keyframes spin {
                from {
                  transform: rotate(0deg);
                }

                to {
                  transform: rotate(360deg);
                }
              }

              #spinner.show {
                visibility: visible;
              }
              </style>

              <section id="univ-index-data-container" class="">
                <!-- UNIV DATA GOES HERE -->
                <i id="spinner" class="show"></i>
              </section>

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
              <?php  echo $mapLocation['lat'] ?>
              <?php  echo $mapLocation['lng']; ?>

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