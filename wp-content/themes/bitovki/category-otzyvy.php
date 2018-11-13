<?php
/* template name: Отзывы */

get_header(); ?>
<div class="page-all-feedback">
    <div class="page-title">
        <div class="container">
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
                <h2 class="left left-line"><? if(function_exists(h1_title)) h1_title(); ?></h2>
            </div>
        </div>
    </div>
    <!-- <div class="page-content">
        <div class="container">
            <div class="row">
                    <div class="col-md-12">
                        <div class="text-block">
                            <? echo category_description(); ?>
                        </div>
                    </div>
            </div>
        </div>
    </div> -->
    <div class="feedback-block-top">
        <div class="container">
            <div class="row">
                <div class="news-item clearfix">
                           <?php $the_query = new WP_Query('p=2863'); ?>
                            <?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>

                    <div class="col-md-3 col-sm-3  col-xs-12 row">
                        <div class="news-thumb">
                            <img src="<? echo kama_thumb_src('src=' . wp_get_attachment_url(get_post_thumbnail_id( $post->ID )) . '&w=400&h=300'); ?>">
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="news-info">
                            <div class="news-title">
                                <a href="<? the_permalink(); ?>"><?php the_title() ?></a>
                            </div>
                            <div class="news-position">
                              
                            </div>
                            <div class="news-excerpt"><? echo kama_excerpt('maxchar=380'); ?></div>
                             
                        </div>
                    </div>

                            <?php endwhile; ?>
                            <?php wp_reset_postdata();?>

                </div>
            </div>
        </div>
    </div>

    <div class="news-block feedback-block">
        <div class="container">
          <div class="row">
            <div class="row">
              <div class="col-md-12 col-sm-12">
                <div class="row row-feedback">
                <? if(have_posts()) { ?>
                        <div class="news clearfix">
                            <? while(have_posts()) { the_post(); ?>
                                <div class="col-md-12">
                                    <div class="news-item clearfix">
                                        <div class="col-md-3 col-sm-4 col-xs-12 row">
                                            <div class="news-thumb">
                                                <img src="<? echo kama_thumb_src('src=' . wp_get_attachment_url(get_post_thumbnail_id( $post->ID )) . '&w=400&h=300'); ?>">
                                                
                                                <button class="btn btn-thumb btn-magnifier" onClick="tModalForm.show('more-fb');" data-ajax-param="<?php the_ID(); ?>"></button>
                     
                                                <? if($video = get_field('video_feedback_block')) { ?>
                                                    <button class="btn btn-thumb btn-thumb-play" data-video="<?=$video['0']['video_feedback']; ?>" id="playme"></button>
                                                <? } ?>
                                            </div>
                                        </div>
                                        <div class="col-md-9 col-sm-8 col-xs-12">
                                            <div class="news-info">
                                                <div class="news-title"><a href="<? the_permalink(); ?>"><?php the_title() ?></a></div>
                                                <div class="news-excerpt"><? echo kama_excerpt('maxchar=330'); ?></div>
                                                <? /*<div class="news-link"><a href="<? the_permalink(); ?>">Читать></a></div> */?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <? } ?>
                        </div>
                        <div class="pagination pagination-feedback">
                                <?php if (  $wp_query->max_num_pages > 1 ) : ?>
                                <script>
                                var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
                                var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
                                var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                                var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
                                </script>
                                <div id="true_loadmore">Еще отзывы</div>
                            <?php endif; ?>
                        </div>
                    <? } wp_reset_query(); ?>


                 </div>
                 
                </div>   
            </div>
          </div>
       </div>
    </div>

</div>

<?php get_footer();
