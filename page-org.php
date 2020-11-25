<?php
/**
 *
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

<style type="text/css">
/* #general-page-header {
  width: 100vw;
  height: 50px;
  background-color: black;
  background-image: url('<?php the_field('general_page_header_image', 'option') ?>'); 
  background-size: cover;
  background-position: top center;
  margin-top: 50px;
} */
</style>

<?php 
$athlete_name = bp_get_displayed_user_fullname();
// $athlete_email = bp_displayed_user_email();
$coach_name = bp_core_get_user_displayname( bp_loggedin_user_id() );
?>

<section id="general-page-header" class="text-center">

</section>


<div id="page-asm" class="content-area container-fullwidth">
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

    </main><!-- #main -->

  </div> <!-- END ROW -->
</div><!-- #primary -->


<?php
get_footer();