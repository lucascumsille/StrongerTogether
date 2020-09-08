<?php 
// Variable to get the post type name
$post_type = get_post_type( get_the_ID() );
 ?>

<style>
	.hero-wrapper {
		background-image:url('<?php echo esc_url(get_field('background_image_mobile')['url']); ?>');
	}


	@media(min-width:992px) {
		.hero-wrapper {
		background-image:url('<?php echo esc_url(get_field('background_image_desktop')['url']); ?>');
		}
	}
</style>

<div class="hero-wrapper">
	
	<div class="page-title text-center gradient">
		<img class="hero-icon" src="<?php echo esc_url(get_field('icon_page')['url']); ?>" alt="">
		<h1 class="heading text-black">
			<?php if( get_field('page_title') ):
				echo the_field('page_title');

			else:
				echo the_title(); 
			endif; ?>
			<?php //echo the_field('page_title'); ?>
			
		</h1>
		<h2 class="hero-subtitle text-black">
			<?php echo the_field('subtitle_hero'); ?>
		</h2>
	</div>
</div>