

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

<div class="container-fluid hero-wrapper">
	    <div class="container page-title  text-center gradient py-5">
			<h2 class="text-light mt-5"> <?php the_field('h2_title'); ?> </h2>
			<h1 class="heading"><?php the_field('h1_title'); ?></h1>
		</div>
</div>


	
