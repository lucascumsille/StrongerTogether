

<?php 
 $category = get_the_terms( $id, 'supportingyourkid_category' );
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

                        <div class="post-carousel-image is--big mx-auto" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');">

                        <!-- VideoPlay Conditional -->
                        <?php if ( get_field('does_it_have_a_video') == true) { ?> 
                            <img class="video-play-icon" class="video-play-icon" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icons/video-play.svg" alt="">
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
                                        
                                    <span class="category-tag mr-2" style="color:<?php the_field('color_for_category', $category[0]); ?>"><?php  echo $firstCategory->name;  ?></span> 

                                    <span class="suitable-for-tag"> <?php $suitable = get_field('suitable_for');

                                    // Option Baby, 2-3 and 4-5 are selected
                                    if( $suitable && in_array('Baby', $suitable) and $suitable && in_array('2-3 years old', $suitable) and $suitable && in_array('4-5 years old', $suitable) ) {
                                        echo '0-5 year olds';
                                    } 
                                    // Option  2-3, 4-5 and 6-8 are selected
                                    else if ( $suitable && in_array('6-8 years old', $suitable) and $suitable && in_array('2-3 years old', $suitable) and $suitable && in_array('4-5 years old', $suitable) ) {
                                        echo '2-8 year olds';
                                    } 
                                    // Option Baby and 2-3 are selected
                                    else if  ( $suitable && in_array('Baby', $suitable) and $suitable && in_array('2-3 years old', $suitable) ){
                                        echo '0-3 year olds';
                                    } 
                                    // Option 2-3 and 4-5 are selected
                                    else if ( $suitable && in_array('4-5 years old', $suitable) and $suitable && in_array('2-3 years old', $suitable) ) {
                                        echo '2-5 year olds';
                                    } 
                                    // Option 4-5 and 6-8 are selected
                                    else if ( $suitable && in_array('4-5 years old', $suitable) and $suitable && in_array('6-8 years old', $suitable) ) {
                                        echo '4-8 year olds';
                                    } 
                                    // Only one option is selected
                                    else if ( $suitable && in_array('4-5 years old', $suitable) or $suitable && in_array('6-8 years old', $suitable) or $suitable && in_array('Baby', $suitable) or $suitable && in_array('2-3 years old', $suitable)) {
                                        the_field('suitable_for');
                                    } else  {
                                        echo 'For everyone';
                                    }
                                    ?>  </span>
                                
                                </div>
                                
                            </div>
                            <p><?php  the_excerpt( )?></p>
                            
                        </div>
                    </div>
                </a>
            </div>