<? $args = array(
    'post_type' => 'page',
    'post_status' => 'publish', 
    'meta_key' => 'page_parent',
    'meta_value' => 9,
    'meta_compare' => 'LIKE',
    'posts_per_page' => $count,
    'order_by' => 'date',
    'order' => 'DESC'
); 
$products = new WP_Query($args); 
if($products) { ?>


            <div class="projects-block projects-block-main">
                <div class="container">
                    <div class="row">
                        <? $count = -1; ?>
                        <? if(is_front_page()) { ?>
                            <h2 class="center center-line">Рекомендуемые</h2>
                            <? $count = 4; ?>
                        <? } else { ?>
                            <h2 class="center center-line">Рекомендуемые</h2>
                        <? } ?>
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
            <!-- Страницы:  Аренда бытовок(83), Главная(5), Аренда блок-контейнера(2543), Аренда поста охраны(2700),Аренда прорабской бытовки(2691), Аренда строительных бытовок(2545) -->
                                            <div class="project-info-line project-info-line-more clearfix">
                                                <span class="pull-right">
                                                    <button class="btn btn-buy" onClick="tModalForm.show('buy');">Купить</button>
                                                </span>
                                                <span class="pull-left project-item-bold">от <? the_field('цена', $post->ID); ?> ₽</span>
                                            </div>
                                            <?php } ?>
                              
                                            <?php if (is_page( array( 11, 83, 5, 2543, 2543, 2719, 2721, 2723, 2725, 2727, 2729, 2731, 2733, 2735, 1379, 82, 2698, 2696, 2700, 2691, 2545, 17, 54, 113, 1379 ))) { ?>
            <!--  Страницы: Аренда бытовок(83), Главная(5),  ,Аренда контейнеров(82), Галерея(17), Аренда поста охраны(2700),Аренда прорабской бытовки(2691), Аренда строительных бытовок(2545)


            Аренда модульных бытовок(2698)
            Аренда офисной бытовки(2696)
            Продажа бытовок(2692)
             Морские контейнеры(11)
             Прорабские бытовки Б/У(2723) -->
                                            <div class="project-info-line project-info-line-more clearfix">
                                                <span class="pull-right">
                                                    <button class="btn btn-rent" onClick="tModalForm.show('rent');">В аренду</button>
                                                </span>
                                                <span class="pull-left project-item-bold">от <? the_field('rent', $post->ID); ?> ₽</span>
                                            </div>
             
                                            <?php } ?>

                                        </div>
            <!--                             <div class="projects-links row clearfix">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="btn" onClick="tModalForm.show('buy');">Заказать</div></div>
                                            
                                        </div> -->
                                    </div>
                                </div>
                            <? } wp_reset_query(); ?>
                        </div>

                           <? /*if(is_page(9)){}else{ ?> <a style="margin-top:5px;"  class="btn btn-inversed show-all" href="<? echo get_permalink(9); ?>">Смотреть все</a><? } */?>
                    </div>
                </div>
            </div>
 



<? } ?>