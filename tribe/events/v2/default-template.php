<?php
/**
 * View: Default Template for Events
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/v2/default-template.php
 *
 * See more documentation about our views templating system.
 *
 * @link {INSERT_ARTCILE_LINK_HERE}
 *
 * @version 5.0.0
 */

use Tribe\Events\Views\V2\Template_Bootstrap;

get_header();
get_template_part('template-parts/hero/hero', 'custom-post-type' );
?>

<div class="container is--event-page">
<?php  echo tribe( Template_Bootstrap::class )->get_view_html(); ?>
</div>

<?php
get_footer();
?>