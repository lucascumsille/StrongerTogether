
<?php 
	// Variable to get the post type name
	$post_type = get_post_type( get_the_ID() );

	$desktop_image = get_field('background_image_desktop', $post_type);
	$mobile_image = get_field('background_image_mobile', $post_type);
	$hero_icon = get_field('icon_page', $post_type);
	$title_hero = get_field('page_title', $post_type );
	$subtitle_hero = get_field('subtitle_hero', $post_type );

?>

<style>

	<?php if( !empty( $mobile_image ) ): ?>
		.hero-wrapper {
			background-image:url('<?php echo esc_url($desktop_image['url']); ?>');
		} 
		<?php else : ?>
			.hero-wrapper { background-color: #FFE8BC;}
	<?php endif; ?>

	@media(min-width:992px) {
		<?php if( !empty( $desktop_image ) ): ?>
			.hero-wrapper {
				background-image:url('<?php echo esc_url($desktop_image['url']); ?>');
			} 
			<?php else : ?>
				.hero-wrapper { background-color: #FFE8BC;}

		<?php endif; ?>
	}
</style>

<div class="container-fluid hero-wrapper">
	
	<div class="page-title text-center gradient">
		<img class="hero-icon" src="<?php echo esc_url($hero_icon['url']); ?>" alt="">

		<h1 class="heading text-black">
			<?php if( !empty( $title_hero ) ):
				echo $title_hero; 
				else: 
				echo the_title();
			endif; ?>
		</h1>

		<h2 class="hero-subtitle text-black">
		<?php if( !empty( $title_hero ) ):
				echo $subtitle_hero; 
				else: 

			endif; ?>
		</h2>

	</div> <!-- page-title text-center gradient -->
</div> <!-- container-fluid hero-wrapper -->


