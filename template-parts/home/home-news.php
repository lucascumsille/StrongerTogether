
<div class="p-xl">
    <div class="container-xl">

        <div class="title-container mb-4 mb-lg-5">
            <h3 class="section-title text-center"><?php the_field('latest_news_title'); ?></h3>
        </div>
        <?php
            // set the “paged” parameter (use ‘page’ if the query is on a static front page)
            $paged = ( get_query_var( "paged" ) ) ? get_query_var( "paged" ) : 1;
            $args = array(
                "post_type" => "localnews",
                "posts_per_page" => 5,
            );
            // the query
            $the_query = new WP_Query($args);
        ?>
        <div class="owl-carousel owl-post owl-theme owl-news mb-4">

        <?php if ( $the_query->have_posts() ) : ?>
        <?php
        // the loop
        while ( $the_query->have_posts() ) : $the_query->the_post();

        $category = get_the_terms( $id, 'localnews_category' );
        //get First Category
        $firstCategory = $category[0];
        //get category link
          $category_link = get_category_link($firstCategory->term_id);
          //echo category name
          // echo $firstCategory->name;
          

        ?>
            <div class="drop-shadow-wrapper mx-auto">
                <a class="carousel-anchor mx-auto" href="<?php the_permalink(); ?>">
                    <div class="post-item-carousel box-shadow-carousel mx-auto">
                        <div class="post-carousel-image mx-auto is--news-image" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
                        <div class="post-carousel-content is--news-content">
                            <h4 class="text-black"><?php the_title(); ?></h4>
                            <div class="post-meta-carousel-info">
                                <div class="tag-wrapper"> 
                                    <span class="category-tag" style="color:<?php the_field('color_for_category', $category[0]); ?>"><?php  echo $firstCategory->name;  ?></span>
                                 </div>
                                <span class="suitable-for-tag ml-auto"><?php echo get_the_date(); ?>  </span>
                            </div>
                            <span><?php echo get_the_excerpt() ?><span>
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

        <a class="button mx-auto" href="<?php echo get_post_type_archive_link( 'localnews' ); ?>">
            <span class="button-text"><?php the_field ('latest_news_button'); ?></span>
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/arrow-yellow.svg" alt="">
        </a>

    </div>
    


    <?php else: ?>
    <p>
    <?php _e( "Sorry, no posts matched your criteria." ); ?>
    </p>
    <?php endif; ?>
</div>