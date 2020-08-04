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

          <a class="moose-item" href="#" id="all">

            <li class="list-inline-item">
              <span class="btn-text">ALL</span>
            </li>

          </a>
          <a class="moose-item" href="#" id="FOOTBALL">

            <li class="list-inline-item">
              <span class="btn-text">US FOOTBALL</span>
            </li>

          </a>
          <a class="moose-item" href="#" id="GOLF">
            <li class="list-inline-item">
              <span class="btn-text">GOLF</span>
            </li>
          </a>
          <a class="moose-item" href="#" id="BASEBALL">
            <li class="list-inline-item">
              <span class="btn-text">BASEBALL</span>
            </li>
          </a>
          <a class="moose-item" href="#" id="BASKETBALL">
            <li class="list-inline-item">
              <span class="btn-text">BASKETBALL</span>
            </li>
          </a>
          <a class="moose-item" href="#" id="SOCCER">
            <li class="list-inline-item">
              <span class="btn-text">SOCCER</span>
            </li>
          </a>
          <a class="moose-item" href="#" id="CHEERLEADING">
            <li class="list-inline-item">
              <span class="btn-text">CHEERLEADING</span>
            </li>
          </a>
        </ul>

      </section>
    </div>


    <div class="row asm-index-page-content">

      <div class="col-md-9">
        <!-- THE FOLLOWING IS LOADING THE MEMEBERS LIST WITH JS [data-bp-list="members"]... DO NOT REMOVE -->
        <div id="members-dir-list" class="members dir-list" data-bp-list="members">

        </div><!-- #members-dir-list -->
      </div> <!-- end col-md-8 -->

      <div class="col-3">

        <div class="sidebar-container pr-3">
          <?php get_sidebar(); ?>
        </div>

      </div>

    </div> <!-- end row -->




  </div><!-- // .screen-content -->

</section>