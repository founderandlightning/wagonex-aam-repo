<?php
/**
 * Template Name: Home Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage mycardirect
 * @since mycardirect
 */

get_header();
?>

<main id="site-content" role="main">

<?php get_template_part( 'template-parts/landing/hero-section' ); ?>

</main><!-- #site-content -->
<?php get_template_part( 'template-parts/landing/company-logo' ); ?>
<?php get_template_part( 'template-parts/landing/subscription' ); ?>
<?php get_template_part( 'template-parts/landing/subscription-section-one' ); ?>
<?php get_template_part( 'template-parts/landing/subscription-section-second' ); ?>
<?php get_template_part( 'template-parts/landing/how-it-work' ); ?>
<?php get_template_part( 'template-parts/landing/terms' ); ?>
<?php get_template_part( 'template-parts/landing/featured-vehicles' ); ?>
<?php get_template_part( 'template-parts/landing/testimonial' ); ?>

<?php get_footer(); ?>
