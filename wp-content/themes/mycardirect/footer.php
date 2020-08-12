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
               <div class="col-xs-12 col-sm-3 footer-info-column">
                  <h4>AAM Group HQ</h4>
                  <ul class="p-0">
                     <li>Alliance Asset Management Ltd.</li>   
                     <li>3 Eaton Court,</li>
                     <li>Colmworth Business Park,</li>
                     <li>St Neots</li>
                     <li>PE19 8ER</li>
                  </ul>          
               </div>

               <div class="col-xs-12 col-sm-3 footer-col footer-col-nav help-support-section">
                  <h4>MyCarDirect</h4>
                  <p>MyCarDirect<br />Unit 1 Hall Road,<br />Hemel Hempstead Industrial Estate,<br />Hemel Hempstead,<br />HP2 7BH</p>
               </div>
               <div class="col-xs-12 col-sm-3 footer-col-nav">
                  <h4>Opening hours</h4> 
                  
                  <ul class="footer-nav navlinks p-0">            
                     <li>Mon: 8:00am – 5:00pm</li>
                     <li>Tue: 8:00am – 5:00pm</li>
                     <li>Wed: 8:00am – 5:00pm</li>
                     <li>Thurs: 8:00am – 5:00pm</li>
                     <li>Fri: 8:00am – 5:00pm</li>
                     <li>Sat: CLOSED</li>
                     <li>Sun: CLOSED</li>
                  </ul>
               </div>
               <div class="col-xs-12 col-sm-3 footer-copy-write-section">
                  <div class="footer-col-social">
                     <h4>Links</h4>                       
                     <ul class="footer-nav navlinks p-0">            
                        <li>FAQs</li>
                        <li>Terms & Conditions</li>
                        <li>Policies</li>
                     </ul>
                     <div class="copy_write_seciton">
                        <h4>Help and support</h4>
                        <a href="mailto:enquiries@mycardirect.co.uk">enquiries@mycardirect.co.uk</a>
                        <p class="clearfix">0844 414 2903</p>
                     </div>
                  </div>                     
               </div>
               <div class="col-md-12 footer-col-social">
                  <div class="footer-asc-logo">            
                     <ul class="footer-nav navlinks px-0">
                        <li><a class="fb-icon" href="https://www.facebook.com/wagonex" target="_blank"></a></li>
                        <li><a class="insta-icon" href="https://www.instagram.com/wagonex/" target="_blank"></a></li>
                        <li><a class="link-icon" href="https://www.linkedin.com/company/wagonex" target="_blank"></a></li>
                        <li><a class="twitter-icon" href="https://twitter.com/DriveWAGONEX" target="_blank"></a> </li>
                     </ul>
                     <img src="<?php bloginfo('template_url'); ?>/assets/images/bvrla.png" alt="add_logo" />
                  </div>
               </div>         
            </div>
         </div>
         <section class="footer-content-section clearfix">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xs-12">
                     <p class="m-0">Wagonex Limited is registered with the Information Commissioner's Office in compliance with the Data Protection Act 1998. Data Protection Registration reference number: ZA219537</p>
                     <p class="m-0">Wagonex Limited is authorised and regulated by the Financial Conduct Authority with firm reference number 789510. Wagonex Limited is also an Appointed Representative of Complete Cover Group a company authorised and regulated by the Financial Conduct Authority under firm reference number 815256 to carry out insurance mediation activities.</p>
                     <p class="m-0">Wagonex Limited Company Registration Number: 10312289</p>
                     <p class="m-0">VAT Number: 256959939</p>
                  </div>
               </div>
            </div>
         </section>
      </footer>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="<?php bloginfo('template_url'); ?>/assets/js/landing_crousel.js"></script>
      <script src="<?php bloginfo('template_url'); ?>/assets/js/landing_crousel_setting.js"></script>
		<?php wp_footer(); ?>
	</body>
</html>
