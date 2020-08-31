<div class="container single-post-container py-lg-6 py-4">
    <?php the_content(); ?>
    <div class="button-wrapper-single">

        <?php $file = get_field('attachment');
        if( $file ): ?>
            <a class="button-download" href="<?php echo $file['url']; ?>" download>
                <span class="button-text">Download</span>
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icons/download-orange.svg" alt="">
            </a>
        <?php endif; ?>

        <?php $link = get_field('external_resource');
        if( $link ): ?>
            <a class="button-download" href="<?php echo esc_url( $link ); ?>" target="_blank">
                <span class="button-text">Open the activity</span>
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icons/external-orange.svg" alt="">
             </a>
        <?php endif; ?>

    </div>

</div>