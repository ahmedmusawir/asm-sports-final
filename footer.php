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
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" /> -->
</div><!-- #content -->


<?php if ( is_user_logged_in() ) : ?>

<?php get_template_part( '_cyberize-modules/asm-loggedin-footer' ); ?>

<?php else : ?>

<?php get_template_part( '_cyberize-modules/asm-non-loggedin-footer' ); ?>

<?php endif; ?>


</div><!-- #page -->

<?php wp_footer(); ?>



</body>

</html>