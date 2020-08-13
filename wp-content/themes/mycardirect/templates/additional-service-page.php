<?php
/**
 * Template Name: Additional Service Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage mycardirect
 * @since mycardirect
 */

get_header();
?>

<main id="site-content" role="main">

<?php get_template_part( 'template-parts/additional-services/hero-section' ); ?>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/additional-services/vehicales' ); ?>
<?php get_template_part( 'template-parts/additional-services/support' ); ?>
<?php get_template_part( 'template-parts/additional-services/vehicle-rental' ); ?>
<?php get_template_part( 'template-parts/additional-services/best-car-finder' ); ?>
<?php get_template_part( 'template-parts/additional-services/clickcar' ); ?>

<?php get_footer(); ?>
