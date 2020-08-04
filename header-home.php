<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cyberize
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <!--=====================================
=            FONTAWESOME PRO            =
======================================-->
  <!-- <link rel="icon" type="image/png" sizes="32x32" href="/wp-content/uploads/2018/02/Moose-32.png"> -->
  <!-- <script src="https://kit.fontawesome.com/c8084101a0.js" crossorigin="anonymous"></script> -->


  <!--===========================================
=            CUSTOM ANALYTICS TAGS - HEAD     =
============================================-->

  <!--====  Base Tag  ====-->

  <?php the_field('before_ending_head_tag_default', 'option'); ?>

  <!--====  Custom Conversion Tag  ====-->


  <?php the_field('before_ending_head_tag'); ?>

  <!--====  End of CUSTOM ANALYTICS TAGS  ====-->

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <!--======================================================
=            CUSTOM ANALYTICS TAGS - BODY TOP            =
=======================================================-->

  <!--====  Base Tag  ====-->

  <?php the_field('after_top_body_tag_default', 'option'); ?>

  <!--====  Custom Conversion Tag  ====-->

  <?php the_field('after_top_body_tag'); ?>

  <!--====  End of CUSTOM ANALYTICS TAGS - BODY TOP  ====-->

  <div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cyberize' ); ?></a>

    <header id="header-asm" class="site-header">
      <!-- Moose_Framework_2 NAVIGATION GOES HERE -->

      <section class="main-navigation">
        <div id="main-navbar-home" class="main-navbar navbar fixed-top">
          <a class="navbar-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img src="/wp-content/uploads/logo.png" class="img-fluid" alt="">
          </a>
          <?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1', // Defined when registering the menu
						'menu_id'        => 'primary-menu',
						'container'			 => 'div',
						'container_class' => 'main-nav',  	
						'menu_class'     => 'mx-auto', //CENTER ALIGN
						// 'menu_class'     => 'ml-auto', //RIGHT ALIGN
						// 'menu_class'     => 'mr-auto', //LEFT ALIGN
					) );
				 ?>
        </div>
      </section>


      <!-- Moose_Framework_2 NAVIGATION ENDS HERE -->

    </header><!-- #masthead -->

    <div id="content" class="site-content">