<?php
/**
 * Template Name: How we work Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage mycardirect
 * @since mycardirect
 */

get_header();
?>

<main id="site-content" role="main">

<?php get_template_part( 'template-parts/how-we-work/hero-section' ); ?>

</main><!-- #site-content -->
<?php get_template_part( 'template-parts/how-we-work/rotation' ); ?>
<?php get_template_part( 'template-parts/how-we-work/subscribe' ); ?>
<?php get_template_part( 'template-parts/how-we-work/insurance' ); ?>
<?php get_template_part( 'template-parts/how-we-work/delivery-collection' ); ?>
<?php get_template_part( 'template-parts/how-we-work/get-started' ); ?>
<?php get_footer(); ?>
