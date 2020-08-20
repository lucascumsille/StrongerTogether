
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
				<a href="" class="things-at-home-tab">
					<img src="" alt="">
				</a>

			</div>
		</div>
		<div class="col-12 col-lg-5">
			<?php // echo facetwp_display( 'facet', 'thingsathome_suitable_for' ); ?>
			<button class="filter-button" type='button' id='hideshow' value='hide/show'><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icons/filter.svg"> <span>Show all filters</span> </button>
		</div>
	</div>


	<div id="hidden-filters" class="hidden-height">

			<div class="row">
				<div class="col-12 col-lg-7"></div>
				<div class="col-12 col-lg-5">
					<h3>London</h3>
					<?php // echo facetwp_display( 'facet', 'play' ); ?>
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

<?php echo do_shortcode('[searchandfilter id="445"]'); ?>

<div id='things-at-home-results' class="facetwp-template">
<!-- get_template_part('template-parts/content', 'archive' ); -->

<?php

	if ( have_posts() ) :
	
		while ( have_posts() ) :
			the_post();
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php get_template_part('template-parts/content', 'things-at-home' ); ?>
			</article>
			<?php
		endwhile;
	endif;

?>

<div class="nav-previous alignlef pagination"><?php previous_posts_link( 'Older posts' ); ?></div>
<div class="nav-next alignright pagination"><?php next_posts_link( 'Newer posts' ); ?></div>

</div>