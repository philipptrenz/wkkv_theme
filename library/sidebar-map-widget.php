<?php
/**
 * The sidebar containing the main widget area
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<div class="row map-sidebar-widgets">
	<?php do_action( 'foundationpress_before_sidebar' ); ?>
	<?php dynamic_sidebar( 'map-widget' ); ?>
	<?php do_action( 'foundationpress_after_sidebar' ); ?>
</div>
