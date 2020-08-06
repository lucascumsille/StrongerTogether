<div class="bg-light-yellow p-xl">
    <div class="container">

        <div class="title-container">
            <h3 class="section-title text-center text-dark-yellow"><?php the_field('slider_post_title'); ?></h3>
            <p><?php the_field('subtitle_slider'); ?></p>
        </div>
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
        <?php
        // the loop
        while ( $the_query->have_posts() ) : $the_query->the_post();
        ?>
            <div class="drop-shadow-wrapper">
                <a class="carousel-anchor" href="<?php the_permalink(); ?>">
                    <div class="post-item-carousel box-shadow">
                        <div class="post-carousel-image" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
                        <div class="post-carousel-content">
                            <h5 class="text-black"><?php the_title(); ?></h5>
                            <div class="post-meta-carousel-info justify-content-between">
                                <div class="tag-wrapper"> <img class="tag-icon" src="/assets/images/icons/events 1.svg" > <span>Educational</span> </div>
                                <span class="">Age Range</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php endwhile; ?>

        </div>
    </div>
    

    <?php
    // clean up after the query and pagination
    wp_reset_postdata();
    ?>
    <?php else: ?>
    <p>
    <?php _e( "Sorry, no posts matched your criteria." ); ?>
    </p>
    <?php endif; ?>
</div>


