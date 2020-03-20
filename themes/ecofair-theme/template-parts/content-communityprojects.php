<?php
/**
 * Template part for displaying community with no owner content in page.php.
 *
 * @package RED_Starter_Theme
 */

?>

<!-- Start the carousel cell -->
<div class="carousel-cell" id="<?php echo 'carousel-cell' . $counter; ?>">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="community-order-number">
	    <p><?php echo $counter ;?></p>
	</div>
	<div class="community-first-image" style="background-image: url(<?php echo get_field("first_image") ?>)">
	</div>
	<header class="entry-header">
	    <?php the_title( sprintf( '<h2 class="entry-title">', esc_url( get_permalink() ) ), '</h2>' ); ?>
	</header><!-- .entry-header -->
	<div class="community-owner">
	    <h3><?php echo get_field("owner"); ?></h3>
	</div>
	<div class="community-secondary-image" style="background-image: url(<?php echo get_field("secondary_image") ?>)">
	</div>
	<!-- If is not mobile, hide pagination -->
	<?php if ( wp_is_mobile() ) : ?>
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
	<?php endif; ?>
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
<?php array_push($carousel_links, '#carousel-cell'.$counter); ?>


