<?php 
$user_id = bp_displayed_user_id();

// INSTAGRAM
// $instagram_1 = '';
// $instagram_2 = '';
// $instagram_3 = '';
// $instagram_4 = '';
$instagram_1 = xprofile_get_field_data( 25, $user_id, $multi_format = 'array' );
$instagram_2 = xprofile_get_field_data( 26, $user_id, $multi_format = 'array' );
$instagram_3 = xprofile_get_field_data( 35, $user_id, $multi_format = 'array' );
$instagram_4 = xprofile_get_field_data( 36, $user_id, $multi_format = 'array' ); 
 
?>

<section id="instagram-section">

  <h1 class="block-header">
    <!-- <i class="fab fa-instagram"></i> Instagram -->
    <img class="menu-icon" src="/wp-content/uploads/images-icon.png" alt=""> Instagram
  </h1>

  <div class="row gallery-box">

    <div class="col-sm-6 col-md-6 col-lg-6">

      <div class="embed-responsive embed-responsive-1by1">

        <?php echo $instagram_1; ?>

      </div>

    </div>

    <div class="col-sm-6 col-md-6 col-lg-6">

      <div class="embed-responsive embed-responsive-1by1">

        <?php echo $instagram_2; ?>

      </div>

    </div>

    <div class="col-sm-6 col-md-6 col-lg-6">

      <div class="embed-responsive embed-responsive-1by1">

        <?php echo $instagram_3; ?>

      </div>

    </div>

    <div class="col-sm-6 col-md-6 col-lg-6">

      <div class="embed-responsive embed-responsive-1by1">

        <?php echo $instagram_4; ?>

      </div>

    </div>

  </div> <!-- End Row -->

</section>