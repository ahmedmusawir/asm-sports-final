<?php
/**
 * BuddyPress - Members Loop
 *
 * @since 3.0.0
 * @version 3.0.0
 */

bp_nouveau_before_loop(); ?>

<!-- MOOSE STUFF START -->
<style>
.bp-loop {
  border: 15px dotted dodgerblue;
}
</style>
<div class="bp-loop">
  <h4><strong><code>members-loop.php</code> under <code>buddypress/members/</code> folder</strong></h4>
  <!-- MOOSE STUFF END -->

  <?php if ( bp_get_current_member_type() ) : ?>
  <p class="current-member-type"><?php bp_current_member_type_message(); ?></p>
  <?php endif; ?>

  <?php if ( bp_has_members( bp_ajax_querystring( 'members' ) ) ) : ?>

  <?php bp_nouveau_pagination( 'top' ); ?>

  <ul id="members-list" class="<?php bp_nouveau_loop_classes(); ?>">

    <?php while ( bp_members() ) : bp_the_member(); ?>

    <li <?php bp_member_class( array( 'item-entry' ) ); ?> data-bp-item-id="<?php bp_member_user_id(); ?>"
      data-bp-item-component="members">
      <div class="list-wrap">

        <div class="item-avatar">
          <a href="<?php bp_member_permalink(); ?>"><?php bp_member_avatar( bp_nouveau_avatar_args('full') ); ?></a>
        </div>

        <div class="item">

          <div class="item-block">

            <h2 class="list-title member-name">
              <a href="<?php bp_member_permalink(); ?>"><?php bp_member_name(); ?></a>
            </h2>

          </div> <!-- end item-block -->

        </div><!-- // .item -->

      </div>
    </li>

    <?php endwhile; ?>

  </ul>

  <?php bp_nouveau_pagination( 'bottom' ); ?>

  <?php
else :

	bp_nouveau_user_feedback( 'members-loop-none' );

endif;
?>

  <!-- MOOSE STUFF START -->
</div> <!-- delete me (bp-index) -->
<!-- MOOSE STUFF END -->

<?php bp_nouveau_after_loop(); ?>