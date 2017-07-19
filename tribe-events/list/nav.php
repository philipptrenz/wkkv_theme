<?php
/**
 * List View Nav Template
 * This file loads the list view navigation.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list/nav.php
 *
 * @package TribeEventsCalendar
 * @version 4.2
 *
 */
global $wp_query;

$events_label_plural = tribe_get_event_label_plural();

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
} ?>

<h3 class="screen-reader-text" tabindex="0"><?php echo esc_html( sprintf( esc_html__( '%s List Navigation', 'the-events-calendar' ), "" ) ); ?></h3>
<ul class="tribe-events-sub-nav">
	<!-- Left Navigation -->
	<div class="row ">
	<div class="small-6  small-offset-1 medium-5 medium-offset-2 large-6 large-offset-1 column float-left">
	<?php if ( tribe_has_previous_event() ) : ?>
			<h3 class="float-left"><a class="event-list-text" href="<?php echo esc_url( tribe_get_listview_prev_link() ); ?>" rel="prev"><?php printf( "vorheriger Monat" ); ?></a></h3>
	<?php endif; ?>
	</div>
	<div class="small-5 small-offset-7 column">
		<!-- Right Navigation -->
		<?php if ( tribe_has_next_event() ) : ?>
				<h3 class="float-right"><a class="event-list-text" href="<?php echo esc_url( tribe_get_listview_next_link() ); ?>" rel="next"><?php printf( 'nächster Monat' ); ?></a></h3>
		<?php endif; ?>
	</div>

</div>
</ul>
