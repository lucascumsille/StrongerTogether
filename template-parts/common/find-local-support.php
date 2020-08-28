<div class="container-fluid bg-green-gradient-local-support p-m">
    <div class="cta-wrapper is--find-local mx-auto text-center">

        <img src="<?php echo get_field('cta_find_icon', 'option')['url']; ?>" alt="" class="mb-3">
        <h4>
            <?php echo the_field('cta_find_supporting_text', 'option')?>
        </h4>
        <p>
            <?php echo the_field('cta_find_subtitle_text', 'option')?>
        </p>
        
        <a class="button button-green mx-auto" href="<?php echo get_page_link( 30 ); ?>">
            <span class="button-text"><?php echo the_field('cta_find_link_text_button', 'option')?></span>
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icons/arrow-green.svg" alt="">
        </a>

    </div>
</div>
