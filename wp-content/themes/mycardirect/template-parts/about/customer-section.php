<section class="outer-container hero-section mb-5 mt-5 about-content-section">    
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-xs-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 d-flex mb-5 mt-5">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/about/our-people.jpg" class="img-w1">                
                </div>

                <div class="col-xs-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center flex-column subscription-content-block mb-5 mt-5">
                <?php 
                    $args = array(
                        'post__in' => array(53,54,55),
                        'post_type' => 'aboutsections',
                    );
                    $posts = get_posts($args);
                    foreach ($posts as $post) : ?>

                    <div class="sub-widget mb-5">                    
                        <div class="col-xl-9 col-lg-11 col-md-12 col-sm-12 col-xs-12">
                            <h4 class="d-flex m-0">
                                <?php echo $post->post_title; ?>
                            </h4>
                            <p class="mt-4">
                                <?php echo $post->post_content; ?>
                            </p>
                        </div>    
                    </div>
                    <?php
                        endforeach;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>    

<section class="outer-container hero-section mb-5 mt-5 about-content-section">    
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row flex-row-reverse">                  
                <div class="col-xs-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 d-flex mb-5 mt-5">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/about/life-support.jpg" class="img-w1">                
                </div>            

                <div class="col-xs-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center flex-column subscription-content-block mb-5 mt-5">
                <?php 
                    $args = array(
                        'post__in' => array(57,56),
                        'post_type' => 'aboutsections',
                    );
                    $posts = get_posts($args);
                    foreach ($posts as $post) : ?>

                    <div class="sub-widget mb-5">                    
                        <div class="col-xl-9 col-lg-11 col-md-12 col-sm-12 col-xs-12">
                            <h4 class="d-flex m-0">
                                <?php echo $post->post_title; ?>
                            </h4>
                            <p class="mt-4">
                                <?php echo $post->post_content; ?>
                            </p>
                        </div>    
                    </div>
                    <?php
                        endforeach;
                    ?>
                </div>
            </div>
        </div>
    </div>    
</section>