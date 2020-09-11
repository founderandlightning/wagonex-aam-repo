<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main">
    <section class="outer-container hero-section mb-5 page-title-container">    
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="row">         
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <h3 class="text-center m-0"><?php the_title(); ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="outer-container tems-condition-page" id="post-<?php the_ID(); ?>">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-xl-12 col-sm-12">
                <div class="row">
                    <div class="m-0 mb-5 policy">
                        <h5 class="m-0 mt-5 mb-5">
						<?php if ( have_posts() ) {

							while ( have_posts() ) {
								the_post();

								the_content( __( 'Continue reading', 'twentytwenty' ) );
							}
						} ?>
						</h5>
                    </div>
                </div>        
            </div>    
        </div>            
    </section>
</main>

<?php get_footer(); ?>
