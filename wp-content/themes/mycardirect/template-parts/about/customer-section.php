<section class="main-container about-customer-point mb-5">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/about/our-people.jpg" class="img-w1">
            </div>

            <div class="col-md-6 d-flex justify-content-center flex-column subscription-content-block">
            <?php 
                $args = array(
                    'post__in' => array(53,54,55),
                    'post_type' => 'aboutsections',
                );
                $posts = get_posts($args);
                foreach ($posts as $post) : ?>

                <div class="sub-widget mt-4">
                    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                    <h4 class="d-flex col-md-8 m-0">
                        <img src="<?php echo $url; ?>" class="img-w1" /><?php echo $post->post_title; ?>
                    </h4>
                    <p class="col-md-8 mt-4">
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
<section class="main-container about-customer-point mt-5 mb-5">
    <div class="col-md-12">
        <div class="row">           
            <div class="col-md-6 d-flex justify-content-center flex-column subscription-content-block">
            <?php 
                $args = array(
                    'post__in' => array(56,57),
                    'post_type' => 'aboutsections',
                );
                $posts = get_posts($args);
                foreach ($posts as $post) : ?>

                <div class="sub-widget mt-4">
                    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                    <h4 class="d-flex col-md-8 m-0">
                        <img src="<?php echo $url; ?>" class="img-w1"><?php echo $post->post_title; ?>
                    </h4>
                    <p class="col-md-8 mt-4">
                        <?php echo $post->post_content; ?>
                    </p>
                </div>
                <?php
                    endforeach;
                ?>
            </div>
            <div class="col-md-6 subscription-image-block pull-right">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/about/life-support.jpg" class="img-w1">                
            </div>            
        </div>
    </div>    
</section>