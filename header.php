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

			<a class="navbar-brand-mobile" href="<?php echo get_permalink( get_page_by_path( 'home-page' ) ); ?>"><img class="mx-auto logo" src="<?php echo get_field('stl_icon', 'option')['url']; ?>" >
			</a>
	
			<button class="navbar-toggler collapsed ml-auto" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="<?php esc_html_e( 'Toggle Navigation', 'theme-textdomain' ); ?>">
				<div class="menu-span"><span>Menu</span></div>
				<div>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</div>
			</button>

		
			<div class="collapse navbar-collapse" id="navbar-content">

				<div class="navbar-menu-wrapper">
					<h5 class="menu-mobile-title text-middle-yellow">For Families</h5>
					<div class="navbar-menu-flex">

						<a href="<?php echo get_post_type_archive_link( 'placestovisit' ); ?>" class="navbar-menu-flex-item">
							<div class="icon-round-wrapper bg-yellow">                                  <?php 
                                // Image
                                $image = get_field('icon_page', 'placestovisit');
                                    if( !empty( $image ) ): ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>
							</div>
							<span class="mobile-navlink"><?php the_field( 'page_title', 'placestovisit' ); ?></span>
						</a>

						<a href="<?php echo get_post_type_archive_link( 'tribe_events' ); ?>" class="navbar-menu-flex-item">
							<div class="icon-round-wrapper bg-yellow">                                  <?php 
                                // Image
                                $image = get_field('icon_page', 'tribe_events');
                                    if( !empty( $image ) ): ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>
							</div>
							<span class="mobile-navlink"><?php the_field( 'page_title', 'tribe_events' ); ?></span>
						</a>

						<a href="<?php echo get_post_type_archive_link( 'thingsathome' ); ?>" class="navbar-menu-flex-item thingsathome">
							<div class="icon-round-wrapper bg-yellow">                                  <?php 
                                // Image
                                $image = get_field('icon_page', 'thingsathome');
                                    if( !empty( $image ) ): ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>
							</div>
							<span class="mobile-navlink"><?php the_field( 'page_title', 'thingsathome' ); ?></span>
						</a>
					</div>
				</div>

				<div class="navbar-menu-wrapper">
						<h5 class="menu-mobile-title text-dark-green">For Parents</h5>
						<div class="navbar-menu-flex">

							<a href="<?php echo get_post_type_archive_link( 'lookingafteryourself' ); ?>" class="navbar-menu-flex-item">
								<div class="icon-round-wrapper bg-green">                                  <?php 
									// Image
									$image = get_field('icon_page', 'lookingafteryourself');
										if( !empty( $image ) ): ?>
											<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								<?php endif; ?>
								</div>
								<span class="mobile-navlink"><?php the_field( 'page_title', 'lookingafteryourself' ); ?></span>
							</a>

							<a href="<?php echo get_post_type_archive_link( 'supportingyourkid' ); ?>" class="navbar-menu-flex-item">
								<div class="icon-round-wrapper bg-green">                                  <?php 
									// Image
									$image = get_field('icon_page', 'supportingyourkid');
										if( !empty( $image ) ): ?>
											<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								<?php endif; ?>
								</div>
								<span class="mobile-navlink"><?php the_field( 'page_title', 'supportingyourkid' ); ?></span>
							</a>

							<a href="<?php echo get_post_type_archive_link( 'localnews' ); ?>" class="navbar-menu-flex-item">
								<div class="icon-round-wrapper bg-green">                                  <?php 
									// Image
									$image = get_field('icon_page', 'localnews');
										if( !empty( $image ) ): ?>
											<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								<?php endif; ?>
								</div>
								<span class="mobile-navlink"><?php the_field( 'page_title', 'localnews' ); ?></span>
							</a>

							<a href="<?php echo get_page_link( 30 ); ?>" class="navbar-menu-flex-item">
								<div class="icon-round-wrapper bg-green">                                 
									<?php 
									// Image
										$image = get_field('icon_page', 30);
										if( !empty( $image ) ): ?>
											<img class="menu-icon-homepage mx-auto" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									<?php endif; ?>
								</div>
								<span class="mobile-navlink"><?php echo get_the_title( 30 ); ?></span>
							</a>
					</div>
				</div>									
				<a class="navbar-brand" href="<?php echo get_permalink( get_page_by_path( 'home-page' ) ); ?>"><img class="mb-3 mx-auto logo" src="<?php echo get_field('stl_icon', 'option')['url']; ?>" ></a>
				
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

				<div class="nav-mobile-social">

				<a href="<?php echo the_field('facebook_stl', 'option'); ?>" class="icon-round-wrapper bg-neutral-lightest"><img class="social-media-mobile" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icons/facebook mobile.svg" alt=""></a>

				<a href="<?php echo the_field('instagram_stl', 'option'); ?>" class="icon-round-wrapper bg-neutral-lightest"><img class="social-media-mobile" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icons/instagram.svg" alt=""></a>

				</div>

			</div>

		</nav>

    </header>

