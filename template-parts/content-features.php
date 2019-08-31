<?php 

// Advanced Custom Fields
$features_image = get_field( 'features_image' );	
$feature_1_title = get_field( 'feature_1_title' );
$feature_1_description = get_field( 'feature_1_description' );
$feature_2_title = get_field( 'feature_2_title' );
$feature_2_description = get_field( 'feature_2_description' );
$feature_3_title = get_field( 'feature_3_title' );
$feature_3_description = get_field( 'feature_3_description' );
$feature_4_title = get_field( 'feature_4_title' );
$feature_4_description = get_field( 'feature_4_description' );
$footer_email = get_field( 'footer_email' );

?>

<!-- FEATURES
===================================================== -->
<section id="one" class="wrapper">
	<div class="inner flex flex-3">
		<div class="flex-item left">
			<div>
				<h3><?php echo $feature_1_title; ?></h3>
				<p><?php echo $feature_1_description; ?></p>
			</div>
			<div>
				<h3><?php echo $feature_2_title; ?></h3>
				<p><?php echo $feature_2_description; ?></p>
			</div>
		</div>
		<div class="flex-item image fit round">

			<!-- If user uploaded an image -->
			<?php if ( !empty( $features_image ) ) : ?>

				<img src="<?php echo $features_image['url']; ?>" alt="<?php echo $features_image['alt']; ?>" />
				
			<?php endif; ?>

		</div>
		<div class="flex-item right">
			<div>
			<h3><?php echo $feature_3_title; ?></h3>
			<p><?php echo $feature_3_description; ?></p>
			</div>
			<div>
				<h3><?php echo $feature_4_title; ?></h3>
				<p><?php echo $feature_4_description; ?></p>
			</div>
		</div>
	</div><!-- inner flex -->
</section><!-- one -->