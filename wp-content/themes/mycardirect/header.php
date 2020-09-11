<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" >
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <?php if (is_front_page()) { ?>
          <title>Mycardirect - The new alternative to car leasing and ownership</title>
        <?php } else { ?>
              <title><?php the_title(); ?></title>
        <?php } ?>
        <meta name="description" content="Mycardirect is the innovative, flexible, and convenient way to choose your next vehicle. A few simple steps and your next new car will be delivered to your door.">
        <link rel="profile" href="https://gmpg.org/xfn/11">     
            <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/landing_carousel.min.css" type="text/css" />
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/landing_carousel_theme.css" type="text/css" />
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/theme-style.css" type="text/css" />
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/custom-theme.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/faq.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap-select.css" type="text/css" media="screen" />
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">     
            
        <?php wp_head(); ?>
        <!-- Facebook Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '898444330650032');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=898444330650032&ev=PageView&noscript=1"/></noscript>
        <!-- End Facebook Pixel Code -->

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-175828344-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-175828344-1');
        </script>
        <!-- End Google Analytics -->

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-W5GW9TZ');</script>
        <!-- End Google Tag Manager -->
    </head>

    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W5GW9TZ"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <header id="site-header" class="header-footer-group" role="banner">
            <div class="outer-container hero-section">
                <div class="header-inner section-inner">
                    <div class="header-titles-wrapper col-md-12 d-flex justify-content-between">
                        <div class="d-flex">
                            <a href="<?php echo get_home_url(); ?>" class="mr-5">
                                <img class="aam-logo" width="199" src="<?php bloginfo('template_url'); ?>/assets/images/logo.svg" />
                            </a>
                            <!-- .header-titles -->
                
                            <div class="header-navigation-wrapper">
                                <?php
                                if (has_nav_menu('primary') || ! has_nav_menu('expanded')) {
                                    ?>
                                        <nav class="primary-menu-wrapper" aria-label="<?php esc_attr_e('Horizontal', 'twentytwenty'); ?>" role="navigation">
                                            <ul class="primary-menu reset-list-style">
                                            <?php
                                            if (has_nav_menu('primary')) {
                                                wp_nav_menu(
                                                    array(
                                                        'container'  => '',
                                                        'items_wrap' => '%3$s',
                                                        'theme_location' => 'primary',
                                                        )
                                                );
                                            }
                                            ?>
                                            </ul>
                                        </nav><!-- .primary-menu-wrapper -->
                                    <?php
                                }

                                if (true === $enable_header_search || has_nav_menu('expanded')) {
                                    ?>
                                <div class="header-toggles hide-no-js">
                                    <?php
                                    if (has_nav_menu('expanded')) {
                                        ?>
                                        <div class="toggle-wrapper nav-toggle-wrapper has-expanded-menu">
                                            <button class="toggle nav-toggle desktop-nav-toggle" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
                                            <span class="close-menu-btn">
                                                <span class="open-icon"></span>
                                                <span class="open-icon"></span>
                                                <span class="open-icon"></span>
                                            </span>
                                            </button><!-- .nav-toggle -->
                                        </div><!-- .nav-toggle-wrapper -->
                                        <?php
                                    }
                                    ?>
                                </div><!-- .header-toggles -->
                                    <?php
                                }
                                ?>
                            </div>
                        </div><!-- .header-navigation-wrapper -->   

                        <div class="d-flex">
                            <button class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal"  data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
                                <span class="close-menu-btn">
                                    <span class="open-icon"></span>
                                    <span class="open-icon"></span>
                                    <span class="open-icon"></span>
                                </span>
                            </button><!-- .nav-toggle -->   
                            <div class="auth-block">
                                <ul class="nav navbar-nav flex-row">
                                    <li><a href="<?php echo get_option('app_site_url'); ?>/request-call-back?domain=AAM" class="request-call-button">Request call back</a></li>
                                    <li><a href="<?php echo get_option('app_site_url'); ?>/signin?domain=AAM" class="login">Log in</a></li>
                                    <li><a href="<?php echo get_option('app_site_url'); ?>/register?domain=AAM" class="join-us">Join Us</a></li>
                                </ul>               
                            </div>                  
                        </div>                              
                    </div><!-- .header-titles-wrapper -->               
                </div><!-- .header-inner -->
            </div>
        </header><!-- #site-header -->

        <?php
        // Output the menu modal.
        get_template_part('template-parts/modal-menu');
