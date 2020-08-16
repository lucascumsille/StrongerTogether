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

        $category = get_the_terms( $id, 'thingsathome_category' );
        //get First Category
        $firstCategory = $category[0];
        //get category link
          $category_link = get_category_link($firstCategory->term_id);
          //echo category name
          // echo $firstCategory->name;
          

        ?>
            <div class="drop-shadow-wrapper mx-auto">
                <a class="carousel-anchor mx-auto" href="<?php the_permalink(); ?>">
                    <div class="post-item-carousel box-shadow">
                        <div class="post-carousel-image mx-auto" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
                        <div class="post-carousel-content">
                            <h5 class="text-black"><?php the_title(); ?></h5>
                            <div class="post-meta-carousel-info justify-content-between">
                                <div class="tag-wrapper"> 
                                    <img class="tag-icon" src="<?php echo esc_url(get_field('category_icon', $category[0])['url']); ?>" > 
                                    <span style="color:<?php the_field('color_for_category', $category[0]); ?>"><?php  echo $firstCategory->name;  ?></span> </div>
                                <span class=""> <?php the_field('suitable_for') ?>  </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php endwhile; ?>

        <?php
        // clean up after the query and pagination and comes back to the original page
        // ! if you try to retrieve info from other fields and they are not working most likely is because you forgot to put this line of code
        wp_reset_postdata();
        ?>

        </div>

        <a class="button mx-auto" href="">
            <span class="button-text"><?php the_field ('post_slider_button_text'); ?></span>
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/arrow-yellow.svg" alt="">
        </a>

    </div>
    


    <?php else: ?>
    <p>
    <?php _e( "Sorry, no posts matched your criteria." ); ?>
    </p>
    <?php endif; ?>
</div>

