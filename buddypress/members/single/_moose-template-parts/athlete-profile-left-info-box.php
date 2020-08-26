<?php 
$user_id = bp_displayed_user_id();

  // FOLLOWING SET IS FOR THE LEFT ATHLETE COLUMN [MEMBER BIO FIELD GROUP]
  $gender = xprofile_get_field_data( 7, $user_id, $multi_format = 'array' );
  $dob = xprofile_get_field_data( 10, $user_id, $multi_format = 'array' );
  $nationality = xprofile_get_field_data( 11, $user_id, $multi_format = 'array' );
  $height = xprofile_get_field_data( 14, $user_id, $multi_format = 'array' );
  $weight = xprofile_get_field_data( 15, $user_id, $multi_format = 'array' );
  $sport = xprofile_get_field_data( 49, $user_id, $multi_format = 'array' );
  $enrollment_year = xprofile_get_field_data( 17, $user_id, $multi_format = 'array' ); 
 
?>

<section class="athlete-info-box">

  <section class="athlete-bio">
    <ul class="list-group">
      <li class="list-group-item">
        <span class="label float-left">GENDER</span>
        <span class="label float-right"><?php echo $gender; ?></span>
      </li>
      <li class="list-group-item">
        <span class="label float-left">DOB</span>
        <span class="label float-right"><?php echo $dob; ?></span>
      </li>
      <li class="list-group-item">
        <span class="label float-left">COUNTRY OF RESIDENCE</span>
        <span class="label float-right"><?php echo $nationality; ?></span>
      </li>
      <li class="list-group-item">
        <span class="label float-left">HEIGHT</span>
        <span class="label float-right"><?php echo $height; ?></span>
      </li>
      <li class="list-group-item">
        <span class="label float-left">WEIGHT</span>
        <span class="label float-right"><?php echo $weight; ?></span>
      </li>
    </ul>
    <div class="athlete-sports-info">
      <h1 class="sport-name">
        <?php echo $sport; ?><br>
        <small class="">SPORT</small>
      </h1>
      <h1 class="enrollment-year">
        <?php echo $enrollment_year; ?><br>
        <small class="">ENROLLMENT YEAR</small>
      </h1>
    </div>
  </section>

</section> <!-- athlete-info-box end -->