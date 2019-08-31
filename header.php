<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Intensify_to_WordPress
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'intensify2wordpress' ); ?></a>

	<!-- HEADER
	===================================================== -->
	<header id="header">
		<nav class="left">
			<a href="#menu"><span>Menu</span></a>
		</nav>
		<a href="<?php bloginfo( 'url'); ?>" class="logo">intensify</a>
		<nav class="right">
			<a href="#" class="button alt">Log in</a>
		</nav>
	</header>

	<!-- Menu -->
	<?php
		wp_nav_menu( array (

			'container' => 'nav',
			'menu_class' => 'links',				
			'container_id' => 'menu'
			
		) );
	?>

	<div id="content" class="site-content">
