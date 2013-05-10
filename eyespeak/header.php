<?php
/**
 * @package WordPress
 * @subpackage eyespeak
 */
?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html <?php language_attributes(); ?> class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php
		 $accent_color = get_option('accent_color'); 
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'eyespeak' ), max( $paged, $page ) );

	?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<?php if ( get_theme_mod( 'eyespeak_favicon' ) ) { ?>
		<link rel="shortcut icon" href="<?php echo get_theme_mod( 'eyespeak_favicon' ); ?>">
	<?php } ?>
	<?php if ( get_theme_mod( 'eyespeak_favicon' ) ) { ?>
		<link rel="apple-touch-icon" href="<?php echo get_theme_mod( 'eyespeak_apple' ); ?>">
	<?php } ?>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-responsive.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all" />
	<!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<?php wp_head(); ?>	
	<?php include_once('accent-colors.php'); ?>
</head>
<body <?php body_class(); ?>>
	<div id="page">
		<div id="header">
			<div class="container">
				<div class="navbar">
					<div class="navbar-inner no-radius no-box-shadow">
						<div class="container">
							<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-responsive-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</a>
							<?php if (is_front_page()) { echo "<h1>"; } else { echo "<h2>"; } ?>
								<?php if ( get_theme_mod( 'eyespeak_logo' ) ) : ?>
									<a class="brand" href="<?php echo get_bloginfo('url'); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_theme_mod( 'eyespeak_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
								<?php else : ?>
									<a class="brand" href="<?php echo get_bloginfo('url'); ?>"  rel="home"><?php echo get_bloginfo('name') ?></a>
								<?php endif; ?>
							<?php if (is_front_page()) { echo "</h1>"; } else { echo "</h2>"; } ?>
							<div class="nav-collapse collapse navbar-responsive-collapse clearfix">
								<ul class="nav pull-right">
									<?php if (function_exists('getNavMenu')): ?>
										<?php echo getNavMenu('menu-1'); ?>
									<?php endif; ?>                
								</ul>					
							</div><!-- /.nav-collapse -->
						</div><!-- container -->
					</div><!-- /navbar-inner -->
				</div><!-- .navbar -->
			</div><!-- .container -->
		</div><!-- #header -->