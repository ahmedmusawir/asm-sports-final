<?php 
$user_id = bp_displayed_user_id();

 // ABOUT
 $about = xprofile_get_field_data( 28, $user_id, $multi_format = 'array' );
 
?>

<section id="about-section">

  <h1 id="about" class="block-header">
    <!-- <i class="fas fa-user-circle"></i> About -->
    <img class="menu-icon pb-2" src="/wp-content/uploads/bio-icon-2.png" alt="">
    About <span id="the-name">
      <?php echo bp_core_get_user_displayname( $user_id, true ); ?>
    </span>
  </h1>

  <p class="text-content">
    <?php echo $about; ?>
  </p>

</section>