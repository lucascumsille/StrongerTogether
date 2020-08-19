
<div class="container">


<button class="filter-button" type='button' id='hideshow' value='hide/show'><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icons/filter.svg"> <span>Show all filters</span> </button>
<div id="hidden-filters" class="hidden">
	<?php
		echo facetwp_display( 'facet', 'play' );
	?>
</div>


</div>




<div class="facetwp-template">
	<?php
		if ( have_posts() ) : while( have_posts() ){
	?>
		<?php
			the_post();
			// this function will look for a file called 'content-article' in the template-parts forlder
			get_template_part('template-parts/content', 'archive' );
		?>

	<?php
		} endif;
	?>
</div>