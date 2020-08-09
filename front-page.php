<?php
    get_header();
?>

<?php
	get_header();
	get_template_part('template-parts/hero');
	get_template_part('template-parts/homepage-menu');
	get_template_part('template-parts/owl-carousel-post');
	
?>

<div class="container p-xl event-home-page">

	<div class="title-container">
        <h3 class="section-title text-center text-dark-yellow"><?php the_field('event_component_title'); ?></h3>
    </div>
	<?php echo do_shortcode('[tribe_events view="photo"]'); ?>
</div>

		<article class="content px-3 py-5 p-md-5">

		<?php
			while( have_posts() ){
				the_post();
				the_content();
			}
		?>

	    </article>

    <?php
        get_footer(); 
    ?>
    

