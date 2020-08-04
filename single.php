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
	<style type="text/css">
		#general-page-header {
			width: 100vw;
			height: 200px;
			background-color: black;
			background-image: url('<?php the_field('general_page_header_image', 'option') ?>');
			background-size: cover;
			background-position: top center;
		}
	</style>

	<section id="general-page-header">
		<!-- <img class="img-fluid" src="/wp-content/uploads/2018/02/general-page-header-2400x300.jpg"> -->
	</section>
	
	<div id="primary" class="content-area">
		<main id="main" class="site-main container">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
