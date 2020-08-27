<?php 
$user_id = bp_displayed_user_id();

// INTERVIEW 
$ans1 = xprofile_get_field_data( 324, $user_id, $multi_format = 'array' );
$ans2 = xprofile_get_field_data( 325, $user_id, $multi_format = 'array' );
$ans3 = xprofile_get_field_data( 326, $user_id, $multi_format = 'array' );
$ans4 = xprofile_get_field_data( 327, $user_id, $multi_format = 'array' );

// echo '<pre>';
// print_r($interview);
// echo '</pre>';
?>

<section id="interview-section">

  <h1 class="block-header">
    <!-- <i class="fad fa-comments"></i> Interviews -->
    <img class="menu-icon pb-2" src="/wp-content/uploads/interview-icon-2.png" alt=""> Interviews
  </h1>

  <article class="qa-content py-2">
    <h5 class="question">
      What makes you different?
    </h5>
    <p class="answer py-2">
      <?php echo $ans1; ?>
    </p>
    <h5 class="question">
      Why do you want to compete in college?
    </h5>
    <p class="answer py-2">
      <?php echo $ans2; ?>
    </p>
    <h5 class="question">
      College Goals?
    </h5>
    <p class="answer py-2">
      <?php echo $ans3; ?>
    </p>
    <h5 class="question">
      Anything else we should know?
    </h5>
    <p class="answer py-2">
      <?php echo $ans4; ?>
    </p>
  </article>

</section>