<?php
/**
 * BuddyPress Members Directory
 *
 * @version 3.0.0
 */

?>
<section id="athlete-index" class="mt-5 pt-5">

  <div class="screen-content">

    <!-- TOP BLUE BAR -->
    <div class="search-menu-container">
      <article class="">
        <h5 class="text-light pt-3 pl-4">Athletes: </h5>
        <?php //bp_get_template_part( 'common/search-and-filters-bar' ); ?>
      </article>
    </div>

    <!-- TOP FILTER BAR -->
    <div class="top-filter-navbar-index">

      <section class="top-page-menu clearfix">
        <h3 class="menu-title float-left">Filters</h3>
        <ul class="list-inline menu-box">

          <li class="list-inline-item">

            <select class="select-filter" id="sports-select" data-url="<?php echo admin_url('admin-ajax.php'); ?>">

              <option value="all">All Sports</option>
              <!-- <option value="FOOTBALL">FootBall</option>
              <option value="GOLF">Golf</option>
              <option value="BASEBALL">Baseball</option>
              <option value="BASKETBALL">Basketball</option>
              <option value="SOCCER">Soccer</option>
              <option value="CHEERLEADING">Cheerleading</option> -->

            </select>

          </li>


          <li class="list-inline-item">

            <select class="select-filter" id="gender-select">

              <option value="all">All Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>

            </select>

          </li>

          <li class="list-inline-item">
            <select class="select-filter" id="avail-select">

              <option value="all">Availablility</option>
              <option value="available">Available</option>
              <option value="committed">Committed</option>

            </select>
          </li>

          <li class="list-inline-item">
            <select class="select-filter" id="class-year-select">

              <option value="all">Class Year</option>
              <option value="2018">2020</option>
              <option value="2019">2021</option>
              <option value="2020">2022</option>
              <option value="2020">2023</option>
              <option value="2020">2024</option>
              <option value="2020">2025</option>
              <option value="2020">2026</option>
              <option value="2020">2027</option>
              <option value="2020">2028</option>
              <option value="2020">2029</option>

            </select>
          </li>

          <li class="list-inline-item">
            <select class="select-filter" id="location-select" data-url="<?php echo admin_url('admin-ajax.php'); ?>">

              <option value="all">Location</option>
              <!-- <option value="USA">USA</option>
              <option value="UK">UK</option>
              <option value="Canada">Canada</option>
              <option value="Domenican-Republic">Domenican Republic</option>
              <option value="Mexico">Mexico</option> -->

            </select>
          </li>

          <li class="list-inline-item">
            <select class="select-filter" id="verify-select">

              <option value="all">Verification</option>
              <option value="verified">Verified</option>
              <option value="unverified">Not Verified</option>

            </select>
          </li>


          <a class="moose-item" href="#" id="ath-filter-reset">
            <li class="list-inline-item">
              <span class="btn-text">RESET FILTERS</span>
            </li>
          </a>
        </ul>

      </section>
    </div>


    <div class="row asm-index-page-content">

      <div class="col-md-9">

        <!-- NO DATA FOUND START -->

        <div class="no-data-found text-center d-none">
          <h3 class="no-data-title">NO MATCHED DATA FOUND! ... PLEASE CLICK RESET FILTERS & TRY AGAIN</h3>
        </div>

        <!-- NO DATA FOUND END -->

        <!-- THE FOLLOWING IS LOADING THE MEMEBERS LIST WITH JS [data-bp-list="members"]... DO NOT REMOVE -->
        <div id="members-dir-list" class="members dir-list" data-bp-list="members">

        </div><!-- #members-dir-list -->



        <!-- THE LOAD MORE STARTS -->

        <div class="text-center">
          <a id="ath-load-more-btn" class="btn btn-light btn-lg mb-5" data-page="2"
            data-url="<?php echo admin_url('admin-ajax.php'); ?>" data-univ="index">
            <span class="asm-loading pr-3"><i class="fas fa-spinner"></i></span>Load More
          </a>
        </div>

        <!-- THE LOAD MORE ENDS -->

      </div> <!-- end col-md-8 -->

      <div class="col-3">

        <div class="sidebar-container pr-3">
          <?php get_sidebar(); ?>
        </div>

      </div>

    </div> <!-- end row -->




  </div><!-- // .screen-content -->

</section>