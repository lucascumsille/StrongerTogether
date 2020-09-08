
<?php 
// Variable to get the post type name
$post_type = get_post_type( get_the_ID() );

 ?>

<style>
	.hero-wrapper {
		background-image:url('<?php echo esc_url(get_field('background_image_mobile', $post_type)['url']); ?>');
	}


	@media(min-width:992px) {
		.hero-wrapper {
		background-image:url('<?php echo esc_url(get_field('background_image_desktop', $post_type)['url']); ?>');
	}
}
</style>

<div class="container-fluid hero-wrapper">
	
	<div class="page-title text-center gradient">
		<img class="hero-icon" src="<?php echo esc_url(get_field('icon_page', $post_type)['url']); ?>" alt="">
		<h1 class="heading text-black">
			<?php echo the_field('page_title', $post_type ); ?>
		</h1>
		<h2 class="hero-subtitle text-black">
			<?php echo the_field('subtitle_hero', $post_type ); ?>
		</h2>
	</div>
</div>


