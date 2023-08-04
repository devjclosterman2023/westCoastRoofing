<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="container">
				<div class="child">
					<img src="/wp-content/uploads/2023/08/Group-89.png" alt="">
			    </div>
				<div class="child">
				520-241-2556 | 3311 N Chapel Ave, Tucson, AZ 85716 | Tucson ROC # ROC235353 | Phoenix ROC # ROC322316
				</div>
					<nav id="footer-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
			</nav>
				<div class="child padding-bottom">
				<i class="fa fa-copyright" aria-hidden="true">2022 West Coast Roofing</i>
				</div>
			</div>
		
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
