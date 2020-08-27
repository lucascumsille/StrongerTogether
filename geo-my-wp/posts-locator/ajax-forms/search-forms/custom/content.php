<?php
/**
 * This file outputs the search form.
 *
 * This file can be overridden by copying it to
 *
 * your-theme's-or-child-theme's-folder/geo-my-wp/posts-locator/ajax-forms/search-forms/
 *
 * @see
 *
 * @param $gmw ( array ) the form being useds.
 *
 * @package gmw-ajax-forms
 */

?>
<?php do_action( 'gmw_before_search_form', $gmw ); ?>

<?php // do not remove the $action_data variable. ?>
<form class="gmw-form" <?php echo $action_data; // WPCS: XSS ok. ?>>

	<?php do_action( 'gmw_search_form_start', $gmw ); ?>

	<?php //gmw_search_form_address_field( $gmw ); ?>

	<?php gmw_search_form_locator_button( $gmw ); ?>

	<?php do_action( 'gmw_search_form_filters', $gmw ); ?>

	<?php gmw_search_form_post_types( $gmw ); ?>

	<!-- Categories-->
	<div class="inline-flex">

		<?php gmw_search_form_address_field( $gmw ); ?>


		<?php gmw_search_form_taxonomies( $gmw ); ?>	

	</div>

		

	<?php do_action( 'gmw_search_form_before_distance', $gmw ); ?>

	<?php gmw_search_form_radius( $gmw ); ?>

	<?php gmw_search_form_units( $gmw ); ?>

	<?php do_action( 'gmw_search_form_before_submit', $gmw ); ?>

	<?php// gmw_search_form_submit_button( $gmw ); ?>

	<?php do_action( 'gmw_search_form_end', $gmw ); ?>

</form>

<?php do_action( 'gmw_after_search_form', $gmw ); ?>
