<section class="outer-container">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row content-right-center">                               
                <div class="col-md-6 subscription-content-block car-content car-content-right">
                    <div class="sub-widget insurance">
                        <?php
                        $my_query = new WP_Query('post_type=howweworksections&p=49');            
                        while ($my_query->have_posts()) : $my_query->the_post(); ?>        
                        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                        <h4><img src="<?php echo $url; ?>" class="img-w1 px-3" /><?php the_title(); ?></h4>
                        <p><?php the_content(); ?></p>
                        <?php endwhile ?>                        
                    </div>
                </div>                
                <div class="col-md-6 text-center">                    
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/howitwork/subscribe.jpg" class="img-hero">
                </div>                
            </div>
        </div>
    </div>
</div>        
</section>