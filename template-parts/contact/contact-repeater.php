<div class="container-fluid py-4 py-lg-6 bg-green-gradient-local-support">
<!-- bg-lightest-green -->
    <div class="container  mb-3 mx-auto">
        <?php
        // Check rows exists.
        if( have_rows('contact_list') ): ?>
            <div class="contact-wrapper d-flex flex-column">
            
            <?php
            // Loop through rows.
            while( have_rows('contact_list') ) : the_row();

                // Load sub field value.
                $contact_title = get_sub_field('contact_method');
                $contact_icon = get_sub_field('contact_icon');
                $contact_url= get_sub_field('contact_url');
                $contact_url_display= get_sub_field('contact_url_display');
                ?>

                <a class="contact-repeater-item" href="<?php echo $contact_url ?>">
                    <img src="<?php echo esc_url($contact_icon['url']); ?>" alt="" class="contact-icon">
                    <span><?php echo $contact_title; ?>:</span>
                    <span><?php echo $contact_url_display; ?></span>
                </a>

            <?php // End loop.
            endwhile;

        // No value.
        else :
            // Do something...
        endif;
        ?>
        </div> <!--  contact-wrapper -->
    </div>
</div>
