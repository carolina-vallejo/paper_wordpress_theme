<?php
/**
 * Template part for displaying loop home posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package magazin
 */
	//
	//
	//
?>
	
	<header class="entry-header">
		<?php 
		magazin_posted_on();
		the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );  

		?>
		<h3 class="subtitle">
		<?php 
		
			echo excerpt(10);
						

		?>
		</h3>
	</header><!-- .entry-header -->

	<div class="home_images">
		<?php the_post_thumbnail();   ?>		
	</div><!-- .entry-content -->
	<div class="darkmask"></div>


