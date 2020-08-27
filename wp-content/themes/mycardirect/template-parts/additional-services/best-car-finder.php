<section class="outer-container best-car-container mt-5">    
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="row flex-row-reverse">               
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-end justify-content-md-center">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/additional-services/best-car-finder.png" class="img-hero img-self"> 
                </div>             
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 d-flex align-items-center">
                    <div class="sub-widget insurance justify-content-end justify-content-md-center d-flex">
                        <div class="col-xl-8 col-lg-10 col-md-11 col-sm-12 col-xs-12">
                            <?php
                            $my_query = new WP_Query('post_type=additionalsections&p=81');            
                            while ($my_query->have_posts()) : $my_query->the_post(); ?>   
                            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>     
                            <h4 class="d-flex align-items-center justify-content-between m-0 mt-5">                                
                                <?php the_title(); ?>
                                <a href="https://www.bestcarfinder.co.uk/" target="_blank">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/additional-services/bestcar.png">
                                </a>
                            </h4>
                            <?php the_content(); ?>
                            <?php endwhile ?>
                            <div class="ready-btn-col">
                                <a href="https://www.bestcarfinder.co.uk/" target="_blank" class="btn col-lg-5 col-xl-5 col-md-5 col-sm-5 col-xs-5 btn-primary mt-5 img-self">BestCarFinder</a>
                            </div>
                        </div>
                    </div>                    
                </div>                                
            </div>                           
        </div>
    </div>        
</section>       