

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

<div class="hero-wrapper py-6 pt-lg-8 pb-lg-9">
	    <div class="container page-title  text-center gradient">
			<h2 class="text-light"> <?php the_field('h2_title'); ?> </h2>
			<h1 class="heading mb-0"><?php the_field('h1_title'); ?></h1>
		</div>
</div>


	
