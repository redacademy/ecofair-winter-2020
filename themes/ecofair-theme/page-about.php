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
						<img class="left" src="<?php echo get_template_directory_uri(); ?>/build/assets/images/image1.png" alt="shore picture" />
					</div>
					
					<div class="title-content">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</div>

					<div class="top-image2" >
					  <img class="middle" src="<?php echo get_template_directory_uri(); ?>/build/assets/images/image2.png" alt="shore picture2" />
					</div>

					<div class="top-image3" >
					  <img class="right" src="<?php echo get_template_directory_uri(); ?>/build/assets/images/image3.png" alt="shore picture3" />
					</div>

				</header><!-- .entry-header -->

				<sectio class="page-content">

					<?php the_content(); ?>
					
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
				
				<section class="founders-content">

					<div class= >
					
						 <?php while( have_rows('founder1') ): the_row(); 

								// Get sub field values.
								$image1 = get_sub_field('image1');

								?>
								
								<div id="founder1">
										<div class="image">
												<img src="<?php echo esc_url( $image1 ); ?>" alt="" />
										</div>

										<div class="content">
												<h2><?php the_sub_field('name1'); ?></h2>
												<p><?php the_sub_field('prosopography1'); ?></p>
										</div>
								</div>

							
								<div id="founder2">
										<div class="image">
												<img src="<?php echo esc_url( $image2 ); ?>" alt="" />
										</div>

										<div class="content">
												<h2><?php the_sub_field('name2'); ?></h2>
												<p><?php the_sub_field('prosopography2'); ?></p>
										</div>
								</div>
								
					  	<?php endwhile; ?>
					</div>

				</section>
				
				
				
				<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
  </div><!-- #primary -->


