
<div id="filter-top-container" class="container p-xl">

<div class="filter-grid">
    <div class="top-left-column">

    <a href="<?php echo get_post_type_archive_link( 'thingsathome' ); ?>" class="filter-page-tab left-tab">

        <?php  $image = get_field('category_icon', $taxonomy . 'category_20');
            if( !empty( $image ) ): ?>
                <img class="filter-tab-icon mx-auto" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
        <span><?php $term = get_term( 20 , 'thingsathome_category' );
            echo $term->name; ?></span>
    </a>

    <a href="<?php echo get_page_link( 435 ); ?>" class="filter-page-tab right-tab active">

        <?php  $image = get_field('category_icon', $taxonomy . 'category_21');
            if( !empty( $image ) ): ?>
                <img class="filter-tab-icon mx-auto" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
        <span><?php $term = get_term( 21 , 'thingsathome_category' );
            echo $term->name; ?></span>
    </a>

    </div>

    <div id="hidden-filters" class="top-right-column hidden-height">

        <?php echo do_shortcode('[searchandfilter id="449"]'); ?>

    </div>

    <div class="bottom-left-column">

    </div>

    <div class="bottom-right-column">
        <button class="filter-button" type='button' id='hideshow' value='hide/show'><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icons/filter.svg"> <span class="filter-button-text">Show all filters FIX MEE ADD "HIDE FILTERS"</span> </button>
    </div>


</div>

</div>



<div id='thingsathome' class="container flex-wrapper">
<!-- get_template_part('template-parts/content', 'archive' ); -->

<?php 
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

    $args = array(  
        'post_type' => 'thingsathome',
        'paged' => $paged,
        //'post_status' => 'publish', 
        //'orderby' => 'date', 
        //'order' => 'ASC', 
        'tax_query' => array(
            array(
                'taxonomy' => 'thingsathome_category',
                'field' => 'term_id',
                'terms' => 21,
            )
        )
    );
    $args['search_filter_id'] = 449;

    $loop = new WP_Query( $args ); 
?>



    <?php while ( $loop->have_posts() ) : $loop->the_post();  ?>
            <article class="flex-item" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php get_template_part('template-parts/common/card-things-at-home' ); ?>
            </article>

    <?php endwhile; ?>

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



</div>