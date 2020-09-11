<?php
/**
 * Template Name: FAQ Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage mycardirect
 * @since mycardirect
 */

get_header();
?>

<main id="site-content" role="main">
    <section class="outer-container hero-section mb-5 page-title-container">    
        <div class="container-fluid">
            <div class="col-md-12">
                <div class="row">
                    <?php
                    $my_query = new WP_Query('post_type=page&p=38');            
                    while ($my_query->have_posts()) : $my_query->the_post(); ?>                        
                        <div class="col-md-12 col-sm-12">
                            <h3 class="text-center m-0"><?php the_title(); ?></h3>
                        </div>
                    <?php endwhile ?>                        
                </div>
            </div>
        </div>
    </section>

    <section class="outer-container">
        <div class="container">
            <div class="row">
        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 faq-sidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
         
         
      <div class="theiaStickySidebar">
        <ul>
            <li><a class="active" value="subscription-section" href="javascript:void(0);">Joining <span class="text-grey">my<span class="text-green">car</span>direct</span></a></li>
            <li><a href="javascript:void(0);" value="billing-section" class="">Billing</a></li>
            <li><a href="javascript:void(0);" value="insurance-section">Insurance</a>
                <ul class="insurance-sub-category" style="display: none;">
                    <li><a href="javascript:void(0);" value="insurance-policy-section">Insurance policy</a></li>
                    <li><a href="javascript:void(0);" value="insurance-quotes-section">Quotes</a></li>
                    <li><a href="javascript:void(0);" value="insurance-claim-section">Claim process</a></li>
                    <li><a href="javascript:void(0);" value="insurance-noclaim-section">No claim discount</a></li>
                    <li><a href="javascript:void(0);" value="insurance-repair-section">Repairs and bodywork</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" value="car-section">Cars</a></li>            
            <li><a href="javascript:void(0);" value="additional-benefits-section">Additional benefits</a></li>    
        </ul>
    </div>
</div>

    <div class="col-md-9 col-lg-9 col-sm-9 col-xs-12 faq-right-section">
        <div class="subscription-section faq-block">
         <h2 class="title-bar">Joining <span class="text-grey">my<span class="text-green">car</span>direct</span></h2>
          <div class="panel-group faq-section" id="accordion" role="tablist" aria-multiselectable="true">
            <?php 
               $args = array(
                  'post_type' => 'post',
                  'posts_per_page' => -1,
                  'orderby' => 'date',
                  'order' => 'ASC',
                  'category_name'=>'Joining mycardirect',
               );
               
               $loop = new wp_Query($args);
               $counter = 0;
               while($loop->have_posts()) : $loop->the_post();
               $counter++;
            ?>
            <div class="faq-panel">
               <div class="faq-question panel-heading" role="tab" id="mycardirect_<?php echo $counter; ?>">
                  <h6>
                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" 
                     href="#question_<?php echo $counter; ?>" aria-expanded="true" aria-controls="question_<?php echo $counter; ?>">
                        <?php the_title(); ?>
                        <span class="pull-right"><i class="more-less fa fa-plus" aria-hidden="true"></i></span>
                     </a>
                  </h6> 
               </div>
               <div id="question_<?php echo $counter; ?>" class="panel-collapse collapse in <?php if ($counter == 1) { echo "show"; } ?>" role="tabpanel" 
               aria-labelledby="mycardirect_<?php echo $counter; ?>">
                  <div class="faq-answer">
                      <p class="answer">
                      <?php the_content(); ?>
                     </p>
                  </div>
               </div>
            </div>
            <?php
               endwhile;
               wp_reset_query(); 
            ?>
          </div>                                
        </div>    
        <!-- /*******************************************************************
                                    Billing Section
        ******************************************************************/ -->

       <div class="billing-section faq-block hide">
         <h2 class="title-bar">Billing</h2>
          <div class="panel-group faq-section" id="accordion" role="tablist" aria-multiselectable="true">
          <?php 
               $args = array(
                  'post_type' => 'post',
                  'posts_per_page' => -1,
                  'orderby' => 'date',
                  'order' => 'ASC',
                  'category_name'=>'Billing',
               );
               
               $loop = new wp_Query($args);
               $counter = 0;
               while($loop->have_posts()) : $loop->the_post();
               $counter++;
            ?>
            <div class="faq-panel">
               <div class="faq-question panel-heading" role="tab" id="billing_question_<?php echo $counter; ?>">
                  <h6>
                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" 
                     href="#billing_answer_<?php echo $counter; ?>" aria-expanded="true" aria-controls="billing_answer_<?php echo $counter; ?>">
                        <?php the_title(); ?>
                        <span class="pull-right"><i class="more-less fa fa-plus" aria-hidden="true"></i></span>
                     </a>
                  </h6> 
               </div>
               <div id="billing_answer_<?php echo $counter; ?>" class="panel-collapse collapse in <?php if ($counter == 1) { echo "show"; } ?>" role="tabpanel" 
               aria-labelledby="billing_question_<?php echo $counter; ?>">
                  <div class="faq-answer">
                      <p class="answer">
                      <?php the_content(); ?>
                     </p>
                  </div>
               </div>
            </div>
            <?php
               endwhile;
               wp_reset_query(); 
            ?>
          </div>                         
        </div>   

 <!-- /*******************************************************************
                               Insurance Section
        ******************************************************************/ -->

       <div class="insurance-section hide faq-block">
         <h2 class="title-bar">Insurance</h2>
          <div class="panel-group faq-section" id="accordion" role="tablist" aria-multiselectable="true">
          <?php 
               $args = array(
                  'post_type' => 'post',
                  'posts_per_page' => -1,
                  'orderby' => 'date',
                  'order' => 'ASC',
                  'category_name'=>'Insurance',
               );
               
               $loop = new wp_Query($args);
               $counter = 0;
               while($loop->have_posts()) : $loop->the_post();
               $counter++;
            ?>
            <div class="faq-panel">
               <div class="faq-question panel-heading" role="tab" id="inssurance_question_<?php echo $counter; ?>">
                  <h6>
                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" 
                     href="#inssurance_answer_<?php echo $counter; ?>" aria-expanded="true" aria-controls="inssurance_answer_<?php echo $counter; ?>">
                        <?php the_title(); ?>
                        <span class="pull-right"><i class="more-less fa fa-plus" aria-hidden="true"></i></span>
                     </a>
                  </h6> 
               </div>
               <div id="inssurance_answer_<?php echo $counter; ?>" class="panel-collapse collapse in <?php if ($counter == 1) { echo "show"; } ?>" role="tabpanel" 
               aria-labelledby="inssurance_question_<?php echo $counter; ?>">
                  <div class="faq-answer">
                      <p class="answer">
                      <?php the_content(); ?>
                     </p>
                  </div>
               </div>
            </div>
            <?php
               endwhile;
               wp_reset_query(); 
            ?>
          </div>
        </div>
        
        <div class="insurance-policy-section hide faq-block">
            <h2 class="title-bar">Insurance Policy</h2>
            <div class="panel-group faq-section" id="accordion" role="tablist" aria-multiselectable="true">
            <?php 
               $args = array(
                  'post_type' => 'post',
                  'posts_per_page' => -1,
                  'orderby' => 'date',
                  'order' => 'ASC',
                  'category_name'=>'Insurance Policy',
               );
               
               $loop = new wp_Query($args);
               $counter = 0;
               while($loop->have_posts()) : $loop->the_post();
               $counter++;
            ?>
            <div class="faq-panel">
               <div class="faq-question panel-heading" role="tab" id="inssurance_policy_question_<?php echo $counter; ?>">
                  <h6>
                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" 
                     href="#inssurance_policy_answer_<?php echo $counter; ?>" aria-expanded="true" aria-controls="inssurance_policy_answer_<?php echo $counter; ?>">
                        <?php the_title(); ?>
                        <span class="pull-right"><i class="more-less fa fa-plus" aria-hidden="true"></i></span>
                     </a>
                  </h6> 
               </div>
               <div id="inssurance_policy_answer_<?php echo $counter; ?>" class="panel-collapse collapse in <?php if ($counter == 1) { echo "show"; } ?>" role="tabpanel" 
               aria-labelledby="inssurance_policy_question_<?php echo $counter; ?>">
                  <div class="faq-answer">
                      <p class="answer">
                      <?php the_content(); ?>
                     </p>
                  </div>
               </div>
            </div>
            <?php
               endwhile;
               wp_reset_query(); 
            ?>
         </div>     
      </div> 
      
   
        <div class="insurance-quotes-section hide faq-block">
          <h2 class="title-bar">Quotes</h2>
          <div class="panel-group faq-section" id="accordion" role="tablist" aria-multiselectable="true">
          <?php 
               $args = array(
                  'post_type' => 'post',
                  'posts_per_page' => -1,
                  'orderby' => 'date',
                  'order' => 'ASC',
                  'category_name'=>'Quotes',
               );
               
               $loop = new wp_Query($args);
               $counter = 0;
               while($loop->have_posts()) : $loop->the_post();
               $counter++;
            ?>
            <div class="faq-panel">
               <div class="faq-question panel-heading" role="tab" id="quote_question_<?php echo $counter; ?>">
                  <h6>
                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" 
                     href="#quote_answer_<?php echo $counter; ?>" aria-expanded="true" aria-controls="quote_answer_<?php echo $counter; ?>">
                        <?php the_title(); ?>
                        <span class="pull-right"><i class="more-less fa fa-plus" aria-hidden="true"></i></span>
                     </a>
                  </h6> 
               </div>
               <div id="quote_answer_<?php echo $counter; ?>" class="panel-collapse collapse in <?php if ($counter == 1) { echo "show"; } ?>" role="tabpanel" 
               aria-labelledby="quote_question_<?php echo $counter; ?>">
                  <div class="faq-answer">
                      <p class="answer">
                      <?php the_content(); ?>
                     </p>
                  </div>
               </div>
            </div>
            <?php
               endwhile;
               wp_reset_query(); 
            ?>
           </div>                    
        </div>


      <div class="insurance-claim-section hide faq-block">
         <h2 class="title-bar">Claim Process</h2>
          <div class="panel-group faq-section" id="accordion" role="tablist" aria-multiselectable="true">
          <?php 
               $args = array(
                  'post_type' => 'post',
                  'posts_per_page' => -1,
                  'orderby' => 'date',
                  'order' => 'ASC',
                  'category_name'=>'Claim Process',
               );
               
               $loop = new wp_Query($args);
               $counter = 0;
               while($loop->have_posts()) : $loop->the_post();
               $counter++;
            ?>
            <div class="faq-panel">
               <div class="faq-question panel-heading" role="tab" id="claim_process_question_<?php echo $counter; ?>">
                  <h6>
                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" 
                     href="#claim_process_answer_<?php echo $counter; ?>" aria-expanded="true" aria-controls="claim_process_answer_<?php echo $counter; ?>">
                        <?php the_title(); ?>
                        <span class="pull-right"><i class="more-less fa fa-plus" aria-hidden="true"></i></span>
                     </a>
                  </h6> 
               </div>
               <div id="claim_process_answer_<?php echo $counter; ?>" class="panel-collapse collapse in <?php if ($counter == 1) { echo "show"; } ?>" role="tabpanel" 
               aria-labelledby="claim_process_question_<?php echo $counter; ?>">
                  <div class="faq-answer">
                      <p class="answer">
                      <?php the_content(); ?>
                     </p>
                  </div>
               </div>
            </div>
            <?php
               endwhile;
               wp_reset_query(); 
            ?>
          </div>
        </div>

      <div class="insurance-noclaim-section hide faq-block">
         <h2 class="title-bar">No Claim Discount</h2>
         <div class="panel-group faq-section" id="accordion" role="tablist" aria-multiselectable="true">
         <?php 
               $args = array(
                  'post_type' => 'post',
                  'posts_per_page' => -1,
                  'orderby' => 'date',
                  'order' => 'ASC',
                  'category_name'=>'No Claim Discount',
               );
               
               $loop = new wp_Query($args);
               $counter = 0;
               while($loop->have_posts()) : $loop->the_post();
               $counter++;
            ?>
            <div class="faq-panel">
               <div class="faq-question panel-heading" role="tab" id="claim_discount_question_<?php echo $counter; ?>">
                  <h6>
                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" 
                     href="#claim_discount_answer_<?php echo $counter; ?>" aria-expanded="true" aria-controls="claim_discount_answer_<?php echo $counter; ?>">
                        <?php the_title(); ?>
                        <span class="pull-right"><i class="more-less fa fa-plus" aria-hidden="true"></i></span>
                     </a>
                  </h6> 
               </div>
               <div id="claim_discount_answer_<?php echo $counter; ?>" class="panel-collapse collapse in <?php if ($counter == 1) { echo "show"; } ?>" role="tabpanel" 
               aria-labelledby="claim_discount_question_<?php echo $counter; ?>">
                  <div class="faq-answer">
                      <p class="answer">
                      <?php the_content(); ?>
                     </p>
                  </div>
               </div>
            </div>
            <?php
               endwhile;
               wp_reset_query(); 
            ?>
          </div>
       </div>                

       <div class="insurance-repair-section hide faq-block">
         <h2 class="title-bar">Repairs and bodywork</h2>
         <div class="panel-group faq-section" id="accordion" role="tablist" aria-multiselectable="true">
         <?php 
               $args = array(
                  'post_type' => 'post',
                  'posts_per_page' => -1,
                  'orderby' => 'date',
                  'order' => 'ASC',
                  'category_name'=>'Repairs and bodywork',
               );
               
               $loop = new wp_Query($args);
               $counter = 0;
               while($loop->have_posts()) : $loop->the_post();
               $counter++;
            ?>
            <div class="faq-panel">
               <div class="faq-question panel-heading" role="tab" id="repaire_question_<?php echo $counter; ?>">
                  <h6>
                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" 
                     href="#repaire_answer_<?php echo $counter; ?>" aria-expanded="true" aria-controls="repaire_answer_<?php echo $counter; ?>">
                        <?php the_title(); ?>
                        <span class="pull-right"><i class="more-less fa fa-plus" aria-hidden="true"></i></span>
                     </a>
                  </h6> 
               </div>
               <div id="repaire_answer_<?php echo $counter; ?>" class="panel-collapse collapse in <?php if ($counter == 1) { echo "show"; } ?>" role="tabpanel" 
               aria-labelledby="repaire_question_<?php echo $counter; ?>">
                  <div class="faq-answer">
                      <p class="answer">
                      <?php the_content(); ?>
                     </p>
                  </div>
               </div>
            </div>
            <?php
               endwhile;
               wp_reset_query(); 
            ?>
          </div>
        </div>

      <div class="car-section hide faq-block">
         <h2 class="title-bar">Cars</h2>
          <div class="panel-group faq-section" id="accordion" role="tablist" aria-multiselectable="true">
          <?php 
               $args = array(
                  'post_type' => 'post',
                  'posts_per_page' => -1,
                  'orderby' => 'date',
                  'order' => 'ASC',
                  'category_name'=>'Cars',
               );
               
               $loop = new wp_Query($args);
               $counter = 0;
               while($loop->have_posts()) : $loop->the_post();
               $counter++;
            ?>
            <div class="faq-panel">
               <div class="faq-question panel-heading" role="tab" id="car_question_<?php echo $counter; ?>">
                  <h6>
                     <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" 
                     href="#car_answer_<?php echo $counter; ?>" aria-expanded="true" aria-controls="car_answer_<?php echo $counter; ?>">
                        <?php the_title(); ?>
                        <span class="pull-right"><i class="more-less fa fa-plus" aria-hidden="true"></i></span>
                     </a>
                  </h6> 
               </div>
               <div id="car_answer_<?php echo $counter; ?>" class="panel-collapse collapse in <?php if ($counter == 1) { echo "show"; } ?>" role="tabpanel" 
               aria-labelledby="car_question_<?php echo $counter; ?>">
                  <div class="faq-answer">
                      <p class="answer">
                      <?php the_content(); ?>
                     </p>
                  </div>
               </div>
            </div>
            <?php
               endwhile;
               wp_reset_query(); 
            ?>
          </div>                    
        </div>

                            <div class="additional-benefits-section hide faq-block">
                            <h2 class="title-bar">Additional Benefits</h2>
                            <div class="panel-group faq-section" id="accordion" role="tablist" aria-multiselectable="true">
                            <?php 
                                $args = array(
                                    'post_type' => 'post',
                                    'posts_per_page' => -1,
                                    'orderby' => 'date',
                                    'order' => 'ASC',
                                    'category_name'=>'Additional Benefits',
                                );
                                
                                $loop = new wp_Query($args);
                                $counter = 0;
                                while($loop->have_posts()) : $loop->the_post();
                                $counter++;
                                ?>
                                <div class="faq-panel">
                                <div class="faq-question panel-heading" role="tab" id="benefit_question_<?php echo $counter; ?>">
                                    <h6>
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" 
                                        href="#benefit_answer_<?php echo $counter; ?>" aria-expanded="true" aria-controls="benefit_answer_<?php echo $counter; ?>">
                                            <?php the_title(); ?>
                                            <span class="pull-right"><i class="more-less fa fa-plus" aria-hidden="true"></i></span>
                                        </a>
                                    </h6> 
                                </div>
                                        <div id="benefit_answer_<?php echo $counter; ?>" class="panel-collapse collapse in <?php if ($counter == 1) { echo "show"; } ?>" role="tabpanel" 
                                            aria-labelledby="benefit_question_<?php echo $counter; ?>">
                                            <div class="faq-answer">
                                                <p class="answer">
                                                    <?php the_content(); ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        endwhile;
                                        wp_reset_query(); 
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>              
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>