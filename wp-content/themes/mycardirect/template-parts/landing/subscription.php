<?php
    $my_query = new WP_Query('post_type=homesections&p=18');
    while ($my_query->have_posts()) : $my_query->the_post(); ?>
    <section class="main-container subscription-section">
        <div class="col-xl-5 col-lg-7 col-md-8 col-sm-12 col-xs-12 m-auto">
            <h2><?php the_title(); ?></h2>
            <h5><?php the_content(); ?></h5>            
        </div>
    </section>            
<?php endwhile ?>