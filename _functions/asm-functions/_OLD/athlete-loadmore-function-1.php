<?php 
/**
 * ATHLETE LOAD MORE WP FUNCITON FOR JQUERY AJAX
 */

add_action('wp_ajax_nopriv_athlete_load_more', 'athlete_load_more');
add_action('wp_ajax_athlete_load_more', 'athlete_load_more');

 function athlete_load_more() {
   // LOAD MORE UNIV POSTS

  $paged = $_POST['page'] + 1;


 if ( bp_has_members( bp_ajax_querystring( 'members' ) . '&type=alphabetical' ) ) : 

  // bp_nouveau_pagination( 'top' );

  ?>

<ul id="members-list-asm" class="<?php bp_nouveau_loop_classes(); ?>">

  <?php while ( bp_members() ) : bp_the_member(); ?>

  <?php 
        $user_id = bp_get_member_user_id();
        $user_id_for_ACF = "user_" . $user_id;

        // ABOUT
        $sport = xprofile_get_field_data( 49, $user_id, $multi_format = 'array' );
        $about = xprofile_get_field_data( 28, $user_id, $multi_format = 'array' );
        $excerpt = substr($about, 0, 200) . '...';
        $nationality = xprofile_get_field_data( 11, $user_id, $multi_format = 'array' );
        $enrollment_year = xprofile_get_field_data( 17, $user_id, $multi_format = 'array' ); 
        $gender = xprofile_get_field_data( 7, $user_id, $multi_format = 'array' );


        $verification = get_field( 'athlete_verification', $user_id_for_ACF );
        $availability = get_field( 'athlete_availability', $user_id_for_ACF );

        // ATHLETE VIEWS
        $total_unique_visitors = visitors_get_unique_visitors_count( $user_id );

        // echo $verification;

        if ( ! $verification || $verification == 'no' ) {

          $v_result = '<span class="verified-status"><i class="fas fa-times-circle"></i> Verified</span>';

          $verify_filter = 'unverified';

        } else {

          $v_result = '<span class="verified-status"><i class="fas fa-check-circle"></i> Verified</span>';

          $verify_filter = 'verified';


        }

        // echo $availability;

        if ( !$availability || $availability == 'yes') {

          $a_result = '<span  class="available-status"><span class="available">Available</span></span>';
          $availability = 'available';

        } else {
          
          $a_result = '<span class="available-status"><span class="committed">Committed</span></span>';
          $availability = 'committed';
          
        }
       
        ?>

  <li
    <?php bp_member_class( array( 'item-entry-asm', "$sport", "$gender", "$availability", "$verify_filter", "$enrollment_year", "$nationality",'animated', 'bounceIn' ) ); ?>
    data-bp-item-id="<?php bp_member_user_id(); ?>" data-bp-item-component="members">
    <div class="list-wrap-asm row">

      <article class="col-md-3">
        <div class="item-avatar-asm">
          <a href="<?php bp_member_permalink(); ?>"><?php bp_member_avatar( bp_nouveau_avatar_args() ); ?></a>
        </div>
      </article>
      <article class="col-md-9">
        <div class="item-asm">

          <ul class="list-inline status-bar float-right">
            <li class="list-inline-item">
              <?php echo $v_result; ?>
            </li>
            <li class="list-inline-item">
              <?php echo $a_result; ?>
            </li>
          </ul>

          <div class="item-block-asm">

            <h2 class="list-title member-name">
              <a href="<?php bp_member_permalink(); ?>"><?php bp_member_name(); ?></a>
              <small>(<?php echo $sport; ?>)</small>
            </h2>


            <ul class="list-inline info-bar">
              <li class="list-inline-item"><i class="fas fa-globe"></i> &nbsp;Residence:
                <?php echo $nationality; ?></li>
              <li class="list-inline-item"><i class="fas fa-eye"></i> &nbsp;
                <?php echo $total_unique_visitors; ?> Profile Views
              </li>
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

<!-- <?php // bp_nouveau_pagination( 'bottom' ); ?> -->

<?php
else :

	bp_nouveau_user_feedback( 'members-loop-none' );

endif;

die();

}