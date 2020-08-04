<?php
/**
 * BuddyPress - Members Home
 *
 * @since   1.0.0
 * @version 3.0.0
 */
get_header();
?>
<div id="buddypress" class="buddypress-wrap coach bp-dir-hori-nav">
  <!-- FONT AWESOME 5 PRO -->
  <script src="https://kit.fontawesome.com/c8084101a0.js" crossorigin="anonymous"></script>
  <?php
    $user_id = bp_displayed_user_id();
    $current_user = wp_get_current_user();
    $current_user_id = $current_user->ID;
  ?>

  <div class="top-page-navbar">

    <section class="top-page-menu clearfix">

      <h3 class="menu-title float-left">Profile</h3>
      <?php if (is_user_logged_in() && ($user_id == $current_user_id)) : ?>

      <h3 id="edit-athlete-profile-button" class="menu-title float-right">Edit Profile</h3>

      <?php endif; ?>

    </section>
  </div>
  <div class="top-filter-navbar">

    <section class="top-page-menu clearfix">
      <h3 class="menu-title float-left">Filter</h3>
      <ul class="list-inline menu-box">
        <a href="#top-video-section">

          <li class="list-inline-item"><img class="img-icon"
              src="/wp-content/uploads/Screen-Shot-2020-03-30-at-11.29.14-AM-e1585539321304.png" alt=""> <span
              class="btn-text">Video</span></li>
          <!-- <li class="list-inline-item"><i class="fad fa-video"></i>Video</li> -->
        </a>
        <a href="#about-section">
          <li class="list-inline-item"><i class="fad fa-user-circle"></i>Bio</li>
        </a>
        <a href="#sports-stats-section">
          <li class="list-inline-item"><i class="fad fa-trophy-alt"></i></i>Sports Stats</li>
        </a>
        <a href="#academics-section">
          <li class="list-inline-item"><i class="fad fa-file-certificate"></i>Academics</li>
        </a>
        <a href="#instagram-section">
          <li class="list-inline-item"><i class="fab fa-instagram"></i>Instagram</li>
        </a>
        <a href="#interview-section">
          <li class="list-inline-item"><i class="fad fa-comments"></i>Interviews</li>
        </a>
      </ul>
      <!-- <h3 id="edit-athlete-profile-button" class="menu-title float-right">Edit Profile</h3> -->

    </section>
  </div>

  <div class="bp-wrap">

    <div id="item-body" class="item-body row">
      <!-- LEFT COLUMN START -->
      <article class="left-col col-sm-12 col-md-12 col-lg-4 col-xl-3">

        <!-- LEFT-INFO-BOX SECTION START -->

        <?php 
      get_template_part('/buddypress/members/single/_moose-template-parts/athlete-profile-left-info-box');
      ?>

        <!-- LEFT-INFO-BOX SECTION END -->

      </article>
      <!-- LEFT COLUMN END -->

      <!-- CENTER COLUMN START -->
      <article class="col-sm-12 col-md-12 col-lg-8 col-xl-6">



        <?php if (is_user_logged_in() && ($user_id == $current_user_id)) : ?>
        <!-- SETTING UP EMAIL INBOX -->
        <?php //echo do_shortcode('[front-end-pm]'); ?>
        <!-- SETTING UP EMAIL INBOX END -->
        <?php endif; ?>

        <!-- THE EDIT MENU START -->
        <?php if (is_user_logged_in() && ($user_id == $current_user_id)) : ?>
        <!-- FOLLOWING IS USED FOR THE PROFILE EDIT FUNCTION ONLY -->
        <section id="athlete-profile-edit-box" class="">
          <?php bp_nouveau_member_template_part(); ?>
        </section>
        <?php endif; ?>
        <!-- THE EDIT MENU END -->

        <?php //get_template_part( 'buddypress/members/single/parts/item-nav' ); ?>
        <?php //get_template_part( 'buddypress/members/single/parts/item-subnav' ); ?>

        <!-- ---------------------------------------------->

        <!-- CUSTOM MOOSE MAGIC STARTS HERE FOR ATHLETE PROFILE  -->

        <!-- TOP VIDEO SECTION START -->
        <?php 
      get_template_part('/buddypress/members/single/_moose-template-parts/athlete-profile-video');
      ?>

        <!-- TOP VIDEO SECTION END -->

        <!-- ABOUT SECTION START -->

        <?php 
      get_template_part('/buddypress/members/single/_moose-template-parts/athlete-profile-about');
      ?>

        <!-- ABOUT SECTION END -->

        <!-- SPORTS STATS SECTION STARTS -->

        <?php 
      get_template_part('/buddypress/members/single/_moose-template-parts/athlete-profile-sports-stats');
      ?>

        <!-- SPORTS STATS SECTION END -->

        <!-- ACADEMICS SECTION START -->

        <?php 
      get_template_part('/buddypress/members/single/_moose-template-parts/athlete-profile-academics');
      ?>

        <!-- ACADEMICS SECTION END -->

        <!-- INSTAGRAM SECTION -->

        <?php 
      get_template_part('/buddypress/members/single/_moose-template-parts/athlete-profile-instagram');
      ?>

        <!-- INSTAGRAM END -->

        <!-- INTERVIEW SECTION START -->


        <?php 
      get_template_part('/buddypress/members/single/_moose-template-parts/athlete-profile-interview');
      ?>


        <!-- INTERVIEW SECTION END -->


        <!-- CUSTOM MOOSE MAGIC ENDS HERE FOR ATHLETE PROFILE  -->

      </article>
      <!-- CENTER COLUMN END -->

      <article class="col-sm-12 col-md-12 col-lg-12 col-xl-3">

        <?php
          $user_id = bp_displayed_user_id();
          $current_user = wp_get_current_user();
          $current_user_id = $current_user->ID;
        ?>


        <?php if (is_user_logged_in() && ($user_id == $current_user_id)) : ?>

        <section id="athlete-view-count-box">

          <!-- <img src="/wp-content/uploads/2020/01/profile-sidebar.png" alt=""> -->
          <?php //echo do_shortcode('[bp-visitors-recent-visitors]'); ?>
          <?php 
          $users_obj = visitors_get_recent_visitors( get_current_user_id(), $count = 3 );
          echo '<pre>';
          // print_r($users_obj);
          echo '</pre>';
          foreach ($users_obj as $value) :
            
          // OBJECTS FROM THE RECENT VISITOR PLUGIN 
          $user_id = $value->visitor_id;
          // VARSITY NAME
          $versity_name = xprofile_get_field_data( 435, $user_id, $multi_format = 'array' );
          // VERSITY LOGO IMAGE
          $versity_logo = xprofile_get_field_data( 439, $user_id, $multi_format = 'array' );

        /**
         * ATHLETE VIEW BOX
         * Look inside ATHLETE & COACH SINGLE PROFILE in bp-global.scss file for styling
         */
        ?>

          <div class="box-content row">
            <figure class="versity-logo col-sm-5 d-flex justify-content-center align-items-center">
              <?php echo $versity_logo; ?>
            </figure>
            <article class="text-content col-sm-7">
              <div class="icon-text-box">
                <h4 class="icon-text">
                  <i class="fas fa-eye"></i> &nbsp; Viewed
                </h4>
              </div>
              <div class="text-only-box">
                <h5 class="text-only">
                  <?php echo $versity_name; ?> viewed <br>
                  <?php //print_r($current_user); ?>
                  <?php echo  $current_user->display_name; ?>
                </h5>
              </div>
            </article>
          </div>

          <?php endforeach; ?>

        </section> <!-- #athlete-view-count-box end -->

        <?php endif; ?>
        <!-- End if (is_user_logged_in())  -->


        <!-- THE SIDEBAR -->
        <?php get_sidebar(); ?>

      </article>

    </div><!-- #item-body -->

  </div><!-- // .bp-wrap -->

  <?php bp_nouveau_member_hook( 'after', 'home_content' ); ?>

</div> <!-- #buddyPress Ends -->

<script>
(function($, window) {
  var adjustAnchor = function() {

    var $anchor = $(':target'),
      fixedElementHeight = 230;

    if ($anchor.length > 0) {

      $('html, body')
        .stop()
        .animate({
          scrollTop: $anchor.offset().top - fixedElementHeight
        }, 200);

    }

  };

  $(window).on('hashchange load', function() {
    adjustAnchor();
  });

})(jQuery, window);
</script>

<?php
get_footer();