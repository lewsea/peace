<?php
/**
 * Template Name: Contact Page Template
 **/
?>

<?php get_header(); ?>

	<main id="primary" class="site-main">
		<section class="wrapper contact-wrapper contact-page">
			<div class="container">
				<div class="contact-img">
					<img src="<?php echo get_template_directory_uri(); ?>/img/about.png" alt="">
				</div>
				<div class="contact-form-container">
					<h4>Hi I'm Bond, James Bond.</h4>
					<h4>Hire Me ! Plss lang lord</h4>
					<?php echo do_shortcode('[contact-form-7 id="28" title="Contact Form"]'); ?>
				</div>
			</div>
		</section>
	</main>

<?php
get_footer();