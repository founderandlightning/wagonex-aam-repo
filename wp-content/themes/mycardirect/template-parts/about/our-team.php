<section class="our-team-container">
    <div class="main-container">
    <div class="team-section our-story-team">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Our team</h2>
            </div>
        </div>
        <div class="row our-team">        
            <?php 
                $args = array(            
                    'post_type' => 'ourteamsections',
                    'posts_per_page' => -1,
                );
                $posts = get_posts($args);
                foreach ($posts as $post) : ?>

                <div class="col-md-3">
                    <div class="out-team-container">
                        <div class="member-pic">
                            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                            <img src="<?php echo $url; ?>" />
                        </div>
                        <div class="member-name">
                            <?php echo $post->post_title; ?>    
                        </div>
                        <div class="member-position">
                            <?php echo $post->post_content; ?>
                        </div>
                        <div class="member-linkedin">
                            <a class="member-in" href="<?php echo $post->post_excerpt; ?>" target="_blank">                      
                            </a>
                        </div>
                    </div>
                </div>
                <?php
                    endforeach;
                ?>
            </div>
        </div>
    </div>
</section>