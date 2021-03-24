<?php

add_action('wp_ajax_nopriv_filter', 'filter_ajax');
add_action('wp_ajax_filter', 'filter_ajax');

function filter_ajax () {

    $category = $_POST['category'];

    $args = array (
        'post_type' => 'gallery',
        'post_per_page' => '-1',
        'order' => 'ASC'
    );

    if(isset($category)) {
        $args["category__in"] = array($category);
    }
    
    $query = new WP_Query($args);
    
    if($query->have_posts()) :
        while($query->have_posts()) : $query->the_post(); ?>

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

        <?php endwhile;
    endif;
    
    wp_reset_postdata();

    die();
}

?>