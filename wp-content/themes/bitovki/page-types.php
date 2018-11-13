<?php
/* template name: Виды бытовок */

get_header(); ?>
<div class="container container-types-page">
    <div class="row">
        <? get_sidebar(); ?>
        <div class="">
 
            <div class="page-title col-md-8 col-sm-9">
               <div class="breadcrumbs">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="breadcrumbs-inner">
                                  <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>  
                                </div>
                            </div>
                        </div>
                </div>
                    <div class="row">
                        <h1 class="left left-line"><? if(function_exists(h1_title)) h1_title(); ?></h1>
                    </div>
             <? if($pageImg = get_field('page_img')) { ?>
            <div class="page-content">
                <div class="r">
                    <? if($pageImg = get_field('page_img')) { ?>
                        <div class="col-md-5">
                            <img src="<? echo kama_thumb_src('src=' . $pageImg . '&w=470&h=270'); ?>">
                        </div>
                    <? } ?>
                                 <? } ?>
                        <div class="">
                            <div class="text-block">
                                <? while(have_posts()) { the_post(); 
                                    the_content();
                                } ?>
                            </div>
                            <? /*<div class="price-block">
                                <div class="price">Цена: от <span><? the_field('price'); ?></span> Р</div>
                                <div onClick="tModalForm.show('zak');" class="btn">ЗАКАЗАТЬ</div>
                                <div onClick="tModalForm.show('frm_order');" class="btn">ПЕРЕЗВОНИТЕ МНЕ!</div>
                            </div> */ ?>
                        </div>
                </div>
            </div>

            
            <div class="seo-text-div">
                <div class="row">
                     <?php if( get_field('seo_text') ): ?>
                        <div class="seo-text">
                            <? the_field('seo_text'); ?>
                        </div>
                     <?php endif; ?>
                    <div class="choice-text">
                       <?php if( get_field( "h3_title_choice" ) ):
                              echo "<h4 class='left left-line'>";
                                the_field( "h3_title_choice" );
                              echo "</h4>"; endif;  ?>
                       <div class="box-div-choice">
                        <? $choices = get_field('choices'); 
                        foreach($choices as $choice){ ?>
                            <div class="col-box-choice">
                                <div class="choice-item">
                                   <div class="choice-icon"><img src="<?=$choice['icon_choice']; ?>"></div>
                                    <div class="choice-text"><?=$choice['text_choice']; ?></div>
                                </div>
                            </div>
                        <? } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </div>
</div>
 <?php if( get_field('parameter_img') ): ?>
<div class="in-section-block">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-md-offset-1 col-sm-9 col-xs-9">
                    <?php if( get_field('parameter_img') ): ?>
                        <img src="<?php the_field('parameter_img'); ?>" />
                    <?php endif; ?>
            </div>
            <div class="col-md-4 col-sm-3 col-xs-3">
                <? $parameters = get_field('parameters'); 
                foreach($parameters as $parameter){ ?>
                    <div class="parameter-box">
                        <div class="parameter-title"><?=$parameter['title_parameter']; ?></div>
                        <div class="parameter-text"><?=$parameter['text_parameter']; ?></div>
                    </div>
                <? } ?>
            </div>
        </div>
    </div>
</div>
 <?php endif; ?>
    <?php // include(TEMPLATEPATH."/blocks/kind.php"); ?>

    <?php include(TEMPLATEPATH."/blocks/projects-children.php"); ?>

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

    <? if(get_field('tabs')) { ?>
    <div class="faq-tabs">
        <div class="container">
            <div class="row">
                    <?php
                      if( get_field( 'tabs' ) ):
                          echo "<h2 class='center center-line'>Часто задаваемые вопросы";
                          echo "</h2>"; 
                      endif;  ?>  
                <div class="col-md-8 col-md-offset-2 col-sm-12">
                <? $tabs = get_field('tabs'); 
                foreach($tabs as $tab){ ?>
                    <div class="tabs-box">
                        <div class="tabs-title accordion"><?=$tab['title_tab']; ?></div>
                        <div class="tabs-text panel panel-1"><?=$tab['text_tab']; ?></div>
                    </div>
                <? } ?>
                </div>
            </div>
        </div>
    </div>
    <? } ?>
    
     <?php if (is_page( array( 1379 ))) { ?>
            <div class="form-container-types-page">
                <?php include(TEMPLATEPATH."/blocks/form-line.php"); ?>

        <!--         <div class="container">
                    <div class="page-content">
                        <div class="r">
                            <? if($pageImg = get_field('page_img')) { ?>
                                <div class="col-md-5">
                                    <img src="<? echo kama_thumb_src('src=' . $pageImg . '&w=470&h=270'); ?>">
                                </div>
                            <? } ?>
                                <div class="">
                                    <div class="text-block">
                                        <? while(have_posts()) { the_post(); 
                                            the_content();
                                        } ?>
                                    </div>
         
                                </div>
                        </div>
                    </div>
                </div> -->
            </div>
       <?php } ?>

<?php get_footer();
