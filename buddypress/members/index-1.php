<?php
/**
 * BuddyPress Members Directory
 *
 * @version 3.0.0
 */

?>
<style>
.bp-index {
  border: 4px dotted limegreen;
}
</style>
<div class="bp-index">
  <h4><strong>index.php under members folder</strong></h4>

  <?php //bp_nouveau_before_members_directory_content(); ?>

  <?php if ( ! bp_nouveau_is_object_nav_in_sidebar() ) : ?>

  <?php //bp_get_template_part( 'common/nav/directory-nav' ); ?>

  <?php endif; ?>

  <div class="screen-content">

    <?php bp_get_template_part( 'common/search-and-filters-bar' ); ?>

    <div id="members-dir-list" class="members dir-list" data-bp-list="members">
      <div id="bp-ajax-loader"><?php bp_nouveau_user_feedback( 'directory-members-loading' ); ?></div>
    </div><!-- #members-dir-list -->

    <?php //bp_nouveau_after_members_directory_content(); ?>
  </div><!-- // .screen-content -->

</div> <!-- delete me (bp-index) -->