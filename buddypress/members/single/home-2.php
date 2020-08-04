<?php
/**
 * BuddyPress - Members Home
 *
 * @since   1.0.0
 * @version 3.0.0
 */
?>
<!-- MOOSE BP TESTING START -->

<style>
.bp-home {
  border: 8px dotted blue;
}

#item-body {
  border: 10px dotted red;
}
</style>
<div class="bp-home">

  <h4><strong>home.php under members/ folder</strong></h4>

  <?php 
  $user_id = get_current_user_id();
  $field = 7;
  $data = xprofile_get_field_data( $field, $user_id, $multi_format = 'array' );
  
  // echo "<h1>$user_id</h1>";
  // echo "<h1>Data: $data</h1>";

  // echo '<pre>';
  // print_r($data);
  // echo '</pre>';

  ?>

  <!-- MOOSE BP TESTING END -->

  <?php bp_nouveau_member_hook( 'before', 'home_content' ); ?>

  <div id="item-header" role="complementary" data-bp-item-id="<?php echo esc_attr( bp_displayed_user_id() ); ?>"
    data-bp-item-component="members" class="users-header single-headers">

    <?php //bp_nouveau_member_header_template_part(); ?>

  </div><!-- #item-header -->

  <div class="bp-wrap">
    <?php if ( ! bp_nouveau_is_object_nav_in_sidebar() ) : ?>

    <?php //bp_get_template_part( 'members/single/parts/item-nav' ); ?>

    <?php endif; ?>

    <div id="item-body" class="item-body row">

      <article class="left-col col-md-3">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum laborum quos beatae quasi nisi cum debitis
        facere, blanditiis soluta esse adipisci! Assumenda nesciunt quae numquam ad voluptates cupiditate accusamus vel!
      </article>
      <article class="left-col col-md-7">

        <?php //bp_nouveau_member_template_part(); ?>
        <?php if ( bp_has_profile() ) : ?>
        <?php while ( bp_profile_groups() ) : bp_the_profile_group(); ?>

        <ul id="profile-groups">
          <?php if ( bp_profile_group_has_fields() ) : ?>

          <li>
            <?php //if ( bp_get_the_profile_field_id() != 5) : ?>

            <?php bp_the_profile_group_name() ?>

            <?php //endif; ?>

            <ul class="profile-group-fields">
              <?php while ( bp_profile_fields() ) : bp_the_profile_field(); ?>

              <?php if ( bp_field_has_data() && bp_get_the_profile_field_id() != 5) : ?>

              <li>
                <?php bp_the_profile_field_name() ?>
                <?php bp_the_profile_field_value() ?>
              </li>
              <?php endif; ?>

              <?php endwhile; ?>
            </ul>
          <li>

            <?php endif; ?>
        </ul>

        <?php endwhile; ?>

        <?php else: ?>

        <div id="message" class="info">
          <p>This user does not have a profile.</p>
        </div>

        <?php endif;?>

      </article>
      <article class="left-col col-md-2">
        <img src="/wp-content/uploads/2020/01/profile-sidebar.png" alt="">
      </article>


    </div><!-- #item-body -->
  </div><!-- // .bp-wrap -->

  <?php //bp_nouveau_member_hook( 'after', 'home_content' ); ?>

  <!-- MOOSE BP TESTING START -->

</div> <!-- delete me (bp-moose) -->

<!-- MOOSE BP TESTING END -->