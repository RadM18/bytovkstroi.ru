<? $args = array(
    'post_type' => 'page',
    'post_status' => 'publish', 
    'meta_key' => 'page_parent',
    'meta_value' => "\"{$post->ID}\"",
    'meta_compare' => 'LIKE',
    'posts_per_page' => -1,
    'order_by' => 'date',
    'order' => 'ASC'
); 
$products = new WP_Query($args); 
if($products) { ?>

<div class="projects-block projects-block-da projects-block-child " style="margin-bottom: 35px;">
    <div class="container">
        <div class="row">

                <h2 class="center center-line">
                    <? if($inStock = get_field('in_stock')) { 
                        echo $inStock; } 
                        else if(empty($dop_h)){ 
                            echo 'Рекомендуемые'; } 
                        else { echo 'Рекомендуемые '; } ?>

              <!--        <?php if( get_field("field_name") ): ?>
                                    Источник: <?php the_field( "field_name" ); ?>.
                                <?php else :?>
                                    Источники не указаны.
                                <?php endif; ?>
                                                         -->

                    </h2>

            <div class="projects clearfix">
<?
                while($products->have_posts()) { $products->the_post(); ?>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="project-item">
                            <div class="project-thumb">
                                <a href="<? the_permalink(); ?>"><img src="<? echo kama_thumb_src('src=' . wp_get_attachment_url(get_post_thumbnail_id( $post->ID )) . '&w=400') ?>"></a>

                                <? $popupGal = get_field('gallery'); ?>
                                <button class="btn btn-thumb btn-magnifier open-popup-gal" onClick="tModalForm.show('magnifier');" data-gallery-big="<? foreach($popupGal as $popupImg){ echo kama_thumb_src('src=' . $popupImg['url'] . '&w=1551&h=996') . ';'; } ?>" data-gallery-small="<? foreach($popupGal as $popupImg){ echo kama_thumb_src('src=' . $popupImg['url'] . '&w=47&h=40') . ';'; } ?>"></button>
                                <button class="btn btn-thumb open-popup-line" onClick="tModalForm.show('line');" data-draw="<? the_field('drawing'); ?>"></button>
                            </div>

                            <? if($dop_h = get_field('dop_h')) { ?>
                                <div class="project-title"><? echo $dop_h; ?></div>
                            <? } else { ?>
                                <div class="project-title"><? the_title(); ?></div>
                            <? } ?>  
                            <div class="project-info">
                                <div class="project-info-line clearfix">
                                    <span class="pull-left">Размеры:</span><span class="pull-right"><? the_field('size', $post->ID); ?></span>
                                </div>
                           <?php if (!is_page( array( 83, 2543, 82, 2698, 2696, 2700, 2691, 2545 ))) { ?>
                                <div class="project-info-line project-info-line-more clearfix">
                                    <span class="pull-right"><button class="btn btn-buy" onClick="tModalForm.show('buy');">Купить</button></span><span class="pull-left project-item-bold">от <? the_field('цена', $post->ID); ?> ₽</span>
                                </div>
                             <?php } ?> 

                                <?php if (is_page( array( 11, 83, 5, 2543, 2543, 2719, 2721, 2723, 2725, 2727, 2729, 2731, 2733, 2735, 1379, 82, 2698, 2696, 2700, 2691, 2545, 17, 54, 2224, 2073, 1379 ))) { ?>
                                <div class="project-info-line project-info-line-more clearfix">
                                    <span class="pull-right"><button class="btn btn-rent" onClick="tModalForm.show('rent');">В аренду</button></span><span class="pull-left project-item-bold">от <? the_field('rent', $post->ID); ?> ₽</span>
                                </div>
                             <?php } ?>
                            </div>
<!--                             <div class="projects-links row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="btn" onClick="tModalForm.show('zak');">Заказать</div></div>
                            </div> -->
                        </div>
                    </div>
                <? } wp_reset_query(); ?>
            </div>
                <? /*<a class="btn btn-inversed show-all" style="margin-top:25px;" href="<? echo get_permalink(9); ?>">Смотреть все</a> */ ?>
        </div>
    </div>
</div>


<? } ?>


