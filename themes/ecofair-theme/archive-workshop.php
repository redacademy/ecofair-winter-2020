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
			<header class="page-header">
			    <h1 class="archive-title">
				<?php //the_archive_title();?>
			    </h1>
			</header><!-- .page-header -->
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="workshop-order-number">
			    <p>1</p>
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
			</div><!-- .entry-content -->
			<a class="volunteer-button" href="#">Volunteer</a>
			</article><!-- #post-## -->

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
