<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package magazin
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="runloader">
<div class="loader">Loading...</div>

<?php if ( is_single() ) {
	$singlelogo='singlelogo';	
 }else{
 	$singlelogo='';
 }?>

<div>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
	
		<?php 
		if ( has_post_thumbnail('46')) {
			echo get_the_post_thumbnail( '46'); 
		}else{?>
			<img src="<?php bloginfo('template_directory')?>/images/logo_theme_ok.png" alt="">			
		<?php } ?>
		
	</a>
</div><!-- .site-branding -->
</div>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'magazin' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding <?php echo $singlelogo; ?>">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">

		<?php 
		if ( has_post_thumbnail('46')) {
			echo get_the_post_thumbnail( '46'); 
		}else{?>
			<img src="<?php bloginfo('template_directory')?>/images/logo_theme_ok.png" alt="">			
		<?php } ?>

	
			</a>
		</div><!-- .site-branding -->




		<div class="lateralnav">
			<div class="wrapbtns">
				<button class="menu-toggle c-hamburger c-hamburger--htx" aria-controls="primary-menu" aria-expanded="false">
					<span>toggle menu</span>
				</button>
				<button class="resetbtn home" onclick='redirects("<?php echo esc_url( home_url( '/' ) ); ?>");'></button>
				<button class="resetbtn searchbtn"></button>
				<button class="resetbtn settings"></button>
			<div class="wraplateral">
				<div class="searchform"><?php get_search_form(); ?></div>
				<div class="fontbtns">
					<button type="button" id="btndecrease" class="reset_form">+</button>
					<div>A</div>
					<button type="button" id="btnincrease" class="reset_form">-</button>	
				</div>
			</div>	
			</div>

			<div class="wraplateral">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
				<div class="site-info">
				<?php printf( esc_html__( 'Theme %1$s by %2$s.', 'magazin' ), 'magazin', '<a href="http://carolinavallejo.x10.mx/" rel="designer">Carolina Vallejo</a>' ); ?>
				</div><!-- .site-info -->	
			</div>			





			

		</div><!-- #lateral nav -->
		

	</header><!-- #masthead -->

	<div id="content" class="site-content">
