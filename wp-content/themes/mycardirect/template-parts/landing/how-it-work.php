<section class="how-it-work-section">
    <div class="main-container">
        <div class="container-fluid">
            <h2 class="text-center mt-4 mb-5">How we work</h2>        
            <div class="owl-carousel owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                    <?php 
                    $args = array(
                        'post__in' => array(21,23,24,34),
                        'post_type' => 'homesections',
                    );
                    $posts = get_posts($args);
                    foreach ($posts as $post) : ?>                    
                        <div class="owl-item cloned">
                            <div class="white-box-container col-md-12">
                                <div class="white-box"> 
                                    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                                    <h5 class="d-flex my-1 align-left">
                                        <div class="pr-4">
                                            <img src="<?php echo $url; ?>" width="48" alt="collection" />
                                        </div>
                                        <?php echo $post->post_title; ?>
                                    </h5>
                                    <p><?php echo $post->post_content; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php
                    endforeach;
                ?>
                    
        </div>
    </div>
        <div class="owl-nav">
            <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>
            <div class="col-md-12 btn-section">
                <a class="btn btn-secondary ml-5" href="http://app.wagonex.local/howitworks">Learn more</a>
            </div>
        </div>
    </div>
</section>