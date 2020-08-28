<?php 
/**
 * Posts locator Ajax "default" single result template file.
 *
 * This file outputs each result of the list of results.
 *
 * This file can be overridden by copying the entire "default" folder with all its files into
 *
 * your-theme's-or-child-theme's-folder/geo-my-wp/posts-locator/ajax-forms/search-results/
 *
 * @param $gmw  ( array ) the form being used
 * @param $post ( object ) post object in the loop
 */
?>	

<?php 
	$category = get_the_terms( $id, 'placestovisit_category' ); /* get First Category */
	$firstCategory = $category[0]; /* get category link */
	$category_link = get_category_link($firstCategory->term_id); /* echo category name */
?>
<div id="single-post-<?php echo absint( $post->ID ); ?>" class="flex-item drop-shadow-wrapper mx-auto <?php echo esc_attr( $post->location_class ); ?>">
	<?php do_action( 'gmw_search_results_loop_item_start', $gmw, $post ); ?>

	<a class="carousel-anchor mx-auto" href="<?php the_permalink(); ?>">
	
		<div class="post-item-carousel box-shadow-carousel mx-auto">

			<div class="post-carousel-image mx-auto" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
			
			<div class="post-carousel-content">
				<h4 class="text-black"><?php the_title(); ?></h4>
				<span><?php echo gmw_search_results_distance( $post, $gmw ); ?></span>
				<?php echo do_shortcode( '[gmw_single_location object="post" elements="title,distance,map,address,directions_link"]' ) ?>
				<div class="post-meta-carousel-info">
					<div class="tag-wrapper"> 

						<!-- Category -->

						<span class="category-tag" style="color:<?php the_field('color_for_category', $category[0]); ?>"><?php  echo $firstCategory->name;  ?></span>

					</div> <!-- tag-wrapper -->
				</div> <!-- post-meta-carousel-info -->
			</div> <!-- post-carousel-content -->
		</div> <!-- post-item-carousel -->
	</a> <!-- carousel-anchor -->
</div> <!-- flex-item -->