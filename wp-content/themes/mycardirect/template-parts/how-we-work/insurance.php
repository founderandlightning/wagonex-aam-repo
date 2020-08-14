<section class="outer-container how-we-work-section">
    <div class="container-fluid">
        <div class="col-md-12 py-5">
            <div class="row content-left-center">
                <div class="col-md-6 d-flex justify-content-start">
                    <img width="600" src="<?php bloginfo('template_url'); ?>/assets/images/howitwork/insurance.jpg" class="img-hero"> 
                </div>                
                <div class="col-md-6 d-flex align-items-center">
                    <div class="sub-widget collection">
                        <?php
                        $my_query = new WP_Query('post_type=howweworksections&p=50');            
                        while ($my_query->have_posts()) : $my_query->the_post(); ?>        
                        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>     
                        <h4 class="d-flex align-items-center">
                            <img src="<?php echo $url; ?>" class="img-w1 pr-3" />
                            <?php the_title(); ?>
                        </h4>
                        <p class="col-md-10"><?php the_content(); ?></p>
                        <?php endwhile ?>
                    </div>
                </div>                
            </div>
        </div>
    </div>    
</section>