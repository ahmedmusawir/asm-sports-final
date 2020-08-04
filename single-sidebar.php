<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package cyberize
 */

get_header();
?>

	<div id="primary" class="content-area container">
		<div class="row">
			<main id="main" class="site-main col-sm-9 col-md-9 col-lg-9 col-xl-9">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', get_post_type() );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</main><!-- #main -->
			<aside id="sidebar" class="col-sm-3 col-md-3 col-lg-3 col-xl-3">

				<?php get_sidebar();  ?>

			</aside>
		</div> <!-- END ROW -->
	</div><!-- #primary -->


<?php
get_footer();
