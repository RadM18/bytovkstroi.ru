<?php
/* template name: Новости шаблон */

get_header(); ?>
<div class="page-news">
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
                <h1 class="left left-line"><? if(function_exists(h1_title)) h1_title(); ?></h1>
            </div>
        </div>
    </div>

    <div class="news-block news-block-main">
       
        <div class="container">
            <div class="row">
 
<!--                         <div class="news clearfix">
                   <?php $args = array('showposts' => 12,'order' => 'DESC' ,'cat' => 8);
                      query_posts($args); ?>
                        <?  while ( have_posts() ) : the_post(); ?>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="news-item clearfix">
                                        <div class="col-md-12 row">
                                            <div class="news-thumb">
                                                <img src="<? echo kama_thumb_src('src=' . wp_get_attachment_url(get_post_thumbnail_id( $post->ID )) . '&w=285&h=240'); ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="news-info">
                                                <div class="news-title"><a href="<? the_permalink(); ?>"><? the_title(); ?></a></div>
                                                <div class="news-excerpt"><? echo kama_excerpt('maxchar=110'); ?></div>
                                                   <p class="date-publish"><?php echo get_the_date(); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile;   ?>
                  

                        </div>
                            <div class="pagination">
                                  <? echo paginate_links( array(
                                        'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                                        'total'        => $news->max_num_pages,
                                        'current'      => max( 1, $paged ),
                                        'format'       => '?paged=%#%',
                                        'show_all'     => false,
                                        'type'         => 'plain',
                                        'end_size'     => 2,
                                        'mid_size'     => 1,
                                        'prev_next'    => true,
                                        'prev_text'    => '',
                                        'next_text'    => '',
                                        'add_args'     => false,
                                        'add_fragment' => '',
                                    ) );?>
                            </div>
                   <? wp_reset_query(); ?>
            </div>
        </div>
    </div>
 -->

     <div class="news-block news-block-main">
        <? $currID = $post->ID; ?>
        <div class="container">
            <div class="row">
                <? 
                    if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
                    elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
                    else { $paged = 1; }
                    $args = array(
                    'cat' => 8,
                    'posts_per_page' => 12,
                    'paged' => $paged,
                    'post__not_in' => array($currID),
                ); ?>
                <? $news = new WP_Query($args); 
                    if($news->have_posts()) { ?>
                        <div class="news clearfix">
                            <? while($news->have_posts()) { $news->the_post(); ?>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="news-item clearfix">
                                        <div class="col-md-12 row">
                                            <div class="news-thumb">
                                                <img src="<? echo kama_thumb_src('src=' . wp_get_attachment_url(get_post_thumbnail_id( $post->ID )) . '&w=285&h=240'); ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="news-info">
                                                <div class="news-title"><a href="<? the_permalink(); ?>"><? the_title(); ?></a></div>
                                                <div class="news-excerpt"><? echo kama_excerpt('maxchar=110'); ?></div>
                                                   <p class="date-publish"><?php echo get_the_date(); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <? } ?>
                        </div>
                            <div class="pagination">
                                  <? echo paginate_links( array(
                                        'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                                        'total'        => $news->max_num_pages,
                                        'current'      => max( 1, $paged ),
                                        'format'       => '?paged=%#%',
                                        'show_all'     => false,
                                        'type'         => 'plain',
                                        'end_size'     => 2,
                                        'mid_size'     => 1,
                                        'prev_next'    => true,
                                        'prev_text'    => '',
                                        'next_text'    => '',
                                        'add_args'     => false,
                                        'add_fragment' => '',
                                    ) );?>
                            </div>
                    <? } wp_reset_query(); ?>
            </div>
        </div>
    </div>  
</div>

<?php get_footer();
