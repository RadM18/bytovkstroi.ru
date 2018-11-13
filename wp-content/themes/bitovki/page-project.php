<?php
/* template name: Карточка товара */

get_header(); ?>
<div class="container container-product">
    <div class="row">
        <div class="breadcrumbs">
            <div class="col-md-8 col-sm-8 col-xs-8">
                <div class="breadcrumbs-inner">
                  <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>  
                </div>
            </div>
            <div class="col-md-4 col-sm-4  col-xs-4">
            <!--  <a href="">< Назад в каталог</a> --><input type="button" onclick="history.back();" value="< Назад в каталог"/>
            </div>
        </div>
 
        <div class="col-md-12 col-sm-12">
            <div class="product">
                <div class="row">
                    <div class="col-md-7 col-sm-12">
                        <div class="row">
                          <div class="gallery-product-block">
                            <? if($gallery = get_field('gallery')) { ?>
                           <div class="big-thumb">
                                <? foreach($gallery as $gal){ ?>
                                    <a class="fncbox" href="<?=$gal['url']; ?>"><img src="<? echo kama_thumb_src('src=' . $gal['url'] . '&w=870&h=390'); ?>"></a>
                                <? } ?>
                            </div>
                                 <? if($video = get_field('video_feedback_block')) { ?>
                                    <button class="btn btn-thumb btn-thumb-play" data-video="<?=$video['0']['video_feedback']; ?>" id="playme">Смотреть видео</button>
                                <? } ?>
<!--                    <?php if( get_field( "video" ) ):
                          echo " <button class='btn btn-thumb btn-thumb-play' id='playme' onclick='revealVideo('video','youtube')' value='Смотреть видео'>Смотреть видео";
                            
                          echo "</button>"; endif;  ?> -->
                           

                            <a class="fncbox btn-magnifier" href="<?=$gal['url']; ?>"> </a>

                            <? } ?>

                            <? if($gallery = get_field('gallery')) { ?>
                           <div class="small-thumb">
                                <? foreach($gallery as $gal){ ?>
                                    <img src="<? echo kama_thumb_src('src=' . $gal['url'] . '&w=47&h=40'); ?>"> 
                                <? } ?>
                            </div>
                            <? } ?>
                        </div>
                       </div> 
<!--                        
                          <div class="row">

                        <div class="product-thumb">
                            <a href="<? echo wp_get_attachment_url(get_post_thumbnail_id( $post->ID )); ?>" class="fncbox"><img src="<? echo kama_thumb_src('src=' . wp_get_attachment_url(get_post_thumbnail_id( $post->ID )) . '&w=470'); ?>"></a>
                        </div>
                        <? if($gallery = get_field('gallery')) { ?>
                        <div class="product-gallery">
                            <? foreach($gallery as $gal){ ?>
                                <a class="fncbox" href="<?=$gal['url']; ?>"><img src="<? echo kama_thumb_src('src=' . $gal['url'] . '&w=47&h=40'); ?>"></a>
                            <? } ?>
                        </div>
                        <? } ?>
                       </div> -->

                    </div>
                    <div class="col-md-5 col-sm-12">
                        <div class="product-info-block">
                            <div class="product-title">
                                <h1><? if(function_exists(h1_title)) h1_title(); ?></h1>
                            </div>
                            <div class="product-info">
                                <div class="size-line">Длина: <span class="pull-right"><? the_field('length'); ?> м</span></div>
                                <div class="size-line">Ширина: <span class="pull-right"><? the_field('width'); ?> м</span></div>
                                <div class="size-line">Высота: <span class="pull-right"><? the_field('height'); ?> м</span></div>
                                <a href="" class="passport">Паспорт блок-контейнера</a>
                                <div class="product-price">
                                   <!--  Цена:   --> от  <? the_field('цена'); ?>  ₽
                                </div>
                                <div class="order-block">
                                    <div class="btn" onClick="tModalForm.show('buy');">Оформить заказ</div>
                                </div>
                                <div class="consultation-block">
                                    <div class="btn" onclick="tModalForm.show('frm_order');">Получить консультацию</div>
                                </div>
                            </div>
                        </div>
                    </div>
 <!--                    <div class="col-md-6">
                        <? if($video = get_field('video')) { ?>
                            <iframe width="370" height="270" src="https://www.youtube.com/embed/<?=$video; ?>" frameborder="0" allowfullscreen></iframe> 
                        <? } ?>
                    </div> -->
<!--                     <div class="col-md-12 product-description">
                        <? while(have_posts()) { the_post(); 
                            the_content();                        
                       } ?>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <div class="row">
            <div class="product-table">

                <ul class="tabs clearfix" data-tabgroup="first-tab-group">
                  <li><a href="#tab1" class="active-tabs">Цены</a></li>
                  <li><a href="#tab2">Характеристики</a></li>
                  <li><a href="#tab3">Внутренняя отделка</a></li>
                  <li><a href="#tab4">Внешняя отделка</a></li>
                  <li><a href="#tab5">Дополнительная комплектация</a></li>
                  <li><a href="#tab5">Модификации</a></li>
                </ul>

               <section id="first-tab-group" class="tabgroup">
                  <div id="tab1">
                    <? the_field('text_tab_product'); ?>
                  </div>
                  <div id="tab2">
                    <? the_field('text_tab_product2'); ?>
                  </div>
                  <div id="tab3">
                    <? the_field('text_tab_product3'); ?>
                  </div>
                  <div id="tab4">
                     <? the_field('text_tab_product4'); ?>
                  </div>
                  <div id="tab5">
                     <? the_field('text_tab_product5'); ?>
                  </div>
                </section> 
            </div>


        </div>

    </div>
</div>
<?php include(TEMPLATEPATH."/blocks/projects-cat.php"); ?>

<script>
jQuery('.big-thumb').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
    asNavFor: '.small-thumb'
});
jQuery('.small-thumb').slick({
    slidesToShow: 9,
    slidesToScroll: 1,
    asNavFor: '.big-thumb',
    focusOnSelect: true,
    arrows: false,
    responsive: [
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 10,
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 5,
          }
        },
        {
          breakpoint: 580,
          settings: {
            slidesToShow: 5,
          }
        },
        {
          breakpoint: 380,
          settings: {
            slidesToShow: 3,
          }
        },
        {
          breakpoint: 320,
          settings: {
            slidesToShow: 3,
          }
        }
    ]
});
</script>
<?php get_footer();
