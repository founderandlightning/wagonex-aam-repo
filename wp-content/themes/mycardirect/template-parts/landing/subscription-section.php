<section class="main-container">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6 subscription-image-block">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/complete-flexibility.jpg" class="img-w1">                
            </div>

            <div class="col-md-6 subscription-content-block">
            <?php 
                $args = array(
                    'post__in' => array(28,27),
                    'post_type' => 'homesections',
                );
                $posts = get_posts($args);
                foreach ($posts as $post) : ?>

                <div class="sub-widget">
                    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                    <h4 class="d-flex">
                        <img src="<?php echo $url; ?>" class="img-w1 px-3" /><?php echo $post->post_title; ?>
                    </h4>
                    <p class="px-3 col-md-8">
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
<section class="main-container">
    <div class="col-md-12">
        <div class="row">           

            <div class="col-md-6 subscription-content-block">
            <?php 
                $args = array(
                    'post__in' => array(30,29),
                    'post_type' => 'homesections',
                );
                $posts = get_posts($args);
                foreach ($posts as $post) : ?>

                <div class="sub-widget">
                    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                    <h4 class="d-flex">
                        <img src="<?php echo $url; ?>" class="img-w1 px-3"><?php echo $post->post_title; ?>
                    </h4>
                    <p class="px-3 col-md-8">
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