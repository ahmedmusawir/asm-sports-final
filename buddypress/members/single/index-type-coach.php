<?php
/**
 * ASM - ATHLETE PROFILE
 *
 * @since   1.0.0
 * @version 3.0.0
 */
get_header();
?>
<div id="buddypress" class="buddypress-wrap coach bp-dir-hori-nav">
  <!-- FONT AWESOME 5 PRO -->
  <!-- <script src="https://kit.fontawesome.com/c8084101a0.js" crossorigin="anonymous"></script> -->
  <?php
  
    $user_id = bp_displayed_user_id();
    $current_user = wp_get_current_user();
    $current_user_id = $current_user->ID;
    $user_id_for_ACF = "user_" . $user_id;
    $committed_status = get_field( 'athlete_availability', $user_id_for_ACF );
    $committed_university_name = get_field( 'university_name', $user_id_for_ACF );
    $committed_university_logo = get_field( 'university_logo', $user_id_for_ACF );
    $verification = get_field( 'athlete_verification', $user_id_for_ACF );
    $sport = xprofile_get_field_data( 49, $user_id, $multi_format = 'array' );

    if ( ! $verification || $verification == 'no' ) {

      $v_result = '
      <li class="d-inline meta-icon">
        <i class="fas fa-times-circle"></i>
      </li>
      <li class="d-inline meta-text">
        <span class="text">Unverified Profile</span>
      </li>
      ';

    } else {

      $v_result = '
      <li class="d-inline meta-icon">
        <i class="fas fa-check-circle"></i>
      </li>
      <li class="d-inline meta-text">
        <span class="text">Verified Profile</span>
      </li>
      ';

    }

  ?>

  <div class="top-page-navbar">

    <section class="top-page-menu clearfix">

      <h3 class="menu-title float-left">Profile</h3>
      <?php if (is_user_logged_in() && ($user_id == $current_user_id)) : ?>

      <!-- <h3 id="edit-athlete-profile-button" class="menu-title float-right">Edit Profile</h3> -->

      <?php endif; ?>

    </section>

  </div>
  <div class="top-filter-navbar">

    <section class="top-page-menu clearfix">
      <h3 class="menu-title float-left">Filter</h3>
      <h3 id="edit-athlete-profile-button" class="menu-title float-right">
        Edit Profile &nbsp;
        <i class="fas fa-pen-square"></i>
      </h3>

      <ul class="list-inline menu-box">
        <a href="#top-video-section">
          <li class="list-inline-item"><img class="img-icon" src="/wp-content/uploads/video-icon.png" alt="">
            <span class="btn-text">Video</span>
          </li>
        </a>
        <a href="#about-section">
          <!-- <li class="list-inline-item"><i class="fad fa-user-circle"></i>Bio</li> -->
          <li class="list-inline-item"><img class="img-icon" src="/wp-content/uploads/bio-icon-2.png" alt="">
            <span class="btn-text">Bio</span>
          </li>
        </a>
        <a href="#academics-section">
          <!-- <li class="list-inline-item"><i class="fad fa-file-certificate"></i>Academics</li> -->
          <li class="list-inline-item"><img class="img-icon" src="/wp-content/uploads/academics-icon-1.png" alt="">
            <span class="btn-text">University</span>
          </li>
        </a>
        <a href="#instagram-section">
          <!-- <li class="list-inline-item"><i class="fab fa-instagram"></i>Instagram</li> -->
          <li class="list-inline-item"><img class="img-icon" style="padding-top: .1rem;"
              src="/wp-content/uploads/images-icon.png" alt="">
            <span class="btn-text">Instagram</span>
          </li>
        </a>
      </ul>

    </section>
  </div>

  <div class="bp-wrap">
    <section id="large-profile-header" class="">

      <div class="container-fluid">
        <div class="row">

          <!-- ATHLETE AVATAR IMAGE -->
          <article class="col-4 col-md-3">
            <div>
              <!-- <a href="<?php bp_displayed_user_link(); ?>"> -->

              <div class="athlete-img-box text-center">

                <?php bp_displayed_user_avatar( 'type=full' ); ?>

              </div>

              <!-- </a> -->
            </div><!-- #item-header-avatar -->
          </article>

          <!-- ATHLETE NAME - VIEW COUNT - VARIFICATION -->
          <article class="col-7 col-md-7">

            <div class="title-box">
              <h1 class="coach-title">

                <?php echo bp_core_get_user_displayname( $user_id, true ); ?>

                <small>(<?php echo $sport; ?>)</small>

              </h1>
            </div>

          </article>

        </div>
      </div>

    </section> <!-- END OF id="large-profile-header" -->

    <div id="item-body" class="item-body row">
      <!-- LEFT COLUMN START -->
      <article class="left-col col-sm-12 col-md-12 col-lg-5 col-xl-3">

        <!-- LEFT-INFO-BOX SECTION START -->

        <?php 
      
          // get_template_part('/buddypress/members/single/_moose-template-parts/athlete-profile-left-info-box');
          get_template_part('/buddypress/members/single/_moose-template-parts/coach-profile-left-info-box');
      
        ?>

        <!-- LEFT-INFO-BOX SECTION END -->

      </article>
      <!-- LEFT COLUMN END -->

      <!-- CENTER COLUMN START -->
      <article class="col-sm-12 col-md-12 col-lg-7 col-xl-9">

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

        <!-- CUSTOM MOOSE MAGIC ENDS HERE FOR ATHLETE PROFILE  -->

      </article>
      <!-- CENTER COLUMN END -->

      <!-- RIGHT COLUMN - SIDEBAR COLUMN STARTS -->

    </div><!-- #item-body -->

  </div><!-- // .bp-wrap -->

  <?php bp_nouveau_member_hook( 'after', 'home_content' ); ?>

</div> <!-- #buddyPress Ends -->

<script>
(function($, window) {
  var adjustAnchor = function() {

    var $anchor = $(':target'),
      fixedElementHeight = 440;

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