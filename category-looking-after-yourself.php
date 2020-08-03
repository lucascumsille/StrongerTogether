

<?php
        get_header();
        get_template_part('template-parts/hero', 'category' );
?>


<article class="content px-3 py-5 p-md-5">

    <?php
		while( have_posts() ){
			the_post();
			the_content();
			}
	?>

 </article>


<?php
    get_footer(); 
?>
    