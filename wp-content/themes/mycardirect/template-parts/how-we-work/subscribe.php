<section class="outer-container how-we-work-section">
    <div class="container-fluid">
        <div class="col-md-12 py-5">
            <div class="row flex-row-reverse">        
             <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-end justify-content-md-center">                    
                    <img width="600" src="<?php bloginfo('template_url'); ?>/assets/images/howitwork/subscribe.jpg" class="img-hero">
                </div>                         
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 d-flex align-items-center">
                    <div class="sub-widget insurance justify-content-end justify-content-md-center d-flex">
                        <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <?php
                        $my_query = new WP_Query('post_type=howweworksections&p=49');            
                        while ($my_query->have_posts()) : $my_query->the_post(); ?>        
                        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                        <h4 class="d-flex align-items-center">
                            <img src="<?php echo $url; ?>" class="img-w1 pr-3" />
                            <?php the_title(); ?>
                        </h4>
                        <?php the_content(); ?>
                        <?php endwhile ?>                        
                        </div>
                    </div>
                </div>                
                             
            </div>
        </div>
    </div>
</div>        
</section>