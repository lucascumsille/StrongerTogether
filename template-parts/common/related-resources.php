
<?php 

$fields = get_field('related_resources');

if( $fields ): ?>

    <div class="bg-light-yellow">
        <div class="container p-xl">
            <div class="title-container mb-4 mb-lg-5">
                <h3 class="section-title text-center"><?php the_field('related_resources_title'); ?></h3>
            </div>

            <div class="flex-wrapper justify-content-center">

            <?php
                $featured_posts = get_field('related_resources');
                if( $featured_posts ): ?>

                <?php foreach( $featured_posts as $featured_post ): 
                    $permalink = get_permalink( $featured_post->ID );
                    $title = get_the_title( $featured_post->ID );

                    $category_carousel=get_the_terms($featured_post->ID, 'thingsathome_category')[0];
                    $test = get_category_link($category_carousel->term_id);

                    $thumbnail = get_the_post_thumbnail_url( $featured_post->ID );
                    $suitable = get_field( 'suitable_for', $featured_post->ID );
                    $custom_field = get_field( 'field_name', $featured_post->ID );
                    ?>
                
                    <a class="related-resource-card" href="<?php echo $permalink; ?>">
                        <div class="related-resource-image" style="background-image:url('<?php echo $thumbnail ?>');">
                        </div>
                        <div class="related-resource-title-wrapper">
                        <span class="related-resource-title"><?php echo $title ?></span>
                        </div>
                    </a>

                    <?php endforeach; ?>
                
                <?php endif; ?>

                <?php wp_reset_postdata(); ?>


                <?php 
                    // Pagination 
                    $big = 999999999; 
                    echo paginate_links( array(
                        'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                        'format' => '?paged=%#%',
                        'current' => max( 1, get_query_var('paged') ),
                        'total' => $loop->max_num_pages
                    ) );
                ?>

            </div> <!--  flex-wrapper -->
        </div> <!--  container -->
    </div><!--  bg-yellow -->

<?php endif; ?>