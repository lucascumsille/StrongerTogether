<div class="bg-light-yellow p-xl">
    <div class="container-xl">

        <div class="title-container mb-4 mb-lg-5">
            <h3 class="section-title text-center"><?php the_field('related_resources_title'); ?></h3>
        </div>

<!-- * OWL CAROUSEL -->


        <div class="owl-carousel owl-post owl-theme">

        <?php
        $featured_posts = get_field('related_resources');
        if( $featured_posts ): ?>
                    <?php //get_template_part('template-parts/common/card-things-at-home' ); ?>
            <?php foreach( $featured_posts as $featured_post ): 
                $permalink = get_permalink( $featured_post->ID );
                $title = get_the_title( $featured_post->ID );

                $category_carousel=get_the_terms($featured_post->ID, 'thingsathome_category')[0];
                $test = get_category_link($category_carousel->term_id);

                $thumbnail = get_the_post_thumbnail_url( $featured_post->ID );
                $suitable = get_field( 'suitable_for', $featured_post->ID );
                $custom_field = get_field( 'field_name', $featured_post->ID );
                ?>

                <div class="drop-shadow-wrapper mx-auto">
                    <a class="carousel-anchor mx-auto" href="<?php $permalink; ?>">
                        <div class="post-item-carousel box-shadow-carousel mx-auto">
                            <div class="post-carousel-image is--big mx-auto" style="background-image:url('<?php echo $thumbnail ?>');">
                            

                            <!-- VideoPlay Conditional -->
                            <?php if ( get_field('does_it_have_a_video') == true) { ?> 
                                <img class="video-play-icon" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icons/video-play.svg" alt="">
                            <?php } ?> 
                            <!-- -->
                            </div>
                            <div class="post-carousel-content">
                                <h4 class="text-black"><?php echo $title ?></h4>
                                <div class="post-meta-carousel-info">
                                    <div class="tag-wrapper"> 
                                        <img class="tag-icon" src="<?php echo esc_url(get_field('category_icon', $category_carousel)['url']); ?>" > 
                                        <span class="category-tag" style="color:<?php the_field('color_for_category', $category_carousel); ?>"><?php  echo $category_carousel->name;  ?></span> 

                                        <span class="suitable-for-tag ml-auto"> <?php 

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
                                            echo $suitable[0];
                                        } else  {
                                            echo 'Everyone';
                                        }
                                        ?>  </span>
                                    
                                    </div>
                                    

                                </div>
                            </div>
                        </div>
                    </a>
                </div>




            <?php endforeach; ?>
           
        <?php endif; ?>

            <?php
            // clean up after the query and pagination and comes back to the original page
            // * if you try to retrieve info from other fields and they are not working most likely is because you forgot to put this line of code
            wp_reset_postdata();
            ?>

        </div> <!-- owl-carousel -->

     </div> <!-- container-xl -->

</div>

