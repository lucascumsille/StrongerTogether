<?php
    get_header();
	get_template_part('template-parts/hero/hero-static-page-icon');
?>
	<div class="container py-4 is--privacy">
		<?php echo the_content(); ?>
	</div>
	
<?php
	get_footer(); 
?>