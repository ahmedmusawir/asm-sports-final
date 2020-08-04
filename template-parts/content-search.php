<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Moose_Framework_2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>
	<header class="entry-header">

		<figure class="featured-image-box">
			
			<?php moose_framework_2_post_thumbnail(); ?>
			
		</figure>
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
				moose_framework_2_posted_on();
				moose_framework_2_posted_by();
			?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->


	<div class="entry-content">
		<?php
			the_excerpt();
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php moose_framework_2_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
