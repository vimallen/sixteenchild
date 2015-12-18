<?php
/**
 * The template for displaying the header.Child.
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="site-inner">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>

		<header id="masthead" class="site-header" role="banner">
			<div class="site-header-main">
				<div class="site-branding">
					<div class="icon-logo">
					<a href="<?php echo home_url(); ?>">
					<svg version="1.1" id="Type" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 viewBox="0 0 165.6 127.6" style="enable-background:new 0 0 165.6 127.6;" xml:space="preserve">
					<style type="text/css">
						.st0{fill:none;}
					</style>
					<g>
						<path class="st0" d="M115,121.5c-0.3,0-0.6,0-0.9,0c-0.2,0-0.4,0-0.5,0v4.1c0,0.3,0.1,0.6,0.4,0.8c0.3,0.2,0.7,0.3,1.2,0.3
							c0.8,0,1.4-0.2,1.9-0.7c0.4-0.5,0.6-1.2,0.6-2.1c0-0.7-0.2-1.3-0.7-1.7C116.5,121.7,115.8,121.5,115,121.5z"/>
						<path class="st0" d="M115.7,120.6c0.3-0.1,0.6-0.3,0.8-0.5c0.2-0.2,0.3-0.5,0.4-0.8s0.1-0.6,0.1-1c0-0.6-0.2-1.1-0.5-1.5
							c-0.3-0.4-0.9-0.5-1.7-0.5c-0.2,0-0.4,0-0.7,0c-0.3,0-0.5,0-0.7,0v4.5h1C115,120.8,115.4,120.8,115.7,120.6z"/>
						<path class="st0" d="M129.6,118.6c0-0.7-0.2-1.3-0.6-1.7s-1-0.6-1.7-0.6h-1.4v5h1.1c0.8,0,1.4-0.2,1.9-0.7
							C129.3,120.1,129.6,119.5,129.6,118.6z"/>
						<polygon class="st0" points="28.6,54.9 36.8,54.9 32.7,44.4 	"/>
						<polygon class="st0" points="100.3,122.5 103.8,122.5 102,118 	"/>
						<polygon class="st0" points="49.8,122.5 53.3,122.5 51.6,118 	"/>
						<path class="st0" d="M74.7,118.6c0-0.7-0.2-1.3-0.6-1.7s-1-0.6-1.7-0.6H71v5H72c0.8,0,1.4-0.2,1.9-0.7
							C74.4,120.1,74.7,119.5,74.7,118.6z"/>
						<path class="st0" d="M144.3,99.6c0.7,0.4,1.7,0.7,3.1,0.7c1.6,0,3-0.3,4.2-0.9c1.2-0.6,2.2-1.4,2.9-2.4c0.8-1.1,1.4-2.3,1.7-3.7
							c0.4-1.4,0.5-3,0.5-4.9c0-1.8-0.2-3.5-0.7-4.9c-0.5-1.5-1.2-2.8-2.1-3.9c-0.9-1-2-1.9-3.2-2.5c-1.3-0.6-2.7-0.9-4.3-0.9
							c-0.5,0-1.1,0-1.8,0c-0.7,0-1.1,0-1.5,0v20.9C143.3,98.4,143.6,99.2,144.3,99.6z"/>
						<path class="st0" d="M26.4,117.6c-0.3-0.5-0.7-0.8-1.1-1.1s-1-0.4-1.6-0.4c-0.7,0-1.2,0.2-1.7,0.5c-0.5,0.3-0.8,0.7-1.1,1.2
							c-1.3,0.5-0.5,1-0.6,1.7c-0.1,0.6-0.2,1.3-0.2,2c0,0.8,0.1,1.5,0.2,2.1c0.1,0.6,0.4,1.2,0.7,1.7c0.3,0.5,0.7,0.9,1.1,1.1
							c0.4,0.3,1,0.4,1.6,0.4c0.6,0,1.1-0.1,1.6-0.4s0.9-0.7,1.1-1.1c0.3-0.5,0.5-1.1,0.7-1.7c0.1-0.6,0.2-1.3,0.2-2.1
							c0-0.8-0.1-1.5-0.2-2.2C26.9,118.6,26.7,118.1,26.4,117.6z"/>
						<path d="M63.9,22.7c2.5,2.6,4.3,5.8,6.5,8.6c8.5,0,16.9,0,25.4,0C98.6,24,89.3,21,88.7,15c-0.1-1.3,0.4-2.2,1.3-2.9
							c2,1.1,2.8,3.5,4.3,5.1c0.1-1.1-0.4-1.5-0.3-2.6c0.8-0.6,0.4-1.9,0.7-2.8c-1.1-1.6-1.6-4-4.2-3.9c-3.1,0.2-5.9,4.4-5.3,8.3
							c0.6,4.2,3.9,6,5.1,9.3c-2.4-0.9-3.9-2.7-6.1-3.9c-2.3-0.1-2.8-2-4.2-2.9c-1,0.3-1.1-0.8-1.8-0.5c-0.5-0.2-0.4-0.9-0.9-1.1
							c-0.7,0.2-0.4,1.2-1.3,0.6c-0.3,0.3,0.1,0.3,0,0.8c-0.7-0.1-1.2,0.1-1.8,0.2c0,0.7,0.8,0.6,1,1.1c-1.3-0.4-2.7,0.1-3.7,0.5
							c0.3,0.4,1.1,0.1,1.6,0.2c-1,0.3-2.3,0.2-3.1,0.6c0.2,0.5,1.3-0.1,1.5,0.3c-1.1,0.2-2,0.7-3,1.1c0,0.3,0.4,0.3,0.7,0.3
							c-0.1,0.4-0.8,0.3-0.7,0.9c0.3,0.1,0.1,0.6,0.6,0.9C67.5,26,65.8,23.1,63.9,22.7z"/>
						<path d="M113.4,30.6C113,13.7,99.3,0,82.6,0C65.8,0,52.2,13.7,51.7,30.6H0v1h52.6v-0.1h0.1C52.7,14.7,66.1,1,82.6,1
							c16.5,0,29.9,13.7,29.9,30.5h0.1v0.1h53v-1H113.4z"/>
						<path d="M2.6,64.7c0.9,0.5,1.9,1,3.1,1.4c1.2,0.4,2.4,0.6,3.6,0.6c2.6,0,4.8-0.8,6.6-2.3c1.8-1.6,2.7-3.5,2.7-5.9
							c0-1-0.1-1.9-0.4-2.7c-0.3-0.8-0.7-1.5-1.3-2.1c-0.5-0.6-1.1-1.1-1.8-1.5c-0.7-0.4-1.4-0.8-2.2-1.1c-0.8-0.4-1.7-0.7-2.6-1
							c-0.9-0.3-1.8-0.7-2.7-1.2c-1-0.5-1.8-1.1-2.4-1.9c-0.5-0.8-0.8-1.7-0.8-2.9c0-1.1,0.4-2.1,1.3-2.9c0.9-0.8,1.9-1.2,3.1-1.2
							c1.1,0,2.1,0.2,2.9,0.7c0.8,0.4,1.5,1,2,1.8c0.6,0.8,1,1.6,1.4,2.6c0.4,0.9,0.7,1.9,0.9,3h1.5l-0.2-9h-1.5L15,40.2
							c-0.8-0.5-1.7-1-2.7-1.3c-1-0.4-2.1-0.6-3.4-0.6c-1.1,0-2.2,0.2-3.2,0.6c-1,0.4-1.9,0.9-2.6,1.6c-0.8,0.7-1.4,1.5-1.8,2.4
							c-0.4,0.9-0.6,1.9-0.6,2.9c0,1.8,0.4,3.3,1.3,4.4s2,2,3.6,2.7c0.8,0.4,1.7,0.7,2.8,1.1c1.1,0.4,2,0.8,2.9,1.1
							c1.2,0.5,2.1,1.2,2.7,2.1c0.6,0.9,0.9,2,0.9,3c0,0.7-0.1,1.4-0.3,2c-0.2,0.6-0.5,1.1-0.9,1.5s-0.9,0.7-1.6,1s-1.4,0.3-2.3,0.3
							c-1.2,0-2.2-0.2-3.1-0.7c-0.9-0.4-1.7-1-2.3-1.8c-0.7-0.8-1.3-1.7-1.7-2.6c-0.4-0.9-0.8-2-1.1-3.1H0l0.3,9.3h1.5L2.6,64.7z"/>
						<path d="M45.4,64c-0.4-0.3-0.8-0.6-1-0.9c-0.2-0.3-0.5-0.7-0.7-1.2l-9.1-23.4h-1.5c-1.3,3.3-2.8,7.1-4.4,11.4
							c-1.6,4.2-3.2,8.1-4.5,11.5c-0.3,0.7-0.5,1.2-0.8,1.6c-0.3,0.4-0.7,0.7-1.2,1.1c-0.3,0.2-0.7,0.4-1.2,0.5c-0.5,0.1-0.9,0.2-1.2,0.2
							V66H30v-1.4c-1-0.1-1.9-0.2-2.7-0.5S26,63.5,26,63c0-0.2,0-0.5,0.1-0.8c0.1-0.3,0.2-0.8,0.3-1.3c0.2-0.6,0.4-1.2,0.6-1.8
							c0.2-0.7,0.5-1.4,0.9-2.3h9.5l2.2,6.1c0.1,0.1,0.1,0.3,0.1,0.4c0,0.2,0,0.3,0,0.4c0,0.3-0.3,0.5-1,0.7s-1.5,0.3-2.5,0.4V66h11.3
							v-1.4c-0.3,0-0.7-0.1-1.2-0.2C46,64.4,45.7,64.2,45.4,64z M28.6,54.9l4.1-10.5l4.1,10.5H28.6z"/>
						<path d="M53.8,62.1c-0.2,0.7-0.5,1.3-0.9,1.6c-0.3,0.3-0.8,0.5-1.5,0.6c-0.6,0.1-1.2,0.2-1.8,0.3V66h11v-1.4
							c-0.3,0-0.8-0.1-1.7-0.4c-0.9-0.2-1.5-0.5-1.7-0.8c-0.4-0.4-0.7-0.9-0.9-1.8c-0.2-0.8-0.3-2-0.3-3.6V42h0.2L65,65.6h1l9.3-23.1h0.3
							v19.8c0,0.5-0.1,0.9-0.3,1.2c-0.2,0.3-0.5,0.6-0.9,0.8c-0.3,0.1-0.7,0.2-1.4,0.3c-0.7,0.1-1.2,0.1-1.7,0.1V66h12v-1.4
							c-0.3,0-0.8-0.1-1.4-0.2c-0.6-0.1-1-0.2-1.2-0.4c-0.4-0.2-0.7-0.5-0.9-0.8s-0.2-0.7-0.2-1.1V42.6c0-0.4,0.1-0.8,0.2-1.2
							c0.2-0.4,0.4-0.6,0.9-0.8c0.3-0.1,0.7-0.2,1.2-0.3c0.6-0.1,1-0.2,1.4-0.2v-1.4h-8.9c0,0.2-0.1,0.7-0.3,1.4c-0.2,0.7-0.4,1.3-0.6,2
							l-6.6,17.1L59,38.9h-9.3v1.4c0.6,0,1.1,0.1,1.7,0.3c0.6,0.2,1.1,0.4,1.5,0.8c0.4,0.3,0.6,0.7,0.8,1.2c0.2,0.5,0.3,1.2,0.3,2v13.9
							C54,60.1,54,61.4,53.8,62.1z"/>
						<path d="M94.7,41.5c0.1-0.4,0.4-0.6,0.9-0.8c0.3-0.1,0.7-0.2,1.2-0.3s1-0.2,1.3-0.2v-1.4H86.8v1.4c0.3,0,0.7,0.1,1.2,0.2
							c0.5,0.1,0.9,0.3,1.2,0.4c0.4,0.3,0.7,0.5,0.9,0.8c0.1,0.3,0.2,0.7,0.2,1.1v16.1c0,1,0.2,2,0.7,2.9c0.4,0.9,1.1,1.8,1.9,2.5
							c0.9,0.7,1.9,1.3,3.2,1.7c1.3,0.4,2.7,0.6,4.4,0.6c1,0,2.1-0.2,3.2-0.4c1.1-0.3,2.2-0.8,3.2-1.5c1-0.7,1.8-1.6,2.5-2.7
							s0.9-2.4,0.9-3.9V46.3c0-1.3,0.1-2.5,0.2-3.4c0.2-0.9,0.5-1.5,0.9-1.8c0.4-0.3,1-0.5,1.7-0.6c0.7-0.1,1.2-0.2,1.6-0.2v-1.4h-11.1
							v1.4c0.4,0,1,0.1,1.8,0.3c0.8,0.2,1.4,0.4,1.8,0.7c0.4,0.3,0.7,0.9,0.9,1.8s0.3,2.1,0.3,3.5v11.1c0,0.8-0.1,1.5-0.3,2.3
							s-0.6,1.5-1.1,2.2c-0.5,0.7-1.3,1.3-2.2,1.8c-1,0.4-2.1,0.7-3.5,0.7c-1.5,0-2.7-0.2-3.5-0.7c-0.9-0.4-1.5-1-2-1.7
							c-0.5-0.7-0.8-1.4-0.9-2.2c-0.2-0.8-0.2-1.6-0.2-2.3v-15C94.4,42.2,94.5,41.8,94.7,41.5z"/>
						<path d="M120.6,63.5c-0.2,0.3-0.4,0.6-0.9,0.7c-0.2,0.1-0.6,0.2-1.2,0.3c-0.6,0.1-1.1,0.1-1.5,0.2V66h22.5l0.5-8h-1.4
							c-0.2,0.6-0.6,1.5-1.2,2.7s-1.3,2.2-1.8,2.8c-0.2,0.2-0.6,0.4-1.1,0.5c-0.5,0.1-1,0.2-1.5,0.3c-0.5,0.1-1.1,0.1-1.7,0.1
							c-0.7,0-1.2,0-1.7,0c-1.1,0-1.9,0-2.4-0.1c-0.6-0.1-1-0.2-1.4-0.5c-0.3-0.2-0.6-0.6-0.7-1.1s-0.2-1.1-0.2-1.9v-8.1h3.1
							c0.8,0,1.5,0.1,2,0.2c0.5,0.2,1,0.5,1.3,1c0.2,0.3,0.5,0.8,0.7,1.5c0.2,0.7,0.4,1.3,0.4,1.9h1.4V46.7h-1.4
							c-0.1,0.5-0.2,1.1-0.4,1.8c-0.2,0.6-0.4,1.1-0.7,1.5c-0.3,0.4-0.7,0.7-1.2,0.9c-0.5,0.2-1.2,0.3-2.2,0.3h-3.1V40.4h4.3
							c0.7,0,1.3,0,1.9,0c0.5,0,1,0.1,1.4,0.1c0.8,0.1,1.6,0.7,2.4,1.8c0.8,1.1,1.4,2.1,1.7,3.1h1.4v-6.5h-21v1.4c0.3,0,0.8,0.1,1.4,0.2
							c0.6,0.1,1,0.3,1.4,0.4c0.4,0.2,0.7,0.5,0.9,0.8c0.1,0.3,0.2,0.7,0.2,1.1v19.5C120.8,62.8,120.7,63.2,120.6,63.5z"/>
						<path d="M146.5,63.6c-0.2,0.3-0.4,0.6-0.8,0.7c-0.2,0.1-0.6,0.2-1.2,0.2c-0.6,0.1-1,0.1-1.3,0.1V66h21.2l0.6-8.1h-1.4
							c-0.3,0.7-0.8,1.7-1.4,2.9c-0.7,1.2-1.3,2.1-1.8,2.7c-0.2,0.2-0.5,0.4-0.8,0.5c-0.4,0.1-0.8,0.2-1.2,0.3c-0.5,0.1-0.9,0.1-1.5,0.2
							c-0.5,0-1,0-1.5,0c-1,0-1.9,0-2.4-0.1c-0.6-0.1-1-0.2-1.3-0.4c-0.3-0.3-0.5-0.6-0.6-1.1s-0.1-1.1-0.1-2V42.7c0-0.4,0.1-0.8,0.2-1.2
							c0.2-0.4,0.5-0.6,0.9-0.8c0.3-0.1,0.7-0.2,1.2-0.3c0.6-0.1,1-0.2,1.4-0.2v-1.4h-11.5v1.4c0.3,0,0.8,0.1,1.3,0.3
							c0.5,0.1,0.9,0.3,1.2,0.4c0.4,0.2,0.7,0.5,0.9,0.8c0.1,0.3,0.2,0.7,0.2,1.1v19.4C146.7,62.8,146.7,63.3,146.5,63.6z"/>
						<path d="M2.3,80.5c0.3-0.6,0.6-1.3,1-1.8c0.4-0.6,0.8-1.1,1.3-1.5c0.5-0.5,0.9-0.7,1.3-0.8c0.5-0.1,1.1-0.1,1.7-0.1
							c0.6,0,1.1,0,1.5,0h1.1v21.9c0,0.5-0.1,0.9-0.3,1.3c-0.2,0.3-0.5,0.6-0.9,0.7c-0.3,0.1-0.8,0.2-1.5,0.3c-0.7,0.1-1.3,0.1-1.6,0.2
							v1.4h12.8v-1.4c-0.4,0-1-0.1-1.7-0.2c-0.7-0.2-1.2-0.3-1.4-0.4c-0.4-0.2-0.8-0.5-0.9-0.8c-0.2-0.4-0.3-0.7-0.3-1.2V76.2h1.1
							c0.5,0,1.1,0,1.7,0c0.6,0,1.1,0.1,1.5,0.1c0.4,0.1,0.9,0.3,1.3,0.8c0.5,0.4,0.9,1,1.3,1.5c0.4,0.6,0.7,1.2,1,1.8s0.5,1.2,0.6,1.6
							H24v-7.4H0.3v7.4h1.3C1.8,81.7,2,81.1,2.3,80.5z"/>
						<path d="M41.8,95.3c-1.5-5.2-2.6-9-3.3-11.6c-0.7-2.6-1.3-4.4-1.6-5.6c0-0.1-0.1-0.3-0.1-0.5c0-0.2-0.1-0.4-0.1-0.5
							c0-0.3,0.3-0.6,1-0.7c0.7-0.1,1.5-0.2,2.5-0.3v-1.4H29.2v1.4c0.3,0,0.7,0.1,1.2,0.2s0.8,0.3,1.1,0.5c0.4,0.3,0.7,0.5,0.9,0.8
							c0.2,0.3,0.4,0.7,0.5,1.1c0.5,1.6,1.4,4.9,2.7,9.7c1.4,4.8,2.7,9.4,3.9,13.9h1.7l7.1-20.9l6.9,20.9H57c1.4-4.5,2.7-8.6,3.9-12.6
							s2.3-7.4,3.2-10.3c0.2-0.7,0.4-1.2,0.7-1.5c0.3-0.4,0.6-0.7,1.1-1c0.4-0.2,0.7-0.4,1.2-0.5c0.4-0.1,0.8-0.2,1.1-0.2v-1.4h-9.9v1.4
							c1.3,0.1,2.3,0.3,2.9,0.6c0.6,0.3,0.9,0.7,0.9,1.1c0,0.3,0,0.7-0.1,1.1c-0.1,0.4-0.3,1.3-0.6,2.4c-0.4,1.7-1,3.7-1.7,6.1
							s-1.5,5.1-2.4,8.3l-6.8-20.6h-1.9L41.8,95.3z"/>
						<path d="M77.8,99.4c-0.2,0.3-0.4,0.6-0.9,0.7c-0.2,0.1-0.6,0.2-1.2,0.3c-0.6,0.1-1.1,0.1-1.5,0.2v1.4h22.5l0.5-8h-1.4
							c-0.2,0.6-0.6,1.5-1.2,2.7s-1.3,2.2-1.8,2.8c-0.2,0.2-0.6,0.4-1.1,0.5s-1,0.2-1.5,0.3c-0.5,0.1-1.1,0.1-1.7,0.1c-0.7,0-1.2,0-1.7,0
							c-1.1,0-1.9,0-2.4-0.1c-0.6-0.1-1-0.2-1.4-0.5s-0.6-0.6-0.7-1.1s-0.2-1.1-0.2-1.9v-8.1h3.1c0.8,0,1.5,0.1,2,0.2
							c0.5,0.2,1,0.5,1.3,1c0.2,0.3,0.5,0.8,0.7,1.5c0.2,0.7,0.4,1.3,0.4,1.9h1.4V82.6h-1.4c-0.1,0.5-0.2,1.1-0.4,1.8
							c-0.2,0.6-0.4,1.1-0.7,1.5c-0.3,0.4-0.7,0.7-1.2,0.9c-0.5,0.2-1.2,0.3-2.2,0.3h-3.1V76.2h4.3c0.7,0,1.3,0,1.9,0
							c0.5,0,1,0.1,1.4,0.1c0.8,0.1,1.6,0.7,2.4,1.8c0.8,1.1,1.4,2.1,1.7,3.1h1.4v-6.5h-21v1.4c0.3,0,0.8,0.1,1.4,0.2
							c0.6,0.1,1,0.3,1.4,0.4c0.4,0.2,0.7,0.5,0.9,0.8c0.1,0.3,0.2,0.7,0.2,1.1v19.5C78,98.7,77.9,99,77.8,99.4z"/>
						<path d="M104.7,76.1c0.3,0,0.8,0.1,1.4,0.2c0.6,0.1,1,0.3,1.4,0.4c0.4,0.2,0.7,0.5,0.9,0.8c0.1,0.3,0.2,0.7,0.2,1.1v19.5
							c0,0.5-0.1,0.9-0.2,1.2c-0.2,0.3-0.4,0.6-0.9,0.7c-0.2,0.1-0.6,0.2-1.2,0.3c-0.6,0.1-1.1,0.1-1.5,0.2v1.4h22.5l0.5-8h-1.4
							c-0.2,0.6-0.6,1.5-1.2,2.7s-1.3,2.2-1.8,2.8c-0.2,0.2-0.6,0.4-1.1,0.5s-1,0.2-1.5,0.3c-0.5,0.1-1.1,0.1-1.7,0.1c-0.7,0-1.2,0-1.7,0
							c-1.1,0-1.9,0-2.4-0.1c-0.6-0.1-1-0.2-1.4-0.5s-0.6-0.6-0.7-1.1s-0.2-1.1-0.2-1.9v-8.1h3.1c0.8,0,1.5,0.1,2,0.2
							c0.5,0.2,1,0.5,1.3,1c0.2,0.3,0.5,0.8,0.7,1.5c0.2,0.7,0.4,1.3,0.4,1.9h1.4V82.6h-1.4c-0.1,0.5-0.2,1.1-0.4,1.8
							c-0.2,0.6-0.4,1.1-0.7,1.5c-0.3,0.4-0.7,0.7-1.2,0.9c-0.5,0.2-1.2,0.3-2.2,0.3h-3.1V76.2h4.3c0.7,0,1.3,0,1.9,0
							c0.5,0,1,0.1,1.4,0.1c0.8,0.1,1.6,0.7,2.4,1.8c0.8,1.1,1.4,2.1,1.7,3.1h1.4v-6.5h-21V76.1z"/>
						<path d="M135.6,76.1c0.3,0,0.7,0.1,1.2,0.2c0.5,0.1,0.9,0.2,1.3,0.4c0.4,0.2,0.7,0.5,0.9,0.8c0.1,0.3,0.2,0.7,0.2,1.2v19.6
							c0,0.5-0.1,0.9-0.3,1.2c-0.2,0.3-0.4,0.6-0.8,0.7c-0.2,0.1-0.6,0.2-1.2,0.2c-0.6,0.1-1.1,0.1-1.4,0.1v1.4h11.3
							c1.9,0,3.7-0.3,5.4-0.8s3.3-1.3,4.7-2.4c1.4-1.1,2.5-2.5,3.4-4.2c0.9-1.7,1.3-3.7,1.3-6c0-2.5-0.5-4.7-1.4-6.5
							c-0.9-1.8-2.2-3.3-3.8-4.5c-1.2-0.9-2.6-1.5-4.1-2s-3.2-0.8-4.8-0.8h-11.9V76.1z M143.3,76.4c0.3,0,0.8,0,1.5,0c0.7,0,1.2,0,1.8,0
							c1.6,0,3,0.3,4.3,0.9c1.3,0.6,2.4,1.4,3.2,2.5c0.9,1.1,1.6,2.4,2.1,3.9c0.5,1.5,0.7,3.1,0.7,4.9c0,1.8-0.2,3.5-0.5,4.9
							c-0.4,1.4-0.9,2.6-1.7,3.7c-0.8,1-1.7,1.8-2.9,2.4c-1.2,0.6-2.6,0.9-4.2,0.9c-1.4,0-2.4-0.2-3.1-0.7c-0.7-0.4-1-1.2-1-2.4V76.4z"/>
						<path d="M14.2,126.5c-0.2-0.1-0.3-0.2-0.4-0.3c-0.1-0.1-0.1-0.3-0.1-0.5v-8.4c0-0.2,0-0.3,0.1-0.5c0.1-0.2,0.2-0.3,0.4-0.3
							c0.1,0,0.3-0.1,0.5-0.1c0.2,0,0.4-0.1,0.6-0.1v-0.6h-3.8c0,0.1,0,0.3-0.1,0.6c-0.1,0.3-0.2,0.6-0.3,0.8l-2.8,7.3L5,115.7H1v0.6
							c0.2,0,0.5,0.1,0.7,0.1s0.5,0.2,0.6,0.3c0.2,0.1,0.3,0.3,0.4,0.5s0.1,0.5,0.1,0.8v6c0,0.7,0,1.3-0.1,1.6s-0.2,0.6-0.4,0.7
							c-0.1,0.1-0.4,0.2-0.6,0.3c-0.3,0.1-0.5,0.1-0.8,0.1v0.6h4.7v-0.6c-0.1,0-0.4-0.1-0.7-0.2c-0.4-0.1-0.6-0.2-0.7-0.3
							c-0.2-0.2-0.3-0.4-0.4-0.8c-0.1-0.4-0.1-0.9-0.1-1.5V117h0.1l3.8,10.1h0.4l4-9.9H12v8.5c0,0.2,0,0.4-0.1,0.5
							c-0.1,0.1-0.2,0.3-0.4,0.4c-0.1,0.1-0.3,0.1-0.6,0.1c-0.3,0-0.5,0.1-0.7,0.1v0.6h5.1v-0.6c-0.1,0-0.3,0-0.6-0.1
							C14.5,126.6,14.3,126.5,14.2,126.5z"/>
						<path d="M27.7,117c-0.5-0.5-1.1-0.9-1.8-1.2s-1.4-0.4-2.2-0.4c-0.7,0-1.5,0.1-2.1,0.4c-0.7,0.3-1.3,0.7-1.8,1.2
							c-0.5,0.5-0.9,1.2-1.2,1.9c-0.3,0.7-0.4,1.6-0.4,2.5c0,0.9,0.1,1.7,0.4,2.4c0.3,0.8,0.7,1.4,1.2,1.9c0.5,0.5,1.1,1,1.8,1.3
							c0.7,0.3,1.4,0.5,2.2,0.5c0.8,0,1.5-0.1,2.1-0.4c0.7-0.3,1.3-0.7,1.8-1.2c0.5-0.5,0.9-1.2,1.2-1.9c0.3-0.8,0.4-1.6,0.4-2.5
							c0-0.9-0.1-1.8-0.4-2.5C28.6,118.2,28.2,117.6,27.7,117z M27.1,123.6c-0.1,0.6-0.4,1.2-0.7,1.7c-0.3,0.5-0.7,0.9-1.1,1.1
							s-1,0.4-1.6,0.4c-0.6,0-1.2-0.1-1.6-0.4c-0.4-0.3-0.8-0.6-1.1-1.1c-0.3-0.5-0.5-1.1-0.7-1.7c-0.1-0.6-0.2-1.3-0.2-2.1
							c0-0.7,0.1-1.4,0.2-2c0.1-0.6,0.3-1.2,0.6-1.7c0.3-0.5,0.7-0.9,1.1-1.2c0.5-0.3,1-0.5,1.7-0.5c0.6,0,1.1,0.1,1.6,0.4
							s0.8,0.6,1.1,1.1c0.3,0.5,0.5,1,0.7,1.7c0.2,0.7,0.2,1.4,0.2,2.2C27.3,122.3,27.3,123,27.1,123.6z"/>
						<path d="M39.3,116.2c0.2,0,0.3,0,0.5,0.1c0.2,0.1,0.4,0.1,0.5,0.2c0.2,0.1,0.3,0.2,0.4,0.3c0.1,0.1,0.1,0.3,0.1,0.5v3.5h-5.5v-3.6
							c0-0.2,0-0.3,0.1-0.5c0.1-0.2,0.2-0.3,0.4-0.3c0.1,0,0.3-0.1,0.5-0.1c0.2,0,0.4-0.1,0.6-0.1v-0.6h-4.8v0.6c0.2,0,0.3,0,0.5,0.1
							c0.2,0.1,0.4,0.1,0.5,0.2c0.2,0.1,0.3,0.2,0.4,0.3c0.1,0.1,0.1,0.3,0.1,0.5v8.4c0,0.2,0,0.4-0.1,0.5c-0.1,0.1-0.2,0.2-0.4,0.3
							c-0.1,0-0.3,0.1-0.5,0.1c-0.2,0-0.4,0-0.6,0v0.6H37v-0.6c-0.1,0-0.3,0-0.6-0.1c-0.2,0-0.4-0.1-0.5-0.1c-0.2-0.1-0.3-0.2-0.4-0.3
							c-0.1-0.1-0.1-0.3-0.1-0.5v-4.1h5.5v4.1c0,0.2,0,0.4-0.1,0.5c-0.1,0.1-0.2,0.2-0.4,0.3c-0.1,0-0.3,0.1-0.5,0.1c-0.2,0-0.4,0-0.6,0
							v0.6h4.8v-0.6c-0.1,0-0.3,0-0.6-0.1c-0.2,0-0.4-0.1-0.5-0.1c-0.2-0.1-0.3-0.2-0.4-0.3c-0.1-0.1-0.1-0.3-0.1-0.5v-8.4
							c0-0.2,0-0.3,0.1-0.5c0.1-0.2,0.2-0.3,0.4-0.3c0.1,0,0.3-0.1,0.5-0.1c0.2,0,0.4-0.1,0.6-0.1v-0.6h-4.8V116.2z"/>
						<path d="M57,126.4c-0.2-0.1-0.3-0.3-0.4-0.4c-0.1-0.1-0.2-0.3-0.3-0.5l-3.9-10h-0.7c-0.6,1.4-1.2,3-1.9,4.9
							c-0.7,1.8-1.4,3.5-1.9,4.9c-0.1,0.3-0.2,0.5-0.4,0.7s-0.3,0.3-0.5,0.5c-0.1,0.1-0.3,0.2-0.5,0.2c-0.2,0.1-0.4,0.1-0.5,0.1v0.6h4.4
							v-0.6c-0.4,0-0.8-0.1-1.2-0.2c-0.3-0.1-0.5-0.3-0.5-0.5c0-0.1,0-0.2,0-0.4c0-0.1,0.1-0.3,0.1-0.6c0.1-0.2,0.2-0.5,0.3-0.8
							c0.1-0.3,0.2-0.6,0.4-1h4.1l1,2.6c0,0.1,0,0.1,0,0.2s0,0.1,0,0.2c0,0.1-0.1,0.2-0.4,0.3c-0.3,0.1-0.6,0.1-1.1,0.2v0.6H58v-0.6
							c-0.1,0-0.3,0-0.5-0.1C57.3,126.6,57.1,126.5,57,126.4z M49.8,122.5l1.7-4.5l1.8,4.5H49.8z"/>
						<path d="M59.6,116.2c0.2,0,0.4,0,0.6,0.1c0.2,0.1,0.5,0.1,0.6,0.2c0.2,0.1,0.4,0.2,0.4,0.3c0.1,0.1,0.1,0.3,0.1,0.5v8.4
							c0,0.2,0,0.4-0.1,0.5s-0.2,0.2-0.4,0.3c-0.1,0-0.3,0.1-0.6,0.1c-0.3,0-0.5,0-0.6,0v0.6h5.2v-0.6c-0.2,0-0.4,0-0.7-0.1
							c-0.3-0.1-0.4-0.1-0.6-0.1c-0.2-0.1-0.3-0.2-0.4-0.3s-0.1-0.3-0.1-0.5v-8.4c0-0.2,0-0.3,0.1-0.5s0.2-0.3,0.4-0.3
							c0.2-0.1,0.4-0.1,0.6-0.1c0.2,0,0.4-0.1,0.6-0.1v-0.6h-5.2V116.2z"/>
						<path d="M77.9,126.5c-0.2-0.1-0.4-0.2-0.6-0.4c-0.2-0.2-0.4-0.4-0.7-0.7c-0.6-0.7-1-1.4-1.4-1.9s-0.9-1.2-1.4-1.9
							c0.4-0.1,0.8-0.3,1.1-0.4c0.3-0.2,0.6-0.4,0.9-0.6c0.3-0.3,0.5-0.5,0.6-0.9c0.1-0.3,0.2-0.7,0.2-1.2c0-0.5-0.1-0.9-0.3-1.3
							c-0.2-0.4-0.5-0.6-0.8-0.9c-0.3-0.2-0.7-0.4-1.2-0.5c-0.4-0.1-0.9-0.2-1.4-0.2h-5.4v0.6c0.2,0,0.3,0,0.6,0.1s0.4,0.1,0.5,0.1
							c0.2,0.1,0.3,0.2,0.4,0.3c0.1,0.1,0.1,0.3,0.1,0.5v8.4c0,0.2,0,0.4-0.1,0.5c-0.1,0.1-0.2,0.2-0.4,0.3c-0.1,0-0.3,0.1-0.5,0.1
							s-0.4,0-0.6,0.1v0.6h4.9v-0.6c-0.2,0-0.4,0-0.6-0.1c-0.2,0-0.4-0.1-0.5-0.1c-0.2-0.1-0.3-0.2-0.4-0.3c-0.1-0.1-0.1-0.3-0.1-0.5V122
							h1.2c0.7,0.8,1.3,1.7,1.8,2.5c0.6,0.8,1.2,1.7,1.9,2.8H79v-0.6c-0.1,0-0.3,0-0.5-0.1C78.3,126.6,78.1,126.6,77.9,126.5z M72,121.3
							H71v-5h1.4c0.7,0,1.3,0.2,1.7,0.6s0.6,1,0.6,1.7c0,0.8-0.3,1.5-0.8,2C73.4,121.1,72.8,121.3,72,121.3z"/>
						<path d="M86.1,116.2c0.1,0,0.3,0,0.6,0.1c0.2,0.1,0.4,0.1,0.6,0.2c0.2,0.1,0.3,0.2,0.4,0.3c0.1,0.1,0.1,0.3,0.1,0.5v8.4
							c0,0.2,0,0.4-0.1,0.5c-0.1,0.1-0.2,0.2-0.4,0.3c-0.1,0-0.3,0.1-0.5,0.1s-0.5,0-0.7,0.1v0.6h5v-0.6c-0.1,0-0.3,0-0.6-0.1
							s-0.5-0.1-0.5-0.1c-0.2-0.1-0.3-0.2-0.4-0.3c-0.1-0.1-0.1-0.3-0.1-0.5v-4h1.3c0.4,0,0.7,0,0.9,0.1c0.2,0.1,0.5,0.2,0.6,0.4
							c0.1,0.1,0.2,0.4,0.3,0.7c0.1,0.3,0.2,0.6,0.2,0.8h0.6v-4.6h-0.6c0,0.3-0.1,0.6-0.2,0.8c-0.1,0.3-0.2,0.4-0.3,0.6
							c-0.2,0.2-0.4,0.3-0.6,0.4s-0.5,0.1-0.9,0.1h-1.3v-4.7h2c0.3,0,0.6,0,0.8,0s0.4,0,0.6,0c0.3,0,0.7,0.3,1,0.8c0.4,0.5,0.6,1,0.7,1.4
							h0.6v-2.9h-9.1V116.2z"/>
						<path d="M107.5,126.4c-0.2-0.1-0.3-0.3-0.4-0.4c-0.1-0.1-0.2-0.3-0.3-0.5l-3.9-10h-0.7c-0.6,1.4-1.2,3-1.9,4.9
							c-0.7,1.8-1.4,3.5-1.9,4.9c-0.1,0.3-0.2,0.5-0.4,0.7s-0.3,0.3-0.5,0.5c-0.1,0.1-0.3,0.2-0.5,0.2c-0.2,0.1-0.4,0.1-0.5,0.1v0.6h4.4
							v-0.6c-0.4,0-0.8-0.1-1.2-0.2c-0.3-0.1-0.5-0.3-0.5-0.5c0-0.1,0-0.2,0-0.4c0-0.1,0.1-0.3,0.1-0.6c0.1-0.2,0.2-0.5,0.3-0.8
							c0.1-0.3,0.2-0.6,0.4-1h4.1l1,2.6c0,0.1,0,0.1,0,0.2s0,0.1,0,0.2c0,0.1-0.1,0.2-0.4,0.3c-0.3,0.1-0.6,0.1-1.1,0.2v0.6h4.8v-0.6
							c-0.1,0-0.3,0-0.5-0.1C107.7,126.6,107.6,126.5,107.5,126.4z M100.3,122.5l1.7-4.5l1.8,4.5H100.3z"/>
						<path d="M118.5,121.9c-0.3-0.2-0.7-0.4-1.1-0.5c-0.4-0.1-0.8-0.2-1.1-0.2V121c0.4-0.1,0.7-0.2,1.1-0.3c0.3-0.2,0.6-0.3,0.9-0.6
							c0.3-0.2,0.5-0.5,0.6-0.8c0.1-0.3,0.2-0.7,0.2-1.1c0-0.5-0.1-0.9-0.3-1.2s-0.5-0.6-0.8-0.8c-0.3-0.2-0.7-0.4-1.1-0.4
							s-0.8-0.1-1.2-0.1h-5.4v0.6c0.1,0,0.3,0,0.5,0.1c0.2,0,0.4,0.1,0.5,0.2c0.2,0.1,0.3,0.2,0.4,0.3c0.1,0.1,0.1,0.3,0.1,0.5v8.4
							c0,0.2,0,0.4-0.1,0.5s-0.2,0.2-0.4,0.3c-0.1,0-0.3,0.1-0.5,0.1c-0.3,0-0.4,0.1-0.6,0.1v0.6h5.5c0.5,0,1-0.1,1.4-0.2
							c0.5-0.1,0.9-0.3,1.2-0.6c0.4-0.3,0.7-0.6,0.9-1c0.2-0.4,0.4-0.9,0.4-1.4c0-0.5-0.1-1-0.3-1.4C119.1,122.4,118.8,122.1,118.5,121.9
							z M113.5,116.3c0.2,0,0.4,0,0.7,0c0.3,0,0.5,0,0.7,0c0.8,0,1.3,0.2,1.7,0.5c0.3,0.4,0.5,0.9,0.5,1.5c0,0.4,0,0.7-0.1,1
							s-0.2,0.5-0.4,0.8c-0.2,0.2-0.5,0.4-0.8,0.5s-0.7,0.2-1.1,0.2h-1V116.3z M117,125.9c-0.4,0.5-1.1,0.7-1.9,0.7
							c-0.5,0-0.9-0.1-1.2-0.3c-0.3-0.2-0.4-0.4-0.4-0.8v-4.1c0.1,0,0.3,0,0.5,0c0.2,0,0.5,0,0.9,0c0.9,0,1.5,0.2,2,0.7
							c0.5,0.4,0.7,1,0.7,1.7C117.6,124.8,117.4,125.5,117,125.9z"/>
						<path d="M132.8,126.5c-0.2-0.1-0.4-0.2-0.6-0.4c-0.2-0.2-0.4-0.4-0.7-0.7c-0.6-0.7-1-1.4-1.4-1.9s-0.9-1.2-1.4-1.9
							c0.4-0.1,0.8-0.3,1.1-0.4c0.3-0.2,0.6-0.4,0.9-0.6c0.3-0.3,0.5-0.5,0.6-0.9c0.1-0.3,0.2-0.7,0.2-1.2c0-0.5-0.1-0.9-0.3-1.3
							c-0.2-0.4-0.5-0.6-0.8-0.9c-0.3-0.2-0.7-0.4-1.2-0.5c-0.4-0.1-0.9-0.2-1.4-0.2h-5.4v0.6c0.2,0,0.3,0,0.6,0.1s0.4,0.1,0.5,0.1
							c0.2,0.1,0.3,0.2,0.4,0.3c0.1,0.1,0.1,0.3,0.1,0.5v8.4c0,0.2,0,0.4-0.1,0.5c-0.1,0.1-0.2,0.2-0.4,0.3c-0.1,0-0.3,0.1-0.5,0.1
							s-0.4,0-0.6,0.1v0.6h4.9v-0.6c-0.2,0-0.4,0-0.6-0.1c-0.2,0-0.4-0.1-0.5-0.1c-0.2-0.1-0.3-0.2-0.4-0.3c-0.1-0.1-0.1-0.3-0.1-0.5V122
							h1.2c0.7,0.8,1.3,1.7,1.8,2.5c0.6,0.8,1.2,1.7,1.9,2.8h3.1v-0.6c-0.1,0-0.3,0-0.5-0.1C133.1,126.6,133,126.6,132.8,126.5z
							 M126.9,121.3h-1.1v-5h1.4c0.7,0,1.3,0.2,1.7,0.6s0.6,1,0.6,1.7c0,0.8-0.3,1.5-0.8,2C128.3,121.1,127.7,121.3,126.9,121.3z"/>
						<path d="M135.5,116.2c0.2,0,0.4,0,0.6,0.1c0.2,0.1,0.5,0.1,0.6,0.2c0.2,0.1,0.4,0.2,0.4,0.3c0.1,0.1,0.1,0.3,0.1,0.5v8.4
							c0,0.2,0,0.4-0.1,0.5s-0.2,0.2-0.4,0.3c-0.1,0-0.3,0.1-0.6,0.1c-0.3,0-0.5,0-0.6,0v0.6h5.2v-0.6c-0.2,0-0.4,0-0.7-0.1
							c-0.3-0.1-0.4-0.1-0.6-0.1c-0.2-0.1-0.3-0.2-0.4-0.3s-0.1-0.3-0.1-0.5v-8.4c0-0.2,0-0.3,0.1-0.5s0.2-0.3,0.4-0.3
							c0.2-0.1,0.4-0.1,0.6-0.1c0.2,0,0.4-0.1,0.6-0.1v-0.6h-5.2V116.2z"/>
						<path d="M152.2,125.1c-0.2,0.3-0.4,0.6-0.7,0.8c-0.3,0.2-0.6,0.4-1,0.6c-0.4,0.1-0.8,0.2-1.2,0.2c-0.6,0-1.1-0.1-1.6-0.4
							c-0.5-0.3-0.9-0.6-1.2-1.1c-0.3-0.5-0.6-1-0.8-1.6s-0.3-1.3-0.3-2c0-0.8,0.1-1.6,0.3-2.3c0.2-0.7,0.4-1.2,0.7-1.7
							c0.3-0.5,0.7-0.8,1.2-1s0.9-0.4,1.5-0.4c0.5,0,0.9,0.1,1.2,0.3c0.4,0.2,0.7,0.5,0.9,0.9c0.2,0.3,0.4,0.7,0.6,1.2
							c0.2,0.5,0.3,0.9,0.4,1.3h0.7l-0.1-4.2h-0.7l-0.3,0.6c-0.4-0.3-0.9-0.5-1.3-0.6c-0.5-0.1-1-0.2-1.6-0.2c-0.8,0-1.5,0.1-2.2,0.4
							c-0.7,0.3-1.3,0.7-1.8,1.3c-0.5,0.5-0.9,1.2-1.2,2c-0.3,0.8-0.4,1.6-0.4,2.5s0.1,1.8,0.4,2.5c0.3,0.7,0.7,1.4,1.2,1.9
							c0.5,0.5,1.1,0.9,1.7,1.2s1.3,0.4,2,0.4c1.1,0,2-0.2,2.8-0.7c0.8-0.5,1.4-1.3,1.9-2.5l-0.6-0.3
							C152.6,124.4,152.4,124.8,152.2,125.1z"/>
						<path d="M162.9,122c-0.2-0.2-0.5-0.5-0.8-0.6s-0.6-0.3-0.9-0.5c-0.4-0.2-0.7-0.3-1.1-0.4c-0.4-0.1-0.8-0.3-1.2-0.5
							c-0.4-0.2-0.8-0.5-1-0.8c-0.2-0.3-0.4-0.7-0.4-1.3c0-0.5,0.2-0.9,0.5-1.2c0.4-0.3,0.8-0.5,1.3-0.5c0.5,0,0.9,0.1,1.2,0.3
							s0.6,0.4,0.9,0.8c0.2,0.3,0.4,0.7,0.6,1.1c0.2,0.4,0.3,0.8,0.4,1.3h0.7l-0.1-3.9h-0.7l-0.3,0.6c-0.3-0.2-0.7-0.4-1.2-0.6
							s-0.9-0.2-1.4-0.2c-0.5,0-0.9,0.1-1.4,0.2c-0.4,0.2-0.8,0.4-1.1,0.7c-0.3,0.3-0.6,0.6-0.8,1c-0.2,0.4-0.3,0.8-0.3,1.2
							c0,0.8,0.2,1.4,0.5,1.9c0.4,0.5,0.9,0.9,1.5,1.2c0.3,0.2,0.7,0.3,1.2,0.5c0.5,0.2,0.9,0.3,1.2,0.5c0.5,0.2,0.9,0.5,1.2,0.9
							c0.3,0.4,0.4,0.8,0.4,1.3c0,0.3,0,0.6-0.1,0.8c-0.1,0.2-0.2,0.5-0.4,0.6c-0.2,0.2-0.4,0.3-0.7,0.4c-0.3,0.1-0.6,0.1-1,0.1
							c-0.5,0-0.9-0.1-1.3-0.3c-0.4-0.2-0.7-0.4-1-0.8c-0.3-0.3-0.5-0.7-0.7-1.1c-0.2-0.4-0.3-0.8-0.5-1.3h-0.7l0.1,4h0.7l0.4-0.6
							c0.4,0.2,0.8,0.4,1.3,0.6s1,0.2,1.6,0.2c1.1,0,2.1-0.3,2.8-1s1.1-1.5,1.1-2.5c0-0.4-0.1-0.8-0.2-1.1
							C163.4,122.5,163.2,122.2,162.9,122z"/>
						<rect x="0.7" y="108.8" width="164.9" height="1"/>
					</g>
					</svg>
					</a>
					</div><!--icon logo-->

					<?php if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title visuallyhidden"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title visuallyhidden"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description visuallyhidden"><?php echo $description; ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->

				<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
					<button id="menu-toggle" class="menu-toggle"><?php _e( 'Menu', 'twentysixteen' ); ?></button>

					<div id="site-header-menu" class="site-header-menu">
						<?php if ( has_nav_menu( 'primary' ) ) : ?>
							<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php _e( 'Primary Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'primary',
										'menu_class'     => 'primary-menu',
									 ) );
								?>
							</nav><!-- .main-navigation -->
						<?php endif; ?>

						<?php if ( has_nav_menu( 'social' ) ) : ?>
							<nav id="social-navigation" class="social-navigation" role="navigation" aria-label="<?php _e( 'Social Links Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'social',
										'menu_class'     => 'social-links-menu',
										'depth'          => 1,
										'link_before'    => '<span class="screen-reader-text">',
										'link_after'     => '</span>',
									) );
								?>
							</nav><!-- .social-navigation -->
						<?php endif; ?>
					</div><!-- .site-header-menu -->
				<?php endif; ?>
			</div><!-- .site-header-main -->

			<?php if ( get_header_image() ) : ?>
				<?php
					/**
					 * Filter the default twentysixteen custom header sizes attribute.
					 *
					 * @since Twenty Sixteen 1.0
					 *
					 * @param string $custom_header_sizes sizes attribute
					 * for Custom Header. Default '(max-width: 709px) 85vw,
					 * (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px'.
					 */
					$custom_header_sizes = apply_filters( 'twentysixteen_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px' );
				?>
				<div class="header-image">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					</a>
				</div>
			<?php endif; // End header image check. ?>
		</header><!-- .site-header -->

		<div id="content" class="site-content">
