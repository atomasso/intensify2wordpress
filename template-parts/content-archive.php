<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Intensify_to_WordPress
 */

?>

<article id="post-<?php the_ID(); ?>" class="wrapper" <?php post_class(); ?>>
<div class="inner">
	<header class="align-center"">
		<?php
		if ( is_singular() ) :
			the_title( '<h1>', '</h1>' );
		else :
			the_title( '<h1><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>			

		<p><?php echo get_field( 'description' ); ?></p>			
			
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="image fit archive">
    <?php the_post_thumbnail( ); ?>
	</div>

	<div class="entry-content archive">
		<?php
		the_excerpt();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'intensify2wordpress' ),
			'after'  => '</div>',
		) );
    ?>
    <hr>
	</div><!-- .entry-content -->


	</div><!-- .inner -->
</article><!-- #post-<?php the_ID(); ?> -->
