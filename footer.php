<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Intensify_to_WordPress
 */

?>

	</div><!-- #content -->
	
</div><!-- #page -->

<?php wp_footer(); ?> 

<?php

// Advanced Custom Fields
$footer_title = get_field( 'footer_title', 144 );
$footer_phone_number = get_field( 'footer_phone_number', 144 );
$footer_email = get_field( 'footer_email', 144 );
$footer_address = get_field( 'footer_address', 144 ); 
$footer_copyright = get_field( 'footer_copyright', 144 );
$footer_design_text_1 = get_field( 'footer_design_text_1', 144 ); 
$footer_design_text_2 = get_field( 'footer_design_text_2', 144 ); 
$footer_design_text_3 = get_field( 'footer_design_text_3', 144 );
$footer_design_text_4 = get_field( 'footer_design_text_4', 144 ); 

?>

<!-- FOOTER
===================================================== -->
<footer id="footer">
	<div class="inner">
		<h2><?php echo $footer_title; ?></h2>
		<ul class="actions">
			<li><span class="icon fa-phone"></span> <a href="#"><?php echo $footer_phone_number; ?></</li>
			<li><span class="icon fa-envelope"></span> <a ef="#"><?php echo $footer_email; ?></a></li>
			<li><span class="icon fa-map-marker"></span> <?php echo $footer_address; ?></li>
		</ul>
	</div>
	<div class="copyright">
	<?php echo $footer_copyright; ?>. <?php echo $footer_design_text_1; ?> <a href="https://templated.co"><?php echo $footer_design_text_2; ?></a>. <?php echo $footer_design_text_3; ?> <a href="https://unsplash.com"><?php echo $footer_design_text_4; ?></a>.
	</div>
</footer>

</body>
</html>
