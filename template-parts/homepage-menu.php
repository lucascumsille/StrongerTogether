

<?php
    // Get the ID of a given category
    $category_id_localNews = 5;
 
    // Get the URL of this category
    $category_link_localNews = get_category_link( $category_id_localNews );
    $category_name_localNews = get_cat_name( $category_id_localNews );


?>


    <div class="container pt-5">
        <div class="menu-grid">
            <div class="right-column-menu">
                    <div class="title-container">
                        <h3 class="section-title text-center text-dark-yellow"> <?php the_field('h3_for_families_title'); ?> </h3>
                    </div>

                    <div class="d-flex flex-columnn flex-wrap flex-lg-row justify-content-center align-items-center">

                        <a class="anchor-card-wrapper"  href="<?php echo get_post_type_archive_link( 'placestovisit' ); ?>">
                            <div class="menu-card">
                            <div class="upper-menu-card bg-yellow">
                                 <?php 
                                 // Image
                                    $image = get_field('icon_page', 'placestovisit');
                                    if( !empty( $image ) ): ?>
                                        <img class="menu-icon-homepage mx-auto" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                            </div>                       
                            <div class="lower-menu-card"><p>  <?php the_field( 'page_title', 'placestovisit' ); ?> </p></div>
                        </div>
                    </a>

                    <a class="anchor-card-wrapper" href="<?php echo get_post_type_archive_link( 'tribe_events' ); ?>">
                        <div class="menu-card">
                            <div class="upper-menu-card bg-yellow">
                                 <?php 
                                 // Image
                                    $image = get_field('icon_page', 'tribe_events');
                                    if( !empty( $image ) ): ?>
                                        <img class="menu-icon-homepage mx-auto" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="lower-menu-card"><p><?php the_field( 'page_title', 'tribe_events' ); ?></p></div>
                        </div>
                    </a>

                    <a href="<?php echo get_post_type_archive_link( 'thingsathome' ); ?>" class="anchor-card-wrapper" >
                        <div class="menu-card">
                            <div class="upper-menu-card bg-yellow">
                                <?php 
                                // Image
                                    $image = get_field('icon_page', 'thingsathome');
                                    if( !empty( $image ) ): ?>
                                        <img class="menu-icon-homepage mx-auto" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="lower-menu-card"><p><?php the_field( 'page_title', 'thingsathome' ); ?></p></div>
                        </div>
                    </a>

                </div>
            </div>

            <div class="left-column-menu">
                <div class="title-container">
                    <h3 class="section-title text-center text-dark-green"> <?php the_field('h3_for_Parents'); ?> </h3>
                  </div>

                <div class="d-flex flex-columnn flex-wrap flex-lg-row justify-content-center align-items-center">

                    <a class="anchor-card-wrapper is--for-parents"  href="<?php echo esc_url( $category_link_localNews ); ?>">
                        <div class="menu-card">
                            <div class="upper-menu-card bg-green"><img class="menu-icon-homepage mx-auto" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icons/events 1.svg"></div>
                            <div class="lower-menu-card"><p> <?php echo $category_name_localNews ?> </p></div>
                        </div>
                    </a>

                    <a class="anchor-card-wrapper is--for-parents" href="">
                        <div class="menu-card">
                            <div class="upper-menu-card bg-green"><img class="menu-icon-homepage mx-auto" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icons/events 1.svg"></div>
                            <div class="lower-menu-card"><p>Events</p></div>
                        </div>
                    </a>

                    <a href="" class="anchor-card-wrapper is--for-parents" >
                        <div class="menu-card">
                            <div class="upper-menu-card bg-green"><img class="menu-icon-homepage mx-auto" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icons/events 1.svg"></div>
                            <div class="lower-menu-card"><p>Places to Visit</p></div>
                        </div>
                    </a>

                    <a href="" class="anchor-card-wrapper is--for-parents" >
                        <div class="menu-card">
                            <div class="upper-menu-card bg-green"><img class="menu-icon-homepage mx-auto" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icons/events 1.svg"></div>
                            <div class="lower-menu-card"><p>Places to Visit</p></div>
                        </div>
                    </a>

                </div>

            </div>
        </div>
    </div>

