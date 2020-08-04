<?php
/**
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cyberize_Framework
 */

get_header(); ?>

<section id="BLOCK1">

  <?php get_template_part( '_cyberize-modules/blog-index-asm-sidebar' ); ?>

</section>

<?php
get_footer();