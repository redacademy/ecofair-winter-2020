<?php
/**
 * The template for displaying workshop archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
			<?php if (!wp_is_mobile()) : ?>
			<?php
			    $args = array( 
				'post_type'       => 'page', 
				'posts_per_page'  => 1,
				'title'           => 'Workshops',
				'order'           => 'DESC',
			    );
			    $workshop_page = get_posts( $args ); // returns an array of posts
			
			?>
			<div class='workshops-container'>
				<?php foreach ( $workshop_page as $post ) : setup_postdata( $post ); ?>
				<header class="page-header entry-content">		    
				    <div class="workshop-page-content">
					<?php the_content(); ?>
				    </div>
				</header><!-- .page-header -->
				<?php endforeach; wp_reset_postdata(); ?>     
			</div>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<!-- Start the variables for carousel ids and counter -->
			<?php 
			    $workshop_carousel_links = array(); 
			    $counter = 0;
			?>
			<div class="carousel" data-flickity='{"hash": true}'>
			<?php while ( have_posts() ) : the_post(); ?>
			<!-- Execute the counter -->
			<?php 
			    $counter = $counter + 1;
			?>
			<!-- Start the carousel cell -->
			<div class="carousel-cell" id="<?php echo 'carousel-cell' . $counter; ?>">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="workshop-order-number">
			<p><?php echo $counter ;?></p>
			</div>
			<div class="workshop-title-image" style="background-image: url(<?php echo get_field("title_image") ?>)">
			</div>
			<header class="entry-header">
			    <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			</header><!-- .entry-header -->
			<div class="workshop-secondary-image" style="background-image: url(<?php echo get_field("secondary_image") ?>)">
			</div>
			<div class="carrousell-pagination">
			</div>
			<div class="entry-content">
			    <?php the_excerpt(); ?>
			    <a class="volunteer-button" href="#">Volunteer</a>
			</div><!-- .entry-content -->
			<div class="light-green-box"></div>
			<div class="dark-green-box"></div>
			<div class="orange-green-box"></div>
			<div class="green-line"></div>
			</article><!-- #post-## -->
			</div>
			<?php array_push($workshop_carousel_links, '#carousel-cell'.$counter); ?>
			<?php endwhile; ?>
			</div>
			<!-- Create the links for the carousel -->
			<div class="carrousell-pagination">
			<?php 
			    foreach($workshop_carousel_links as $carousel_id) :
			?>
			<a href="<?php echo $carousel_id; ?>"><?php echo substr($carousel_id, -1); ?></a>
			<?php endforeach; ?>
			</div>
    

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
