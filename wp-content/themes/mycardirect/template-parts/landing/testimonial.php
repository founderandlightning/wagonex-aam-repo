
<?php
    $my_query = new WP_Query('post_type=homesections&p=19');
    while ($my_query->have_posts()) : $my_query->the_post(); ?>
    <section class="testimonial-section">
        <div class="container">
            <div class="col-md-10 col-sm-12 testimonial-container">
                <div class="testimonial-white-box">                
                    <img class="testimonail-logo" src="<?php bloginfo('template_url'); ?>/assets/images/logo.svg" />
                    <p><?php the_content(); ?></p>                    
                </div>    
            </div>
        </div>
    </section>
<?php endwhile ?>