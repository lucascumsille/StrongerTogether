
<?php 
// Variable to get the post type name
$post_type = get_post_type( get_the_ID() );
 ?>

<style>
	.hero-wrapper {
		background-image:url('<?php echo esc_url(get_field('image_background_for_single_post_mobile', $post_type)['url']); ?>');
	}


	@media(min-width:992px) {
		.hero-wrapper {
		background-image:url('<?php echo esc_url(get_field('image_background_for_single_post_desktop', $post_type)['url']); ?>');
	}
}
</style>



<div class="hero-wrapper is--single">
	<div class="container mb-3 mb-lg-5">
		<a class="breadcrumb-button mr-auto" href="<?php echo get_post_type_archive_link( $post_type ); ?>">
			<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icons/arrow-back.svg" alt="">
			<span class="button-text"><?php echo the_field('page_title', $post_type ); ?></span>
		</a>
	</div> <!-- container mb-3 mb-lg-5 -->
	<div class="container gradient mx-auto text-center">

		<h1 class="heading text-center text-black">
			<?php echo the_title(); ?>
		</h1>

		<?php 
		if ( tribe_get_start_date(null, true, 'j') ==  tribe_get_end_date(null, true, 'j')) {
			$endDate = tribe_get_end_date(null, true, 'g:i a');
		} else {
			$endDate = tribe_get_end_date(null, true, 'jS F, g:i a');
		}
		?>

		<h2 class="event-subtitle text-black"> <?php echo tribe_get_start_date(null, true, 'jS F, g:i a'); ?> - <?php echo $endDate ?> </h2>


		
	</div> <!-- container gradient mx-auto text-center -->
</div> <!-- hero-wrapper is--single -->


