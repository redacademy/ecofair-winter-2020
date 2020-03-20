<?php
/**
 * The template for displaying community archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php if (!wp_is_mobile()) : ?>
			<?php
			    $args = array( 
				'post_type'       => 'page', 
				'posts_per_page'  => 1,
				'title'           => 'Community',
			    );
			    $community_page = get_posts( $args ); // returns an array of posts
			
			?>
			<div class='community-container'>
				<?php foreach ( $community_page as $post ) : setup_postdata( $post ); ?>
				<header class="page-header entry-content">		    
				    <div class="community-page-content">
					<?php the_content(); ?>
				    </div>
				    <div class="carousel-pagination">
					<div class="carousel-pagination-numbers"></div>
					<div class="carousel-pagination-buttons">
					    <div class="carousel-pagination-prev">
						<i class="fas fa-arrow-left"></i>
					    </div>
					    <div class="carousel-pagination-next">
						<i class="fas fa-arrow-right"></i>
					    </div>
					</div>
				    </div>
				</header><!-- .page-header -->
				<?php endforeach; wp_reset_postdata(); ?>     
			</div>
			<?php endif; ?>

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
