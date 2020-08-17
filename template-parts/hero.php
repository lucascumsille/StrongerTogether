<?php 
$image = get_field('background_image_homepage');
?>
	<div class="main-wrapper p-xl hero-image" style="background-image:url('<?php echo esc_url($image['url']); ?>');">
	    <div class="container page-title  text-center gradient py-5">
			<h2 class="text-light mt-5"> <?php the_field('h2_title'); ?> </h2>
			<h1 class="heading"><?php the_field('h1_title'); ?></h1>
		</div>
	</div>
		<?php 

