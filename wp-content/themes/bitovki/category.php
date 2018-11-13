<?php
/* template name: Услуги */

get_header(); ?>
<div class="page-title">
    <div class="container">
        <div class="row">
            <h2 class="left left-line">Новости компании</h2>
        </div>
    </div>
</div>
<div class="page-content">
    <div class="container">
        <div class="row">
                <div class="col-md-12">
                    <div class="text-block">
                        <? echo category_description(); ?>
                    </div>
                </div>
        </div>
    </div>
</div>
<div class="news-block">
    <div class="container">
        <div class="row">
        <div class="row">
            <? get_sidebar(); ?>
            <div class="col-md-9 col-sm-9">
            <div class="row">
            <? if(have_posts()) { ?>
                    <div class="news clearfix">
                        <? while(have_posts()) { the_post(); ?>
                            <div class="col-md-12">
                                <div class="news-item clearfix">
                                    <div class="col-md-4 row">
                                        <div class="news-thumb">
                                            <img src="<? echo kama_thumb_src('src=' . wp_get_attachment_url(get_post_thumbnail_id( $post->ID )) . '&w=400&h=300'); ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="news-info">
                                            <div class="news-title"><a href="<? the_permalink(); ?>"><? if(function_exists('h1_title')) { h1_title(); } ?></a></div>
                                            <div class="news-excerpt"><? echo kama_excerpt('maxchar=250'); ?></div>
                                            <? /*<div class="news-link"><a href="<? the_permalink(); ?>">Читать></a></div> */?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <? } ?>
                    </div>
                    <div class="pagination">
                    <? wp_pagenavi(); ?>
                </div>
                <? } ?>
                </div>
                </div>
                
        </div>
        </div>
    </div>
</div>

<?php get_footer();
