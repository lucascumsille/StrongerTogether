<div class="container-fluid bg-yellow-gradient p-m">
    <div class="cta-wrapper mx-auto text-center">

        <img src="<?php echo get_field('cta_icon', 'option')['url']; ?>" alt="" class="mb-3">
        <h4><?php echo the_field('cta_supporting_text', 'option')?></h4>
        
        <div class="inline-flex mx-auto">
            <a href="" class="button right-icon mr-3"> 
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icons/facebook orange.svg" alt="">
                facebook
            </a>

            <a href="" class="button right-icon"> 
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icons/instagram orange.svg" alt="">
                Instagram
            </a>
        </div>

    </div>
</div>
