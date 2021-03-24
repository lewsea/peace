<?php
/**
 * Template Name: Gallery Page Template
 **/
?>

<?php get_header(); ?>

	<main id="primary" class="site-main">

        <?php get_template_part( 'template-parts/content', 'page' ) ?>

        <div class="filter-wrapper">
            <ul class="filter-gallery">
                <li>
                    <a class="filter-gallery-item" href="">All</a>
                </li>
            <?php
                $cat_args = array(
                    'exclude' => array(1),
                    'option_all' => 'All' 
                );

                $categories = get_categories($cat_args);

                foreach($categories as $cat) : ?>
                    <li>
                        <a class="filter-gallery-item" data-category="<?php echo $cat->term_id?>" href="<?php echo get_category_link($cat->term_id); ?>"><?php echo $cat->name ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

		<div class="container">
			<div class="wrapper masonry-grid gallery filter-galleries">
				<?php 
				$args = array (
					'post_type' => 'gallery',
					'posts_per_page' => 0,
				);
				$imgs = new WP_Query($args);
				while ($imgs->have_posts()) {
					$imgs->the_post();
				?>
				<div class="masonry-grid-img" href="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>">
					<img class="gallery-item" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="<?php the_title(); ?>">
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