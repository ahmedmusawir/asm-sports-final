<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'cyberize' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'cyberize' ); ?></p>

					<?php
					get_search_form();

					?>
					<div class="row">
						<div class="col-md-6 col-lg-6">
					<?php

					the_widget( 'WP_Widget_Recent_Posts' );
					?>
						</div>
						<div class="col-md-6 col-lg-6">

							<div class="widget widget_categories">
								<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'cyberize' ); ?></h2>
								<ul>
									<?php
									wp_list_categories( array(
										'orderby'    => 'count',
										'order'      => 'DESC',
										'show_count' => 1,
										'title_li'   => '',
										'number'     => 10,
									) );
									?>
								</ul>
							</div><!-- .widget -->
						</div> <!-- col-6 -->
					</div><!-- .row -->
					<div class="row">
						<style type="text/css">
							#archives-dropdown--1 {
								border:  1px solid orangered;
							}
						</style>
						<div class="col-md-6 col-lg-6">
						
							<?php
							/* translators: %1$s: smiley */
							$cyberize_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'cyberize' ), convert_smilies( ':)' ) ) . '</p>';
							the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$cyberize_archive_content" );

							?>
						</div>	
						<div class="col-md-6 col-lg-6">
						
							<?php

							the_widget( 'WP_Widget_Tag_Cloud' );
							?>
						</div>	
					</div>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
