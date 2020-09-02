<div class="places-to-visit-wrapper py-5 py-lg-6">

    <div class="container medium-container">
        <div class="title-container mb-4 mb-lg-5">
            <h3 class="section-title text-center text-black"> <?php the_field('places_to_visit_title') ?></h3>
            <p><?php the_field('places_to_visit_subtitle') ?></p>
        </div>
    
        <div class="row mb-4 justify-content-center">
            <?php

                $args = array(
                            'taxonomy' => 'placestovisit_category',
                            'orderby' => 'name',
                            'order'   => 'ASC'
                        );

                $cats = get_terms($args);
                foreach($cats as $cat) {
    
                ?>
                <a href="<?php echo get_post_type_archive_link( 'placestovisit' ); ?>?category=<?php echo $cat->term_id ?>" class="places-item col-6 col-lg-3">
              
                    <img src="<?php echo esc_url(get_field('category_icon', $cat)['url']); ?>" alt="">
                    <p><?php echo $cat->name; ?></p>
                </a>
                <?php
                }
            ?>
    
        </div>

        <a class="button button-green mx-auto" href="<?php echo get_post_type_archive_link( 'placestovisit' ); ?>">
            <span class="button-text"><?php the_field('places_to_visit_button') ?></span>
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icons/arrow-green.svg" alt="">
        </a>
    </div>

</div>

