<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<? bloginfo('template_directory'); ?>/images/favicon.png" type="image/x-icon">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="<? bloginfo('template_directory'); ?>/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<? bloginfo('template_directory'); ?>/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="<? bloginfo('template_directory'); ?>/slick/slick-theme.css"/>
<!--[if IE]>
<link rel="stylesheet" type="text/css" href="<? bloginfo('template_directory'); ?>/css/only-ie.css" />
<![endif]-->
<link rel="stylesheet" href="<? bloginfo('template_directory'); ?>/css/style.css">
<link rel="stylesheet" href="<? bloginfo('template_directory'); ?>/css/responsive.css">
<link rel="stylesheet" href="<? bloginfo('template_directory'); ?>/css/base.css">
<link rel="stylesheet" href="<? bloginfo('template_directory'); ?>/pater/pater.css">
<?/*<link rel="stylesheet" href="<? bloginfo('template_directory'); ?>/css/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />*/?>

<?php wp_head(); ?>
<script type="text/javascript" src="<? bloginfo('template_directory'); ?>/slick/slick.min.js"></script>
<script src="https://use.fontawesome.com/8aa48b091e.js"></script>
<?/*<script type="text/javascript" src="<? bloginfo('template_directory'); ?>/js/jquery.fancybox-1.3.4.pack.js"></script>*/?>
<script type="text/javascript">
var __cs = __cs || [];
__cs.push(["setCsAccount", "gfmZ2AH1bF5wp3nzwtNhnwbRtofEQFS7"]);
</script>
<script type="text/javascript" async src="//app.comagic.ru/static/cs.min.js"></script>
</head>
 

   
<? if(is_front_page()) { ?>
   <body  class="demo-1 loading">
  
<? } else { ?>
  <body <?php body_class(); ?> >
<? } ?>

<div class="header">
    <div class="menu-line">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-10 col-sm-10">
                        <? $args = array( 
                    'menu' => 'top-menu',  
                    'menu_id' => 'top-line-menu', 
                    'menu_class' => 'top-line-menu', 
                    'container' => '', 
                    'echo' => true, 
                    'depth' => 0 ); 
                    wp_nav_menu( $args ); ?>
                </div>
                <div class="col-lg-3 col-md-2 col-sm-2">
                    <ul class="social">
                        <li><a href="https://vk.com/public152632979"><img src="<? bloginfo('template_directory'); ?>/images/vk.png"></a></li>
                        <li><a href="https://ok.ru/"><img src="<? bloginfo('template_directory'); ?>/images/ok.png"></a></li>
                        <li><a href="https://www.facebook.com/groups/305375613265157/"><img src="<? bloginfo('template_directory'); ?>/images/fb.png"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="head-line">
        <div class="container">
            <div class="row head-info-work">
     
                    <div class="head-logo">
                        <a href="/"><img src="<? bloginfo('template_directory'); ?>/images/logo.png" alt=""></a>
                    </div>
     
                    <div class="head-info">
                        Аренда и продажа бытовок в Москве
                        <strong>Доставка круглосуточно</strong>
                    </div>
                    <div class=" time-work">
                        <img class="email-img" src="<? bloginfo('template_directory'); ?>/images/time-work.png">
                        <span>09:00 - 22:00</span>
                    </div>
           
                   <div class="adr">
                       <img class="phone-img" src="<? bloginfo('template_directory'); ?>/images/placeholder-places.png"> 
                       Москва, ул. Рябиновая д. 40 с. 7              
                    </div>
                  
                    <div class="head-mail">
                        <img class="email-img" src="<? bloginfo('template_directory'); ?>/images/envelope.png"><a href="mailto:info@bytovkstroi.ru">info@bytovkstroi.ru</a>
                    </div>

                    <div class="head-phone">
                        <div class="img-head-phone"><img class="phone-img" src="<? bloginfo('template_directory'); ?>/images/phone.png"></div>
                        <div class="phone-line-wrap">
                            <div class="phone-line"><a href="tel:+79652295335">+7 (965) 229-53-35</a></div>
                            <div class="phone-line"><a href="tel:+74957227269">+7 (495) 722-72-69</a></div>
                        </div>

                    </div>
       <!--                      <div class="col-md-4 col-sm-6" style="padding-left: 0;">
                                <div onClick="tModalForm.show('frm_order');" class="btn">ОБРАТНЫЙ ЗВОНОК!</div>
                            </div> --> 
            </div>
        </div>
    </div>

    <div class="menu-line menu-line2">
        <div class="container">
            <div class="row">
                        <? $args = array( 
                    'menu' => 'top-menu2',  
                    'menu_id' => 'top-line-menu', 
                    'menu_class' => 'top-line-menu', 
                    'container' => '', 
                    'echo' => true, 
                    'depth' => 0 ); 
                    wp_nav_menu( $args ); ?>
                    <div onClick="tModalForm.show('frm_order');" class="btn">Сделать заказ</div>

            </div>
        </div>
    </div>

</div>
<div class="header-mob">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="toggle-btn">
                    <img src="<? bloginfo('template_directory'); ?>/images/toggle.png" alt="">
                </div>
                <div class="mob-logo">
                    <a href="/"><img src="<? bloginfo('template_directory'); ?>/images/logo.png" alt=""></a>
                </div>
                <div class="toggle-phones">
                    <img class="toggle-phone" src="<? bloginfo('template_directory'); ?>/images/toggle-phone.png" alt="">
                    <img class="close-phones" src="<? bloginfo('template_directory'); ?>/images/close.png" alt="">
                </div>
            </div>
            <div class="col-xs-12 phones-block">
                <div class="head-phone">
        <div class="phone-line"><a href="tel:+79652295335">+7 (965) 229-53-35</a></div>
        <div class="phone-line"><a href="tel:+74957227269">+7 (495) 722-72-69</a></div>
                </div>
                <div class="btn-wrap">
                    <div onClick="tModalForm.show('frm_order');" class="btn">Сделать заказ</div>
                </div>
            </div>
        </div>
    </div>
    <div class="mob-menu">
       <div class="mob-logo">
            <a href="/"><img src="<? bloginfo('template_directory'); ?>/images/logo.png" alt=""></a>
        </div>
        <? $args = array( 
        'menu' => 'mob-menu',  
        'menu_id' => 'left-menu', 
        'menu_class' => 'left-menu', 
        'container' => '', 
        'echo' => true, 
        'depth' => 0 ); 
        wp_nav_menu( $args ); ?>
        
<script type="text/javascript">	
    jQuery(".left-menu>li.menu-item-has-children, .left-menu .sub-menu li.menu-item-has-children").append('<i class="fa fa-angle-down" aria-hidden="true"></i>');
    jQuery(document).ready(function() {
        jQuery('.left-menu>li.menu-item-has-children>i').click(function(){
            if(jQuery(this).hasClass("fa-angle-down")){
                //jQuery('#menu-sidebar-menu>li.menu-item-has-children>i.fa-angle-up').removeClass("fa-angle-up").addClass("fa-angle-down").prev("ul").toggle('slow');
                jQuery(this).removeClass("fa-angle-down").addClass("fa-angle-up").prev("ul").toggle('slow');
            }else{
                jQuery(this).removeClass("fa-angle-up").addClass("fa-angle-down").prev("ul").toggle('slow');
            }
        });

        jQuery('.left-menu li.menu-item-has-children>.sub-menu>li.menu-item-has-children>i').click(function(){
            if(jQuery(this).hasClass("fa-angle-down")){
                //jQuery('#menu-sidebar-menu li.menu-item-has-children>.sub-menu>li.menu-item-has-children>i.fa-angle-up').removeClass("fa-angle-up").addClass("fa-angle-down").prev("ul").toggle('slow');
                jQuery(this).removeClass("fa-angle-down").addClass("fa-angle-up").prev("ul").toggle('slow');
            }else{
                jQuery(this).removeClass("fa-angle-up").addClass("fa-angle-down").prev("ul").toggle('slow');
            }
        });
    });			
</script> 
        
    <div class="head-phone">
        <div class="phone-line"><a href="tel:+79652295335">+7 (965) 229-53-35</a></div>
        <div class="phone-line"><a href="tel:+74957227269">+7 (495) 722-72-69</a></div>
    </div>
    <div class="btn-wrap">
        <div onClick="tModalForm.show('frm_order');" class="btn">ОБРАТНЫЙ ЗВОНОК!</div>
    </div>
    </div>
    <div class="close-btn"><img src="<? bloginfo('template_directory'); ?>/images/close-btn.png" alt=""></div>
</div>
 <? if(!is_front_page()) { ?>
    <div class="brdcrmbs">
        <div class="container">
            <div class="row">
                        <?php if ( function_exists('tBreadcrumbs') ) tBreadcrumbs(); ?>
            </div>
        </div>
    </div>
<? } ?>
<div class="main">