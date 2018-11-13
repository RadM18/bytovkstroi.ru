
<?php
/*
Template Name: Продажа
Template Post Type: post, page, product
*/

// … остальной код шаблона

get_header(); ?>
 <div class="page-buy">
        <div class="container">
            <div class="row">
                <? get_sidebar(); ?>

                <div class="col-md-8 col-sm-9">
                    <div class="breadcrumbs">
                                <div class="breadcrumbs-inner">
                                  <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>  
                                </div>
                    </div>
 
                    <div class="page-title">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="left left-line"><? if(function_exists(h1_title)) h1_title(); ?></h1>
                            </div>
                        </div>
                    </div>

                    <div class="page-content">
                                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                <? the_content(); ?><?php endwhile; endif; ?>
                    </div>
                </div>
            </div>
        </div>
                    <div class="order-how">
                        <div class="container">
                                <div class="row">
                                    <? the_field('description-buy'); ?>
                                </div>
                        </div>
                     </div>

    <?php include(TEMPLATEPATH."/blocks/form-line-buy.php"); ?>

</div>
<?php get_footer();



