<!DOCTYPE html>
<html lang="en"> 
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <meta name="author" content="https://youtube.com/FollowAndrew">    
    <link rel="shortcut icon" href="images/logo.png"> 
     
    <?php
    wp_head();
    ?>

</head>  

<body>
    
    <header class="header text-center">	    

		<nav class="navbar navbar-expand-lg navbar-light container-lg">
	
			<button class="navbar-toggler collapsed ml-auto" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="<?php esc_html_e( 'Toggle Navigation', 'theme-textdomain' ); ?>">
				<div class="menu-span"><span>Menu</span></div>
				<div>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</div>
			</button>

		
			<div class="collapse navbar-collapse" id="navbar-content">
				<?php 
					//Logo
						if(function_exists('the_custom_logo')) {

							$custom_logo_id = get_theme_mod('custom_logo');
							$logo = wp_get_attachment_image_src($custom_logo_id);
						} 
				?>
				<a class="navbar-brand" href="#"><img class="mb-3 mx-auto logo" src="<?php echo get_field('stl_icon', 'option')['url']; ?>" ></a>
				
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'container'      => false,
					'depth'          => 2,
					'menu_class'     => 'navbar-nav ml-auto',
					'walker'         => new Bootstrap_NavWalker(),
					'fallback_cb'    => 'Bootstrap_NavWalker::fallback',
				) );
				?>

			</div>

		</nav>

    </header>

