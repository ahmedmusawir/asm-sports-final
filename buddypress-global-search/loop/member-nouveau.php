<script src="https://kit.fontawesome.com/c8084101a0.js" crossorigin="anonymous"></script>

<?php 
  $user_id = bp_get_member_user_id();

  // ABOUT
  $sport = xprofile_get_field_data( 49, $user_id, $multi_format = 'array' );
  $about = xprofile_get_field_data( 28, $user_id, $multi_format = 'array' );
  $excerpt = substr($about, 0, 200) . '...';
  $nationality = xprofile_get_field_data( 11, $user_id, $multi_format = 'array' );
  $enrollment_year = xprofile_get_field_data( 17, $user_id, $multi_format = 'array' ); 
  
?>

<li <?php bp_member_class( array( 'item-entry-asm', 'bboss_search_item' ) ); ?>
  data-bp-item-id="<?php bp_member_user_id(); ?>" data-bp-item-component="members">
  <div class="list-wrap-asm row">
    <div class="col-md-4">

      <div class="item-avatar-asm">
        <a href="<?php bp_member_permalink(); ?>"><?php bp_member_avatar( bp_nouveau_avatar_args() ); ?></a>
      </div>
    </div>
    <div class="col-md-8">

      <div class="item-asm">

        <div class="item-block-asm">

          <h2 class="list-title member-name">

            <a href="<?php bp_member_permalink(); ?>"><?php bp_member_name(); ?>
              <small>(<?php echo $sport; ?>)</small>
            </a>

          </h2>

          <ul class="list-inline info-bar">
            <li class="list-inline-item"><i class="fas fa-globe"></i> &nbsp;Residence: <?php echo $nationality; ?></li>
            <li class="list-inline-item"><i class="fas fa-eye"></i> &nbsp;993 Profile Views</li>
            <li class="list-inline-item"><i class="fas fa-users-class"></i>&nbsp;Class: <?php echo $enrollment_year; ?>
            </li>
          </ul>

          <div class="text-content">
            <?php echo $excerpt; ?>
            <h5 class="readmore float-right"><a href="<?php bp_member_permalink(); ?>">[View Athlete...]</a></h5>
          </div>

        </div> <!-- item-block row end -->

      </div><!-- // .item -->

    </div>
</li>