<section class="outer-container how-we-work-section">
    <div class="container-fluid">
        <div class="col-md-12 py-5">
            <div class="row">
                <div class="col-md-6 d-flex justify-content-start">
                    <img width="600" src="<?php bloginfo('template_url'); ?>/assets/images/howitwork/img_yourcar.png" class="img-hero"> 
                </div>
                     <div class="col-md-6 d-flex align-items-center">
                        <div class="sub-widget rotation">
                            <?php
                            $my_query = new WP_Query('post_type=howweworksections&p=48');            
                            while ($my_query->have_posts()) : $my_query->the_post(); ?>   
                            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>     
                            <h4 class="d-flex align-items-center">
                                <img src="<?php echo $url; ?>" class="img-w1 pr-3" />
                                <?php the_title(); ?>
                            </h4>
                            <p class="col-md-10"><?php the_content(); ?></p>
                            <div class="ready-btn-col">
                                <a href="javascript:void()" class="btn col-md-2 btn-secondary mt-5">Contact our team</a>
                            </div>
                            <?php endwhile ?>
                        </div>                    
                    </div>                    
                </div>
            </div>
        </div>
    </div> 
</section>       