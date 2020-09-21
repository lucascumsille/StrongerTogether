
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

<?php 
 $category = get_the_terms( $id, 'lookingafteryourself_category' );
 $firstCategory = $category[0];
$category_link = get_category_link($firstCategory->term_id);
$post_type = get_post_type( get_the_ID() );

?>

<div class="hero-wrapper is--single">
	<div class="container mb-3 mb-lg-5">
		<a class="breadcrumb-button mr-auto" href="<?php echo get_post_type_archive_link( $post_type ); ?>">
			<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icons/arrow-back.svg" alt="">
			<span class="button-text"><?php echo the_field('page_title', $post_type ); ?></span>
		</a>
	</div>
	<div class="container gradient mx-auto text-center">



		<h1 class="heading text-center text-black">
			<?php echo the_title(); ?>
		</h1>

		<div class="d-inline-flex mx-auto">
			<span class="hero-category text-left mr-4"><?php  echo $firstCategory->name;  ?>
			</span>
			<span class="hero-date"> <?php the_date(); ?></span>
			</div>
			
		</div>
	</div>
</div>


