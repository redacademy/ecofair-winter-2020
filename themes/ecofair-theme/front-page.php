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
				
			<div class="block-container">
				<div class="sqr-light-green">
				</div>
			</div>

			<div class="block-container">
				<div class="sqr-dr-green">
				</div>
			</div>

			<div class="block-container">
				<div class="sqr-orange">
				</div>
			</div>
				
				<div class="front-banner-img-box">
					<img class="front-banner-img" src="<?php echo get_template_directory_uri(); ?>/build/assets/images/heroimage01.jpeg" alt="a tropical beach" />
				</div>
				
			</div> <!-- front-banner-grid -->
			<h1>Step Up 4 Earth</h1>

		</header>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
