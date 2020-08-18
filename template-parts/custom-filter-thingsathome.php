<?php
echo facetwp_display( 'facet', 'new_facet' )
?>


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