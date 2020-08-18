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

	<div class="title-container mb-5">
        <h3 class="section-title text-center"><?php the_field('upcoming_events_title'); ?></h3>
    </div>
	<?php echo do_shortcode('[tribe_events view="photo" limit="3"]'); ?>
	<a class="button mx-auto" href="<?php echo get_post_type_archive_link( 'tribe_events' ); ?>">
            <span class="button-text"><?php the_field ('upcoming_events_button'); ?></span>
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/arrow-yellow.svg" alt="">
    </a>
</div>

<?php get_template_part('template-parts/home-places-to-visit'); ?>
<?php get_template_part('template-parts/home-news'); ?>


 <?php get_footer(); ?>
    

