
<?php
/*
Template Name: Отзыв текстовый без фото
Template Post Type: post, page, product
*/

// … остальной код шаблона

get_header(); ?>
<div class="feedback-text-no-photo">
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs-inner">
                      <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="feedback-photo">
        <div class="page-title">
            <div class="container">
                <div class="row">
                    <h1 class="left left-line">Отзывы</h1>
                </div>
            </div>
        </div>
        <div class="page-content">
            <div class="container">
                <div class="row">
                        
                    <div class="col-md-9 col-xs-12">
                         <h3 class="left left-line"><?php the_title() ?></h3>
                        <div class="text-block">
                             <? while(have_posts()) { the_post(); 
                                the_content();
                            } ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="news-block">
            <? $currID = $post->ID; ?>
            <div class="container">
                <div class="row">
                    <h2 class="center">Новости и статьи</h2>
                    <? $args = array(
                        'category' => 8,
                        'posts_per_page' => 4,
                        'post__not_in' => array($currID),
                    ); ?>
                    <? $news = new WP_Query($args); 
                        if($news->have_posts()) { ?>
                            <div class="news clearfix">
                                <? while($news->have_posts()) { $news->the_post(); ?>
                                    <div class="col-md-3">
                                        <div class="news-item clearfix">
                                            <div class="col-md-12">
                                                <div class="news-thumb">
                                                    <img src="<? echo kama_thumb_src('src=' . wp_get_attachment_url(get_post_thumbnail_id( $post->ID )) . '&w=285&h=240'); ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="news-info">
                                                    <div class="news-title"><a href="<? the_permalink(); ?>"><? the_title(); ?></a></div>
                                                    <div class="news-excerpt"><? echo kama_excerpt('maxchar=124'); ?></div>
                                                    <? /*<div class="news-link"><a href="<? the_permalink(); ?>">Читать></a></div> */?>
                                                    <p class="date-publish"><?php echo get_the_date(); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <? } ?>
                            </div>
<!--                                 <div class="btn-center">
                                    <a class="btn btn-inversed" href="<? echo get_category_link(3); ?>">ВСЕ НОВОСТИ</a>
                                </div> -->
                        <? } wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php get_footer();




