<footer class="footer text-center py-2">

    <div class="container footer-first-row">
        <div class="row">
            <div class="col-12 col-md-6 flex justify-content-center justify-content-md-start mb-4 mb-md-0 align-self-center">
                <img class="footer-logo" src="<?php echo get_field('stl_icon', 'option')['url']; ?>" alt="">
            </div>

            <div class="col-12 col-md-6 flex justify-content-center justify-content-md-end">
                <div class="share-wrapper bg-lightest-green">
                    <img class="share-icon" src="<?php echo get_field('cta_sharing_icon', 'option')['url']; ?>" alt="">
                    <div class="share-content-wrapper">
                        <p class="share-title">What was it like enrolling at Kindy?</p>
                        <a class="button button-cta-green" href="">
                            <span class="button-text">Share your experience</span>
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icons/arrow-green.svg" alt="">
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container footer-second-row">
        <div class="row">

            <div class="col-12 col-sm-6 col-lg-3 text-center text-sm-left">
                <p class="footer-title">For Families</p>
                <div class="footer-page-wrapper">
                    <a class="footer-page-link" href="">Places to Visit</a>
                    <a class="footer-page-link" href="">Events</a>
                    <a class="footer-page-link" href="">Things at home</a>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 text-center text-sm-left">
                <p class="footer-title">For Families</p>
                <div class="footer-page-wrapper">
                    <a class="footer-page-link" href="">Places to Visit</a>
                    <a class="footer-page-link" href="">Events</a>
                    <a class="footer-page-link" href="">Things at home</a>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 text-center text-sm-left">
                <p class="footer-title">For Families</p>
                <div class="footer-page-wrapper">
                    <a class="footer-page-link" href="">Places to Visit</a>
                    <a class="footer-page-link" href="">Events</a>
                    <a class="footer-page-link" href="">Things at home</a>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 mx-auto media-footer-column">
				<div class="nav-mobile-social justify-content-center justify-content-sm-end">

                    <a href="<?php echo the_field('facebook_stl', 'option'); ?>" class="icon-round-wrapper bg-navy-blue"><img class="social-media-mobile" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icons/facebook footer.svg" alt=""></a>
    
                    <a href="<?php echo the_field('instagram_stl', 'option'); ?>" class="icon-round-wrapper bg-navy-blue"><img class="social-media-mobile" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icons/instagram footer.svg" alt=""></a>
    
                </div>
            </div>

        </div>


    </div>

    <div class="container-fluid traditional-wrapper mb-5">
        <div class="container mt-5">
            <div class="traditionals-title-wrapper">
                <span class="traditionals-title"><?php echo the_field('traditional_custodians_footer_title', 'option'); ?> </span>
                <img class="traditional-flag" src="<?php echo get_field('traditional_custodians_flag', 'option')['url']; ?>" alt="">
                <img class="traditional-flag" src="<?php echo get_field('traditional_custodians_flag_second', 'option')['url']; ?>" alt="">
            </div>
            <p class="traditional-info text-center text-lg-left"><?php echo the_field('traditional_custodians_footer_text', 'option'); ?></p>
        </div>
    </div>

    <div class="container-fluid footer-third-row">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-6 mb-4 mb-md-0 text-center text-lg-left">
                    <img class="footer-logan-logo" src="<?php echo get_field('lt_footer_icon', 'option')['url']; ?>" alt="">
                </div>

                <div class="col-12 col-lg-6 text-right align-self-center">
                    <a class="footer-page-link" href="">Places to Visit</a>
                    <span class="copyright">©Copyright Logan Together 2020</span>
                </div>
            </div>
        </div>
    </div>



    <?php dynamic_sidebar('footer-1');?>

</footer>
    
   </div>

<?php
    wp_footer();
?>

    </body>
</html> 
