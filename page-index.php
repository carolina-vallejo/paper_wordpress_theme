<?php
/*
Template Name: home
*/
get_header(); ?>

	<?php 
	// Loop 1 for home-slider
	echo '<div class="presentation"><ul class="bxslider">';
	$first_query = new WP_Query('cat=3'); // only HOME category
	while($first_query->have_posts()) : $first_query->the_post();
		echo '<li>';
		get_template_part( 'template-parts/content', 'loophome' );
		echo '</li>';

	endwhile;
	echo '</ul></div>';
	wp_reset_postdata(); // reset the query	

	// Loop 2
	$second_query = new WP_Query('cat=-3'); // exclude HOME category
	echo '<div class="wrap_posts">';
	while($second_query->have_posts()) : $second_query->the_post();
		
		get_template_part( 'template-parts/content', get_post_format() );

	endwhile;
	echo '</div>';	
	wp_reset_postdata(); // reset the query

	?>

<?php
get_footer();
