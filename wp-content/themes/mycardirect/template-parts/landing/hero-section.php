<section class="outer-container hero-section">    
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-xs-12 hero-content-section mb-5 mt-5">
                    <div class="justify-content-end justify-content-md-center d-flex">
                        <div class="col-xl-10 col-lg-11 col-md-11 col-sm-12 col-xs-12">
                            <?php
                            $my_query = new WP_Query('post_type=homesections&p=25');            
                            while ($my_query->have_posts()) : $my_query->the_post(); ?>   
                              
                                <h1 class="m-0"><?php the_title(); ?></h1>
                                <h5 class="m-0 mt-5 mb-5"><?php the_content(); ?></h5>
                         
                            <?php endwhile ?>

                            <div class="hero-btn-section d-flex">
                                <a href="https://wagonex.com/browse" class="col-xl-6 col-lg-6 col-md-6 col-sm-6  col-xs-6 btn btn-primary">Browse cars</a>
                                <a href="<?php echo get_home_url(); ?>/how-it-works/" class="col-xl-6 col-lg-6 col-md-6 col-sm-6  col-xs-6 btn btn-secondary ml-5">How we work</a>
                            </div>
                        </div>    
                    </div>
                </div>                    
                    <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-xs-12 hero-image-section d-flex mt-5">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/hero-banner.png" class="img-hero">
                    </div>
                </div>    
            </div>                
        </div>
    </div>        
</section>