<?php
/**
 * ASM DROPDOWN NAVIGATION
 */
?>
<section id="dropdown-navigation" class="menu-close">

  <div id="dropdown-close-button">
    <i class="fas fa-times-circle"></i>
  </div>

  <header class="dropdown-navigation-header row">

    <div class="col-sm-3 the-logo">

      <img src=" <?php the_field('site_logo', 'option') ?>" class="img-fluid" alt="">

    </div>

    <div class="col-sm-4 social-links-box">

      <ul class="list-inline">

        <?php if( get_field('facebook_link', 'option') ): ?>
        <li class="list-inline-item">
          <a class="social-icon text-xs-center" target="_blank" href="<?php the_field('facebook_link', 'option'); ?>">
            <i class="fab fa-facebook"></i>
          </a>
        </li>
        <?php endif; ?>

        <?php if( get_field('twitter_link', 'option') ): ?>
        <li class="list-inline-item">
          <a class="social-icon text-xs-center" target="_blank" href="<?php the_field('twitter_link', 'option'); ?>">
            <i class="fab fa-twitter"></i>
          </a>
        </li>
        <?php endif; ?>

        <?php if( get_field('instagram_link', 'option') ): ?>
        <li class="list-inline-item">
          <a class="social-icon text-xs-center" target="_blank" href="<?php the_field('instagram_link', 'option'); ?>">
            <i class="fab fa-instagram"></i>
          </a>
        </li>
        <?php endif; ?>

        <?php if( get_field('youtube_link', 'option') ): ?>
        <li class="list-inline-item">
          <a class="social-icon text-xs-center" target="_blank" href="<?php the_field('youtube_link', 'option'); ?>">
            <i class="fab fa-youtube"></i>
          </a>
        </li>
        <?php endif; ?>

      </ul>

    </div>

    <div class="col-sm-5 login-box">

      <?php if ( !is_user_logged_in() ) : ?>

      <a href="/register/" class="btn btn-light">JOIN</a>
      <a href="/wp-login.php" class="btn btn-info">LOGIN</a>

      <?php else : ?>

      <a href="/wp-login.php?action=logout" class="btn btn-danger">LOG OUT</a>

      <?php endif; ?>

    </div>

  </header>

  <main class="dropdown-navigation-body container-fluid">

    <section class="row">
      <div class="col-sm-5 left-menu">
        <!-- <h1 class="text-light">Left Menu</h1> -->
        <?php 
            $logged_in_user_obj = wp_get_current_user();
            $user_nicename = $logged_in_user_obj->user_nicename;
            $user_profile_url = "/members/$user_nicename";
        ?>

        <!-- <?php if ( is_user_logged_in() ) : ?> -->
        <h3><a class="left-menu-title text-white" href="<?php echo $user_profile_url; ?>">PROFILE</a></h3>
        <!-- <?php endif; ?> -->

        <?php

          wp_nav_menu( array( 
              'theme_location' => 'global-dropdown-left-menu', 
              'container_class' => 'global-dropdown-left-menu' ) ); 
        ?>

      </div>
      <div class="col-sm-7 right-menu">
        <h4><a class="right-menu-title text-light" href="/members/type/athletes/">Sports</a></h4>
        <section class="row">
          <div class="col-sm-4">
            <?php

            wp_nav_menu( array( 
                'theme_location' => 'global-dropdown-right-menu-1', 
                'container_class' => 'global-dropdown-right-menu' ) ); 
            ?>
          </div>
          <div class="col-sm-8">
            <?php

            wp_nav_menu( array( 
                'theme_location' => 'global-dropdown-right-menu-2', 
                'container_class' => 'global-dropdown-right-menu' ) ); 
            ?>
          </div>
        </section>

      </div>
    </section>

  </main> <!-- END MAIN BODY -->

  <footer>
    <article class="content text-right pr-5">
      <a href="<?php the_field('global_dropdown_footer_link_top', 'option'); ?>">
        <h2 class="title"><?php the_field('global_dropdown_footer_text_top', 'option'); ?></h2>
      </a>
      <h3 class="sub-title"><?php the_field('global_dropdown_footer_text_bottom', 'option'); ?></h3>
    </article>
  </footer>

</section><!-- END #page-asm-dashboard  -->