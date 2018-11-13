<?php
/* template name: Бытовки общая */

get_header(); ?>
<div class="container">
    <div class="row">
        <? get_sidebar(); ?>
        <div class="col-md-9 col-sm-9">
            <div class="page-title">
                <div class="row">
                    <h2 class="left left-line"><? the_title(); ?></h2>
                </div>
            </div>
            <div class="page-content">
                <div class="row">
                    <? if($pageImg = get_field('page_img')) { ?>
                        <div class="col-md-5">
                            <img src="<? echo kama_thumb_src('src=' . $pageImg . '&w=470&h=370'); ?>">
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
<?php include(TEMPLATEPATH."/blocks/kind.php"); ?>
<?php include(TEMPLATEPATH."/blocks/projects.php"); ?>
<?php get_footer();
