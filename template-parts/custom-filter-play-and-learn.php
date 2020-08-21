
<style>
	.facetwp-radio {
		background-image:url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/icons/Rectangle radio.svg') !important;
	}

	.facetwp-radio.checked {
		background-image:url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/icons/unchecked.svg') !important;
	}
</style>


<div class="container">

	<div class="row">
		<div class="col-12 col-lg-7">
			<div class="custom-tab">
				<a href="<?php echo get_post_type_archive_link( 'thingsathome' ); ?>" class="things-at-home-tab">
					<img src="" alt="">
					<span>Play And Learn Dont hard code me FIXXXX MEEEEE</span>
				</a>

			</div>
		</div>
		<div class="col-12 col-lg-5">

			<button class="filter-button" type='button' id='hideshow' value='hide/show'><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icons/filter.svg"> <span>Show all filters FIX MEE ADD "HIDE FILTERS"</span> </button>
		</div>
	</div>


	<div id="hidden-filters" class="hidden-height">

			<div class="row">
				<div class="col-12 col-lg-7"></div>
				<div class="col-12 col-lg-5">
					<h3>London</h3>
					<?php // echo facetwp_display( 'facet', 'play' ); ?>
					<?php echo do_shortcode('[searchandfilter id="445"]'); ?>
				</div>
			</div>

	</div>

</div>

<?php
$term = get_term(24);
echo $term->taxonomy;
echo get_term_link(20);
echo $term_name = get_term( 20 )->name;
?>


//* Remmber that in order to work we need the follwing contianer with the specif class or ID
<div id='things-at-home-results' class="">
<!-- get_template_part('template-parts/content', 'archive' ); -->


	<?php 
		$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

        $args = array(  
			'post_type' => 'thingsathome',
			'paged' => $paged,
            //'post_status' => 'publish', 
            //'orderby' => 'date', 
            //'order' => 'ASC', 
            'tax_query' => array(
                array(
                    'taxonomy' => 'thingsathome_category',
                    'field' => 'term_id',
                    'terms' => 20,
                )
            )
        );
        $args['search_filter_id'] = 445;

        $loop = new WP_Query( $args ); 
    ?>

	

		<?php while ( $loop->have_posts() ) : $loop->the_post();  ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php get_template_part('template-parts/content', 'things-at-home' ); ?>
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