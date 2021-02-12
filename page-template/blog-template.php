<?php
/**
 * Template Name: Blog Page Template
 **/
?>

<?php get_header(); ?>

	<main id="primary" class="site-main">

        <?php get_template_part( 'template-parts/content', 'page' ) ?>

		<div class="blog-wrapper wrapper">
			<div class="container">
				<?php 
					$args = array (
						'post_type' => 'post',
						'posts_per_page' => 99,
					);
					$blogposts = new WP_Query($args);
					while ($blogposts->have_posts()) {
						$blogposts->the_post();
					?>
					<div class="blog-block">
						<img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="<?php the_title(); ?>" class="blog-img">
						<div class="blog-info">
							<?php echo the_category(); ?>
							<a href="<?php the_permalink()?>">
								<h2 class="blog-tag"><?php echo wp_trim_words(get_the_title(), 4); ?></h2>
							</a>
							<div class="entry-meta">
								<p>Posted on <span><?php the_time('F jS, Y'); ?></span> by <?php the_author_posts_link(); ?> </p>
							</div>
							<p class=""><?php echo wp_trim_words(get_the_excerpt(), 24);?></p>
							<a href="<?php the_permalink()?>" class="read-more" >Read More <i class="fa fa-angle-right"></i></a>
						</div>
					</div>
				<?php } wp_reset_query(); ?>
			</div>
		</div>
	</main>

<?php
get_footer();