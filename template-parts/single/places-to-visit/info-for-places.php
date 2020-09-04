<div class="container pt-4 pb-5 places-to-visit-container">

    <div class="single-post-image-wrapper"><?php the_post_thumbnail( 'single-post'); ?></div>

    <div class="placestovisit-grid mx-auto">

        <div class="left-column">

           <h4 class="title-single-post-body">Access</h4>

            <?php // CLOCK
                if( have_rows('opening_hours') ): // Check rows exists
                    // Loop through rows.
                    while( have_rows('opening_hours') ) : the_row();
                    // Variables
                    $sub_day = get_sub_field('opening_days');
                    $sub_hour = get_sub_field('opening_hours'); ?>

                    <p class="single-info-item clock-icon"><?php echo $sub_day ?>: <?php echo $sub_hour ?></p>
                    
                    <?php endwhile; // End loop.
                // No value.
                else :
                    // Do something...
                endif; ?>
            
            
            <?php // LOCATION
            echo do_shortcode('[gmw_single_location object="post" elements="address"]'); 
            ?>

            <!-- Detailed Directions -->

            <?php if( get_field('detailed_directions') ): ?>
                <p class="detailed-directions"><?php echo the_field('detailed_directions'); ?></p>
            <?php endif; ?>

            <!-- Parking -->

            <?php if( get_field('car_parking') ): ?>
                <p class="single-info-item parking-icon">Car parking available</p>
            <?php endif; ?>

            <!-- WheelChair -->

            <?php if( get_field('wheelchair_accessible') ): ?>
                <p class="single-info-item wheelchair-icon">Wheelchair accessible</p>
            <?php endif; ?>

        </div> <!-- right-column -->

        <div class="right-column">

            <h4 class="title-single-post-body">Facilities</h4>
            <div class="facility-list">
                <?php // FACILITIES LIST
                    if( have_rows('facilities') ): // Check rows exists
                        // Loop through rows.
                        while( have_rows('facilities') ) : the_row();
                        // Variables
                            $facility_item = get_sub_field('name_of_the_facility'); ?>

                            <p class="single-info-item tick-icon"><?php echo $facility_item ?></p>

                        <?php endwhile; // End loop.
                    // No value.
                    else :
                endif; ?>
            </div><!-- facility-list -->
        </div> <!-- left-column -->

    </div> <!-- placestovisit-grid -->
</div> <!-- container pt-4 pb-7 places-to-visit-container -->


