<?php
/**
 * Template Name: Policies Template
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage mycardirect
 * @since mycardirect
 */

get_header();
?>

<main id="site-content" role="main">
    <section class="outer-container hero-section mb-5 page-title-container">    
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="row">
                    <?php
                    if ( have_posts() ) {
                        while ( have_posts() ) {
                    the_post(); ?>
                        <div class="col-md-12 col-sm-12">
                            <h3 class="text-center m-0"><?php the_title(); ?></h3>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <section class="outer-container">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-xl-12 col-sm-12">
                <div class="row">
                    <div class="m-0 mb-5 policy" id="post-<?php the_ID(); ?>">
                        <?php the_content(); ?>
                    </div>
                </div>    
            </div>
        </div>                            
    </section>    
    <?php
        }
    } ?>
</main>

<?php get_footer(); ?>
