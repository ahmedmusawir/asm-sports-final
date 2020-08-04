<?php 
$current_user = wp_get_current_user();
$user_id = $current_user->ID;
// $user_id = bp_displayed_user_id();

  // FOLLOWING SET IS FOR THE LEFT ATHLETE COLUMN [MEMBER BIO FIELD GROUP]
  $gender = xprofile_get_field_data( 7, $user_id, $multi_format = 'array' );
  $versity_logo = xprofile_get_field_data( 439, $user_id, $multi_format = 'array' );
  $nationality = xprofile_get_field_data( 11, $user_id, $multi_format = 'array' );
  $division = xprofile_get_field_data( 434, $user_id, $multi_format = 'array' );
  $weight = xprofile_get_field_data( 15, $user_id, $multi_format = 'array' );
  $sport = xprofile_get_field_data( 49, $user_id, $multi_format = 'array' );
  $enrollment_year = xprofile_get_field_data( 17, $user_id, $multi_format = 'array' ); 
 
?>

<section class="athlete-info-box">
  <div id="item-header-avatar">
    <a href="<?php bp_displayed_user_link(); ?>">

      <div class="athlete-img-box text-center">

        <?php 
      
          echo bp_core_fetch_avatar( array(
            'item_id' => bp_loggedin_user_id(),
            'width' => 50,
            'height' => 50,
            'class' => 'avatar',
            )
          );
        
        ?>

      </div>
      <h1 class="athlete-title text-center">

        <?php echo bp_core_get_user_displayname( $user_id, true ); ?>

      </h1>
    </a> <!-- BACK TO PROFILE -->
  </div><!-- #item-header-avatar -->

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
    </ul>
    <div class="athlete-sports-info mt-5">
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