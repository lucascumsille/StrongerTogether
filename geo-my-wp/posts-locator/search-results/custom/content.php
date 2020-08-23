<?php
/**
 * Posts locator "custom" search results template file.
 *
 * This file outputs the search results.
 *
 * You can modify this file to apply custom changes. However, it is not recomended
 * since your changes will be overwritten on the next update of the plugin.
 *
 * Instead you can copy-paste this template ( the "custom" folder contains this file
 * and the "css" folder ) into the theme's or child theme's folder of your site
 * and apply your changes from there.
 *
 * The template folder will need to be placed under:
 * your-theme's-or-child-theme's-folder/geo-my-wp/posts-locator/search-results/
 *
 * Once the template folder is in the theme's folder you will be able to select
 * it in the form editor. It will show in the "Search results" dropdown menu as "Custom: custom".
 *
 * @param $gmw  ( array ) the form being used
 *
 * @param $gmw_form ( object ) the form object
 *
 * @param $post ( object ) post object in the loop
 *
 * @package geo-my-wp
 */

?>
<!--  Main results wrapper - wraps the paginations, map and results -->
<div class="gmw-results-wrapper custom <?php echo esc_attr( $gmw['prefix'] ); ?>" data-id="<?php echo absint( $gmw['ID'] ); ?>" data-prefix="<?php echo esc_attr( $gmw['prefix'] ); ?>">

	<?php if ( $gmw_form->has_locations() ) : ?>

		<div class="gmw-results">

			<?php do_action( 'gmw_search_results_start', $gmw ); ?>

			<div class="gmw-results-count">
				<span><?php gmw_results_message( $gmw ); ?></span>
				<?php do_action( 'gmw_search_results_after_results_message', $gmw ); ?>
			</div>

			<?php do_action( 'gmw_before_top_pagination', $gmw ); ?>

			<div class="pagination-per-page-wrapper top gmw-pt-pagination-wrapper gmw-pt-top-pagination-wrapper">
				<?php gmw_per_page( $gmw ); ?>
				<?php gmw_pagination( $gmw ); ?>
			</div> 

			<?php gmw_results_map( $gmw ); ?>

			<div class="clear"></div>

			<?php do_action( 'gmw_search_results_before_loop', $gmw ); ?>

		<div class="flex-wrapper"> 

				<?php
				while ( $gmw_query->have_posts() ) :
					$gmw_query->the_post();
					?>

					<?php global $post; ?>

					<div id="single-post-<?php echo absint( $post->ID ); ?>" class="flex-item drop-shadow-wrapper mx-auto <?php echo esc_attr( $post->location_class ); ?>">
						<?php do_action( 'gmw_search_results_loop_item_start', $gmw, $post ); ?>

						<a class="carousel-anchor mx-auto" href="<?php the_permalink(); ?>">
						
							<div class="post-item-carousel box-shadow-carousel mx-auto">

								<div class="post-carousel-image mx-auto" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
								
								<div class="post-carousel-content">
									<h4 class="text-black"><?php the_title(); ?></h4>
									<?php gmw_search_results_distance( $post, $gmw ); ?>
									<div class="post-meta-carousel-info">
										<div class="tag-wrapper"> 
											<img class="tag-icon" src="<?php echo esc_url(get_field('category_icon', $category[0])['url']); ?>" > 

											<!-- Category -->
											<?php 
												$category = get_the_terms( $id, 'placestovisit_category' ); /* get First Category */
												$firstCategory = $category[0]; /* get category link */
												$category_link = get_category_link($firstCategory->term_id); /* echo category name */
											?>
											<span class="category-tag" style="color:<?php the_field('color_for_category', $category[0]); ?>"><?php  echo $firstCategory->name;  ?></span>

										</div> <!-- tag-wrapper -->
									</div> <!-- post-meta-carousel-info -->
								</div> <!-- post-carousel-content -->
							</div> <!-- post-item-carousel -->
						</a> <!-- carousel-anchor -->
					</div> <!-- flex-item -->


						<?php do_action( 'gmw_search_results_loop_item_end', $gmw, $post ); ?>

				<?php endwhile; ?>

		</div>	<!-- flex-wrapper -->		

			<?php do_action( 'gmw_search_results_after_loop', $gmw ); ?>

			<div class="pagination-per-page-wrapper bottom gmw-pt-pagination-wrapper gmw-pt-bottom-pagination-wrapper">
				<?php gmw_per_page( $gmw ); ?>
				<?php gmw_pagination( $gmw ); ?>
			</div>

		</div>

	<?php else : ?>

		<div class="gmw-no-results">

			<?php do_action( 'gmw_no_results_start', $gmw ); ?>

			<?php gmw_no_results_message( $gmw ); ?>

			<?php do_action( 'gmw_no_results_end', $gmw ); ?> 

		</div>

	<?php endif; ?>

</div> 
