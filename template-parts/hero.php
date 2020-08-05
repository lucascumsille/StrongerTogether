<?php 
$image = get_field('hero_background');
?>
	<div class="main-wrapper p-xl" style="background-image:url('<?php echo esc_url($image['url']); ?>');">
	    <div class="container page-title  text-center gradient py-5">
			<h1 class="heading"><?php the_field('h1_title'); ?></h1>
			<p class="text-light mt-5"> <?php the_field('subtitle'); ?> </p>
		</div>
	</div>
		<?php 

