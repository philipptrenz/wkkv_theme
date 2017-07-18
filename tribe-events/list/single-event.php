<?php
/**
 * List View Single Event
 * This file contains one event in the list view
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list/single-event.php
 *
 * @version 4.5.6
 *
 */
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

// Setup an array of venue details for use later in the template
$venue_details = tribe_get_venue_details();

// Venue
$has_venue_address = ( ! empty( $venue_details['address'] ) ) ? ' location' : '';

// Organizer
$organizer = tribe_get_organizer();

?>
<!--eventbox-->
<div class="row event-container">

<!--Bereich links------------------------------------------------------------------------------------------------->
	<div class="medium-2 columns event-content">
		<!-- Event Date -->
		<?php do_action( 'tribe_events_before_the_meta' ) ?>
		<div class="fa-lg text-center event-list-date">
					<?php echo tribe_events_event_schedule_details() ?>
		</div><!-- .tribe-events-event-meta -->
	</div>


<!--Bereich mitte------------------------------------------------------------------------->
	<div class="medium-9 columns event-content ">
		<!-- Event Title -->
		<?php do_action( 'tribe_events_before_the_event_title' ) ?>
		<h3 class="tribe-events-list-event-title event-list-text ">
				<?php the_title() ?>
		</h2>
		<?php do_action( 'tribe_events_after_the_event_title' ) ?>

		<!-- Event Content -->
		<?php do_action( 'tribe_events_before_the_content' ); ?>
		<div class="tribe-events-list-event-description tribe-events-content description entry-summary event-list-text">
			<?php echo tribe_events_get_the_excerpt( null, wp_kses_allowed_html( 'post' ) ); ?>
			<a href="<?php echo esc_url( tribe_get_event_link() ); ?>" class="tribe-events-read-more event-list-text" rel="bookmark"><?php esc_html_e( 'Find out more', 'the-events-calendar' ) ?> &raquo;</a>
		</div><!-- .tribe-events-list-event-description -->
	</div>


<!--Bereich rechts------------------------------------------------------------------------->
	<div class="medium-3 columns event-content">
		<!-- Event Image -->
		<?php echo tribe_event_featured_image( null, 'medium' ); ?>
	</div>
</div><!--ende Eventbox -->



<?php
do_action( 'tribe_events_after_the_content' );
