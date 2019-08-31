<?php $button_text = get_field( 'button_text' ); ?>

<!-- BANNER
===================================================== -->
<section id="banner">
	<div class="content">
		<h1><?php bloginfo( 'name' ); ?></h1>
		<p><?php bloginfo( 'description' ); ?></p>
		<ul class="actions">
			<li><a href="#one" class="button scrolly"><?php echo $button_text; ?></a></li>
		</ul>
	</div><!-- .content -->
</section><!-- #banner -->