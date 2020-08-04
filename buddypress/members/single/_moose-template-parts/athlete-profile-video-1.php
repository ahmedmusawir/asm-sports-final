<?php 
$user_id = bp_displayed_user_id();

  // VIDEOS
  // $video_1 = '';
  // $video_2 = '';
  // $video_3 = '';
  // $video_4 = '';
  // $video_5 = '';
  $video_1 = xprofile_get_field_data( 31, $user_id, $multi_format = 'array' );
  $video_2 = xprofile_get_field_data( 29, $user_id, $multi_format = 'array' );
  $video_3 = xprofile_get_field_data( 32, $user_id, $multi_format = 'array' );
  $video_4 = xprofile_get_field_data( 33, $user_id, $multi_format = 'array' );
  $video_5 = xprofile_get_field_data( 34, $user_id, $multi_format = 'array' );


?>
<section id="top-video-section">

  <div class="embed-responsive embed-responsive-16by9">

    <iframe class="embed-responsive-item"
      src="https://www.youtube.com/embed/<?php echo $video_1; ?>?autoplay=0&loop=0&controls=1&showinfo=0&rel=0"
      frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
      <!-- THE YOUTUBE VIDEO EMBED - RESPONSIVE - VIDEO ID INPUT ONLY -->
    </iframe>

  </div>

  <h1 class="block-header">
    <!-- <i class="fab fa-youtube"></i> Videos -->
    <img src="/wp-content/uploads/videos-icon.png" alt=""></i> Videos
  </h1>

  <section class="more-videos-box">

    <div class="row">
      <div class="col-sm-6 col-md-6">

        <div class="embed-responsive embed-responsive-16by9">

          <iframe class="embed-responsive-item mt-2"
            src="https://www.youtube.com/embed/<?php echo $video_2; ?>?autoplay=0&loop=0&controls=1&showinfo=0&rel=0"
            frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
            <!-- THE YOUTUBE VIDEO EMBED - RESPONSIVE - VIDEO ID INPUT ONLY -->
          </iframe>

        </div>

      </div>
      <div class="col-sm-6 col-md-6">

        <div class="embed-responsive embed-responsive-16by9">

          <iframe class="embed-responsive-item mt-2"
            src="https://www.youtube.com/embed/<?php echo $video_3; ?>?autoplay=0&loop=0&controls=1&showinfo=0&rel=0"
            frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
            <!-- THE YOUTUBE VIDEO EMBED - RESPONSIVE - VIDEO ID INPUT ONLY -->
          </iframe>

        </div>

      </div>
      <div class="col-sm-6 col-md-6">

        <div class="embed-responsive embed-responsive-16by9">

          <iframe class="embed-responsive-item mt-2"
            src="https://www.youtube.com/embed/<?php echo $video_4; ?>?autoplay=0&loop=0&controls=1&showinfo=0&rel=0"
            frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
            <!-- THE YOUTUBE VIDEO EMBED - RESPONSIVE - VIDEO ID INPUT ONLY -->
          </iframe>

        </div>

      </div>
      <div class="col-sm-6 col-md-6">

        <div class="embed-responsive embed-responsive-16by9">

          <iframe class="embed-responsive-item mt-2"
            src="https://www.youtube.com/embed/<?php echo $video_5; ?>?autoplay=0&loop=0&controls=1&showinfo=0&rel=0"
            frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
            <!-- THE YOUTUBE VIDEO EMBED - RESPONSIVE - VIDEO ID INPUT ONLY -->
          </iframe>

        </div>

      </div>

  </section> <!-- end more-videos-box -->

</section> <!-- end top-video-section -->