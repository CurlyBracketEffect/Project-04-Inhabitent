<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class=<?php echo (is_front_page() OR is_page( $page = 'about')) ? '"site-header reverse-header"' : "site-header scroll-header" ?> role="banner">
				<div id="nav-bar" >
				<div id="logo-container">	
					<a href="http://localhost:3000/wordpress/">
					<h1 class= "site-title">Inhabitent</h1>	
				</a>
				<!-- <?php echo get_template_directory_uri(); ?> -->
				</div>
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					<?php get_search_form(); ?>
				</nav><!-- #site-navigation -->
				</div>
			</header><!-- #masthead -->

			<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
		<script>
			jQuery(function($) {
				var $nav = $('header');
				var $win = $(window);
				var winH = $win.height(); // Get the window height.

				$win.on("scroll", function () {
						if ($(this).scrollTop() > winH ) {
								$nav.addClass("scroll-header");
						} else {
								$nav.removeClass("scroll-header");
						}
				}).on("resize", function(){ // If the user resizes the window
					winH = $(this).height(); // you'll need the new height value
				});

				});
		</script>

			<div id="content" class="site-content">
