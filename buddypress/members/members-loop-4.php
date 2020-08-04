<?php
/**
 * BuddyPress - Members Loop
 *
 * @since 3.0.0
 * @version 3.0.0
 */

bp_nouveau_before_loop(); ?>
<script src="https://kit.fontawesome.com/c8084101a0.js" crossorigin="anonymous"></script>

<section id="athlete-index-container" class="">

  <?php if ( bp_has_members( bp_ajax_querystring( 'members' ) ) ) : ?>

  <?php bp_nouveau_pagination( 'top' ); ?>

  <ul id="members-list-asm" class="<?php bp_nouveau_loop_classes(); ?>">

    <?php while ( bp_members() ) : bp_the_member(); ?>

    <?php 
        $user_id = bp_get_member_user_id();

        // ABOUT
        $sport = xprofile_get_field_data( 49, $user_id, $multi_format = 'array' );
        $about = xprofile_get_field_data( 28, $user_id, $multi_format = 'array' );
        $excerpt = substr($about, 0, 200) . '...';
        $nationality = xprofile_get_field_data( 11, $user_id, $multi_format = 'array' );
        $enrollment_year = xprofile_get_field_data( 17, $user_id, $multi_format = 'array' ); 
       
        ?>

    <li <?php bp_member_class( array( 'item-entry-asm' ) ); ?> data-bp-item-id="<?php bp_member_user_id(); ?>"
      data-bp-item-component="members">
      <div class="list-wrap-asm row">

        <article class="col-md-4">
          <div class="item-avatar-asm">
            <a href="<?php bp_member_permalink(); ?>"><?php bp_member_avatar( bp_nouveau_avatar_args() ); ?></a>
          </div>
        </article>
        <article class="col-md-8">
          <div class="item-asm">

            <div class="item-block-asm">

              <h2 class="list-title member-name">
                <a href="<?php bp_member_permalink(); ?>"><?php bp_member_name(); ?></a>
                <!-- (<?php echo bp_get_member_user_id(); ?>) -->
                <small>(<?php echo $sport; ?>)</small>
              </h2>

              <ul class="list-inline info-bar">
                <li class="list-inline-item"><i class="fas fa-globe"></i> &nbsp;Residence:
                  <?php echo $nationality; ?></li>
                <li class="list-inline-item"><i class="fas fa-eye"></i> &nbsp;993 Profile Views</li>
                <li class="list-inline-item"><i class="fas fa-users-class"></i>&nbsp;Class:
                  <?php echo $enrollment_year; ?> </li>
              </ul>

              <div class="text-content">
                <?php echo $excerpt; ?>
                <h5 class="readmore"><a href="<?php bp_member_permalink(); ?>">[View Athlete...]</a></h5>
              </div>


            </div> <!-- end item-block -->

          </div><!-- // .item -->

        </article>

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




</section>


<?php bp_nouveau_after_loop(); ?>