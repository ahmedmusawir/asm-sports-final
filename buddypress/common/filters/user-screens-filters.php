<?php
/**
 * BP Nouveau User screens filters
 *
 * @since 3.0.0
 * @version 3.0.0
 */
?>
<style>
.bp-user-filter {
  border: 4px dotted green;
}
</style>
<div class="bp-user-filter">
<h5><strong>user-screen-filters.php under common/filters folder</strong></h5>

<div id="comp-filters" class="component-filters clearfix">
		<div id="<?php bp_nouveau_filter_container_id(); ?>" class="last filter">
			<label for="<?php bp_nouveau_filter_id(); ?>" class="bp-screen-reader-text">
				<span ><?php bp_nouveau_filter_label(); ?></span>
			</label>
			<div class="select-wrap">
				<select id="<?php bp_nouveau_filter_id(); ?>" data-bp-filter="<?php bp_nouveau_filter_component(); ?>">

					<?php bp_nouveau_filter_options(); ?>

				</select>
				<span class="select-arrow" aria-hidden="true"></span>
			</div>
		</div>
</div>

</div> <!-- delete me (bp-user-filter) -->
