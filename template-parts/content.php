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

	<div class="image fit">
		<?php the_post_thumbnail(); ?>
	</div>

	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'intensify2wordpress' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'intensify2wordpress' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->


	</div><!-- .inner -->
</article><!-- #post-<?php the_ID(); ?> -->
