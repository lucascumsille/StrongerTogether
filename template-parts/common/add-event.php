<div class="container pb-5 pb-lg-6 pt-5 pt-lg-0">

    <div class="cta-wrapper is--events mx-auto">
        <img class="event-cta-icon" src="<?php echo get_field('cta_post_event_icon', 'option')['url']; ?>" alt="">
        <h4 class="event-cta-title"><?php echo the_field('cta_post_event_support_text', 'option')?></h4>
        <a  class="event-cta-button mx-auto" href="<?php get_home_url()?>/events/community/add/"><?php echo the_field('cta_post_event_button_text', 'option')?></a>
    </div>

</div>

