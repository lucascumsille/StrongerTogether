<div class="container-fluid py-4 py-lg-6 text-left text-lg-center bg-lightest-green">

    <h3 class="text-black"> <?php echo the_field('get_help_check_list_title'); ?></h3>

    <p class="mb-lg-5"><?php echo the_field('get_help_check_list_subtitle'); ?></p>
   

    <div class="checklist-wrapper mb-3 mx-auto">
        <?php
        // Check rows exists.
        if( have_rows('get_help_check_list') ):

            // Loop through rows.
            while( have_rows('get_help_check_list') ) : the_row();

                // Load sub field value.
                $sub_value = get_sub_field('checklist_item'); ?>

                <p class="checklist is-green"><?php echo $sub_value; ?></p> 
            <?php // End loop.
            endwhile;

        // No value.
        else :
            // Do something...
        endif;
        ?>
    </div>
    <a class="button button-green mx-lg-auto" href="<?php the_field('get_help_check_list_button_link');?>">
            <span class="button-text"><?php the_field('get_help_check_list_button_text') ?></span>
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icons/arrow-green.svg" alt="">
    </a>
</div>
