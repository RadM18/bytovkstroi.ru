<?php
/* template name: Услуги */

get_header(); ?>
<div class="container">
    <div class="row">
        <? get_sidebar(); ?>
        <div class="col-md-8 col-sm-8">
            <div class="page-title">
                <div class="row">
                    <h1 class="left left-line"><? if(function_exists(h1_title)) h1_title(); ?></h1>
                </div>
            </div>
            <div class="page-content">
                <div class="row">
                    <? if($pageImg = get_field('page_img')) { ?>
                        <div class="col-md-5">
                            <img src="<? echo kama_thumb_src('src=' . $pageImg . '&w=470&h=230'); ?>">
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
        </div>
    </div>
</div>
<?php include(TEMPLATEPATH."/blocks/services.php"); ?>
<?php include(TEMPLATEPATH."/blocks/form-line.php"); ?>
<?php include(TEMPLATEPATH."/blocks/projects.php"); ?>
<div class="empty-space" style="height: 50px;"></div>
<?php get_footer();
