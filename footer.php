<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Peace
 */

?>	
	<section class="footer-menu wrapper">
		<div class="container">
			<div class="footer-menu-block">
				<h4>ABOUT US</h4>
				<div class="footer-menu-content">
					<p class="footer-desc">Peace is a Wordpress Theme for showcasing your photography portfolio giving your works a simple and clean look.</p>
				</div>
			</div>
			<div class="footer-menu-block">
				<h4>BLOGS</h4>
				<div class="footer-menu-content">
					<div class="footer-menu-blog">
						<div class="footer-menu-blog-item">
							<div class="blog-item-img">
								<img src="<?php echo get_template_directory_uri(); ?>/img/b1.png" alt="">
							</div>
							<div class="blog-item-desc">
								<p><a href="">Keeping the focus</a> </p>
								<span>July 14, 2021</span>
							</div>
						</div>
						<div class="footer-menu-blog-item">
							<div class="blog-item-img">
								<img src="<?php echo get_template_directory_uri(); ?>/img/b2.png" alt="">
							</div>
							<div class="blog-item-desc">
								<p><a href="">Portrait Minimalist</a> </p>
								<span>Oct 26, 2021</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-menu-block">
				<h4>INSTAGRAM</h4>
				<div class="footer-menu-content">
					<div class="footer-menu-ig">
						<img src="<?php echo get_template_directory_uri(); ?>/img/v1.png" alt="">
						<img src="<?php echo get_template_directory_uri(); ?>/img/v2.png" alt="">
						<img src="<?php echo get_template_directory_uri(); ?>/img/v3.png" alt="">
						<img src="<?php echo get_template_directory_uri(); ?>/img/v4.png" alt="">
						<img src="<?php echo get_template_directory_uri(); ?>/img/v4.png" alt="">
						<img src="<?php echo get_template_directory_uri(); ?>/img/v3.png" alt="">
						<img src="<?php echo get_template_directory_uri(); ?>/img/v2.png" alt="">
						<img src="<?php echo get_template_directory_uri(); ?>/img/v1.png" alt="">
					</div>
				</div>
			</div>
			<div class="footer-menu-block">
				<h4>SEARCH</h4>
				<div class="footer-menu-content">
					<?php get_search_form(); ?>
				</div>
			</div>
		</div>
	</section>
	<footer id="colophon" class="site-footer">
		<div class="container flex-space-center">
			<p class="footer-copy">&copy; <?php echo date('Y'); ?> <strong><a href="">Peace Theme</a></strong>.</p>
			<div class="site-info">
				<a href="mailto:hello@peace.com">
					<i class="fa fa-envelope"></i> hello@peace.com
					<!-- <i class="fa fa-envelope-o"></i> hello@peace.com -->
				</a>
				<p>
					<i class="fa fa-location-arrow"></i> 1440 Marulas. Valenzuela City
				</p>
				<a href="tel: (123) 456-7890">
					<i class="fa fa-phone"></i> (123) 456-7890
					<!-- <i class="fa fa-phone-alt"></i> (123) 456-7890 -->
				</a>
			</div>
			<div class="social-icons-container">
				<p>Follow me on:</p>
				<div class="social-icons">
					<a href="#"><i class="fa fa-behance"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-pinterest-p"></i></a>
				</div>
			</div>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>