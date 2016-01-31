<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package magazin
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	<?php if ( !is_single() ) {
		the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );  		
	}?>

	<?php
	if ( 'post' === get_post_type() ) : ?>
	<div class="entry-meta">
		<?php 
			if ( !is_single() ) {
				magazin_posted_on(); 
			}
		?>

	</div><!-- .entry-meta -->
	<?php
	endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			
			if ( is_single() || is_page() ) {
				the_content();
			}else{
				echo content(30);
			}

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'magazin' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

<div class="authordata">
<?php if ( is_single() ) {
	
	echo '<div class="imgavatar">'.get_avatar( get_the_author_meta( 'ID' )) .'</div>';
	echo  '<div class="nameauthor">'.get_the_author_meta( 'display_name' ) . '</div>'; 
}?>			
</div>
	


</article><!-- #post-## -->
