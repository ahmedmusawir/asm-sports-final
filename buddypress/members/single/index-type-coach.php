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

  <div class="top-page-navbar-coach">

    <section class="top-page-menu clearfix">
      <h3 class="menu-title float-left">Profile</h3>
      <?php if (is_user_logged_in() && ($user_id == $current_user_id)) : ?>

      <h3 id="edit-coach-profile-button" class="menu-title float-right">Edit Profile</h3>

      <?php endif; ?>
    </section>
  </div>
  <div class="top-filter-navbar-coach">

    <section class="top-page-menu clearfix">
      <h3 class="menu-title float-left">Filter</h3>
      <ul class="list-inline menu-box">
        <a href="#top-video-section">

          <li class="list-inline-item"><img class="img-icon"
              src="/wp-content/uploads/Screen-Shot-2020-03-30-at-11.29.14-AM-e1585539321304.png" alt="">
            <span class="btn-text">Video</span>
          </li>

        </a>
        <a href="#about-section">
          <!-- <li class="list-inline-item"><i class="fad fa-user-circle"></i>Bio</li> -->
          <li class="list-inline-item"><img class="img-icon" src="/wp-content/uploads/bio-icon.png" alt="">
            <span class="btn-text">Bio</span>
          </li>
        </a>


        <a href="#academics-section">
          <!-- <li class="list-inline-item"><i class="fad fa-file-certificate"></i>Academics</li> -->
          <li class="list-inline-item"><img class="img-icon"
              src="/wp-content/uploads/Screen-Shot-2020-03-30-at-11.30.01-AM.png" alt="">
            <span class="btn-text">Academics</span>
          </li>
        </a>
        <a href="#instagram-section">
          <!-- <li class="list-inline-item"><i class="fab fa-instagram"></i>Instagram</li> -->
          <li class="list-inline-item"><img class="img-icon" style="padding-top: .2rem;"
              src="/wp-content/uploads/pics-icon.png" alt="">
            <span class="btn-text">Instagram</span>
          </li>
        </a>

      </ul>

    </section>
  </div>
  <div class="bp-wrap">

    <div id="item-body" class="item-body row">
      <!-- LEFT COLUMN START -->
      <article class="left-col col-sm-12 col-md-12 col-lg-4 col-xl-3">

        <!-- LEFT-INFO-BOX SECTION START -->

        <?php 
      get_template_part('/buddypress/members/single/_moose-template-parts/coach-profile-left-info-box');
      ?>

        <!-- LEFT-INFO-BOX SECTION END -->

      </article>
      <!-- LEFT COLUMN END -->

      <!-- CENTER COLUMN START -->
      <article class="col-sm-12 col-md-12 col-lg-8 col-xl-6">

        <?php
          $user_id = bp_displayed_user_id();
          $current_user = wp_get_current_user();
          $current_user_id = $current_user->ID;
        ?>

        <?php if (is_user_logged_in() && ($user_id == $current_user_id)) : ?>
        <!-- SETTING UP EMAIL INBOX -->
        <?php //echo do_shortcode('[front-end-pm]'); ?>
        <!-- SETTING UP EMAIL INBOX END -->
        <?php endif; ?>

        <!-- THE EDIT MENU START -->
        <?php if (is_user_logged_in() && ($user_id == $current_user_id)) : ?>
        <!-- FOLLOWING IS USED FOR THE PROFILE EDIT FUNCTION ONLY -->
        <section id="coach-profile-edit-box" class="">
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
      // get_template_part('/buddypress/members/single/_moose-template-parts/athlete-profile-sports-stats');
      ?>

        <!-- SPORTS STATS SECTION END -->

        <!-- ACADEMICS SECTION START -->

        <?php 
      get_template_part('/buddypress/members/single/_moose-template-parts/coach-profile-university');
      ?>

        <!-- ACADEMICS SECTION END -->

        <!-- INSTAGRAM SECTION -->

        <?php 
      get_template_part('/buddypress/members/single/_moose-template-parts/athlete-profile-instagram');
      ?>

        <!-- INSTAGRAM END -->

        <!-- INTERVIEW SECTION START -->


        <?php 
      // get_template_part('/buddypress/members/single/_moose-template-parts/athlete-profile-interview');
      ?>


        <!-- INTERVIEW SECTION END -->


        <!-- CUSTOM MOOSE MAGIC ENDS HERE FOR ATHLETE PROFILE  -->

      </article>
      <!-- CENTER COLUMN END -->

      <!-- RIGHT COLUMN - SIDEBAR COLUMN STARTS -->

      <article class="col-sm-12 col-md-12 col-lg-12 col-xl-3">

        <!-- ATHLETE PROFILE RIGHT EMAIL BUTTON SET START -->

        <!-- MESSAGE BUTTON -->
        <?php // if (is_user_logged_in() && ($user_id == $current_user_id)) : ?>

        <section id="athlete-right-email-button">
          <a href="/coach-email-inbox/" class="clearfix">
            <div class="message-button">
              <img src="/wp-content/uploads/email-btn-icon.png" alt="" class="float-left btn-image">
              <div class="btn-text-holder">
                <h5 class="btn-text">MESSAGE ATHLETE</h5>
              </div>
            </div>
          </a>

        </section>
        <?php // endif; ?>


        <!-- SEARCH ATHLETE BUTTON -->

        <section id="athlete-right-search-athlete-button">
          <a href="/members/type/athletes/" class="clearfix">
            <div class="message-button">
              <img src="/wp-content/uploads/search-athlete-icon.png" alt="" class="float-left btn-image">
              <div class="btn-text-holder">
                <h5 class="btn-text">SEARCH ATHLETE</h5>
              </div>
            </div>
          </a>

        </section>

        <!-- ATHLETE PROFILE RIGHT EMAIL BUTTON SET END -->

        <!-- THE SIDEBAR -->
        <div class="sidebar-area mt-5">
          <?php get_sidebar(); ?>
        </div>

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