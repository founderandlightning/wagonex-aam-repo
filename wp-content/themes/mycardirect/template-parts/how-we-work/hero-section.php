<section class="main-container hero-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 hero-content-section how-it-works-section">
                <div  class="col-md-8">
                <?php
                    $my_query = new WP_Query('post_type=howweworksections&p=47');            
                    while ($my_query->have_posts()) : $my_query->the_post(); ?>        
                    <h1><?php the_title(); ?></h1>
                    <h5><?php the_content(); ?></h5>
                    <?php endwhile ?>
                    <div class="ready-btn-col">
                        <a href="https://connectedcarclub.co.uk/browse" class="btn col-md-2 btn-primary">Browse cars</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 how-works-image-section">
                <img src="https://connectedcarclub.co.uk/wagonex/images/how_it_works1.svg" width="750" class="img-hero">
            </div>
        </div>
    </div>
</section>