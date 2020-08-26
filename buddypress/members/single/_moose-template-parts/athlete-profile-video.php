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
  // $video_5 = xprofile_get_field_data( 34, $user_id, $multi_format = 'array' );

  $vid_img_2 = "https://img.youtube.com/vi/$video_2/0.jpg";
  $vid_img_3 = "https://img.youtube.com/vi/$video_3/0.jpg";
  $vid_img_4 = "https://img.youtube.com/vi/$video_4/0.jpg";
  // $vid_img_5 = "https://img.youtube.com/vi/$video_5/0.jpg";


?>
<section id="top-video-section">

  <h1 class="block-header">
    <!-- <i class="fab fa-youtube"></i> Videos -->
    <img src="/wp-content/uploads/videos-icon.png" alt=""></i> Videos
  </h1>

  <div class="embed-responsive embed-responsive-16by9">

    <iframe class="embed-responsive-item"
      src="https://www.youtube.com/embed/<?php echo $video_1; ?>?autoplay=0&loop=0&controls=1&showinfo=0&rel=0"
      frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
      <!-- THE YOUTUBE VIDEO EMBED - RESPONSIVE - VIDEO ID INPUT ONLY -->
    </iframe>

  </div>

  <!-- <section class="more-videos-box">

    <div class="row">

      <div class="col-sm-4 col-md-4">

        <a type="button" class="video-button" data-toggle="modal" data-target="#<?php echo $video_2; ?>">
          <img class="img-fluid" src="<?php echo $vid_img_2; ?>" alt="">
        </a>

      </div>

      <div class="col-sm-4 col-md-4">

        <a type="button" class="video-button" data-toggle="modal" data-target="#<?php echo $video_3; ?>">
          <img class="img-fluid" src="<?php echo $vid_img_3; ?>" alt="">
        </a>

      </div>

      <div class="col-sm-4 col-md-4">

        <a type="button" class="video-button" data-toggle="modal" data-target="#<?php echo $video_4; ?>">
          <img class="img-fluid" src="<?php echo $vid_img_4; ?>" alt="">
        </a>

      </div>


  </section>  -->
  <!-- end more-videos-box -->

</section> <!-- end top-video-section -->

<!-- YOUTUBE VIDEO 2 MODAL -->

<!-- Modal -->
<div class="modal fade" id="<?php echo $video_2; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item mt-2"
            src="https://www.youtube.com/embed/<?php echo $video_2; ?>?autoplay=0&loop=0&controls=1&showinfo=0&rel=0"
            frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
            <!-- THE YOUTUBE VIDEO EMBED - RESPONSIVE - VIDEO ID INPUT ONLY -->
          </iframe>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- YOUTUBE VIDEO MODAL END -->

<!-- YOUTUBE VIDEO 2 MODAL -->

<!-- Modal -->
<div class="modal fade" id="<?php echo $video_3; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item mt-2"
            src="https://www.youtube.com/embed/<?php echo $video_3; ?>?autoplay=0&loop=0&controls=1&showinfo=0&rel=0"
            frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
            <!-- THE YOUTUBE VIDEO EMBED - RESPONSIVE - VIDEO ID INPUT ONLY -->
          </iframe>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- YOUTUBE VIDEO MODAL END -->

<!-- YOUTUBE VIDEO 2 MODAL -->

<!-- Modal -->
<div class="modal fade" id="<?php echo $video_4; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item mt-2"
            src="https://www.youtube.com/embed/<?php echo $video_4; ?>?autoplay=0&loop=0&controls=1&showinfo=0&rel=0"
            frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
            <!-- THE YOUTUBE VIDEO EMBED - RESPONSIVE - VIDEO ID INPUT ONLY -->
          </iframe>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- YOUTUBE VIDEO MODAL END -->