<section class="main-container home-sub-section">
    <div class="col-md-12 mb-5">
        <div class="row">
            <div class="col-md-6 col-sm-12 subscription-image-block">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/complete-flexibility.jpg" class="img-w1">                
            </div>

            <div class="col-md-6 col-sm-12 d-flex justify-content-center flex-column subscription-content-block">
            <?php 
                $args = array(
                    'post__in' => array(27,28),
                    'post_type' => 'homesections',
                );
                $posts = get_posts($args);
                foreach ($posts as $post) : ?>

                <div class="sub-widget">                    
                    <h4 class="col-md-8 align-center m-0 col-sm-12">
                        <?php echo $post->post_title; ?>
                    </h4>
                    <p class="py-3 col-md-8 col-sm-12">
                        <?php echo $post->post_content; ?>
                    </p>
                </div>
                <?php
                    endforeach;
                ?>
            </div>
        </div>
    </div>
</section>    
<section class="main-container mt-5 home-sub-section">
    <div class="col-md-12">
        <div class="row">      
            <div class="col-md-6 col-sm-12 d-flex flex-column justify-content-center subscription-content-block">
            <?php 
                $args = array(
                    'post__in' => array(30,29),
                    'post_type' => 'homesections',
                );
                $posts = get_posts($args);
                foreach ($posts as $post) : ?>

                <div class="sub-widget">                    
                    <h4 class="col-md-8 align-center m-0 col-sm-12">
                       <?php echo $post->post_title; ?>
                    </h4>
                    <p class="col-md-8 py-3 col-sm-12">
                        <?php echo $post->post_content; ?>
                    </p>
                </div>
                <?php
                    endforeach;
                ?>
            </div>
            <div class="col-md-6 subscription-image-block pull-right">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/paperless-customer.jpg" class="img-w1">                
            </div>            
        </div>
    </div>    
</section>