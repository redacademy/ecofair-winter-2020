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
			<p>We are positive-minded, result-driven, and community-caring.</p>
			<p class="event-description"><?php the_field('event_description'); ?></p>

		</header>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
