<?php
/**
 * Template Name: Gallery Page Template
 **/
?>

<?php get_header(); ?>

	<main id="primary" class="site-main">

        <?php get_template_part( 'template-parts/content', 'page' ) ?>

		<div class="container">
			<div class="wrapper masonry-grid">
				<?php 
				$args = array (
					'post_type' => 'gallery',
					'posts_per_page' => 0,
				);
				$imgs = new WP_Query($args);
				while ($imgs->have_posts()) {
					$imgs->the_post();
				?>
				<div class="masonry-grid-img">
					<img class="" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="<?php the_title(); ?>">
					<div class="masonry-grid-desc">
						<p class="title" ><?php the_title(); ?></p>
						<div class="taxonomy">
							<span class="cats"><?php echo the_category(); ?></span> 
							| <span class="tags"><?php echo the_tags('', ', ', ''); ?></span>
						</div>
					</div>
				</div>
				<?php } wp_reset_query(); ?>
			</div>
		</div>
	</main>

<?php
get_footer();