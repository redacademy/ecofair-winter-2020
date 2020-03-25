<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

	    	<header class="entry-header">

					
					<div class="top-image1" >
						<img class="left" src="<?php echo get_template_directory_uri(); ?>/build/assets/images/wavemobile1.png" alt="shore picture" />
					</div>
					
					<div class="title-content">
						<h4>About Us</h4>
					</div>

					<div class="top-image2" >
					  <img class="middle" src="<?php echo get_template_directory_uri(); ?>/build/assets/images/wavemobile2.png" alt="shore picture2" />
					</div>

					<div class="top-image3" >
					  <img class="right" src="<?php echo get_template_directory_uri(); ?>/build/assets/images/wavemobile3.png" alt="shore picture3" />
					</div>

				</header><!-- .entry-header -->

				<sectio class="page-content">
				
				  <div class="our-mission">
						<?php the_content(); ?>
					</div>
					
					<div class="our-values">
					
		        <div class="values-title">
			        <h2>Our Core Values </h2>
		        </div>

				    <div class="first-icon">
					    <img class="graph" src="<?php echo get_template_directory_uri(); ?>/build/assets/icons/everyaction.png" alt="energy icon" />
					    <h5>Every Action Matters</h5>
				    </div>

				    <div class="second-icon">
					    <img class="books" src="<?php echo get_template_directory_uri(); ?>/build/assets/icons/education.png" alt="energy icon" />
					    <h5>Education</h5>
				    </div>

				    <div class="third-icon">
					    <img class="hands" src="<?php echo get_template_directory_uri(); ?>/build/assets/icons/community.png" alt="energy icon" />
					    <h5>Community Caring</h5>
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
				
          </div>
				</section>
				
				<section class="founders">

					<div class="founders-content">
					
					  <?php if( have_rows('founder1') ):?>

						 <?php while( have_rows('founder1') ): the_row(); 

								// Get sub field values.
								$image1 = get_sub_field('image1');
								$name1 = get_sub_field('name1');
								$prosopography1 = get_sub_field('prosopography1');

								?>
								
								<div id="founder1">
										<div class="image">
												<img src="<?php echo esc_url( $image1 ); ?>" alt="" />
												<h2><?php the_sub_field('name1'); ?></h2>
										</div>

										<div class="content">
												<p><?php the_sub_field('prosopography1'); ?></p>
										</div>
								</div>
								
					  	<?php endwhile; ?>
						<?php endif; ?>


						<?php if( have_rows('founder2') ):?>

						 <?php while( have_rows('founder2') ): the_row(); 

								// Get sub field values.
								$image2 = get_sub_field('image2');
								$name2 = get_sub_field('name2');
								$prosopography2 = get_sub_field('prosopography2');

								?>
								
								<div id="founder2">
										<div class="image">
												<img src="<?php echo esc_url( $image2 ); ?>" alt="" />
												<h2><?php the_sub_field('name2'); ?></h2>
										</div>

										<div class="content">
												<p><?php the_sub_field('prosopography2'); ?></p>
										</div>
								</div>
								
					  	<?php endwhile; ?>
							
						<?php endif; ?>


						<?php if( have_rows('founder3') ):?>

						 <?php while( have_rows('founder3') ): the_row(); 

								// Get sub field values.
								$image3 = get_sub_field('image3');
								$name3 = get_sub_field('name3');
								$prosopography3 = get_sub_field('prosopography3');

								?>
								
								<div id="founder3">
										<div class="image">
												<img src="<?php echo esc_url( $image3 ); ?>" alt="" />
												<h2><?php the_sub_field('name3'); ?></h2>
										</div>

										<div class="content">
												<p><?php the_sub_field('prosopography3'); ?></p>
										</div>
								</div>
								
					  	<?php endwhile; ?>
							
						<?php endif; ?>

						

					</div>

				</section>
				
				
				
				<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
  </div><!-- #primary -->
	<?php get_footer(); ?>


