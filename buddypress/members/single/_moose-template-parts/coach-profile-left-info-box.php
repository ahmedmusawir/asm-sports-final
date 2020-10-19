<?php 
$user_id = bp_displayed_user_id();

  // FOLLOWING SET IS FOR THE LEFT ATHLETE COLUMN [MEMBER BIO FIELD GROUP]
  $gender = xprofile_get_field_data( 7, $user_id, $multi_format = 'array' );
  $versity_logo = xprofile_get_field_data( 439, $user_id, $multi_format = 'array' );
  $nationality = xprofile_get_field_data( 11, $user_id, $multi_format = 'array' );
  $height = xprofile_get_field_data( 14, $user_id, $multi_format = 'array' );
  $sport = xprofile_get_field_data( 49, $user_id, $multi_format = 'array' );
  $division = xprofile_get_field_data( 434, $user_id, $multi_format = 'array' );
  $coach_status = xprofile_get_field_data( 1988, $user_id, $multi_format = 'array' );

 
?>

<section class="coach-info-box">

  <section class="athlete-bio">
    <ul class="list-group">
      <li class="list-group-item">
        <span class="label float-left">GENDER</span>
        <span class="label float-right"><?php echo $gender; ?></span>
      </li>
      <li class="list-group-item">
        <span class="label float-left">DIVISION</span>
        <span class="values float-right"><?php echo $division; ?></span>
      </li>
      <li class="list-group-item">
        <span class="label float-left">COUNTRY OF RESIDENCE</span>
        <span class="label float-right"><?php echo $nationality; ?></span>
      </li>
      <li class="list-group-item">
        <span class="label float-left">POSITION</span>
        <span class="values float-right"><?php echo $coach_status; ?></span>
      </li>
    </ul>
    <div class="coach-sports-info">
      <figure id="versity-id" class="img-fluid float-left">
        <?php echo $versity_logo; ?>
      </figure>
      <h1 class="text-only">
        <?php echo $sport; ?><br>
        <small class="">SPORT</small>
      </h1>
    </div>
  </section>

</section> <!-- athlete-info-box end -->