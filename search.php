<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package magazin
 */

get_header(); 
?>
<div class="presentation single">
	<header class="entry-header">

		<h2 class="entry-title">
			<?php printf( esc_html__( 'Search Results for: %s', 'magazin' ), '<span>' . get_search_query() . '</span>' ); ?>
		</h2>
	</header>
	<div class="home_images imgless"></div>
	<div class="darkmask"></div>
</div>


	<section id="primary" class="content-area wrap_posts">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
				

				</h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
