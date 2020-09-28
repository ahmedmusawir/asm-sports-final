<?php
/**
 * GET RANDOM ATHLETES IDS FOR THE VISITOR COUNT MODULE
 */


function display_visitor_list( $users_obj ) {

  // $users_obj = visitors_get_recent_visitors( $id, $count = 5 );
  // echo '<pre>';
  // print_r($users_obj);
  // echo '</pre>';

  if ( empty( $users_obj ) ) {

    echo '<h4 class="badge badge-danger p-2">No Activity Found ...<h4>';
    
  }

  foreach ($users_obj as $visitors) :

    // echo '<pre>';
    // print_r($visitors);
    // echo '</pre>';

    foreach ( $visitors as $value ) :
      // CURRENT LOOP USER
      $current_user = get_user_by( 'id', $value->user_id );
      // OBJECTS FROM THE RECENT VISITOR PLUGIN 
      $visitor_id = $value->visitor_id;
      // VARSITY NAME
      $versity_name = xprofile_get_field_data( 435, $visitor_id, $multi_format = 'array' );
      // VERSITY LOGO IMAGE
      $versity_logo = xprofile_get_field_data( 439, $visitor_id, $multi_format = 'array' );

      // GETTING USER DATA
      $user_obj = get_userdata($visitor_id);
      $user_id_for_ACF = "user_" . $value->user_id;
      $committed_status = get_field( 'athlete_availability', $user_id_for_ACF );
      // echo $committed_status;

      // COMMITTED STATUS

      if ( !$committed_status || $committed_status == 'yes') {

        $committed_result = '
          <div class="icon-text-box bg-danger">
            <h4 class="icon-text">
              <i class="fas fa-edit"></i> Committed
            </h4>
          </div>
        ';

      } else {
        
        $committed_result = '
        <div class="icon-text-box">
          <h4 class="icon-text">
            <i class="fas fa-eye"></i> Viewed
          </h4>
        </div>
      ';
        
      }

    /**
     * ATHLETE VIEW BOX
     * Look inside ATHLETE & COACH SINGLE PROFILE in bp-global.scss file for styling
     */

    if ( !isset($user_obj->roles[0])) {
      $user_obj->roles[0] = null;
    }
    if ( !isset($user_obj->roles[1])) {
      $user_obj->roles[1] = null;
    }

    $user_role = $user_obj->roles[1];

    // CHECKING FOR COACH VIEWS
    if ( $user_role == 'coach') :
    ?>
<div class="box-content row">
  <figure class="versity-logo col-sm-5 d-flex justify-content-center align-items-center">
    <?php echo $versity_logo; ?>
  </figure>
  <article class="text-content col-sm-7">
    <!-- <div class="icon-text-box bg-danger">
      <h4 class="icon-text">
        <i class="fas fa-eye"></i> Viewed
      </h4>
    </div> -->
    <?php echo $committed_result; ?>

    <div class="text-only-box">
      <h5 class="text-only">
        <?php echo $versity_name; ?> viewed <br>
        <?php //print_r($current_user); ?>
        <?php echo $current_user->display_name; ?>
      </h5>
    </div>
  </article>
</div>

<?php endif; ?>

<?php endforeach; ?>
<!-- VISITORS LOOP -->

<?php endforeach; ?>
<!-- USER OBJ LOOP -->


<?php
}


// Add this code in your function.php

function my_random_user_query( $class ) {
    if( 'rand' == $class->query_vars['orderby'] )
        $class->query_orderby = str_replace( 'user_login', 'RAND()', $class->query_orderby );

    return $class;
}
add_action( 'pre_user_query', 'my_random_user_query' );

function get_asm_profile_views() {

  $args = array(
    'role' => 'athlete',
    'fields' => 'ID',
    'orderby' => 'rand',
    'number' => 5
    // 'fields' => array('ID', 'display_name'),
  );

  $athletes = get_users($args);

  ?>

<section id="athlete-view-count-box">

  <h2 class="view-count-title pb-3">Activity Feed</h2>

  <?php 

  $visitors = array();

  foreach ( $athletes as $athlete_id ) {
   
    $users_obj = visitors_get_recent_visitors( $athlete_id, $count = 5 );
    // echo '<pre>';
    // print_r($users_obj);
    // echo '</pre>';
    
    if ( empty($users_obj) ) {
  
      // echo $athlete_id . " - NO VIEW<br>";
  
    } else {
      
      array_push( $visitors, $users_obj );
  
    }

  }
    // echo '<pre>';
    // echo print_r($visitors);
    // echo '</pre>';

    display_visitor_list( $visitors );

?>

</section> <!-- #athlete-view-count-box end -->

<!-- ATHLETE VIEW COUNT BOX ON RIGHT SIDEBAR END -->
<?php
}