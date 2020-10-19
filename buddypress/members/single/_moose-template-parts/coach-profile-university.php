<?php 
$user_id = bp_displayed_user_id();

// UNIVERSITY FOR COACH PROFILE
$about = xprofile_get_field_data( 28, $user_id, $multi_format = 'array' );

$school_name = xprofile_get_field_data( 435, $user_id, $multi_format = 'array' );
$grad_year = xprofile_get_field_data( 329, $user_id, $multi_format = 'array' );
$grad_name = xprofile_get_field_data( 330, $user_id, $multi_format = 'array' );
$gpa = xprofile_get_field_data( 22, $user_id, $multi_format = 'array' );
$sat = xprofile_get_field_data( 23, $user_id, $multi_format = 'array' );
$toefl = xprofile_get_field_data( 24, $user_id, $multi_format = 'array' ); 
$act = xprofile_get_field_data( 328, $user_id, $multi_format = 'array' ); 
 
?>

<section id="academics-section">

  <h1 class="block-header">
    <i class="fas fa-university"></i> About <?php echo $school_name; ?>
  </h1>

  <div class="school-box clearfix p-4">

    <p class="text-content">
      <?php echo $about; ?>
    </p>

  </div>

</section>