<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Moose_Framework_2
 */

?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</div><!-- #content -->
<footer id="footer-asm" class="site-footer">

  <section class="footer-header text-center">
    <h2 class="footer-title">Recruiting Starts Here ...</h2>
  </section>

  <div class="container widgets_wrapper mt-5">
    <div class="footer-flex-container">
      <div class="footer-flex-item footer-flex-col-1">

        <img id="footer-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/ASM-logo.png" alt="">

      </div>
      <div class="footer-flex-item footer-flex-col-2">

        <?php

					if ( ! is_active_sidebar( 'footer-sidebar-2' ) ) {

						echo "Please Insert A Widget";
					}
				?>

        <aside id="footer-widget-1" class="widget-area">
          <?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
        </aside><!-- #secondary -->


      </div>
      <div class="footer-flex-item footer-flex-col-3">

        <?php

					if ( ! is_active_sidebar( 'footer-sidebar-3' ) ) {

						echo "Please Insert A Widget";
					}
				?>

        <aside id="footer-widget-2" class="widget-area">
          <?php dynamic_sidebar( 'footer-sidebar-3' ); ?>
        </aside><!-- #secondary -->


      </div>
      <div class="footer-flex-item footer-flex-col-4">

        <?php

					if ( ! is_active_sidebar( 'footer-sidebar-4' ) ) {

						echo "Please Insert A Widget";
					}
				?>

        <aside id="footer-widget-4" class="widget-area">
          <?php dynamic_sidebar( 'footer-sidebar-4' ); ?>
        </aside><!-- #secondary -->

      </div>
      <div class="footer-flex-item footer-flex-col-5">

        <?php

					if ( ! is_active_sidebar( 'footer-sidebar-5' ) ) {

						echo "Please Insert A Widget";
					}
				?>

        <aside id="footer-widget-5" class="widget-area">
          <?php dynamic_sidebar( 'footer-sidebar-5' ); ?>
        </aside><!-- #secondary -->

      </div>

    </div> <!-- END ROW -->

  </div> <!-- END WIDGET WRAPPER -->
  <section class="site-info">

    <div class="ml-md-5 widgets_wrapper">
      <div class="copyright">
        <div class="mx-auto">

          <?php the_field('theme_footer_text', 'option') ?>

        </div>

      </div>
    </div>

  </section>

  <!--==============================================================================
		=            THIS IS FOR DEBUGGING. PLZ DISABLE WHEN READY TO PUBLISH            =
		===============================================================================-->

  <div style="color: dodgerblue"><strong>Current template:</strong>
    <?php echo get_current_template( true ); ?>
  </div>

  <!-- ====  End of THIS IS FOR DEBUGGING. PLZ DISABLE WHEN READY TO PUBLISH  ==== -->

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>



</body>

</html>