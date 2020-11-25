<?php
/**
 * Template Name: Thankyou Page
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

<section id="general-page-header" class="text-center">

</section>


<div id="page-asm" class="content-area container">
  <div class="row">
    <main id="main" class="site-main col-sm-12 col-md-12 col-lg-12 col-xl-12">
      <?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
      ?>

      <!-- USER NAME & PASSWORD + LOGIN BUTTON PHP CODE-->
      <?php 

        if( isset($_COOKIE["USER_INFO"]) ) {
          $pieces = explode(",", $_COOKIE["USER_INFO"]);
          print_r($pieces);
          $user_id = $pieces[0];
          $user_pass = $pieces[1];
        }

        $user_object = get_userdata($user_id);
        $user_name = $user_object->user_login;
        echo "USER NAME: $user_name  & USER PASS: $user_pass";
        wp_die();
      ?>

      <!-- USER NAME & PASSWORD + LOGIN BUTTON HTML CODE-->

      <div class="registered-user-info p-5" style="border: 1px double #e3e3e3;">

      </div>

    </main><!-- #main -->

  </div> <!-- END ROW -->
</div><!-- #primary -->


<?php
get_footer();