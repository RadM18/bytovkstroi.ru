<?php
/* template name: Карточка товара техника */

get_header(); ?>
<div class="container projects-container-tech">
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
        <div class="product">
            <div class="row">
                <div class="col-lg-6 col-md-5 col-sm-5">
                   <div class="row">

                    <div class="product-thumb"><img src="<? echo kama_thumb_src('src=' . wp_get_attachment_url(get_post_thumbnail_id( $post->ID )) . '&w=500'); ?>"></div>
                    <? if($gallery = get_field('gallery')) { ?>
                    <div class="product-gallery">
                        <? foreach($gallery as $gal){ ?>
                            <a href="<?=$gal['url']; ?>"><img src="<? echo kama_thumb_src('src=' . $gal['url'] . '&w=47&h=40'); ?>"></a>
                        <? } ?>
                    </div>
                    <? } ?>
                   </div>
                </div>
                <div class="col-lg-6 col-md-7 col-sm-7">
                    <div class="product-info-block">
                        <div class="product-title">
                            <h1><? if(function_exists(h1_title)) h1_title(); ?></h1>
                        </div>
                        <div class="product-info">
                            <div class="size-line">Общая длина машины манипулятора: <span class="pull-right"><? the_field('m_length'); ?> м</span></div>
                            <div class="size-line">Длина кузова: <span class="pull-right"><? the_field('k_length'); ?> м</span></div>
                            <div class="size-line">Ширина кузова: <span class="pull-right"><? the_field('k_width'); ?> м</span></div>
                            <div class="size-line">Грузоподъёмность крана: <span class="pull-right"><? the_field('gpk'); ?> т</span></div>
                            <div class="size-line">Грузоподъёмность платформы: <span class="pull-right"><? the_field('gpp'); ?> т</span></div>
                            <div class="size-line">Вылет стрелы: <span class="pull-right"><? the_field('strela'); ?> м</span></div>
                            <div class="size-line">Высота от земли до платформы: <span class="pull-right"><? the_field('height'); ?> м</span></div>


                            <div class="product-price">
                                Цена: от <span><? the_field('цена'); ?></span> ₽ / смена
                            </div>
                            <div class="order-block">
                                <div class="btn" onClick="tModalForm.show('zak');">ЗАКАЗАТЬ</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    <div class="row">
                <div class="col-md-12 col-sm-12 product-description">
                    <? while(have_posts()) { the_post(); 
                        the_content();                        
                   } ?>
                </div>
    </div>
    </div>
</div>
<?php include(TEMPLATEPATH."/blocks/projects-tech.php"); ?>
<?php include(TEMPLATEPATH."/blocks/form-line.php"); ?>
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
