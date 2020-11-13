<?php 

function asm_get_loggedin_profile_view($user_id, $current_user) {
?>

<h2 class="view-count-title pb-3">Activity Feed</h2>

<?php 
  $users_obj = visitors_get_recent_visitors( get_current_user_id(), $count = 5 );

  // echo "<pre>";
  // print_r($users_obj);
  // echo "</pre>";

  if ( $users_obj ) {

  
  foreach ($users_obj as $value) :
   
  // OBJECTS FROM THE RECENT VISITOR PLUGIN 
  $user_id = $value->visitor_id;
  // VARSITY NAME
  $versity_name = xprofile_get_field_data( 435, $user_id, $multi_format = 'array' );
  // VERSITY LOGO IMAGE
  $versity_logo = xprofile_get_field_data( 439, $user_id, $multi_format = 'array' );

  // GETTING USER DATA
  $user_obj = get_userdata($user_id);

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

</section> <!-- #athlete-view-count-box end -->

<?php

 // END OF if ( !$users_obj ) IF NO ACTIVITY OBJECT FOUND RETURN THE FOLLOWING MESSAGE  
 } else {

  echo "<h5><small>No Activity Found!<small></h5>";
  
 }

}