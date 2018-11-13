<?php
/* template name: Галерея внутренняя */

get_header(); ?>
<div class="container container-gallery-vn">
    <div class="row">
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
            <div class="page-title">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="left left-line"><? if(function_exists(h1_title)) h1_title(); ?></h1>
                    </div>
                </div>
            </div>

<!--             <div class="projects-block">
                <div class="row">

                    <div class="projects clearfix">
                        <? $products = get_field('select_products'); ?>
                        <? foreach($products as $product) { ?>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="project-item">
                                    <div class="project-thumb"><img src="<? echo kama_thumb_src('src=' . wp_get_attachment_url(get_post_thumbnail_id( $product )) . '&w=270&h=260') ?>"></div>
                                    <div class="project-title"><a href="<? echo get_permalink($product); ?>"><? echo get_the_title($product); ?></a></div>

                                </div>
                            </div>
                        <? } wp_reset_query(); ?>
                    </div>

                </div>
            </div> -->

            <div class="page-content">
                <div class="row">
                    <div class="gal-wrap">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                                    <div class="text-block"><? the_content();?></div>

                                 <?php endwhile; ?>

                                <?php endif; ?>
                                <div style="clear:both;"></div>
                                <? $gal_1 = get_field('gal_1'); ?>
                                <div class="col-md-12 col-sm-12  col-xs-12">
                                   <!--  <div class="btn btn-thumb btn-magnifier" onclick="tModalForm.show('rent');"></div> -->
                                    <div class="big-thumb">
                                        <? foreach($gal_1 as $bGalItem){ ?>
                                        <a href="<?=$bGalItem['url']; ?>" class="fncbox"><img src="<? echo kama_thumb_src('src=' . $bGalItem['url'] . '&w=870&h=390'); ?>"></a>
                                        <? } ?>
                                    </div>
                                    <div class="small-thumb">
                                           <? foreach($gal_1 as $bGalItem){ ?>
                                            <img src="<? echo kama_thumb_src('src=' . $bGalItem['url'] . '&w=47&h=40'); ?>">
                                        <? } ?>
                               
                                    </div>
                                </div>
                                <div style="clear:both;"></div>
                                <div class="text-block"><? the_field('text_after') ?></div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 vcenter vcenter-right form-line">
                                <div class="form-line-form">
                                    <div class="row">
                                        <h3>Онлайн-заявка</h3>
                                        <? echo do_shortcode('[contact-form-7 id="2786" title="Онлайн-заявка"]'); ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>

<script>
jQuery('.big-thumb').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
    asNavFor: '.small-thumb'
});
jQuery('.small-thumb').slick({
    slidesToShow: 9,
    slidesToScroll: 1,
    asNavFor: '.big-thumb',
    focusOnSelect: true,
    arrows: false,
    responsive: [
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 10,
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 5,
          }
        },
        {
          breakpoint: 580,
          settings: {
            slidesToShow: 5,
          }
        },
        {
          breakpoint: 320,
          settings: {
            slidesToShow: 3,
          }
        }
    ]
});
</script>

<?php get_footer();
