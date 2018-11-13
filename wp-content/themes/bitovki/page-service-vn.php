<?php
/* template name: Услуга внутренняя */

get_header(); ?>

<div class="page-in-service">
    <div class="container container-in-service">
        <div class="row">
            <? get_sidebar(); ?>
            <div class="col-md-8 col-sm-8 col-in-service">
                <div class="page-title">
                    <div class="row">
                        <div class="breadcrumbs">
                                <div class="col-md-12">
                                    <div class="breadcrumbs-inner">
                                      <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>  
                                    </div>
                                </div>
                        </div>
                        <h1 class="left left-line"><? the_title(); ?></h1>
                    </div>
                </div>
                <div class="page-content">
                    <div class="row">
                        <? if($pageImg = get_field('page_img')) { ?>
                            <div class="col-img-wrap-vn">
                                <img src="<? echo kama_thumb_src('src=' . $pageImg . '&w=470&h=270'); ?>">
                            </div>
                        <? } ?>
                            <div class="">
                                <div class="text-block">
                                    <? while(have_posts()) { the_post(); 
                                        the_content();
                                    } ?>
                                </div>
                                <? /*<div class="price-block">
                                    <? if($dogPrice = get_field('price_d')) { ?>
                                        <div class="price">Цена: <span>Договорная</span></div>
                                    <? } else { ?>
                                        <div class="price">Цена: от <span><? the_field('price'); ?></span> Р</div>
                                    <? } ?>
                                    <div onClick="tModalForm.show('zak');" class="btn">ЗАКАЗАТЬ</div>
                                    <div onClick="tModalForm.show('frm_order');" class="btn">ПЕРЕЗВОНИТЕ МНЕ!</div>
                                </div> */ ?>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-in-service-bottom">

        <div class="order-how">
            <div class="container">
                <div class="row">
                   <?php if( get_field( "h3_title_order" ) ):
                          echo "<h2 class='center center-line'>";
                            the_field( "h3_title_order" );
                          echo "</h2>"; endif;  ?>
                   <div class="box-div-order">
                    <? $orders = get_field('orders'); 
                    foreach($orders as $order){ ?>
                        <div class="col-box-order">
                            <div class="choice-item">
                               <div class="order-icon"><img src="<?=$order['icon_order']; ?>"></div>
                                <div class="order-text"><?=$order['text_order']; ?></div>
                            </div>
                        </div>
                    <? } ?>
                    </div>

                    <div class="btn-wrap-buy">
                        <? if(is_page(82)) { ?>
                            <button class="btn btn-buy" onclick="tModalForm.show('rent-container');"><? the_field('button_order_how'); ?></button>
                        <? } ?>
                        <? if(is_page(84)) { ?>
                            <button class="btn btn-buy" onclick="tModalForm.show('buy');"><? the_field('button_order_how'); ?></button>
                        <? } ?>
                        <?php if (!is_page( array( 82, 84 ))) { ?>
                            <button class="btn btn-buy" onclick="tModalForm.show('rent');"><? the_field('button_order_how'); ?></button>
                        <? } ?>

                    </div>
                </div>
            </div>
        </div>

        <div class="seo-text seo-text-in-service">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class='center center-line'> <? the_field('title_seo_in_service'); ?></h2>
                        <? the_field('seo_text'); ?>
                    </div>
                </div>
            </div>
        </div>

        <?php include(TEMPLATEPATH."/blocks/form-line-delivery.php"); ?>

        <?php if(!is_page(82)) { include(TEMPLATEPATH."/blocks/projects.php"); } ?>
       <!--  <div class="empty-space" style="height: 50px;"></div> -->
        <? if(get_field('text_after')) { ?>
        <div class="seo-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-lg-offset-1 col-md-12">
                        <? the_field('text_after'); ?>
                    </div>
                </div>
            </div>
        </div>
        <? } ?>


    </div>

</div>
<?php get_footer();







