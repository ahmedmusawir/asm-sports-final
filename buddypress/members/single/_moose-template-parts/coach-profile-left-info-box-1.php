<?php 
$user_id = bp_displayed_user_id();
// echo $user_id;

  // FOLLOWING SET IS FOR THE LEFT ATHLETE COLUMN [MEMBER BIO FIELD GROUP]
  $gender = xprofile_get_field_data( 7, $user_id, $multi_format = 'array' );
  $versity_logo = xprofile_get_field_data( 439, $user_id, $multi_format = 'array' );
  $nationality = xprofile_get_field_data( 11, $user_id, $multi_format = 'array' );
  $division = xprofile_get_field_data( 434, $user_id, $multi_format = 'array' );
  $weight = xprofile_get_field_data( 15, $user_id, $multi_format = 'array' );
  $sport = xprofile_get_field_data( 49, $user_id, $multi_format = 'array' );
  $enrollment_year = xprofile_get_field_data( 17, $user_id, $multi_format = 'array' ); 
 
?>

<section class="coach-info-box">
  <div id="item-header-avatar">
    <!-- <a href="<?php bp_displayed_user_link(); ?>"> -->

    <div class="athlete-img-box text-center">

      <?php bp_displayed_user_avatar( 'type=full' ); ?>

    </div>
    <h1 class="athlete-title text-center">

      <?php echo bp_core_get_user_displayname( $user_id, true ); ?>

    </h1>
    <!-- </a> -->
  </div><!-- #item-header-avatar -->

  <section class="athlete-meta">

    <div class="athlete-meta-info clearfix px-1 py-3 text-center">
      <!-- <span class="eye"><i class="fas fa-eye"></i> &nbsp;1,234 Profile Views</span> -->
      <!-- <span class="star float-right"><i class="fas fa-star"></i> &nbsp;4.5</span> -->
    </div>

  </section>

  <section class="coach-bio">

    <ul class="list-group">
      <li class="list-group-item">
        <span class="label float-left">GENDER</span>
        <span class="values float-right"><?php echo $gender; ?></span>
      </li>
      <li class="list-group-item">
        <span class="label float-left">DIVISION</span>
        <span class="values float-right"><?php echo $division; ?></span>
      </li>
      <li class="list-group-item">
        <span class="label float-left">COUNTRY OF RESIDENCE</span>
        <span class="values float-right"><?php echo $nationality; ?></span>
      </li>
      <li class="list-group-item">
        <span class="label float-left">POSITION</span>
        <span class="values float-right"><?php echo $nationality; ?></span>
      </li>
    </ul>
    <div class="athlete-sports-info">
      <figure class="img-fluid float-left">
        <?php echo $versity_logo; ?>
      </figure>
      <h1 class="text-only">
        <?php echo $sport; ?><br>
        <small class="">SPORT</small>
      </h1>

    </div>
  </section>

</section> <!-- athlete-info-box end -->