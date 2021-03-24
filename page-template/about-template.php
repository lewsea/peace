<?php
/**
 * Template Name: About Page Template
 **/
?>

<?php get_header(); ?>

	<main id="primary" class="site-main">
		<section class="wrapper about-wrapper">
			<div class="about-container container flex-space-center">
				<div class="about-img">
					<img src="<?php echo get_template_directory_uri(); ?>/img/9.jpg" alt="">
					<div class="about-img-desc">
						<p>Photographer</p>
						<p>Age: 20</p>
					</div>
				</div>
				<div class="about-desc-about">
					<h2>Hello, I’m John, I am a photographer based in Manila.</h2>
					<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi quaerat obcaecati nostrum sunt dicta? Repellat, impedit qui! Debitis, eligendi? Inventore provident amet eos sequi nihil voluptate ipsam, unde necessitatibus pariatur cumque debitis asperiores sed eaque maxime ducimus ea harum quis soluta quo similique reiciendis? Explicabo eum architecto exercitationem est velit? Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, ullam.</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis, dolorem recusandae? Assumenda, ab magni? Vero, praesentium delectus! Natus quo eos aperiam aspernatur obcaecati, totam voluptatibus neque, dolores vel voluptas dolorum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, ipsa.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi illo similique placeat, voluptatem consectetur id. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, amet.</p>
				</div>
			</div>
            <div class="about-desc-more">
                <div class="desc-block">
                    <h4>Inspiration</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas amet ad ut aliquid perspiciatis esse repudiandae nulla odit at eius temporibus hic id dolorem molestiae, excepturi corporis quaerat voluptatibus quidem ab officia maiores? Esse a, commodi unde at illum quis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, quis.</p>
                </div>
                <div class="desc-block">
                    <h4>Inspiration</h4>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas amet ad ut aliquid perspiciatis esse repudiandae nulla odit at eius temporibus hic id dolorem molestiae, excepturi corporis quaerat voluptatibus quidem ab officia maiores? Esse a, commodi unde at illum quis?</p>
                </div>
                <div class="desc-block">
                    <h4>Contact</h4>
                    <div class="contact-block">
                        <a href="mailto:hello@peace.com">hello@peace.com</a>
                        <a href="tel: (123) 456-7890">(123) 456-7890</a>
                    </div>
                    <ul>
                        <li><a href="">Behance</a></li>
                        <li><a href="">Instagram</a></li>
                        <li><a href="">LinkedIn</a></li>
                        <li><a href="">Pinterest</a></li>
                    </ul>
                </div>
            </div>
		</section>
	</main>

<?php
get_footer();