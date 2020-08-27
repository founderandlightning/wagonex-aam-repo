<section class="outer-container best-car-container mb-5">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <div class="row">                      
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-end justify-content-md-center">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/additional-services/vehicle-rental.png" class="img-hero img-self"> 
            </div>                            
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 d-flex align-items-center">
                <div class="sub-widget insurance justify-content-end justify-content-md-center d-flex collection">
                    <div class="col-xl-8 col-lg-10 col-md-11 col-sm-12 col-xs-12">
                        <?php
                        $my_query = new WP_Query('post_type=additionalsections&p=80');            
                        while ($my_query->have_posts()) : $my_query->the_post(); ?>   
                        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>     
                        <h4>
                            <?php the_title(); ?>
                        </h4>
                        <?php the_content(); ?>
                        <?php endwhile ?>
                    </div>                    
                </div>                    
            </div>            
        </div>
    </div> 
</section>       