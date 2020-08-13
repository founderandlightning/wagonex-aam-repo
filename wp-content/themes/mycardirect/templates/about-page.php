<?php
/**
 * Template Name: About Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage mycardirect
 * @since mycardirect
 */

get_header();
?>

<main id="site-content" role="main">

<?php get_template_part( 'template-parts/about/hero-section' ); ?>

</main><!-- #site-content -->
<?php get_template_part( 'template-parts/about/customer-section' ); ?>
<?php get_template_part( 'template-parts/about/our-team' ); ?>
<?php get_template_part( 'template-parts/about/clickanddrive' ); ?>
<?php get_footer(); ?>
