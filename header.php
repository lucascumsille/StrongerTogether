<!DOCTYPE html>
<html lang="en"> 
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <meta name="author" content="LucasCmDev">    

     
    <?php
    wp_head();
	?>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-170073708-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-170073708-1');
	</script>
	
	<!-- FullStory -->
	<script>
		window['_fs_debug'] = false;
		window['_fs_host'] = 'fullstory.com';
		window['_fs_script'] = 'edge.fullstory.com/s/fs.js';
		window['_fs_org'] = 'Y3FW9';
		window['_fs_namespace'] = 'FS';
		(function(m,n,e,t,l,o,g,y){
			if (e in m) {if(m.console && m.console.log) { m.console.log('FullStory namespace conflict. Please set window["_fs_namespace"].');} return;}
			g=m[e]=function(a,b,s){g.q?g.q.push([a,b,s]):g._api(a,b,s);};g.q=[];
			o=n.createElement(t);o.async=1;o.crossOrigin='anonymous';o.src='https://'+_fs_script;
			y=n.getElementsByTagName(t)[0];y.parentNode.insertBefore(o,y);
			g.identify=function(i,v,s){g(l,{uid:i},s);if(v)g(l,v,s)};g.setUserVars=function(v,s){g(l,v,s)};g.event=function(i,v,s){g('event',{n:i,p:v},s)};
			g.anonymize=function(){g.identify(!!0)};
			g.shutdown=function(){g("rec",!1)};g.restart=function(){g("rec",!0)};
			g.log = function(a,b){g("log",[a,b])};
			g.consent=function(a){g("consent",!arguments.length||a)};
			g.identifyAccount=function(i,v){o='account';v=v||{};v.acctId=i;g(o,v)};
			g.clearUserCookie=function(){};
			g._w={};y='XMLHttpRequest';g._w[y]=m[y];y='fetch';g._w[y]=m[y];
			if(m[y])m[y]=function(){return g._w[y].apply(this,arguments)};
			g._v="1.2.0";
		})(window,document,window['_fs_namespace'],'script','user');
	</script>

</head>  

<body <?php body_class(); ?>>
    
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

