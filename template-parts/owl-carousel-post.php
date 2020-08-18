<div class="bg-light-yellow p-xl">
    <div class="container-xl">

        <div class="title-container mb-5">
            <h3 class="section-title text-center"><?php the_field('slider_post_title'); ?></h3>
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
                    <div class="post-item-carousel box-shadow-carousel mx-auto">
                        <div class="post-carousel-image mx-auto" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
                        <div class="post-carousel-content">
                            <h4 class="text-black"><?php the_title(); ?></h4>
                            <div class="post-meta-carousel-info">
                                <div class="tag-wrapper"> 
                                    <img class="tag-icon" src="<?php echo esc_url(get_field('category_icon', $category[0])['url']); ?>" > 
                                    <span class="category-tag" style="color:<?php the_field('color_for_category', $category[0]); ?>"><?php  echo $firstCategory->name;  ?></span> </div>
                                <span class="suitable-for-tag ml-auto"> <?php $suitable = get_field('suitable_for');

                                    // Option Baby, 2-3 and 4-5 are selected
                                    if( $suitable && in_array('Baby', $suitable) and $suitable && in_array('2-3 years old', $suitable) and $suitable && in_array('4-5 years old', $suitable) ) {
                                        echo '< 5 years old';
                                    } 
                                    // Option  2-3, 4-5 and 6-8 are selected
                                    else if ( $suitable && in_array('6-8 years old', $suitable) and $suitable && in_array('2-3 years old', $suitable) and $suitable && in_array('4-5 years old', $suitable) ) {
                                        echo '2-8 years old';
                                    } 
                                    // Option Baby and 2-3 are selected
                                    else if  ( $suitable && in_array('Baby', $suitable) and $suitable && in_array('2-3 years old', $suitable) ){
                                        echo '< 3 years old';
                                    } 
                                    // Option 2-3 and 4-5 are selected
                                    else if ( $suitable && in_array('4-5 years old', $suitable) and $suitable && in_array('2-3 years old', $suitable) ) {
                                        echo '2-5 years old';
                                    } 
                                    // Option 4-5 and 6-8 are selected
                                    else if ( $suitable && in_array('4-5 years old', $suitable) and $suitable && in_array('6-8 years old', $suitable) ) {
                                        echo '4-8 years old';
                                    } 
                                    // Only one option is selected
                                    else if ( $suitable && in_array('4-5 years old', $suitable) or $suitable && in_array('6-8 years old', $suitable) or $suitable && in_array('Baby', $suitable) or $suitable && in_array('2-3 years old', $suitable)) {
                                        the_field('suitable_for');
                                    } else  {
                                        echo 'Everyone';
                                    }
                                    ?>  </span>

<!-- This one hasn't worked--> 
                                    <span> 
                                        <?php $suitabledd = get_posts(array(
                                            'meta_query' => array(
                                                array(
                                                    'key'     => 'suitable_for',
                                                    'value'   => '"Baby"',
                                                    'compare' => 'LIKE'
                                                )
                                            )
                                        ));

                                        if( $suitabledd ) {
                                            echo 'This works';
                                        }?> 
                                    </span>
<!-- -->
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

