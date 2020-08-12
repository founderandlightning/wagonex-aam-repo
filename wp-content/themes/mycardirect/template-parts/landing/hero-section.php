<section class="main-container hero-section">    
    <div class="row w-100">
        <div class="col-md-6 hero-content-section">
        <?php
            $my_query = new WP_Query('post_type=homesections&p=25');            
            while ($my_query->have_posts()) : $my_query->the_post(); ?>        
            <h1><?php the_title(); ?></h1>
            <h5><?php the_content(); ?></h5>
            <?php endwhile ?>

            <div class="hero-btn-section d-flex">
                <a href="http://app.wagonex.local/browse" class="btn btn-primary">Browse cars</a>
                <a href="http://app.wagonex.local/howitworks" class="btn btn-secondary ml-5">Learn more</a>
            </div>
        </div>
        <div class="col-md-6 hero-image-section d-flex">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/hero.png" class="img-hero">
        </div>            
    </div>        
</section>