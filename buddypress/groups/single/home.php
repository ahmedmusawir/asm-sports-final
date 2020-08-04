<?php
/**
 * BuddyPress - Groups Home
 * Template Name: BP Group Single
 * @since 3.0.0
 * @version 3.0.0
 */

if ( bp_has_groups() ) :
	while ( bp_groups() ) :
		bp_the_group();
	?>

<style>
.bp-group-single {
  border: 4px dotted dodgerblue;
}
</style>
<div class="bp-group-single">

  <h4><strong>home.php under groups/single folder</strong></h4>


  <?php bp_nouveau_group_hook( 'before', 'home_content' ); ?>

  <div id="item-header" role="complementary" data-bp-item-id="<?php bp_group_id(); ?>" data-bp-item-component="groups"
    class="groups-header single-headers">

    <?php bp_nouveau_group_header_template_part(); ?>

  </div><!-- #item-header -->

  <div class="bp-wrap">

    <?php if ( ! bp_nouveau_is_object_nav_in_sidebar() ) : ?>

    <?php bp_get_template_part( 'groups/single/parts/item-nav' ); ?>

    <?php endif; ?>

    <div id="item-body" class="item-body">

      <?php bp_nouveau_group_template_part(); ?>

    </div><!-- #item-body -->

  </div><!-- // .bp-wrap -->

  <?php bp_nouveau_group_hook( 'after', 'home_content' ); ?>

  <?php endwhile; ?>

</div> <!-- delete me (bp-index) -->


<?php
endif;