<?php /* Template Name: Sports and Exercise */ ?>

<?php
    get_header();
	// ! change this get_template_part('template-parts/hero-custom-post-type');
	// get_template_part('template-parts/custom-filter-play-and-learn');

?>

    <?php 
        $args = array(  
            'post_type' => 'thingsathome',
            'post_status' => 'publish',
            'posts_per_page' => 8, 
            'orderby' => 'title', 
            'order' => 'ASC', 
            'tax_query' => array(
                array(
                    'taxonomy' => 'thingsathome_category',
                    'field' => 'term_id',
                    'terms' => 21,
                )
            )
        );

        $loop = new WP_Query( $args ); 
            
        while ( $loop->have_posts() ) : $loop->the_post();  ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php get_template_part('template-parts/content', 'things-at-home' ); ?>
            </article>

        <?php
        endwhile;

        wp_reset_postdata();
    ?>


<?php 	get_footer();  ?>