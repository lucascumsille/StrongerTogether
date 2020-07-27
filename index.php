<?php
    get_header();
?>


		<article class="content px-3 py-5 p-md-5">

		<?php
			while( have_posts() ){
				the_post();
                
                // this function will look for a file called 'content-archive' in the template-parts forlder
                get_template_part('template-parts/content', 'archive' );
			}
		?>

		<?php
			the_posts_pagination();
		?>

	    </article>


<?php
    get_footer(); 
?>