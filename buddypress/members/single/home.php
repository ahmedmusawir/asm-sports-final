<?php
/**
 * BuddyPress - Members Home
 *
 * @since   1.0.0
 * @version 3.0.0
 */
?>
<!-- FONT AWESOME 5 PRO -->
<script src="https://kit.fontawesome.com/c8084101a0.js" crossorigin="anonymous"></script>

<div class="top-page-navbar">

  <section class="top-page-menu clearfix">
    <h3 class="menu-title float-left">Profile</h3>
    <ul class="list-inline menu-box">
      <a href="#top-video-section">
        <li class="list-inline-item"><i class="fad fa-video"></i>Video</li>
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
  </section>
</div>

<div class="bp-wrap">
  <?php if ( ! bp_nouveau_is_object_nav_in_sidebar() ) : ?>


  <?php //bp_get_template_part( 'members/single/parts/item-nav' ); ?>


  <?php endif; ?>

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

      <!-- THE EDIT MENU START -->
      <!-- FOLLOWING IS USED FOR THE PROFILE EDIT FUNCTION ONLY -->
      <?php bp_nouveau_member_template_part(); ?>
      <!-- THE EDIT MENU END -->

      <?php //get_template_part( 'buddypress/members/single/parts/item-nav' ); ?>
      <?php //get_template_part( 'buddypress/members/single/parts/item-subnav' ); ?>

      <!-- ---------------------------------------------->

      <!-- CUSTOM MOOSE MAGIC STARTS HERE FOR ATHLETE PROFILE  -->
      <!-- <h1 class="display-4">Da Moose is Loose</h1> -->

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
      <img src="/wp-content/uploads/2020/01/profile-sidebar.png" alt="">
    </article>

  </div><!-- #item-body -->

</div><!-- // .bp-wrap -->

<?php bp_nouveau_member_hook( 'after', 'home_content' ); ?>

<script>
(function($, window) {
  var adjustAnchor = function() {

    var $anchor = $(':target'),
      fixedElementHeight = 220;

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