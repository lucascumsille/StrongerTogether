
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

		<div id="London" class="tabcontent">
			<div class="row">
				<div class="col-12 col-lg-7"></div>
				<div class="col-12 col-lg-5">
					<h3>London</h3>
					<?php echo facetwp_display( 'facet', 'play' ); ?>
				</div>
			</div>

		</div>

		<div id="Paris" class="tabcontent">
			<h3>Paris</h3>
			<?php echo facetwp_display( 'facet', 'sports_and_exercise' ); ?>
		</div>
		
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