<?php
/**
 * BP Nouveau Search & filters bar
 *
 * @since 3.0.0
 * @version 3.1.0
 */
?>


<div class="subnav-filters filters no-ajax" id="subnav-filters">

  <div class="subnav-search-asm float-left pl-5">

    <h4 class="nav-title text-light float-left pr-3">Athletes: </h4>
    <div class="search-form-box float-left">

      <?php bp_nouveau_search_form(); ?>

    </div>

  </div>
  <div class="subnav-filter-asm float-right pr-5">

    <h4 class="nav-title text-light float-left pr-3">Filters: </h4>
    <div class="filter-box float-right">
      <?php if ( bp_is_user() && ! bp_is_current_action( 'requests' ) ) : ?>
      <?php bp_get_template_part( 'common/filters/user-screens-filters' ); ?>
      <?php elseif ( 'groups' === bp_current_component() ) : ?>
      <?php bp_get_template_part( 'common/filters/groups-screens-filters' ); ?>
      <?php else : ?>
      <?php bp_get_template_part( 'common/filters/directory-filters' ); ?>
      <?php endif; ?>

    </div>

  </div>


</div><!-- search & filters -->