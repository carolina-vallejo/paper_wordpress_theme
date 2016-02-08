<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package magazin
 */

get_header(); ?>
<div class="presentation">
	<header class="entry-header">

		<h2 class="entry-title">
			Archive
		</h2>
	</header>
	<div class="home_images">
				<?php 
		if ( has_post_thumbnail('86')) {
			echo get_the_post_thumbnail( '86'); 
		}else{?>
			<img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/noneimg.png" alt="">			
		<?php } ?>
	</div>
	<div class="darkmask"></div>
</div>

	<div id="primary" class="content-area wrap_posts">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

