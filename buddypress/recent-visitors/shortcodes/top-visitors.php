<?php
/**
 * Short Description
 *
 * @package    BP5_Dev
 * @subpackage ${NAMESPACE}
 * @copyright  Copyright (c) 2020, Brajesh Singh
 * @license    https://www.gnu.org/licenses/gpl.html GNU Public License
 * @author     Brajesh Singh
 * @since      1.0.0
 */
?>
<div class="recent-visitors-shortcode">
  <?php if ( ! empty( $top_profiles ) ) : ?>
  <ul class="item-list most-visited-users-<?php echo $atts['view']; ?>">
    <?php foreach ( $top_profiles as $top_profile ) : ?>

    <?php 
		// GETTING USER DATA
		$user_obj = get_userdata($top_profile->user_id);
		$total_profile_visit = visitors_get_profile_visit_count($top_profile->user_id);

		/**
         * POPULAR ATHLETE SHORTCODE TEMPLATE EDITING FOR SIDEBAR
         * Isolating the Athletes only ...
         */

				if ( !isset($user_obj->roles[0])) {
          $user_obj->roles[0] = null;
         }
				
				if ( !isset($user_obj->roles[1])) {
          $user_obj->roles[1] = null;
         }

         $user_role = $user_obj->roles[1];

         // CHECKING FOR COACH VIEWS
				 if ( $user_role != 'coach' ) :
		
		?>

    <li>
      <div class="item-avatar">
        <?php echo bp_core_fetch_avatar( array( 'item_id' => $top_profile->user_id ) ); ?>
      </div>
      <div class="item">
        <div class="item-title">
          <a
            href="<?php echo bp_core_get_user_domain( $top_profile->user_id ); ?>"><?php echo  bp_core_get_user_displayname( $top_profile->user_id ); ?></a>
        </div>
        <?php if ( ! empty( $atts['show_visits'] ) ) : ?>
        <div class="item-meta">
          <span><?php _e( 'views:', 'recent-visitors-for-buddypress-profile' ); ?><span class="visit-count">
              <?php echo $top_profile->visits ; ?>
              <?php //echo $total_profile_visit; ?>
            </span>
          </span>
        </div>
        <?php endif; ?>
      </div>
    </li>

    <?php endif; ?>

    <?php endforeach; ?>

  </ul>
  <style type="text/css">
  ul.item-list span.visit-count {
    padding-left: 5px;
  }
  </style>
  <?php else : ?>
  <?php _e( 'No result found.', 'recent-visitors-for-buddypress-profile' ); ?>
  <?php endif; ?>
</div>