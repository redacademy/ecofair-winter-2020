<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<header class="front-page-header">
			<div class="front-banner-grid">
				
				<div class="sqr-light-green">
				</div>

				<div class="sqr-dr-green">
				</div>

				<div class="sqr-orange">
				</div>

				<div class="front-banner-img"></div>

				<!-- <img class="front-banner-img" src="<?php echo get_template_directory_uri(); ?>/build/assets/images/heroimage01.jpeg" alt="a tropical beach" /> -->
				
			</div> <!-- front-banner-grid -->
		</header>

		<section class="event-info">
			<h1 class="site-title-heading">Step Up 4 Earth</h1>
			<h2 class="event-title"><?php the_field('name_of_event'); ?></h2>

			<div class="event-info-li"></div>

			<p class="location"><?php the_field('location_of_event'); ?></p>
			<p class="date-time"><?php the_field('day_of_event');?>, <?php the_field('time_of_event'); ?></p>
		</section>

			<div class="hero-img-2"></div>

		<section class="mission-statement">

			<div class="mission-text">
				<h2>Our Mission</h2>
				<h4>We are positive-minded, result-driven, and community-caring.</h4>
				<p class="event-description"><?php the_field('event_description'); ?></p>
			<div class="mission-text">

		</section>
	
			<div class="three-col-img-grid">

				<div class="lions-gate-img"></div>
				<div class="false-creek-img"></div>

			</div> <!-- 3-col-img-grid -->

			<?php
				if ( ! is_active_sidebar( 'event-features' ) ) {
				return; }
			?>

			<section class="event-feature-widget">

				<div id="secondary" class="widget-area" role="complementary">
					<?php dynamic_sidebar( 'event-features' ); ?>
				</div><!-- #secondary -->
			
			</section>

			<div class="three-col-img-grid-drone">

				<div class="drone-img-1"></div>
				<div class="drone-img-2"></div>

			</div> <!-- 3-col-img-grid -->

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

				<div class="volunteer-button">
					<a class="volunteer-button-text" href="#">
						<p>Volunteer</p>
					</a>
				</div>

				<div class="donate-button">
					<a class="donate-button-text" href="#">
						<p>Donate</p>
					</a>
				</div>
				
		</section>		

			<div class="hero-img-bkgd"></div>

			<?php 
			$posts = get_field('sponsors_relationship');

			if ($posts): ?>

		<section class="carousel">

			<div class="sponsor-title">
			<h3>Our Partners</h3>
			<h4><?php the_field('sponsor_section_title'); ?></h4>	
			</div>

				<?php foreach($posts as $post): setup_postdata($post); ?>

				<div class="speakers-carousel-cell">
				<?php if( get_field('sponsor_logo') ): ?>	
					<div class="speaker-img" style="background: url(<?php  echo the_field('sponsor_logo'); ?>); background-size: cover; background-position: center;"> 
					</div>
					<p class="sponsor-name"><?php the_field('sponsor_name');?></p>
					<p><?php  the_field('sponsor_specialty');?></p>
				<?php endif; ?>
				</div>
				<?php endforeach; ?>
	

				<?php wp_reset_postdata(); ?>
				<?php endif; ?>			
			<!-- </div> .speaker-carousel -->
	
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
