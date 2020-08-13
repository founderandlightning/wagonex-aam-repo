<section class="outer-container">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">                
                <div class="col-md-6 d-flex align-items-center">
                        <div class="sub-widget rotation ">
                            <?php
                            $my_query = new WP_Query('post_type=additionalsections&p=79');            
                            while ($my_query->have_posts()) : $my_query->the_post(); ?>   
                            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>     
                            <h4><img src="<?php echo $url; ?>" class="img-w1 px-3" /><?php the_title(); ?></h4>
                            <p><?php the_content(); ?></p>
                            <?php endwhile ?>
                        </div>                    
                    </div>                    
                    <div class="col-md-6 text-center justify-content-center d-flex">
                       <img src="<?php bloginfo('template_url'); ?>/assets/images/additional-services/support.png" class="img-hero"> 
                    </div>          
                </div>                
            </div>
        </div>
    </div> 
</section>       