<!-- https://developer.wordpress.org/reference/functions/bloginfo/ -->
<!DOCTYPE html>
<?php 
// Enables gzip?
//ob_start(“ob_gzhandler”); ?>
<html lang="en">
<head>
<!-- #ff3a1e -->
<meta name="theme-color" content="#000">
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Custom Theme Colors-->
<?php function mytheme_customize_css(){?>
<!-- <style type="text/css">
	p{
		<?php //print "color: " . get_theme_mod('text_color','#000');?>
	}
</style> -->
<?php } add_action( 'wp_head', 'mytheme_customize_css');
 wp_head(); ?>
</head>

<body <?php body_class();?> data-instant-allow-external-links>
	<!-- <div class="color-mode-switch is-inactive"></div> -->
	<header id="site-header">
	<div id="site-image">
			<div id='overlay'></div>
			<?php
				if(!has_header_image() || get_theme_mod("header_switch") == 'none'){
					?>	<canvas width='1920' class="rellax" data-rellax-speed="-10" height='1080' id='backface'>
							<p>Your browser does not support this canvas element. Please try another broswer or device.</p>
						</canvas>
					<?php
				}else{
					if(get_theme_mod("header_switch") == "layer"){
						?><div id='site-image-img'>
								<div id='img-1'></div>
								<div id='img-2'></div>
								<div id='img-3'></div>
								<div id='img-4'></div>
						  </div><?php
					}else{
						?><div id='site-image-img'></div><?php
					}
				}
			?>
		</div>
		<div id="site-navigation">
			<div id="site-title">
				<?php $custom_logo_id = get_theme_mod( 'custom_logo' );
				$logo = wp_get_attachment_image_src($custom_logo_id, 'full');
				if( has_custom_logo()){
					print("<a href='"); print get_option('home'); print("'>"); print('<svg id="site-logo" version="1.1" id="Layer_8" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					viewBox="0 0 374.9 374.9" style="enable-background:new 0 0 374.9 374.9;" xml:space="preserve">
			   <style type="text/css">
				   .logo-st0{fill:#FF3A1E;transform-origin: center center;}
				   .logo-st1{fill:#2E2A25;stroke:#FFDD00;stroke-width:3.8647;transform-origin: center center;}
				   .logo-st2{fill:#2E2A25;stroke:#FFDD00;stroke-width:3.865;transform-origin: center center;}
				   .logo-st3{fill:none;stroke:#2E2A25;stroke-width:7.832;transform-origin: center center;}
				   .logo-st4{fill:none;stroke:#FFDD00;stroke-width:9.2388;transform-origin: center center;}
			   </style>
			   <circle id="red" class="logo-st0" cx="187.4" cy="187.4" r="171"/>
			   <path id="a_1_" class="logo-st1" d="M74,136.1c0-3.1-0.1-6.1-0.3-9.1c-0.2-3-0.7-5.8-1.5-8.4c-0.8-2.6-1.9-4.8-3.3-6.6
				   c-1.5-1.8-3.5-3.1-6-3.8c-1.5-0.5-3.2-0.9-4.9-1.1c-1.7-0.3-3.4-0.5-4.9-0.6c-0.8,0-1.4-0.4-1.8-1.1c-0.4-0.7-0.6-1.5-0.6-2.5
				   c0-0.8,0.2-1.6,0.6-2.2c0.4-0.7,1-1,1.8-1c2.4,0,4.7,0,6.8,0.1C62,99.8,64,99.9,66,100c1.9,0.1,4,0.2,6.3,0.3
				   c2.3,0.1,4.7,0.1,7.2,0.1c2.1,0,4.4,0,7.1-0.1c2.6-0.1,5.3-0.2,8.1-0.3c2.7-0.1,5.5-0.2,8.1-0.3c2.7-0.1,5.1-0.2,7.2-0.2
				   c3.7,0,7.5,0.2,11.6,0.6c4,0.4,8,1.1,11.8,2c3.9,1,7.5,2.3,11.1,4c3.5,1.7,6.6,3.8,9.2,6.4c2.6,2.6,4.7,5.6,6.3,9.2
				   c1.6,3.5,2.3,7.7,2.3,12.4c0,4.4-0.7,8.3-2.1,11.7c-1.4,3.3-3.3,6.3-5.6,8.8c-2.4,2.5-5.1,4.6-8.2,6.4c-3.1,1.8-6.4,3.3-9.8,4.5
				   c-0.8,0.3-1.1,0.8-1.1,1.4c0,0.6,0.4,0.9,1.1,1c11.2,3.1,19.9,7.6,26.2,13.7c6.2,6,9.3,14.5,9.3,25.4c0,7.4-1.3,13.6-4,18.3
				   c-2.7,4.8-6.2,8.6-10.6,11.4c-4.4,2.8-9.4,4.8-15,5.9c-5.6,1.1-11.4,1.7-17.4,1.7c-2.7,0-5.7-0.1-9.1-0.2c-3.3-0.1-6.8-0.2-10.4-0.4
				   c-3.6-0.1-7.2-0.3-10.8-0.4c-3.6-0.1-7-0.2-10.1-0.2c-3.1,0-5.8,0-8.1,0.1c-2.4,0.1-4.7,0.2-6.9,0.3c-2.2,0.1-4.5,0.3-6.9,0.5
				   c-2.4,0.2-5,0.5-8,0.7c-0.8,0.1-1.5-0.2-1.9-1c-0.5-0.8-0.7-1.7-0.7-2.6c0-0.8,0.2-1.6,0.6-2.3c0.4-0.7,1-1.1,1.8-1.2
				   c3.5-0.4,6.4-1,8.9-1.7c2.5-0.7,4.5-1.8,6-3.3c1.6-1.5,2.7-3.4,3.4-5.7c0.7-2.4,1.1-5.4,1.1-9V136.1z M97.3,158.7
				   c0,1.9,0.3,3.3,0.9,4.2c0.6,0.9,2,1.4,4.2,1.4h4.1c4.7,0,8.9-0.4,12.9-1.2c3.9-0.8,7.3-2.2,10.2-4.3c2.8-2.1,5.1-5,6.7-8.7
				   c1.6-3.7,2.5-8.4,2.5-14.2c0-4.9-0.6-9.1-1.9-12.6c-1.3-3.4-3.1-6.3-5.5-8.4c-2.4-2.2-5.4-3.8-9-4.8c-3.6-1-7.7-1.5-12.2-1.5h-7.3
				   c-1.4,0-2.4,0.2-3.2,0.5c-0.7,0.3-1.3,0.9-1.6,1.7c-0.3,0.8-0.6,1.8-0.6,3.1c-0.1,1.3-0.1,2.7-0.1,4.5V158.7z M97.3,201.7
				   c0,7.7,0.2,13.8,0.7,18.2c0.5,4.4,1.5,7.8,3,10c1.5,2.3,3.7,3.7,6.5,4.2c2.8,0.6,6.6,0.8,11.4,0.8c9.9,0,16.9-2.3,20.9-7
				   c4-4.7,6-11.8,6-21.4c0-6.9-1-12.5-3-16.8c-2-4.3-4.7-7.7-8-10.2c-3.4-2.5-7.3-4.2-11.9-5.1c-4.6-0.9-9.4-1.4-14.5-1.4h-4.1
				   c-3,0-4.9,0.5-5.7,1.6c-0.8,1-1.3,3.3-1.3,7V201.7z"/>
			   <path id="a" class="logo-st2" d="M223.8,193.3c-1.9,0-3.4,0.3-4.2,0.9c-0.9,0.6-1.7,1.7-2.3,3.3l-9.6,25.2c-0.8,2.3-1.1,3.9-1.1,4.9
				   c0,1.8,0.5,3.3,1.4,4.6c0.9,1.3,2.2,2.3,3.8,3c1.6,0.8,3.4,1.3,5.4,1.7c2,0.4,4.1,0.6,6.2,0.8c1,0,1.8,0.4,2.2,1.1
				   c0.4,0.8,0.6,1.5,0.6,2.4c0,0.9-0.2,1.7-0.6,2.5c-0.4,0.8-1.1,1.1-2.2,1.1c-1.7,0-3.5-0.1-5.5-0.3c-2-0.2-4.1-0.4-6.2-0.6
				   c-2.1-0.2-4.3-0.4-6.4-0.6c-2.2-0.2-4.2-0.3-6.2-0.3c-3.7,0-7.2,0.3-10.7,0.8s-7.1,0.8-11.1,0.8c-0.8,0-1.5-0.4-2-1.2
				   c-0.5-0.8-0.7-1.7-0.7-2.7c0-0.8,0.2-1.4,0.6-2.1c0.4-0.6,1-1,1.9-1.1l3.2-0.4c2.2-0.5,4.1-1.1,5.8-1.8c1.7-0.7,3.3-1.7,4.8-3.1
				   c1.5-1.4,3-3.2,4.4-5.5c1.4-2.3,2.8-5.4,4.4-9.1l48.3-121.5c0.4-1.2,1.6-1.8,3.4-1.8c1.9,0,3.5,0.6,4.7,1.8
				   c3.5,9.1,7.3,18.9,11.4,29.3c4.1,10.4,8.2,21,12.5,31.7c4.2,10.7,8.5,21.4,12.8,32c4.3,10.6,8.4,20.6,12.2,30.1
				   c1.7,4.1,3.3,7.3,4.9,9.5c1.6,2.3,3.2,4,4.9,5.2c1.7,1.2,3.4,2,5.1,2.4c1.7,0.4,3.6,0.8,5.5,1.3c0.8,0.1,1.4,0.6,1.8,1.3
				   c0.4,0.8,0.6,1.5,0.6,2.4c0,0.9-0.2,1.7-0.5,2.4c-0.3,0.7-0.9,1-1.7,1c-2.2,0-4.4-0.1-6.6-0.2c-2.2-0.1-4.4-0.3-6.5-0.6
				   c-2.1-0.3-4.3-0.5-6.7-0.6c-2.4-0.1-4.9-0.2-7.5-0.2c-6,0-11.7,0.3-16.9,0.8c-5.2,0.6-10.3,0.8-15.1,0.8c-1,0-1.7-0.4-2.2-1.1
				   c-0.5-0.8-0.8-1.6-0.8-2.7c0-0.8,0.2-1.5,0.6-2.2c0.4-0.6,1.1-1,2.2-1.1c4.9-0.6,8.4-1.5,10.6-2.6c2.3-1.1,3.4-3.5,3.4-7.1
				   c0-1-0.1-2.1-0.3-3.4c-0.2-1.3-0.7-3-1.4-5.3c-0.7-2.2-1.7-5.1-3-8.6c-1.3-3.5-3-7.9-5.2-13.3c-0.7-1.9-1.7-3.1-2.9-3.6
				   c-1.2-0.5-3.2-0.7-5.9-0.7H223.8z M260.6,185c1.9,0,3.3-0.3,4-1c0.7-0.7,0.7-1.8,0.1-3.5L246,130.6c-0.3-0.8-0.8-1.1-1.7-1.1
				   s-1.4,0.4-1.7,1.1l-19.5,49.9c-0.7,1.8-0.8,3-0.2,3.6c0.6,0.6,1.6,0.9,3.2,0.9H260.6z"/>
			   <path class="logo-st3" d="M187.4,3.9c100.7,0,183.5,82.8,183.5,183.5s-82.8,183.5-183.5,183.5S3.9,288.1,3.9,187.4
				   C3.9,86.8,86.8,3.9,187.4,3.9z"/>
			   <path class="logo-st4" d="M187.4,12.4c96,0,175,79,175,175s-79,175-175,175s-175-79-175-175C12.4,91.4,91.4,12.4,187.4,12.4z"/>
			   </svg>');
			   	//print('<img id="site-logo" src="');	print esc_url($logo[0]);  print('');	print('" alt="Site Logo"></a>');
					print("<div><h1>"); print("<a href='"); print get_option('home'); print("'>");	 bloginfo('name');	print("</a></h1>");
					// print("<p>");	bloginfo('description');	print("</p>");
					print("</div>");
				}else{
					print("<div><h1>"); print("<a href='"); print get_option('home'); print("'>");	bloginfo('name');	print("</a></h1>");
					// print("<p>");	bloginfo('description');	print("</p>");
					print("</div>");
				}?>
			</div>

			<?php
				/*if(wp_is_mobile()){
					if(has_nav_menu('mobile-menu')){
						print "<div id='menu-burger-container'><a id='menu-burger' href='javascript:void(0);' onclick='MobileShow()'>&#9776;</a></div>";
						wp_nav_menu(array(
							'theme_location' => 'mobile-menu',
							'container' => 'nav',
							'fallback_cb' => false,
							'container_id' => 'mobile-menu'
						));
					}
				}else{*/
					?><div id='menu-burger-container' style='display:none;'><a id='menu-burger' href='javascript:void(0);' onclick='MobileShow()'>&#9776;</a></div><?php
					if(has_nav_menu('header-menu')){
						wp_nav_menu(array(
							'theme_location' => 'header-menu',
							'container' => 'nav',
							'fallback_cb' => false,
							'container_id' => 'header-menu',
							// 'items_wrap'      => '<ul id="%1$s" asd class="%2$s">%3$s</ul>',
							'depth' => 0,
							// 'walker' => new description_walker()

						));
					}

					
				//}
			?>
		</div>
		<!-- <i class="site-header-line"></i> -->
	</header>
	<div class="main color-mode-switch">
		<main>
