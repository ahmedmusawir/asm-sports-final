<?php
/**
 * BuddyPress - Members Home
 *
 * Template Name: Athlete Email Page
 * @since   1.0.0
 * @version 3.0.0
 */
get_header();
?>

<div id="asm-athlete-email-page" class="buddypress-wrap coach bp-dir-hori-nav">
  <!-- FONT AWESOME 5 PRO -->
  <script src="https://kit.fontawesome.com/c8084101a0.js" crossorigin="anonymous"></script>
  <?php
    $user_id = bp_displayed_user_id();
    $current_user = wp_get_current_user();
    $current_user_id = $current_user->ID;
  ?>

  <div class="top-page-navbar">

    <section class="top-page-menu clearfix">

      <h3 class="menu-title float-left">Email Inbox</h3>

    </section>
  </div>

  <div class="bp-wrap">

    <div id="item-body" class="item-body row">
      <!-- LEFT COLUMN START -->
      <article class="left-col col-sm-12 col-md-12 col-lg-4 col-xl-3">

        <!-- LEFT-INFO-BOX SECTION START -->

        <?php 
      get_template_part('/buddypress/members/single/_moose-template-parts/athlete-profile-email-inbox');
      ?>

        <!-- LEFT-INFO-BOX SECTION END -->

      </article>
      <!-- LEFT COLUMN END -->

      <!-- CENTER COLUMN START -->
      <article class="col-sm-12 col-md-12 col-lg-8 col-xl-6">

        <?php if (is_user_logged_in() ) : ?>

        <!-- SETTING UP EMAIL INBOX -->
        <?php echo do_shortcode('[front-end-pm]'); ?>
        <!-- SETTING UP EMAIL INBOX END -->

        <?php endif; ?>

      </article>
      <!-- CENTER COLUMN END -->

      <!-- RIGHT COLUMN - SIDEBAR COLUMN STARTS -->

      <article class="sidebar-col col-sm-12 col-md-12 col-lg-12 col-xl-3">

        <!-- ATHLETE PROFILE RIGHT EMAIL BUTTON SET START -->

        <!-- MESSAGE BUTTON -->
        <?php //if (is_user_logged_in() && ($user_id == $current_user_id)) : ?>


        <section id="athlete-right-email-button">

          <a href="<?php echo '/members/' . bp_core_get_username( get_current_user_id() ); ?>" class="clearfix">
            <div class="message-button">
              <img src="/wp-content/uploads/email-btn-icon.png" alt="" class="float-left btn-image">
              <div class="btn-text-holder">
                <h5 class="btn-text">BACK TO PROFILE</h5>
              </div>
            </div>
          </a>

        </section>

        <?php //endif; ?>

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

        <!-- ATHLETE VIEW COUNT BOX ON RIGHT SIDEBAR START -->
        <?php
          $user_id = bp_displayed_user_id();
          $current_user = wp_get_current_user();
          $current_user_id = $current_user->ID;
        ?>



        <section id="athlete-view-count-box">


          <?php if (is_user_logged_in() && ($user_id == $current_user_id)) : ?>

          <h2 class="view-count-title">Views</h2>

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

        <!-- ATHLETE VIEW COUNT BOX ON RIGHT SIDEBAR END -->

        <!-- THE SIDEBAR -->
        <?php get_sidebar(); ?>

      </article>

    </div><!-- #item-body -->

  </div><!-- // .bp-wrap -->

  <?php bp_nouveau_member_hook( 'after', 'home_content' ); ?>

</div> <!-- #buddyPress Ends -->



<?php
get_footer();