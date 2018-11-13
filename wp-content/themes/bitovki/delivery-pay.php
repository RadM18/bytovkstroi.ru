
<?php
/*
Template Name: Доставка и оплата
Template Post Type: post, page, product
*/

// … остальной код шаблона

get_header(); ?>
<div class="container container-delivery">
    <div class="row">
        <div class="breadcrumbs">
            <div class="col-md-12 col-xs-8">
                <div class="breadcrumbs-inner">
                  <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>  
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <h1 class="left left-line"><? if(function_exists(h1_title)) h1_title(); ?></h1>
    </div>
    <div class="row">
                <div class="col-md-12 col-sm-12 product-description">
                    <? while(have_posts()) { the_post(); 
                        the_content();                        
                   } ?>
                </div>
    </div>
</div>

<? if(get_field('text_after')) { ?>
<div class="seo-text text-after">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <? the_field('text_after'); ?>
            </div>
        </div>
    </div>
</div>
<? } ?>
<?php get_footer();




