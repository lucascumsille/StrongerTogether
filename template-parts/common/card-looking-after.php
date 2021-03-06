

<?php 
 $category = get_the_terms( $id, 'lookingafteryourself_category' );
 //get First Category
 $firstCategory = $category[0];
 //get category link
   $category_link = get_category_link($firstCategory->term_id);
   //echo category name
   // echo $firstCategory->name;

?>


<div class="drop-shadow-wrapper mx-auto">
    <a class="carousel-anchor mx-auto" href="<?php the_permalink(); ?>">
        <div class="post-item-carousel box-shadow-carousel mx-auto">

            <div class="post-carousel-image mx-auto" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');">

            <!-- VideoPlay Conditional -->
            <?php if ( get_field('does_it_have_a_video') == true) { ?> 
                <img class="video-play-icon" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icons/video-play.svg" alt="">
            <?php } ?> 
            <!-- -->
            </div>
            
            <div class="post-carousel-content">
                <h4 class="text-black"><?php the_title(); ?></h4>
                <div class="post-meta-carousel-info">
                    <div class="tag-wrapper"> 
                         <?php // Icon
                            $icon = esc_url(get_field('category_icon', $category[0])['url']);
                                if( !empty( $icon ) ): ?>
                                <img class="tag-icon" src="<?php echo $icon; ?>" > 
                        <?php endif; ?>
                        <span class="category-tag" style="color:<?php the_field('color_for_category', $category[0]); ?>"><?php  echo $firstCategory->name;  ?></span> 

                    </div>
                </div>
                <span> <?php the_excerpt( );  ?> </span>
            </div>
        </div>
    </a>
</div>