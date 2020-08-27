<?php 
$user_id = bp_displayed_user_id();

// ACADEMICS
$school_name = xprofile_get_field_data( 21, $user_id, $multi_format = 'array' );
$grad_year = xprofile_get_field_data( 329, $user_id, $multi_format = 'array' );
$grad_name = xprofile_get_field_data( 330, $user_id, $multi_format = 'array' );
$gpa = xprofile_get_field_data( 22, $user_id, $multi_format = 'array' );
$sat = xprofile_get_field_data( 23, $user_id, $multi_format = 'array' );
$toefl = xprofile_get_field_data( 24, $user_id, $multi_format = 'array' ); 
$act = xprofile_get_field_data( 328, $user_id, $multi_format = 'array' ); 
 
?>

<section id="academics-section">

  <h1 class="block-header">
    <!-- <i class="fas fa-file-certificate"></i> Academics -->
    <img class="menu-icon pb-2" src="/wp-content/uploads/academics-icon-1.png" alt=""> Academics
  </h1>

  <div class="school-box clearfix p-4">
    <span class="school-title float-left">SCHOOL NAME</span>
    <span class="school-name float-right">

      <?php echo $school_name; ?>

    </span>
  </div>
  <div class="school-box clearfix p-4 mt-2">

    <span class="school-title float-left">GRADUATION YEAR</span>
    <span class="school-name float-right">

      <?php echo $grad_year; ?>

    </span>
  </div>
  <div class="school-box clearfix p-4 mt-2">

    <span class="school-title float-left">SCHOOL QUALIFICATION NAME</span>
    <span class="school-name float-right">

      <?php echo $grad_name; ?>

    </span>
  </div>

  <div class="test-score-box row">
    <div class="col-md-3">
      <h1 class="test-score-title">GPA</h1>
      <p class="text-content">
        <?php echo $gpa; ?>
      </p>
    </div>
    <div class="col-md-3">
      <h1 class="test-score-title">SAT</h1>
      <p class="text-content">
        <?php echo $sat; ?>
      </p>
    </div>
    <div class="col-md-3">
      <h1 class="test-score-title">TOEFL</h1>
      <p class="text-content">
        <?php echo $toefl; ?>
      </p>
    </div>
    <div class="col-md-3">
      <h1 class="test-score-title">ACT</h1>
      <p class="text-content">
        <?php echo $act; ?>
      </p>
    </div>
  </div>

</section>