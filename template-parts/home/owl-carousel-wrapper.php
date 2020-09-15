<div class="bg-light-yellow pt-6 pb-7 pb-lg-6">
    <div class="container-xl">

        <div class="title-container mb-3 mb-lg-5">
            <h3 class="section-title text-center"><?php the_field('slider_post_title'); ?></h3>
            <p class="mb-0"><?php the_field('subtitle_slider'); ?></p>
        </div>

<!-- * OWL CAROUSEL -->
        <?php
            // set the “paged” parameter (use ‘page’ if the query is on a static front page)
            $paged = ( get_query_var( "paged" ) ) ? get_query_var( "paged" ) : 1;
            $args = array(
                "post_type" => "thingsathome",
                "posts_per_page" => 5,
            );
            // the query
            $the_query = new WP_Query($args);
        ?>

        <div class="owl-carousel owl-post owl-theme">

            <?php if ( $the_query->have_posts() ) : ?>
            
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <?php get_template_part('template-parts/common/card-things-at-home' ); ?>
                <?php endwhile; ?>

                <?php else: ?>

                    <p> <?php _e( "Sorry, no posts matched your criteria." ); ?> </p>

            <?php endif; ?>

            <?php
            // clean up after the query and pagination and comes back to the original page
            // * if you try to retrieve info from other fields and they are not working most likely is because you forgot to put this line of code
            wp_reset_postdata();
            ?>

        </div> <!-- owl-carousel -->

        <a class="button mx-auto" href="<?php echo get_post_type_archive_link( 'thingsathome' ); ?>">
            <span class="button-text"><?php the_field ('post_slider_button_text'); ?></span>
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/arrow-yellow.svg" alt="">
        </a>

     </div> <!-- container-xl -->

</div>

