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

//Date and Time
$info = tribe_events_event_schedule_details();



?>


<!--eventbox-->
<div class="row event-container">
<!--Bereich links------------------------------------------------------------------------------------------------->
	<div class="small-5 medium-3 large-2 columns event-content date">
		<!-- Event Date -->
		<?php do_action( 'tribe_events_before_the_meta' ) ?>
		<div class="fa-lg text-center event-list-date">
					<?php echo strtok($info, ','); ?>
		</div><!-- .tribe-events-event-meta -->
	</div>


<!--Bereich mitte------------------------------------------------------------------------->
	<div class="small-9 medium-11 large-9 columns event-content middle">
		<!-- Event Title -->
		<?php do_action( 'tribe_events_before_the_event_title' ) ?>
		<h3 class="tribe-events-list-event-title event-list-text ">
				<?php the_title() ?>
		</h3>



		<!--Künstler=Veranstalter- falls angegeben anzeigen-->
		<?php if ( tribe_get_organizer()!="" ) : ?>
			<h5>KÜNSTLER <?php echo tribe_get_organizer(); ?></h5>
		<?php endif; ?>

		<!--Falls Zeit angegeben-->
		<?php if (strstr($info, ',')==true) : ?>
			 <h5> <?php echo substr($info, strpos($info, ",")+1); ?></h5>
		<?php endif;?>

		<?php do_action( 'tribe_events_after_the_event_title' ) ?>
			<a href="<?php echo esc_url( tribe_get_event_link() ); ?>" class="tribe-events-read-more event-list-text" rel="bookmark"> DETAILS </a>
	</div>


<!--Bereich rechts------------------------------------------------------------------------->
	<div class="hide-for-small-only hide-for-medium-only large-3   columns event-content list-event-image ">
		<!-- Event Image -->
		<?php echo tribe_event_featured_image( null, 'medium' ); ?>
	</div>
	<div class="small-9 small-offset-5 hide-for-medium-only large-12 large-offset-2 collumn list-bg">
	<p class="placeholder">Fckt euch Allee</p>
	</div>
</div><!--ende Eventbox -->



<?php
do_action( 'tribe_events_after_the_content' );
