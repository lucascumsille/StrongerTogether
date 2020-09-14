

<div class="bg-for-parents">
	<div class="container py-4 py-lg-6">
		<div class="supporting-your-kids-filter-wrapper mb-4">
			<?php echo do_shortcode('[searchandfilter id="499"]'); ?>
		</div>

		

		<div id='localnews-results' class="pb-6">

		<div class="flex-wrapper">
			<?php 
				$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

				$args = array(  
					'post_type' => 'supportingyourkid',
					'paged' => $paged,
					//'post_status' => 'publish', 
					//'orderby' => 'date', 
					//'order' => 'ASC', 

				);
				$args['search_filter_id'] = 499;

				$loop = new WP_Query( $args ); 
			?>

			

				<?php while ( $loop->have_posts() ) : $loop->the_post();  ?>
						<article class="flex-item" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<?php get_template_part('template-parts/common/card-supporting-your-kids' ); ?>
						</article>

				<?php endwhile; ?>

			<?php wp_reset_postdata(); ?>


			<?php 
				// Pagination 
				$big = 999999999; 
				echo paginate_links( array(
					'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
					'format' => '?paged=%#%',
					'current' => max( 1, get_query_var('paged') ),
					'total' => $loop->max_num_pages
				) );
			?>

		</div>
	</div>

	</div>

</div>
