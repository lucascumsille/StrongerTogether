<div class="container-fluid py-4 py-lg-6 bg-green-gradient-local-support">
<!-- bg-lightest-green -->
    <div class="small-container mb-3 mx-auto">
        <?php
        // Check rows exists.
        if( have_rows('get_help_service') ):

            // Loop through rows.
            while( have_rows('get_help_service') ) : the_row();

                // Load sub field value.
                $service_title = get_sub_field('service_title');
                $service_subtitle = get_sub_field('service_description');    
                $service_opening_hours = get_sub_field('service_opening_hours');
                $service_button_text = get_sub_field('service_button_text');
                ?>

                <h3 clas="text-black pt-6"><?php echo $service_title; ?></h3>
                <p class=""><?php echo $service_subtitle ?></p>
                <a class="button right-icon services mb-3" href="<?php the_field('service_url');?>">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icons/phone-green.svg" alt="">
                <span class="button-text"><?php echo $service_button_text ?></span>
                
                </a> 
                <p class="hours-text"><?php echo $service_opening_hours ?></p>
            <?php // End loop.
            endwhile;

        // No value.
        else :
            // Do something...
        endif;
        ?>
    </div>
</div>
