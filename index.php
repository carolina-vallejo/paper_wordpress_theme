<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package magazin
 */

get_header(); ?>

	<?php 
	$args=array(
	  'cat' => 3,
	  'posts_per_page' => 5
	 );	
	// Loop 1 for home-slider
	echo '<div class="presentation"><ul class="bxslider">';
	$first_query = new WP_Query($args); // only HOME category
	while($first_query->have_posts()) : $first_query->the_post();
		echo '<li>';
		get_template_part( 'template-parts/content', 'loophome' );
		echo '</li>';

	endwhile;
	echo '</ul><div class="stopslider"></div></div>';
	wp_reset_postdata(); // reset the query	

	// Loop 2
	$second_query = new WP_Query('cat=-0'); // exclude NONE	 category
	echo '<div class="wrap_posts">';
	while($second_query->have_posts()) : $second_query->the_post();
		
		get_template_part( 'template-parts/content', get_post_format() );

	endwhile;
	echo '</div>';	
	wp_reset_postdata(); // reset the query

	?>

<?php
get_footer();
