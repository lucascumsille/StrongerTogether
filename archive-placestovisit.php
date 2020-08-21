<?php get_header(); ?>

<div class="container">
    <?php 
    echo do_shortcode( '[gmw search_form="1"]' );
    echo do_shortcode( '[gmw search_results="1"]' );
    ?>
</div>

<?php get_footer(); ?>