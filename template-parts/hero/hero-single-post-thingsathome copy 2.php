
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
 $category = get_the_terms( $id, 'thingsathome_category' );
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
			<span class="hero-category mr-5"><?php  echo $firstCategory->name;  ?></span> 
			<div class="suitable-wrapper">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icons/suitable-for.svg" alt="" class="mr-1">
				<span class="suitable-for-tag-hero">Suitable for </span>
				<span class="suitable-for-tag-hero ml-auto"> <?php $suitable = get_field('suitable_for');

				// Option Baby, 2-3 and 4-5 are selected
				if( $suitable && in_array('Baby', $suitable) and $suitable && in_array('2-3 years old', $suitable) and $suitable && in_array('4-5 years old', $suitable) ) {
					echo '0-5 year olds';
				} 
				// Option  2-3, 4-5 and 6-8 are selected
				else if ( $suitable && in_array('6-8 years old', $suitable) and $suitable && in_array('2-3 years old', $suitable) and $suitable && in_array('4-5 years old', $suitable) ) {
					echo '2-8 year olds';
				} 
				// Option Baby and 2-3 are selected
				else if  ( $suitable && in_array('Baby', $suitable) and $suitable && in_array('2-3 years old', $suitable) ){
					echo '0-3 year olds';
				} 
				// Option 2-3 and 4-5 are selected
				else if ( $suitable && in_array('4-5 years old', $suitable) and $suitable && in_array('2-3 years old', $suitable) ) {
					echo '2-5 year olds';
				} 
				// Option 4-5 and 6-8 are selected
				else if ( $suitable && in_array('4-5 years old', $suitable) and $suitable && in_array('6-8 years old', $suitable) ) {
					echo '4-8 year olds';
				} 
				// Only one option is selected
				else if ( $suitable && in_array('4-5 years old', $suitable) or $suitable && in_array('6-8 years old', $suitable) or $suitable && in_array('Baby', $suitable) or $suitable && in_array('2-3 years old', $suitable)) {
					the_field('suitable_for');
				} else  {
					echo 'Everyone';
				}
				?>  </span>
			</div>

		</div>
	</div>
</div>


