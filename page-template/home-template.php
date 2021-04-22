<?php
/**
 * Template Name: Home Page Template
 **/
?>

<?php get_header(); ?>

	<main id="primary" class="site-main">
		<a href="#top"id="scroll-top-button"></a>
		<div class="home-hero-banner">
			 <div class="container">
				 <h1>Peace</h1>
				 <p>Photography Portfolio Theme</p>
				 <a href="<?php echo site_url('/gallery'); ?>">Check Portfolio</a>
			 </div>
		</div>

		<section class="wrapper about-wrapper">
			<div class="about-container container flex-space-center">
				<div class="about-img">
					<img src="<?php echo get_template_directory_uri(); ?>/img/about.png" alt="">
					<div class="about-img-desc">
						<p>Photographer</p>
						<p>Age: 20</p>
					</div>
				</div>
				<div class="about-desc">
					<h2>Hello, I’m John, I am a photographer based in Manila.</h2>
					<p>Charming non extraordinary exercitation artisanal Muji Nordic. Exercitation consectetur boulevard bulletin, smart intricate cupidatat ANA vibrant. Delightful Airbus A380 dolore pintxos destination.</p>
					<a href="<?php echo site_url('/about'); ?>">MORE ABOUT ME  <i class="fa fa-angle-right"></i></a>
				</div>
			</div>
		</section>

		<section class="wrapper work-wrapper">
			<div class="container">
				<h3>CLIENTS & WORK</h3>
				<p>John Dough’ s client Lufthansa Scandinavian K-pop sophisticated Toto Ettinger, tote bag conversation lovely handsome intricate pintxos Tsutaya. Scandinavian cutting-edge handsome conversation tote bag  concierge boulevard.</p>
				<div class="clients-logo">
					<div class="client-logo">
                        <a href="http://serene.luisgudmalin.online">
						    <img src="<?php echo get_template_directory_uri(); ?>/img/serene.png" alt="">
                        </a>
					</div>
					<div class="client-logo">
                        <a href="http://calm.luisgudmalin.online">
						    <img src="<?php echo get_template_directory_uri(); ?>/img/calm.png" alt="">
                        </a>
					</div>
					<div class="client-logo">
                        <a href="http://peace.luisgudmalin.online/">
						    <img src="<?php echo get_template_directory_uri(); ?>/img/peace.png" alt="">
                        </a>
					</div>
					<div class="client-logo">
                        <a href="http://tranquil.luisgudmalin.online/">
						    <img src="<?php echo get_template_directory_uri(); ?>/img/tranquil.png" alt="">
                        </a>
					</div>
				</div>
				<div class="wrapper home-grid">
					<div class="home-grid-img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/v2.png" alt="">
						<div class="home-grid-desc">
							<p>Peace</p>
							<span>Categories, Tags</span>
						</div>
					</div>
					<div class="home-grid-img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/v1.png" alt="">
						<div class="home-grid-desc">
							<p>Peace</p>
							<span>Categories, Tags</span>
						</div>
					</div>
					<div class="home-grid-img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/v3.png" alt="">
						<div class="home-grid-desc">
							<p>Peace</p>
							<span>Categories, Tags</span>
						</div>
					</div>
					<div class="home-grid-img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/4.png" alt="">
						<div class="home-grid-desc">
							<p>Peace</p>
							<span>Categories, Tags</span>
						</div>
					</div>
					<div class="home-grid-img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/5.png" alt="">
						<div class="home-grid-desc">
							<p>Peace</p>
							<span>Categories, Tags</span>
						</div>
					</div>
					<div class="home-grid-img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/6.png" alt="">
						<div class="home-grid-desc">
							<p>Peace</p>
							<span>Categories, Tags</span>
						</div>
					</div>
					<div class="home-grid-img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/7.png" alt="">
						<div class="home-grid-desc">
							<p>Peace</p>
							<span>Categories, Tags</span>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<div class="wrapper testimonial-wrapper">
			<div class="container">
				<h4>“ Thank you so much for your help. You've saved our business! John has completely surpassed our expectations. ”</h4>
				<span>- Elwood K.</span>
				<p>CEO of Serene Theme, New York, Tanzania</p>
			</div>
		</div>
		
		<section class="wrapper view-all-wrapper">
			<div class="view-all">
				<img src="<?php echo get_template_directory_uri(); ?>/img/1.png" alt="">
				<img src="<?php echo get_template_directory_uri(); ?>/img/v2.png" alt="">
				<img src="<?php echo get_template_directory_uri(); ?>/img/v3.png" alt="">
				<img src="<?php echo get_template_directory_uri(); ?>/img/v4.png" alt="">
			</div>
			<div class="view-all-btn">
				<a href="<?php echo esc_url( home_url( '/gallery' ) ); ?>" class="view-btn" >View all my projects</a>
			</div>
		</section>

		<section class="wrapper contact-wrapper">
			<div class="container">
				<h4>Ready for your next photo shoot? Contact me and Let’s get started !  </h4>
				<?php echo do_shortcode('[contact-form-7 id="28" title="Contact Form"]'); ?>
			</div>
		</section>

	</main>

<?php
get_footer();
