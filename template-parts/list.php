<div class="container">
    <?php if( have_rows('facilities') ): ?>
                
        <?php while( have_rows('facilities') ): the_row(); ?>

            <div class="checklist-item-wrapper">

                <img class="check-icon" src="<?php echo get_field('check_for_location', 'option')['url']; ?>" >

                <span><?php the_sub_field('name_of_the_facility'); ?></span>

            </div>
            <?php endwhile; ?>
               
     <?php endif; ?>
</div>