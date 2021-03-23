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
						<?php 
						$args = array (
							'post_type' => 'post',
							'posts_per_page' => 2,
						);
						$blogposts = new WP_Query($args);
						while ($blogposts->have_posts()) {
							$blogposts->the_post();
						?>

						<div class="footer-menu-blog-item">
							<div class="blog-item-img">
								<a href="<?php the_permalink()?>">
									<img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="<?php the_title(); ?>">
								</a>
							</div>
							<div class="blog-item-desc">
								<p><a href="<?php the_permalink()?>"><?php echo wp_trim_words(get_the_title(), 4); ?></a></p>
								<span><?php the_time('F jS, Y'); ?></span>
							</div>
						</div>
						<?php } wp_reset_query(); ?>
					</div>
				</div>
			</div>
			<div class="footer-menu-block">
				<h4>INSTAGRAM</h4>
				<div class="footer-menu-content">
					<div class="footer-menu-ig">
						<!-- <?php echo do_shortcode('[insta-gallery id="1"]'); ?> -->
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
