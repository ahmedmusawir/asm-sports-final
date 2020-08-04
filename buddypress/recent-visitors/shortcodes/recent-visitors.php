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
<div class="shortcode-recent-visitors">
	<?php
	$default = array(
		'type'   => 'thumb',
		'height' => visitors_get_setting( 'default_avatar_size' ),
		'width'  => visitors_get_setting( 'default_avatar_size' ),
	);

	$avatar_args = wp_parse_args(
		array(
			'height' => $size,
			'width'  => $size,
		),
		$default
	);

	/**
	 * Visitors array.
	 *
	 * @var BP_Recent_Visitors[] $visitors visitors.
	 */
	foreach ( $visitors as $visitor ) :
		$avatar_args['item_id'] = $visitor->visitor_id;
		?>
		<a href="<?php echo esc_url( bp_core_get_user_domain( $visitor->visitor_id ) ); ?>" title="<?php echo esc_attr( bp_core_get_user_displayname( $visitor->visitor_id ) ); ?>">
			<?php echo $avatar = bp_core_fetch_avatar( $avatar_args ); ?>
		</a>

	<?php endforeach; ?>
</div>
