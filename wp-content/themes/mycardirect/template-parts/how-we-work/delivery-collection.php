<section class="outer-container how-we-work-section">
    <div class="container-fluid">
        <div class="col-md-12 py-5">
            <div class="row content-right-center">
                <div class="col-md-6 d-flex align-items-center">
                    <div class="sub-widget your-car">
                        <?php
                            $my_query = new WP_Query('post_type=howweworksections&p=51');            
                            while ($my_query->have_posts()) : $my_query->the_post(); ?>        
                            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                            <h4 class="d-flex align-items-center">
                                <img src="<?php echo $url; ?>" class="img-w1 pr-3" />
                                <?php the_title(); ?>
                            </h4>
                            <p class="col-md-10">
                                <?php the_content(); ?>
                            </p>
                            <?php endwhile ?>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <img width="600" src="<?php bloginfo('template_url'); ?>/assets/images/howitwork/home-delivery.png" class="img-hero"> 
                </div>
            </div>
        </div>
    </div>        
</section>    