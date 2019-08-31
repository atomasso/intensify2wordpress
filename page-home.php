<?php
/**
 * Template Name: Home Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Intensify_to_WordPress
 */

get_header(); ?>

<?php get_template_part( 'template-parts/content', 'banner' ); ?>

<?php get_template_part( 'template-parts/content', 'features' ); ?>

<?php get_template_part( 'template-parts/content', 'testimonials' ); ?>

<?php get_template_part( 'template-parts/content', 'blog' ); ?>


<?php
get_footer();
