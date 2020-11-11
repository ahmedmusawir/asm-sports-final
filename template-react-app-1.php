<?php
/**
 * The template for displaying all pages
 * Template Name: React Full App 1
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

<div id="primary" class="content-area wp-react-app mt-5 pt-5">
  <main id="main" class="site-main">

    <div id="root" class="p-5">
      <?php 
			$user_id = 71;
			$user_meta = get_userdata($user_id);

			$user_roles = $user_meta->roles; //array of roles the user is part of.

			echo "<h1>The user Role is: ";
			print_r($user_roles);
		?>

      <?php 
		
				// Get the user object.
				$user = get_userdata( $user_id );

				// Get all the user roles as an array.
				$user_roles = $user->roles;

				// Check if the role you're interested in, is present in the array.
				if ( in_array( 'subscriber', $user_roles, true ) ) {
						// Do something.
						echo 'YES, User is a subscriber';
				}
			?>
    </div>

  </main><!-- #main -->
</div><!-- #primary -->


<!-- <script src="http://localhost:3000/static/js/bundle.js" type="text/javascript"></script>
	<script src="http://localhost:3000/static/js/1.chunk.js" type="text/javascript"></script>
	<script src="http://localhost:3000/static/js/main.chunk.js" type="text/javascript"></script>		 -->

<?php
get_footer();