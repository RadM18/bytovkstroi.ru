<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="col-md-4 col-sm-3">

<!--             <? $args = array( 
        'menu' => 'sidebar',  
        'menu_id' => 'sidebar', 
        'menu_class' => 'sidebar', 
        'container' => '', 
        'echo' => true, 
        'depth' => 0 ); 
        wp_nav_menu( $args ); ?> -->

                            <!-- Аренда Бытовок id -->
      <?php if (is_page( array( 83, 2545, 2543, 2700, 2698, 2696, 2691 ))) { ?>
                <?php wp_nav_menu( array(
                    'theme_location'  => '',
                    'menu'            => 'sidebar-rent', 
                    'container'       => 'div', 
                    'container_class' => '', 
                    'container_id'    => '',
                    'menu_class'      => 'sidebar', 
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => '',
                ) ); ?>
         <?php } ?>
                            <!-- Продажа Бытовок id -->
      <?php if (is_page( array( 2692, 113, 1383, 1387, 56, 114, 115, 57, 1389, 112, 1381, 84 ))) { ?>
                 <?php wp_nav_menu( array(
                    'theme_location'  => '',
                    'menu'            => 'sidebar-sale', 
                    'container'       => 'div', 
                    'container_class' => '', 
                    'container_id'    => '',
                    'menu_class'      => 'sidebar', 
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => '',
                ) ); ?>
 
 
         <?php } ?>
                            <!-- Б/У Бытовки id -->
      <?php if (is_page( array( 2719, 2721, 2723, 2725, 2727, 2729, 2731, 2733, 2735, 1379 ))) { ?>
                 <?php wp_nav_menu( array(
                    'theme_location'  => '',
                    'menu'            => 'sidebar-used', 
                    'container'       => 'div', 
                    'container_class' => '', 
                    'container_id'    => '',
                    'menu_class'      => 'sidebar', 
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => '',
                ) ); ?>
         <?php } ?>
                            <!-- Контейнеры id -->
      <?php if (is_page( array( 11, 597, 594, 82 ))) { ?>
 
                 <?php wp_nav_menu( array(
                    'theme_location'  => '',
                    'menu'            => 'sidebar-containers', 
                    'container'       => 'div', 
                    'container_class' => '', 
                    'container_id'    => '',
                    'menu_class'      => 'sidebar', 
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => '',
                ) ); ?>
         <?php } ?>


</div>

<script type="text/javascript">	
    jQuery("#sidebar>li.menu-item-has-children").append('<i class="fa fa-plus" aria-hidden="true"></i>');
    jQuery(document).ready(function() {
        jQuery('#sidebar>li.menu-item-has-children>i').click(function(){
            if(jQuery(this).hasClass("fa-plus")){
                //jQuery('#sidebar>li.menu-item-has-children>i.fa-minus').removeClass("fa-minus").addClass("fa-plus").prev("ul").toggle('slow');
                jQuery(this).removeClass("fa-plus").addClass("fa-minus").prev("ul").toggle('slow');
            }else{
                jQuery(this).removeClass("fa-minus").addClass("fa-plus").prev("ul").toggle('slow');
            }
        });
    });			
</script>