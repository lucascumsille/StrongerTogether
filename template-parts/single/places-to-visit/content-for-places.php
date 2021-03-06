<div class="container">
    <div class="single-container mx-auto">
      <h4 class="title-single-post-body">Description</h4>
      <?php  the_content(); ?>

      <?php // Website URL
        $link = get_field('place_website');
        if( $link ): ?>
            <a class="stl-anchor stl-anchor link-icon mb-3" href="<?php echo esc_url( $link ); ?>" target="_blank">Visit website</a>
        <?php endif; ?>

        <?php // Facebook URL
        $link_facebook = get_field('place_facebook');
        if( $link_facebook ): ?>
            <a class="stl-anchor facebook-icon-for-singles" href="<?php echo esc_url( $link_facebook ); ?>" target="_blank">View Facebook page</a>
        <?php endif; ?>

		<h4 class="text-black mt-8">What local parents say</h4>
        <span>Share photos, opinions and advice from your trip and see comments from other parents who have been here.</span>
        <?php comments_template() ?>
	    </div>
        
        

    </div>
</div>


