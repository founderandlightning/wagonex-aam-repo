<section class="outer-container hero-section">
        <div class="container-fluid">
            <div class="col-md-12 py-5">
            <div class="row flex-row-reverse">
                <div class="col-md-6 how-works-image-section">                
                    <img width="550" src="<?php bloginfo('template_url'); ?>/assets/images/howitwork/hero.png" class="img-hero"> 
                </div>            
                <div class="col-md-6 hero-content-section how-it-works-section">                    
                    <div class="justify-content-end justify-content-md-center d-flex">    
                        <div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
                            <?php
                                $my_query = new WP_Query('post_type=howweworksections&p=47');
                                
                            while ($my_query->have_posts()) :
                                $my_query->the_post(); ?>        
                                <h1 class="m-0"><?php the_title(); ?></h1>
                                <h5 class="m-0 mt-5"><?php the_content(); ?></h5>                        
                            <?php endwhile ?>
                        
                            <div class="ready-btn-col mt-5">
                                <a href="<?php echo get_option('app_site_url'); ?>/browse?domain=AAM" class="btn col-lg-5 col-xl-4 col-md-5 col-sm-5 col-xs-5 btn-primary">Browse cars</a>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>             
</section>