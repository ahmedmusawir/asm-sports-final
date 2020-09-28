<?php 
/**
 * ATHLETE LOAD MORE WP FUNCITON FOR JQUERY AJAX
 */

add_action('wp_ajax_nopriv_athlete_load_more', 'athlete_load_more');
add_action('wp_ajax_athlete_load_more', 'athlete_load_more');

 function athlete_load_more() {

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
    $excerpt = substr($about, 0, 100) . '...';
    $nationality = xprofile_get_field_data( 11, $user_id, $multi_format = 'array' );
    $enrollment_year = xprofile_get_field_data( 17, $user_id, $multi_format = 'array' ); 
    $gender = xprofile_get_field_data( 7, $user_id, $multi_format = 'array' );


    $verification = get_field( 'athlete_verification', $user_id_for_ACF );
    $availability = get_field( 'athlete_availability', $user_id_for_ACF );
    $committed_status = get_field( 'athlete_availability', $user_id_for_ACF );
    $committed_university_name = get_field( 'university_name', $user_id_for_ACF );
    $committed_university_logo = get_field( 'university_logo', $user_id_for_ACF );

    // ATHLETE VIEWS
    $total_profile_visit = visitors_get_profile_visit_count($user_id);
    // $total_unique_visitors = visitors_get_unique_visitors_count( $user_id );

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

    /**
     * ADVANCE FILTER CLASSES FOR FILTER ALOGORITHM
     */
   
?>
  <?php 

if ($sport == 'US-FOOTBALL') : 

  $us_football_position = xprofile_get_field_data( 136, $user_id, $multi_format = 'array' );

else :
  
  $us_football_position = '';

endif; 

if ($sport == 'BASEBALL') : 

  $baseball_primary_position = xprofile_get_field_data( 210, $user_id, $multi_format = 'array' );
  $baseball_secondary_position = xprofile_get_field_data( 211, $user_id, $multi_format = 'array' );

else :

  $baseball_primary_position = '';
  $baseball_secondary_position = '';
  
endif; 

if ($sport == 'SOFTBALL') : 

  $softball_primary_position = xprofile_get_field_data( 214, $user_id, $multi_format = 'array' );
  $softball_secondary_position = xprofile_get_field_data( 215, $user_id, $multi_format = 'array' );

else :

  $softball_primary_position = '';
  $softball_secondary_position = '';

endif; 

if ($sport == 'BASKETBALL') : 

  $basketball_preferred_hand = xprofile_get_field_data( 203, $user_id, $multi_format = 'array' );
  $basketball_primary_position = xprofile_get_field_data( 206, $user_id, $multi_format = 'array' );
  $basketball_secondary_position = xprofile_get_field_data( 207, $user_id, $multi_format = 'array' );

else :

  $basketball_preferred_hand = '';
  $basketball_primary_position = '';
  $basketball_secondary_position = '';

endif; 

if ($sport == 'CHEERLEADING') : 

  $cheerleading_position = xprofile_get_field_data( 181, $user_id, $multi_format = 'array' );

else :

  $cheerleading_position = '';

endif; 

if ($sport == 'GOLF') : 

  $golf_handicap = xprofile_get_field_data( 301, $user_id, $multi_format = 'array' );
  $golf_wagr = xprofile_get_field_data( 302, $user_id, $multi_format = 'array' );
  $golf_national_ranking = xprofile_get_field_data( 303, $user_id, $multi_format = 'array' );
  $golf_preferred_hand = xprofile_get_field_data( 306, $user_id, $multi_format = 'array' );

else :

  $golf_handicap = '';
  $golf_wagr = '';
  $golf_national_ranking = '';
  $golf_preferred_hand = '';

endif; 

if ($sport == 'FIELD-HOCKEY') : 

  $field_hockey_position = xprofile_get_field_data( 1779, $user_id, $multi_format = 'array' );

else :

  $field_hockey_position = '';

endif; 

if ($sport == 'GYMNASTICS') : 

  $gymnastics_disciplines = xprofile_get_field_data( 200, $user_id, $multi_format = 'array' );

else :

  $gymnastics_disciplines = '';

endif; 


if ($sport == 'ICE-HOCKEY') : 

  $ice_hockey_position = xprofile_get_field_data( 151, $user_id, $multi_format = 'array' );

else :

    $ice_hockey_position = '';

endif; 


if ($sport == 'LACROSSE') : 

  $lacrosse_position = xprofile_get_field_data( 145, $user_id, $multi_format = 'array' );

else :

  $lacrosse_position = '';

endif;     

if ($sport == 'ROWING') : 

  $rowing_position = xprofile_get_field_data( 142, $user_id, $multi_format = 'array' );

else :

  $rowing_position = '';

endif;  

if ($sport == 'RUGBY') : 

  $rugby_position = xprofile_get_field_data( 193, $user_id, $multi_format = 'array' );

else :

  $rugby_position = '';

endif;  


if ($sport == 'SOCCER') : 

  $soccer_position = xprofile_get_field_data( 139, $user_id, $multi_format = 'array' );

else :

  $soccer_position = '';

endif;  


if ($sport == 'SWIMMING-AND-DIVING') : 

  $swimming_main_event_style = xprofile_get_field_data( 309, $user_id, $multi_format = 'array' );
  $swimming_secondary_event_style = xprofile_get_field_data( 310, $user_id, $multi_format = 'array' );

else :

  $swimming_main_event_style = '';
  $swimming_secondary_event_style = '';

endif;  


if ($sport == 'TENNIS') : 

  $tennis_utr = xprofile_get_field_data( 311, $user_id, $multi_format = 'array' );
  $tennis_itf = xprofile_get_field_data( 312, $user_id, $multi_format = 'array' );
  $tennis_preferred_hand = xprofile_get_field_data( 313, $user_id, $multi_format = 'array' );
  $tennis_national_ranking = xprofile_get_field_data( 316, $user_id, $multi_format = 'array' );

else :

  $tennis_utr = '';
  $tennis_itf = '';
  $tennis_preferred_hand = '';
  $tennis_national_ranking = '';

endif;  


if ($sport == 'TRACK-AND-FIELD') : 

  $track_field_discipline = xprofile_get_field_data( 323, $user_id, $multi_format = 'array' );

else :

  $track_field_discipline = '';

endif;  


if ($sport == 'VOLLEYBALL') : 

  $volleyball_position = xprofile_get_field_data( 148, $user_id, $multi_format = 'array' );

else :

  $volleyball_position = '';

endif;  


if ($sport == 'WATER-POLO') : 

  $water_polo_position = xprofile_get_field_data( 191, $user_id, $multi_format = 'array' );

else :

  $water_polo_position = '';

endif;  

?>

  <li <?php bp_member_class( 
    array( 'item-entry-asm', "$sport", "$gender", "$availability", "$verify_filter", "$enrollment_year", "$nationality",
    "$us_football_position",
    "$field_hockey_position",
    "$cheerleading_position",
    "$gymnastics_disciplines",
    "$ice_hockey_position",
    "$lacrosse_position",
    "$water_polo_position",
    "$volleyball_position",
    "$track_field_discipline",
    "$soccer_position",
    "$rugby_position",
    "$rowing_position",
    "$swimming_main_event_style", "$swimming_secondary_event_style",
    "$tennis_utr", "$tennis_itf", "$tennis_preferred_hand", "$tennis_national_ranking",
    "$baseball_primary_position", "$baseball_secondary_position",
    "$softball_primary_position", "$softball_secondary_position",
    "$basketball_preferred_hand", "$basketball_primary_position", "$basketball_secondary_position",
    "$golf_handicap", "$golf_wagr", "$golf_national_ranking", "$golf_preferred_hand", 
    'animated', 'bounceIn' ) 
    ); 
  ?> data-bp-item-id="<?php bp_member_user_id(); ?>" data-bp-item-component="members">
    <div class="list-wrap-asm row">
      <article class="col-12 col-sm-12 col-md-3 col-lg-3">
        <div class="item-avatar-asm mx-auto">
          <a href="<?php bp_member_permalink(); ?>"><?php bp_member_avatar( bp_nouveau_avatar_args() ); ?></a>
        </div>
        <?php if ( !$committed_status || $committed_status == 'yes') : ?>

        <!-- PRINT NOTHING -->


        <?php else : ?>

        <section class="athlete-index-committed-box">

          <div class="row">
            <div class="col-sm-3">

              <div class="univ-logo">
                <img class="" src="<?php echo $committed_university_logo; ?>" alt="">
                <!-- <img class="" src="/wp-content/uploads/stanforduniversity-california-logo.jpg" alt=""> -->
              </div>

            </div>
            <div class="col-sm-9">

              <header class="committed-text">
                <h4 class="text">Committed</h4>
                <!-- <h5 class="univ-name"><?php echo $committed_university_name; ?></h5> -->
                <!-- <h5 class="univ-name">Stanford University</h5> -->
              </header>

            </div>
          </div>

        </section>

        <?php endif; ?>

      </article>
      <article class="col-12 col-sm-12 col-md-9 col-lg-9">
        <div class="item-asm">

          <ul class="list-inline status-bar float-right">
            <!-- AVAILABILITY STATUS -->
            <li class="list-inline-item commit-status">
              <?php echo $a_result; ?>
            </li>
          </ul>

          <div class="item-block-asm">

            <h2 class="list-title member-name">
              <a href="<?php bp_member_permalink(); ?>"><?php bp_member_name(); ?></a>
              <small>(<?php echo $sport; ?>)</small>
            </h2>


            <ul class="list-inline info-bar">
              <li class="list-inline-item"><i class="fas fa-globe"></i> &nbsp;
                <?php echo $nationality; ?></li>
              <li class="list-inline-item"><i class="fas fa-eye"></i> &nbsp;
                <?php echo $total_profile_visit; ?> Profile Views
              </li>
              <li class="list-inline-item">
                <!-- VARIFICATION STATUS -->
                <?php echo $v_result; ?>
              </li>
              <li class="list-inline-item d-none"><i class="fas fa-users-class"></i>&nbsp;Class:
                <?php echo $enrollment_year; ?>
              </li>
            </ul>

            <div class="text-content">
              <?php echo $excerpt; ?>
              <span class="readmore"><a href="<?php bp_member_permalink(); ?>">(View Athlete...)</a></span>
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