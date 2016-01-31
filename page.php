<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package magazin
 */

get_header(); ?>

	<div id="primary" class="content-area">
	
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();


				echo '<div class="presentation single"><header class="entry-header">';
				magazin_posted_on();
				the_title( '<h2 class="entry-title">', '</h2>' );
				


				echo '</header><div class="home_images">';
				the_post_thumbnail();	
				echo '</div><div class="darkmask"></div></div>';	

		
			echo '<div class="wrap_posts">';
			get_template_part( 'template-parts/content', get_post_format() );

			
			//the_post_navigation();

			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			echo '</div>';


		endwhile; // End of the loop.
		?>

		</main><!-- #main -->


	</div><!-- #primary -->

<?php


