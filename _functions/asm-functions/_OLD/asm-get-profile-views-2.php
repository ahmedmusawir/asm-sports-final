<?php
/**
 * GET RANDOM ATHLETES IDS FOR THE VISITOR COUNT MODULE
 */


function display_visitor_list( $id ) {

  $users_obj = visitors_get_recent_visitors( $id, $count = 5 );

  foreach ($users_obj as $value) :
    
  // OBJECTS FROM THE RECENT VISITOR PLUGIN 
  $visitor_id = $value->visitor_id;
  // VARSITY NAME
  $versity_name = xprofile_get_field_data( 435, $visitor_id, $multi_format = 'array' );
  // VERSITY LOGO IMAGE
  $versity_logo = xprofile_get_field_data( 439, $visitor_id, $multi_format = 'array' );

  // GETTING USER DATA
  $user_obj = get_userdata($visitor_id);
  // echo '<pre>';
  // print_r($user_obj);
  // echo $user_obj->roles[0];
  // echo $user_obj->roles[1];
  // echo '</pre>';

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
    <div class="icon-text-box">
      <h4 class="icon-text">
        <i class="fas fa-eye"></i> Viewed
      </h4>
    </div>
    <div class="text-only-box">
      <h5 class="text-only">
        <?php echo $versity_name; ?> viewed <br>
        <?php //print_r($current_user); ?>
        <?php echo  $current_user->display_name; ?>
      </h5>
    </div>
  </article>
</div>

<?php endif; ?>

<?php endforeach; ?>



<?php
}


// Add this code in your function.php

function my_random_user_query( $class ) {
    if( 'rand' == $class->query_vars['orderby'] )
        $class->query_orderby = str_replace( 'user_login', 'RAND()', $class->query_orderby );

    return $class;
}
add_action( 'pre_user_query', 'my_random_user_query' );

function get_profile_views() {

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
   
    // echo '<pre>';
    // echo print_r($athlete_id);
    // echo '</pre>';
    // display_visitor_list( $athlete_id );
    $users_obj = visitors_get_recent_visitors( $athlete_id, $count = 5 );
    // echo '<pre>';
    // print_r($users_obj);
    // echo '</pre>';
    display_visitor_list( $athlete_id );
    
    if ( empty($users_obj) ) {
  
      echo $athlete_id . " - NO VIEW<br>";
    
  
    } else {
      
      array_push( $visitors, $users_obj );
  
    }

  }
    echo '<pre>';
    echo print_r($visitors);
    echo '</pre>';

?>

</section> <!-- #athlete-view-count-box end -->

<!-- ATHLETE VIEW COUNT BOX ON RIGHT SIDEBAR END -->
<?php
}

// function get_random_athlete_ids() {

//   $args = array(
//     'role' => 'athlete',
//     'fields' => array('ID', 'display_name'),
//     'order' => 'RAND',
//     'number' => 3
//   );

//   $athletes = get_users($args);

//   foreach ( $athletes as $athlete ) {
   
//     echo '<pre>';
//     echo print_r($athlete);
//     echo '</pre>';

//   }
// }