<?php
/**
 * Template Name: T&C Template
 * Template Post Type: post, page
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
                        $my_query = new WP_Query('post_type=page&p=40');            
                        while ($my_query->have_posts()) : $my_query->the_post(); ?>
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
                        <h5 class="m-0 mt-5 mb-5"><?php the_content(); ?></h5>
                        <?php endwhile ?> 
                    </div>
                </div>        
            </div>    
        </div>            
    </section>
</main>

<?php get_footer(); ?>
