<?php
/**
 * the template file to display content search result page
 * instead create a folder 'buddyboss-global-search' inside your theme, copy this file over there, and make changes there
 */
?>


<div class="bboss_search_page buddypress-wrap">

  <section class="search-menu-container">
    <div class="bboss_search_filters_wrapper dir-form float-left">
      <div class="search_filters item-list-tabs bp-navs no-ajax" role="navigation">
        <ul>
          <?php buddyboss_global_search_filters();?>
        </ul>
      </div>
    </div>
    <div class="bboss_search_form_wrapper dir-search no-ajax float-right">
      <?php get_search_form();?>
    </div>
  </section> <!-- search-menu-container END -->

  <!-- MOOSE STUFF -->
  <section id="athlete-index-container" class="container-fluid">

    <div class="row">

      <div class="col-sm-12 col-md-12 col-lg-8">


        <div class="search_results">
          <?php buddyboss_global_search_results();?>
        </div>

      </div>
      <div class="col-sm-12 col-md-12 col-lg-4">

        <div class="sidebar-holder pr-3">
          <?php get_sidebar(); ?>
        </div>

      </div>

    </div>

  </section>

  <!-- MOOSE STUFF -->


</div><!-- .bboss_search_page -->