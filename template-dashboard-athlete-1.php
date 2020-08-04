<?php
/**
 *
 * Template Name: Athlete Dashboard
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

<div id="page-asm-dashboard">

  <header id="general-page-header" class="text-center">
    <section class="top-page-menu clearfix">

      <h3 class="menu-title float-left">DASHBOARD</h3>

    </section>
  </header>

  <section id="dashboard-task-board">

    <div id="top-task-block" class="row">
      <article class="col-md-6">
        <?php 
          $logged_in_user_obj = wp_get_current_user();
          echo '<pre>';
          // print_r($logged_in_user_obj);
          echo '</pre>';
          $athlete_name = $logged_in_user_obj->display_name;
        ?>
        <h4 class="block-title"><?php the_field('top_left_title'); ?> <?php echo $athlete_name; ?>?</h4>
      </article>
      <article class="col-md-6">
        <div class="membership-box">
          <h4 class="text">
            <?php the_field('top_right_title'); ?>
          </h4>
          <a href="<?php the_field('top_right_button_url'); ?>" target="_blank" class="btn btn-danger">
            <?php the_field('top_right_button_text'); ?>
          </a>
        </div>
      </article>
    </div>

    <?php 
    $user_id = get_current_user_id();
      $total_profile_visit = visitors_get_profile_visit_count($user_id);
      // $total_unique_visitors = visitors_get_unique_visitors_count( $user_id );
    ?>

    <div id="bottom-task-block" class="row">

      <div class="task-box task-box-sm text-center">
        <i class="fas fa-tasks"></i>
        <h6 class="text-only">TASKS COMPLETED</h6>
        <h1 class="text-number">2/12</h1>
        <a href="#" class="btn btn-info">View Tasks</a>
      </div>

      <div class="task-box task-box-sm text-center">
        <i class="fas fa-eye"></i>
        <h6 class="text-only">PROFILE VIEWS</h6>
        <!-- <h1 class="text-number"><?php //echo $total_profile_visit; ?></h1> -->
        <h1 class="text-number"><?php echo $total_profile_visit; ?></h1>
        <a href="#" class="btn btn-info">View Who</a>
      </div>

      <div class="task-box task-box-sm text-center">
        <i class="fas fa-envelope-square"></i>
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
        <h1 class="text-number"><?php echo $new_message; ?></h1>
        <?php else :?>
        <h1 class="text-number">0</h1>
        <?php endif; ?>
        <a href="#" class="btn btn-info">View Messages</a>
      </div>

      <div class="task-box task-box-lg text-center">
        <img class="img-fluid" src="/wp-content/uploads/Screen-Shot-2020-03-03-at-7.11.26-PM.png" alt="">
      </div>

    </div> <!-- #bottom-task-block end -->


  </section>


  <div id="asm-dashboard-content" class="content-area container-fluid">
    <div class="row">

      <main id="main" class="site-main col-sm-12 col-md-12 col-lg-8">

        <?php 
        // check if the repeater field has rows of data
        if( have_rows('bottom_task_video_box') ):

          // loop through the rows of data
          while ( have_rows('bottom_task_video_box') ) : the_row();
        ?>

        <div class="row task-item mt-4">

          <div class="col-sm-3 text-center video-box">
            <a type="button" class="asm-task-button" data-toggle="modal"
              data-target="#<?php the_sub_field('left_box_youtube_video_id'); ?>">

              <img src="<?php the_sub_field('left_box_image'); ?>" alt="" class=" w-100">

            </a>
          </div>
          <div class="col-sm-6 text-center text-box">
            <h3 class="title"><?php the_sub_field('middle_box_title'); ?></h3>
            <p class="sub-title">
              <?php the_sub_field('middle_box_subtitle'); ?>
            </p>
          </div>
          <div class="col-sm-3 text-center icon-box">
            <h4 class="status-text">
              <?php 
                echo 'To Do';
              ?>
            </h4>
            <!-- <h4 class="status-text"><?php //the_sub_field('task_status_text'); ?></h4> -->
            <i class="fas fa-exclamation-circle"></i>
            <!-- <i class="fas <?php //the_sub_field('task_status_icon'); ?>"></i> -->
          </div>

        </div>

        <!-- YOUTUBE VIDEO MODAL -->

        <!-- Modal -->
        <div class="modal fade bd-example-modal-lg" id="<?php the_sub_field('left_box_youtube_video_id'); ?>"
          tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item mt-2"
                    src="https://www.youtube.com/embed/<?php the_sub_field('left_box_youtube_video_id'); ?>?autoplay=0&loop=0&controls=1&showinfo=0&rel=0"
                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                    <!-- THE YOUTUBE VIDEO EMBED - RESPONSIVE - VIDEO ID INPUT ONLY -->
                  </iframe>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
              </div>
            </div>
          </div>
        </div>

        <!-- YOUTUBE VIDEO MODAL END -->
        <?php 
        endwhile;

        else :
        
            // no rows found
            echo "No rows found!";
        
        endif;
        ?>

      </main><!-- #main -->

      <aside id="asm-dashboard-sidebar" class="asm-sidebar col-sm-12 col-md-12 col-lg-4">

        <div class="sidebar-holder pr-5">
          <?php get_sidebar();  ?>
        </div>

      </aside><!-- #aside -->

    </div> <!-- END ROW -->
  </div><!-- #primary -->

</div> <!-- #page-asm-dashboard end  -->


<?php
get_footer();