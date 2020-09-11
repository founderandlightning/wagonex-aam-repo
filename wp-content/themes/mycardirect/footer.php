<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
      <footer class="new-landing-footer">
         <div class="container-fluid footer-container">
            <div class="row">
               <div class="col-md-3 col-sm-12 col-xs-12 footer-info-column">
                  <?php
                     if(is_active_sidebar('sidebar-1')){
                        dynamic_sidebar('sidebar-1');
                     }
                  ?>          
               </div>

               <div class="col-md-3 col-sm-12 col-xs-12 footer-col footer-col-nav help-support-section">
                  <h4><span class="text-grey">My<span class="text-green">car</span>direct</span></h4>
                  <p>My<span class="text-green">car</span>direct<br />
                  	<?php
                        if(is_active_sidebar('sidebar-2')){
                           dynamic_sidebar('sidebar-2');
                        }
                     ?>
                  </p>
               </div>
               <div class="col-md-3 col-sm-12 col-xs-12 footer-col-nav">
                  <?php
                     if(is_active_sidebar('sidebar-3')){
                        dynamic_sidebar('sidebar-3');
                     }
                  ?>
                  <p>Our online service is open 24/7 every day of the year. Please don't hesitate to email us.</p>
               </div>
               <div class="col-md-3 col-sm-12 col-xs-12 footer-copy-write-section">
                  <div>
                     <h4>Links</h4>                       
                     <ul class="footer-nav navlinks p-0">            
                        <?php
                           if ( has_nav_menu( 'footer' ) ) {

                              wp_nav_menu(
                                 array(
                                    'container'  => '',
                                    'items_wrap' => '%3$s',
                                    'theme_location' => 'footer',
                                    )
                                 );
                              } 
                           ?>
                     </ul>
                     <div class="copy_write_seciton">
                        <?php
                           if(is_active_sidebar('sidebar-4')){
                              dynamic_sidebar('sidebar-4');
                           }
                        ?>
                     </div>
                  </div>                     
               </div>
               <div class="col-md-3 footer-col-social">
                  <div class="footer-asc-logo">            
                     <ul class="footer-nav navlinks px-0">
                        <li><a class="fb-icon" href="https://www.facebook.com/Mycardirect-233339464663329/" target="_blank"></a></li>
                        <li><a class="insta-icon" href="https://www.instagram.com/mycardirectuk/?hl=en" target="_blank"></a></li>
                        <li><a class="link-icon" href="https://www.linkedin.com/company/mycardirect/" target="_blank"></a></li>
                        <li><a class="twitter-icon" href="https://twitter.com/mycardirect" target="_blank"></a> </li>
                     </ul>
                     <p class="copy-right-block py-4">© 2020 Alliance Asset Management Ltd. </p>                     
                  </div>
               </div>
               <div class="col-md-3 bvrla-logo">
                  <img src="<?php bloginfo('template_url'); ?>/assets/images/footer-logo.png" alt="add_logo" />
               </div>               
            </div>
         </div>

         <section class="footer-content-section clearfix">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-xs-12">
                     <p class="mb-2">Alliance Asset Management Limited is registered with the Information Commissioner’s Office in compliance with the Data Protection Act 1998. Data Protection Registration reference number: Z7840262. Alliance Asset Management Limited is authorised and regulated by the Financial Conduct Authority with firm reference number 667946.</p>
                     <p class="mb-2">Insurance provision is supplied through Wagonex Limited an Appointed Representative of Complete Cover Group a company authorised and regulated by the Financial Conduct Authority under firm reference number 815256 to carry out insurance mediation activities. </p>
                     <p class="mb-2">Alliance Asset Management Limited Company Registration Number: 03107480.</p>
                     <p class="mb-2">VAT Number: 667706890</p>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12 powered-by">
                        <p class="pb-4">Powered by</p>
                        <a href="https://wagonex.com/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/images/wagonex.png" /></a>
                  </div>
               </div>
            </div>
         </section>
      </footer>	           
      <script src="<?php bloginfo('template_url'); ?>/assets/js/jquery-3.2.1.slim.min.js" ></script>
      <script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.min.js" ></script>
      <script src="<?php bloginfo('template_url'); ?>/assets/js/landing_crousel.js" async></script>
      <script src="<?php bloginfo('template_url'); ?>/assets/js/landing_crousel_setting.js" async></script>
      <script src="<?php bloginfo('template_url'); ?>/assets/js/bootstrap.min.js"></script>
      <script src="<?php bloginfo('template_url'); ?>/assets/js/bootstrap-select.js" async></script>
      <?php if (is_page(38)) { ?>
      <script src="<?php bloginfo('template_url'); ?>/assets/js/stickySidebar.js" async></script>
      <script src="<?php bloginfo('template_url'); ?>/assets/js/theia-sticky-sidebar.js" async></script>
      <script src="<?php bloginfo('template_url'); ?>/assets/js/faq.js" async></script>
      <?php } ?>
		<?php wp_footer(); ?>
      <?php include_once("cookie-consent.php"); ?>
	</body>
</html>
