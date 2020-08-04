<?php
/**
 * The template for displaying all pages
 * Template Name: Custom Login page
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cyberize
 */

get_header();
?>
<style type="text/css">
#general-page-header {
  width: 100vw;
  height: 50px;
  background-color: black;
  /* background-image: url('<?php the_field('general_page_header_image', 'option') ?>'); */
  background-size: cover;
  background-position: top center;
  margin-top: 50px;
}
</style>

<section id="general-page-header" class="text-center">

</section>

<div id="page-asm" class="content-area container-fluid">
  <main id="main" class="site-main">

    <?php
      if ( ! is_user_logged_in() ) { // Display WordPress login form:
          $args = array(
              'redirect' => admin_url(), 
              'form_id' => 'loginform-custom',
              'label_username' => __( 'Username custom text' ),
              'label_password' => __( 'Password custom text' ),
              'label_remember' => __( 'Remember Me custom text' ),
              'label_log_in' => __( 'Log In custom text' ),
              'remember' => true
          );
          wp_login_form( $args );
      } else { // If logged in:
          wp_loginout( home_url() ); // Display "Log Out" link.
          echo " | ";
          wp_register('', ''); // Display "Site Admin" link.
      }
    ?>
  </main><!-- #main -->

</div><!-- #primary -->

<?php
get_footer();