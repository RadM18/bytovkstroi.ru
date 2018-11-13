<?php
/* template name: Галерея */

get_header(); ?>

<div class="page-gallery">
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
    <div class="container">
        <div class="row">
            <div class="page-title">
                <div class="row">
                    <h1 class="left left-line"><? if(function_exists(h1_title)) h1_title(); ?></h1>
                </div>
            </div>
            <div class="page-content">
                <div class="row">
                    <div class="col-md-12 col-box-gallery">
                        <? while(have_posts()) { the_post(); 
                            the_content();
                        } ?>
                    </div>
                </div>
                <div class="row">
                    <div class="gal-wrap">
                        <div class="row">

                         <? $args = array(
                            'post_type' => 'page',
                            'post_status' => 'publish', 
                            'meta_key' => 'page_parent',
                            'meta_value' => $post->ID,
                            'meta_compare' => 'LIKE',
                            'order_by' => 'date',
                            'order' => 'ASC'
                        ); 
                        $gals = new WP_Query($args); 
                        while($gals->have_posts()) { $gals->the_post(); ?>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="gal-item">
                                    <div class="gal-thumb">
                                        <a href="<? the_permalink(); ?>"><img src="<? echo kama_thumb_src('src=' . wp_get_attachment_url(get_post_thumbnail_id( $post->ID)) . '&w=270&h=300'); ?>"></a>
                                    </div>
                                    <div class="gal-title">
                                        <a href="<? the_permalink(); ?>"><? the_title(); ?></a>
                                    </div>
                                </div>
                            </div>
                        <? } wp_reset_query(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include(TEMPLATEPATH."/blocks/projects.php"); ?>

    <?php include(TEMPLATEPATH."/blocks/form-line.php"); ?>
</div>
<?php get_footer();
