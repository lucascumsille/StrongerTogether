
<?php
    get_template_part('/navbar');
?>

<?php
    get_header('{category}');
?>


<article class="content px-3 py-5 p-md-5">
   <p><?php single_cat_title(); ?></p>
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
    