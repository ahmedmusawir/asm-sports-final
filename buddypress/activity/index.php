<?php
/**
 * BuddyPress Activity templates
 *
 * @since 2.3.0
 * @version 3.0.0
 */
?>
<style>
.bp-index {
	border: 4px dotted skyblue;
}
</style>
<div class="bp-index">
<h1>The Moose is Loose </h1>
<h4><strong>index.php under activity folder</strong></h4>

	<?php bp_nouveau_before_activity_directory_content(); ?>

	<?php if ( is_user_logged_in() ) : ?>

		<?php bp_get_template_part( 'activity/post-form' ); ?>

	<?php endif; ?>

	<?php bp_nouveau_template_notices(); ?>

	<?php if ( ! bp_nouveau_is_object_nav_in_sidebar() ) : ?>

		<?php bp_get_template_part( 'common/nav/directory-nav' ); ?>

	<?php endif; ?>

	<div class="screen-content">

		<?php bp_get_template_part( 'common/search-and-filters-bar' ); ?>

		<?php bp_nouveau_activity_hook( 'before_directory', 'list' ); ?>

		<div id="activity-stream" class="activity" data-bp-list="activity">

				<div id="bp-ajax-loader"><?php bp_nouveau_user_feedback( 'directory-activity-loading' ); ?></div>

		</div><!-- .activity -->

		<?php bp_nouveau_after_activity_directory_content(); ?>

	</div><!-- // .screen-content -->

	</div> <!-- delete me (bp-index) -->