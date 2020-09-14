<div class="container single-post-container py-lg-6 py-4">
    <?php $video = get_field('does_it_have_a_video');
    if( $video ): ?>
        <div class="single-post-container mx-auto">
             <?php the_content(); ?>
        </div>
    <?php else: ?>
        <div class="single-post-image-wrapper"> 
            <?php the_post_thumbnail( 'single-post'); ?>
        </div>
        <div class="single-post-container mx-auto">
             <?php the_content(); ?>
        </div>
    <?php endif; ?>

    
    <div class="button-wrapper-single">

        <?php $file = get_field('attachment');
        if( $file ): ?>
            <a class="button-download is--green" href="<?php echo $file['url']; ?>" download>
                <span class="button-text">Download</span>
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icons/download-green.svg" alt="">
            </a>
        <?php endif; ?>

        <?php $link = get_field('external_resource');
        if( $link ): ?>
            <a class="button-download is--green" href="<?php echo esc_url( $link ); ?>" target="_blank">
                <span class="button-text">Open the activity</span>
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icons/external-green.svg" alt="">
             </a>
        <?php endif; ?>

    </div>

</div>