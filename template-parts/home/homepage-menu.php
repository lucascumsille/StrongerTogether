
    <div class="container p-xl">
        <div class="menu-grid">
            <div class="right-column-menu">
                    <div class="title-container">
                        <h5 class="section-title text-center text-dark-yellow"> <?php the_field('h3_for_families_title'); ?> </h5>
                    </div>

                    <div class="d-flex flex-row flex-wrap flex-lg-row justify-content-center align-items-center">

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

            <div class="left-column-menu pt-5 pt-lg-0">
                <div class="title-container">
                    <h5 class="section-title text-center text-dark-green"> <?php the_field('h3_for_Parents'); ?> </h5>
                  </div>

                <div class="d-flex flex-columnn flex-wrap flex-lg-row justify-content-center align-items-center">

                    <a class="anchor-card-wrapper is--for-parents"  href="<?php echo get_post_type_archive_link( 'lookingafteryourself' ); ?>">
                        <div class="menu-card">
                            <div class="upper-menu-card bg-green">
                                <?php 
                                // Image
                                    $image = get_field('icon_page', 'lookingafteryourself');
                                    if( !empty( $image ) ): ?>
                                        <img class="menu-icon-homepage mx-auto" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="lower-menu-card"><p> <?php the_field( 'page_title', 'lookingafteryourself' ); ?> </p></div>
                        </div>
                    </a>

                    <a class="anchor-card-wrapper is--for-parents"  href="<?php echo get_post_type_archive_link( 'supportingyourkid' ); ?>">
                        <div class="menu-card">
                            <div class="upper-menu-card bg-green">
                                <?php 
                                // Image
                                    $image = get_field('icon_page', 'supportingyourkid');
                                    if( !empty( $image ) ): ?>
                                        <img class="menu-icon-homepage mx-auto" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="lower-menu-card"><p> <?php the_field( 'page_title', 'supportingyourkid' ); ?> </p></div>
                        </div>
                    </a>

                    <!-- Getting info from an Archive(custom Type) page -->
                    <a class="anchor-card-wrapper is--for-parents"  href="<?php echo get_post_type_archive_link( 'localnews' ); ?>">
                        <div class="menu-card">
                            <div class="upper-menu-card bg-green">
                                <?php 
                                // Image
                                    $image = get_field('icon_page', 'localnews');
                                    if( !empty( $image ) ): ?>
                                        <img class="menu-icon-homepage mx-auto" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="lower-menu-card"><p> <?php the_field( 'page_title', 'localnews' ); ?> </p></div>
                        </div>
                    </a>

                    <!-- Getting info from page -->
                    <a class="anchor-card-wrapper is--for-parents"  href="<?php echo get_page_link( 30 ); ?>">
                        <div class="menu-card">
                            <div class="upper-menu-card bg-green">
                                <?php 
                                // Image
                                    $image = get_field('icon_page', 30);
                                    if( !empty( $image ) ): ?>
                                        <img class="menu-icon-homepage mx-auto" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="lower-menu-card"><p> <?php echo get_the_title( 30 ); ?> </p></div>
                        </div>
                    </a>

                </div>

            </div>
        </div>
    </div>
                                    
    <?php


