<?php
/* template name: Услуга внутренняя техника */

get_header(); ?>
 <div class="service-in">
    <div class="container">
        <div class="row">
                  <div class="breadcrumbs">
                        <div class="col-md-12 col-xs-12">
                            <div class="breadcrumbs-inner">
                              <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>  
                            </div>
                        </div>
                </div>
                <div class="page-title">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="left left-line"><? if(function_exists(h1_title)) h1_title(); ?></h2>
                        </div>
                    </div>
                </div>
                <div class="page-content">
                    <div class="row">
                        <? if($pageImg = get_field('page_img')) { ?>
                            <div class="col-md-5 col-sm-12">
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
    <div class="seo-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <? the_field('seo_text'); ?>
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
</div>
<?php get_footer();
