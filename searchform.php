<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	<!-- <label class="sr-only" for="s"><?php esc_html_e( 'Search'); ?></label> -->
	<div class="input-group">
		<input class="field form-control" id="s" name="s" type="text"
			placeholder="<?php esc_attr_e( 'Search &hellip;'); ?>" value="<?php the_search_query(); ?>">
		<button class="submit" id="searchsubmit" name="submit" type="submit"
		value="<?php esc_attr_e( 'Search'); ?>">
		<i class="fa fa-search"></i>
		</button>
	</div>
</form>
