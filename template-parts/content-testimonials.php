<!-- TESTIMONIALS
===================================================== -->
<section id="two" class="wrapper style1 special">

<?php $loop = new WP_Query( array ( 'post_type' => 'testimonial', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

<?php while( $loop->have_posts( ) ) : $loop->the_post(); ?> 

	<div class="inner">
		<h2><?php the_title(); ?></h2>
		<figure>
		    <blockquote>
          <?php the_content(); ?>
		    </blockquote>
		    <footer>
		        <cite class="author"><?php echo get_field( 'author' ); ?></cite>
		        <cite class="company"><?php echo get_field( 'company' ); ?></cite>
        </footer>
        <hr>  
		</figure>
  </div><!-- .inner -->

<?php endwhile; ?>

</section><!-- #two -->