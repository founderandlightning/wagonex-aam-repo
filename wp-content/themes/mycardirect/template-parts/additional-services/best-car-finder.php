<section class="outer-container best-car-container">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">               
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="sub-widget rotation">
                            <?php
                            $my_query = new WP_Query('post_type=additionalsections&p=81');            
                            while ($my_query->have_posts()) : $my_query->the_post(); ?>   
                            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>     
                            <h4 class="d-flex align-items-center justify-content-between m-0">                                
                                <?php the_title(); ?>
                                <a href="https://www.bestcarfinder.co.uk/" target="_blank">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/additional-services/bestcar.png">
                                </a>
                            </h4>
                            <p>
                                <?php the_content(); ?>
                            </p>
                            <?php endwhile ?>
                        </div>                    
                    </div>                    
                    <div class="col-md-6 text-center justify-content-center d-flex">                        
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/additional-services/best-car-finder.png" class="img-hero"> 
                    </div>             
                </div>                           
            </div>
        </div>
    </div> 
</section>       