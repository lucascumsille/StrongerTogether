
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
				<button class="tablinks" onclick="openCity(event, 'London')">London</button>
				<button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
			</div>
		</div>
		<div class="col-12 col-lg-5">
			<?php echo facetwp_display( 'facet', 'thingsathome_suitable_for' ); ?>
			<button class="filter-button" type='button' id='hideshow' value='hide/show'><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icons/filter.svg"> <span>Show all filters</span> </button>
		</div>
	</div>



	<div id="hidden-filters" class="hidden-height">

			<div class="row">
				<div class="col-12 col-lg-7"></div>
				<div class="col-12 col-lg-5">
					<h3>London</h3>
					<?php echo facetwp_display( 'facet', 'play' ); ?>
				</div>
			</div>

	</div>

</div>

<?php
$term = get_term( 24);
echo $term->taxonomy;
echo get_term_link(20);
echo $term_name = get_term( 20 )->name;
?>



<div class="facetwp-template">
<!-- get_template_part('template-parts/content', 'archive' ); -->

<?php
$args = array(
	'post_type' => 'thingsathome',
	'tax_query' => array(
		array(
		'taxonomy' => 'thingsathome_category',
		'field' => 'term_id',
		'terms' => 20
		 )
	  )
	);
	$query = new WP_Query( $args );
	

	$arr_posts = new WP_Query( $args );
	
	if ( $arr_posts->have_posts() ) :
	
		while ( $arr_posts->have_posts() ) :
			$arr_posts->the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php get_template_part('template-parts/content', 'archive' ); ?>
			</article>
			<?php
		endwhile;
	endif;

?>

</div>