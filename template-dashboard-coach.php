<?php
/**
 *
 * Template Name: Coach Dashboard
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Moose_Framework_2
 */

get_header(); ?>

<div id="page-coach-dashboard">

  <header id="general-page-header" class="text-center">
    <section class="top-page-menu clearfix">

      <h3 class="menu-title float-left">COACH'S DASHBOARD</h3>

    </section>
  </header>


  <section id="dashboard-task-board">

    <div id="top-task-block" class="row">
      <article class="col-md-12">
        <?php 
          $logged_in_user_obj = wp_get_current_user();
          echo '<pre>';
          // print_r($logged_in_user_obj);
          // echo $logged_in_user_obj->user_nicename;
          echo '</pre>';
          $coach_name = $logged_in_user_obj->display_name;
          $coach_slug = $logged_in_user_obj->user_nicename;
          $coach_profile_url = "/members/$coach_slug"; 
        ?>
        <h4 class="block-title text-center">Hi Coach <?php echo $coach_name; ?>,</h4>
        <h4 class="block-title text-center">Let's help you find your next recruit.</h4>
      </article>

    </div>

    <?php 
    $user_id = get_current_user_id();
      // $total_profile_visit = visitors_get_profile_visit_count($user_id);
    ?>

    <div id="bottom-task-block" class="d-flex flex-wrap justify-content-center">

      <div class="task-box task-box-sm text-center">
        <h6 class="text-only">SEARCH ATHLETES</h6>
        <h1 class="text-number">
          <i class="fab fa-searchengin"></i>
        </h1>
        <a href="/members/type/athletes/" class="btn btn-info">Search</a>
      </div>

      <div class="task-box task-box-sm text-center">
        <h6 class="text-only">EDTI YOUR PROFILE</h6>
        <h1 class="text-number">
          <i class="fas fa-user-edit"></i>
        </h1>
        <a href="<?php echo $coach_profile_url; ?>" class="btn btn-info">Go To Profile</a>
      </div>

      <div class="task-box task-box-sm text-center">
        <!-- <img src="/wp-content/uploads/dashboard-email-icon.png" alt=""> -->
        <h6 class="text-only">NEW MESSAGES</h6>
        <?php 
        /** 
         * CHECKING TO SEE IF THERE IS NEW MESSAGE
         */
        $new_message = do_shortcode('[fep_shortcode_new_message_count]');
        $new_message_length = strlen($new_message);

        ?>
        <?php if ( $new_message_length != 245 ) : ?>
        <h1 class="text-number email-number">
          <!-- <i class="fas fa-envelope-square"></i> -->
          <?php echo $new_message; ?>
        </h1>
        <?php else :?>
        <h1 class="text-number email-number">0</h1>
        <?php endif; ?>
        <a href="/coach-email-inbox/" class="btn btn-info">View Messages</a>
      </div>



  </section> <!-- END #dashboard-task-board -->

</div> <!-- #page-asm-dashboard end  -->



<?php
get_footer();