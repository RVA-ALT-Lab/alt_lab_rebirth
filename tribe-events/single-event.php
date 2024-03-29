<?php
/**
 * Day View Single Event
 * This file contains one event in the day view
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/day/single-event.php
 *
 * @version 4.6.19
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$venue_details = tribe_get_venue_details();

// Venue microformats
$has_venue         = ( $venue_details ) ? ' vcard' : '';
$has_venue_address = ( ! empty( $venue_details['address'] ) ) ? ' location' : '';

// The address string via tribe_get_venue_details will often be populated even when there's
// no address, so let's get the address string on its own for a couple of checks below.
$venue_address = tribe_get_address();
?>

<!-- Event Title -->
<?php do_action( 'tribe_events_before_the_event_title' ) ?>
<h1 class="tribe-events-list-event-title summary">	
		<?php the_title() ?>
</h1>
<?php do_action( 'tribe_events_after_the_event_title' ) ?>

<!-- Event Meta -->
<?php do_action( 'tribe_events_before_the_meta' ) ?>
<div class="tribe-events-event-meta <?php echo esc_attr( $has_venue . $has_venue_address ); ?>">

	<!-- Schedule & Recurrence Details -->
	<div class="tribe-updated published time-details">
		<?php echo tribe_events_event_schedule_details(); ?>
	</div>

	<?php if ( $venue_details ) : ?>
		<!-- Venue Display Info -->
		<div class="tribe-events-venue-details">
		<?php
			$address_delimiter = empty( $venue_address ) ? ' ' : ', ';

			// These details are already escaped in various ways earlier in the code.
			echo implode( $address_delimiter, $venue_details );

			if ( tribe_show_google_map_link() ) {
				echo tribe_get_map_link_html();
			}
		?>
		</div> <!-- .tribe-events-venue-details -->
	<?php endif; ?>

</div><!-- .tribe-events-event-meta -->

<?php if ( tribe_get_cost() ) : ?>
	<div class="tribe-events-event-cost">
		<span class="ticket-cost"><?php echo tribe_get_cost( null, true ); ?></span>
		<?php
		/** This action is documented in the-events-calendar/src/views/list/single-event.php */
		do_action( 'tribe_events_inside_cost' )
		?>
	</div>
<?php endif; ?>

<?php do_action( 'tribe_events_after_the_meta' ) ?>

<!-- Event Image -->
<?php echo tribe_event_featured_image( null, 'medium' ); ?>

<!-- Event Content -->
<?php do_action( 'tribe_events_before_the_content' ) ?>
<div class="tribe-events-list-event-description tribe-events-content description entry-summary">
	<?php echo wpautop(get_the_content()); ?>

	<!-- <div class="event-review"><a class="aside btn btn-alt" data-toggle="collapse" href="#review" role="button" aria-expanded="false" aria-controls="collapseExample">Review this event</a></div>

	<div class="collapse" id="review">
		<div class="card card-body">
			<?php /* echo do_shortcode('[gravityform id="4" title="false" description="false"]');*/ ?>
		</div>
	</div>	 -->
</div><!-- .tribe-events-list-event-description -->
<div class="row event-acf-meta">
	<div class="col-md-6">
		<?php echo acf_fetch_audience();?>
		<?php echo learning_outcomes();?>				
	</div>
	<div class="col-md-6">
		<?php echo vcu_examples();?>
		<?php echo outside_examples();?>
	</div>
	<!-- <div class="workshop-request">
		<a href="#workshopModal" data-toggle="modal" class="btn btn-alt">Request a workshop</a>				
	</div> -->
</div>

<?php
do_action( 'tribe_events_after_the_content' );
