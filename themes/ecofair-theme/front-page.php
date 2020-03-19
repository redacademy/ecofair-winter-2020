<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<header>
			<div class="front-banner-grid">
				
				<div class="sqr-light-green">
				</div>

				<div class="sqr-dr-green">
				</div>

				<div class="sqr-orange">
				</div>

				<img class="front-banner-img" src="<?php echo get_template_directory_uri(); ?>/build/assets/images/heroimage01.jpeg" alt="a tropical beach" />
				
			</div> <!-- front-banner-grid -->

			<h1>Step Up 4 Earth</h1>
			<h2 class="event-title"><?php the_field('name_of_event'); ?></h2>
			<p class="location"><?php the_field('location_of_event'); ?></p>
			<p class="date-time"><?php the_field('day_of_event');?>, <?php the_field('time_of_event'); ?></p>

			<h3>Our Mission</h3>
			<h4>We are positive-minded, result-driven, and community-caring.</h4>
			<p class="event-description"><?php the_field('event_description'); ?></p>

			<?php
				if ( ! is_active_sidebar( 'event-features' ) ) {
				return; }
			?>

		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'event-features' ); ?>
		</div><!-- #secondary -->

		<section class="priorities">

			<h3>Our Priorities</h3>
			<h4>Create an impact you can be proud of.</h4>
			<p>We work to meet this goal by focusing on these important areas of conservation.</p>


				<div class="priority-energy">
					<img class="energy-icon" src="<?php echo get_template_directory_uri(); ?>/build/assets/icons/Energy.png" alt="energy icon" />
					<h5>Energy Efficiencies</h5>
				</div>

				<div class="priority-transport">
					<img class="transport-icon" src="<?php echo get_template_directory_uri(); ?>/build/assets/icons/Transport.png" alt="energy icon" />
					<h5>Transport</h5>
				</div>

				<div class="priority-7rs">
					<img class="rs-icon" src="<?php echo get_template_directory_uri(); ?>/build/assets/icons/7Rs.png" alt="energy icon" />
					<h5>7 Rs</h5>
				</div>
				
			</section>		

		</header>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
