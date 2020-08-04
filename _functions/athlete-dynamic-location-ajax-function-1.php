<?php 
/**
 * ATHLETE LOAD MORE WP FUNCITON FOR JQUERY AJAX
 */

add_action('wp_ajax_nopriv_athlete_dynamic_location_ajax_function', 'athlete_dynamic_location_ajax_function');
add_action('wp_ajax_athlete_dynamic_location_ajax_function', 'athlete_dynamic_location_ajax_function');

 function athlete_dynamic_location_ajax_function() {
   // LOAD MORE UNIV POSTS

 $item_count = 0;


 if ( bp_has_members( bp_ajax_querystring( 'members' ) . '&type=alphabetical&per_page=10' ) ) : 
  // if ( bp_has_members( bp_ajax_querystring( 'members' ) . '&per_page=10' ) ) : 

  ?>

<ul id="members-list-asm" class="<?php bp_nouveau_loop_classes(); ?>">

  <?php while ( bp_members() ) : bp_the_member(); ?>

  <?php 
        $user_id = bp_get_member_user_id();
        $user_id_for_ACF = "user_" . $user_id;

        // SPORTS & LOCATION
        $sport = xprofile_get_field_data( 49, $user_id, $multi_format = 'array' );
        $nationality = xprofile_get_field_data( 11, $user_id, $multi_format = 'array' );
        $item_count++;
        ?>

  <li><?php echo $nationality . ' and ' . $sport ; ?></li>

  <?php endwhile; ?>


</ul>

<!-- <?php // bp_nouveau_pagination( 'bottom' ); ?> -->

<?php
else :

	echo 'no more options found!';

endif;

echo $item_count; 




  
  die();
 }