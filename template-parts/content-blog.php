<!-- BLOG
===================================================== -->
<section id="three" class="wrapper">
	<div class="inner flex flex-3">

		<?php
		$args = array(
			'post_type'         => 'post',
			'posts_per_page'    => 10
		);
		$the_query = new WP_Query( $args );
	
		// counter that will limit the number of posts shown on homepage
		$count = 1;

		// Start Loop and limit the number of posts on the homepage to 3
		while( $the_query->have_posts( ) && $count <= 3 ) : $the_query->the_post();	
		?> 

		<div class="flex-item box">
			<div class="image fit">
			<?php intensify2wordpress_post_thumbnail(); ?>
			</div>
			<div class="content">
				<h3><?php the_title(); ?></h3>
				<p><?php the_excerpt(); ?></p>				
			</div>
		</div>

		<?php
		$count++;
		endwhile;
		?>    
		
  </div><!-- .inner.flex -->
</section><!-- #three -->