<footer class="footer text-center py-2">

    <div class="container footer-first-row">
        <div class="row">
            <div class="col-12 col-md-6 flex justify-content-center justify-content-md-start mb-4 mb-md-0 align-self-center">
                <img class="footer-logo" src="<?php echo get_field('stl_icon', 'option')['url']; ?>" alt="">
            </div>

            <div class="col-12 col-md-6 flex justify-content-center justify-content-md-end">
                    <?php 
                        $cta_sharing = get_field('cta_sharing_link', 'option');
                        if( !empty( $cta_sharing ) ): ?>

                    <div class="share-wrapper bg-lightest-green">
                        <img class="share-icon" src="<?php echo get_field('cta_sharing_icon', 'option')['url']; ?>" alt="">
                        <div class="share-content-wrapper">
                            <p class="share-title">What was it like enrolling at Kindy?</p>
                            <a class="button button-cta-green" href="<?php echo esc_url( $cta_sharing ); ?>">
                                <span class="button-text">Share your experience</span>
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icons/arrow-green.svg" alt="">
                            </a>
                        </div><!-- share-content-wrapper -->
                    </div> <!-- share-wrapper -->
                    <?php endif; ?>
            </div> <!-- col-12 col-md-6 flex -->

        </div> <!-- row -->
    </div> <!-- container footer-first-row -->

    <div class="container footer-second-row mx-lg-auto">
        <div class="row">

            <div class="col-12 col-sm-6 col-lg-3 text-left">
                <p class="footer-title">For Families</p>
                <div class="footer-page-wrapper">
                    <a class="footer-page-link" href="<?php echo get_post_type_archive_link( 'placestovisit' ); ?>"><?php the_field( 'page_title', 'placestovisit' ); ?></a>

                    <a class="footer-page-link" href="<?php echo get_post_type_archive_link( 'tribe_events' ); ?>"><?php the_field( 'page_title', 'tribe_events' ); ?></a>

                    <a class="footer-page-link" href="<?php echo get_post_type_archive_link( 'thingsathome' ); ?>"><?php the_field( 'page_title', 'thingsathome' ); ?></a>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 text-left">
                <p class="footer-title">For Parents</p>
                <div class="footer-page-wrapper">
                    <a class="footer-page-link" href="<?php echo get_post_type_archive_link( 'lookingafteryourself' ); ?>"><?php the_field( 'page_title', 'lookingafteryourself' ); ?></a>

                    <a class="footer-page-link" href="<?php echo get_post_type_archive_link( 'localnews' ); ?>"><?php the_field( 'page_title', 'localnews' ); ?></a>

                    <a class="footer-page-link" href="<?php echo get_post_type_archive_link( 'supportingyourkid' ); ?>"><?php the_field( 'page_title', 'supportingyourkid' ); ?></a>

                    <a class="footer-page-link" href="<?php echo get_page_link( 30 ); ?>"><?php echo get_the_title( 30 ); ?></a>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 text-left">
                <p class="footer-title">Stronger Together Logan</p>
                <div class="footer-page-wrapper">
                    <a class="footer-page-link" href="<?php echo get_page_link( 371 ); ?>"><?php echo get_the_title( 371 ); ?></a>
                    <a class="footer-page-link" href="<?php echo get_page_link( 374 ); ?>"><?php echo get_the_title( 374 ); ?></a>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 mx-auto media-footer-column">
				<div class="nav-mobile-social is--footer justify-content-start justify-content-sm-end">

                    <a href="<?php echo the_field('facebook_stl', 'option'); ?>" class="icon-round-wrapper bg-navy-blue"><img class="social-media-mobile" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icons/facebook footer.svg" alt=""></a>
    
                    <a href="<?php echo the_field('instagram_stl', 'option'); ?>" class="icon-round-wrapper bg-navy-blue"><img class="social-media-mobile" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icons/instagram footer.svg" alt=""></a>
    
                </div>
            </div>

        </div>


    </div>

    <div class="traditional-wrapper mb-5">
        <div class="container mt-5">
            <div class="traditionals-title-wrapper text-left">
                <span class="traditionals-title"><?php echo the_field('traditional_custodians_footer_title', 'option'); ?> </span>
                <img class="traditional-flag" src="<?php echo get_field('traditional_custodians_flag', 'option')['url']; ?>" alt="">
                <img class="traditional-flag" src="<?php echo get_field('traditional_custodians_flag_second', 'option')['url']; ?>" alt="">
            </div>
            <p class="traditional-info text-left"><?php echo the_field('traditional_custodians_footer_text', 'option'); ?></p>
        </div>
    </div>

    <div class="footer-third-row">
        <div class="container">
            <div class="row justify-content-between text-lg-right">
                <div class="col-12 col-lg-6 mb-4 mb-md-0 text-center text-lg-left">
                    <img class="footer-logan-logo" src="<?php echo get_field('lt_footer_icon', 'option')['url']; ?>" alt="">
                </div>

                <div class="col-12 col-lg-6 align-self-center">
                    <a class="footer-page-link" href="<?php echo get_permalink( get_page_by_path( 'privacy-policy' ) ); ?>">Privacy Policy</a>
                    <span class="copyright">©Copyright Logan Together 2020</span>
                </div>
            </div>
        </div>
    </div>

    <?php dynamic_sidebar('footer-1');?>

</footer>
    
   <!-- </div> -->

<?php
    wp_footer();
?>

    </body>
</html> 
