<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				
				<div class="footer-container">
					<?php wp_nav_menu();?>
				  <div class="widget-area">
					<?php dynamic_sidebar('footer_sidebar'); ?>
				  </div><!-- .widget-area -->
				</div><!-- .footer-container -->

				<p class="rights-reserved" >© 2020 STEP UP 4 EARTH, ALL RIGHTS RESERVED.</p>
			</footer><!-- .site-footer -->

		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
