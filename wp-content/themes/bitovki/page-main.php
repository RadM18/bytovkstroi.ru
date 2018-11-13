<?php /* template name: Главная */

get_header(); ?>
<div class="slider-block">
     <div class="container">
        <div class="row slider-block-slider">
                
                <main>
                      <style>.slideshow {
                        width: 100%;
                        height: 535px;
                        position: relative;
                        overflow: hidden;
                    }
                    </style>
                    <div class="slideshow">
                        <div class="slides">
                             <? if($slider = get_field('slider')) { ?>
                                <? foreach($slider as $i=>$slide){ ?>
                                <div slide-id="<?=$i+1;?>" class="slide <? if($i == 0) { echo 'slide--current'; } ?>" style="background-image: url(<? echo kama_thumb_src('src=' . $slide['slider_img'] . '&w=1170&h=535'); ?>);">
                                    <div class="slider-small-text slide__desc"><?=$slide['slider_small_text']; ?></div>
                                    <div class="slider-big-text slide__title"><?=$slide['slider_big_text']; ?></div>
                                    <div class="slider-subig-text slide__link"><?=$slide['slider_big_sub_text']; ?></div>
                                    <div class="slider-btn">
                                        <div onClick="tModalForm.show('frm_order_get_sentence');" class="btn">Получить предложение</div>
                                    </div>
                                </div>
                                <? } ?>
                            <? } ?>
                        </div>        
                        <? /*<div class="slides">
                            <div class="slide slide--current">
                                <div class="slide__img" style="background-image: url(http://dev-bytovkstroi.cf97289.tmweb.ru/wp-content/cache/thumb/0f/8f4f67de61ca30f_1170x400.png)"></div>
                                
                                <p class="slide__desc slider-small-text">Только сейчас!</p>
                                <h2 class="slide__title slider-big-text">При покупке более 6 единиц - скидка на доставку</h2>
                                 <div class="slider-subig-text slide__link">1000 ₽ с каждой доставки</div>
                                <div class="slider-btn">
                                    <div onClick="tModalForm.show('frm_order_get_sentence');" class="btn">Получить предложение</div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="slide__img" style="background-image: url(http://dev-bytovkstroi.cf97289.tmweb.ru/wp-content/cache/thumb/0f/8f4f67de61ca30f_1170x400.png)"></div>
                                <p class="slide__desc slider-small-text">АКЦИЯ!</p>
                                <h2 class="slide__title slider-big-text">При аренде бытовок от 6 месяцев —</h2>
                                 <div class="slider-subig-text slide__link">1 месяц в подарок</div>
                                <div class="slider-btn">
                                    <div onClick="tModalForm.show('frm_order_get_sentence');" class="btn">Получить предложение</div>
                                </div>
                            </div>
                        </div> */ ?>
                        <nav class="slidenav">
                            <button class="slidenav__item slidenav__item--prev"></button>
                            <button class="slidenav__item slidenav__item--next"></button>
                        </nav>
  
                        <? /* <ul class="slidenav-dots  slidenav2">
                            <? foreach($slider as $i=>$slide){ ?>
                            <li><button class="slidenav__item-button" slide-id="<?=$i+1;?>"></button></li>
                            <? } ?>
                        </ul> */ ?>
                    </div>
                    <script>
                        setInterval(function(){
                            jQuery('.slidenav__item--next').trigger('click');
                        }, 5000);
                    </script>
                </main>
<!--         <div class="row slider-block-slider">
            <? if($slider = get_field('slider')) { ?>
                <? foreach($slider as $slide){ ?>
                <div class="slider-block-slide" style="background-image: url(<? echo kama_thumb_src('src=' . $slide['slider_img'] . '&w=1170&h=400'); ?>);">
                    <div class="slider-small-text"><?=$slide['slider_small_text']; ?></div>
                    <div class="slider-big-text"><?=$slide['slider_big_text']; ?></div>
                    <div class="slider-subig-text"><?=$slide['slider_big_sub_text']; ?></div>
                    <div class="slider-btn">
                        <div onClick="tModalForm.show('frm_order_get_sentence');" class="btn">Получить предложение</div>
                    </div>
                </div>
                <? } ?>
            <? } ?>
        </div>
        <script>
            jQuery(document).ready(function(){
                jQuery('.slider-block-slider').slick({
                    infinite: true,
                    arrows: true,
                    dots: true,
                    responsive: [
                        {
                          breakpoint: 500,
                          settings: {
                            arrows: false
                          }
                        }
                    ]
                });
            });
        </script> -->
 
        </div>
    </div>
</div>
<div class="advantages-block">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-xs-12">
		      <h1>Бытовки в Москве</h1>
		          <p>Мы предлагаем купить бытовку в Москве с доставкой и установкой по выгодной цене в нашей компании «Бытстрой». Мы уже 7 лет занимаемся продажей и сдачей в аренду вагончиков бытовок любого формата и назначения. Металлические бытовки незаменимы на начальных этапах строительства, для проживания рабочих, жилья при осваивании какой-либо территории.</p>
            </div>
            <div class="col-md-7 col-xs-12 advantages-img-right">
                <img src="<? bloginfo('template_directory'); ?>/images/bit-img.png" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <h2 class="left left-line">C нами выгодно</h2>
                <div class="advantages row">
                    <? $advantages = get_field('advantages'); 
                    foreach($advantages as $advantage){ ?>
                        <div class="col-md-4 col-xs-12">
                            <div class="advantage-item">
                             <!--    <div class="advantage-icon"><img src="<?=$advantage['icon']; ?>"></div> -->
                                <div class="advantage-title"><?=$advantage['title']; ?></div>
                                <div class="advantage-text"><?=$advantage['text']; ?></div>
                            </div>
                        </div>
                    <? } ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include(TEMPLATEPATH."/blocks/projects.php"); ?>






<div class="trusted-block">
    <div class="container">
        <div class="row clearfix">
                <h2 class="left left-line">Мы не обманываем</h2>
                <div class="row row-trust">
                    <div class="col-md-6 col-sm-12" style="padding-right: 10px;">
                        <div class="video-block">
                            <iframe width="495" height="370" src="https://www.youtube.com/embed/<? the_field('trusted_video'); ?>?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12 col-trust-right">
                        <div class="trusted-text">
                            <? the_field('trusted_text'); ?>
                        </div>
                        <div class="trusted-contact">
                            <img src="<? bloginfo('template_directory');?>/images/marker.png" alt="">
                            <div class="trusted-adr">
                                <? the_field('adr', 19); ?>
                            </div>
                            <div class="trusted-call">Звоните прямо сейчас!</div>
                            <div class="trusted-phones">
                                <span><a href="tel:<? the_field('phone', 19); ?>"><? the_field('phone', 19); ?></a> </span> 
                                <span><a href="tel:<? the_field('phone_2', 19); ?>"><? the_field('phone_2', 19); ?></a></span>
                            </div>
                            <div class="btn" onClick="tModalForm.show('frm_order');">Заказать звонок</div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
<div class="discount-block">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-1 col-md-4 col-sm-5 col-xs-4">
                <div class="discount-num">
                    <? the_field('action_percent', 5); ?>
                </div>
            </div>
            <div class="col-md-6 col-sm-7 col-xs-8">
                <div class="discount-text">
                    <? the_field('action_text', 5); ?>
                </div>
                <div onClick="tModalForm.show('sale');" class="btn btn-inversed">Хочу скидку</div>
            </div>
        </div>
    </div>
</div>




<div class="about-block">
    <div class="container">
        <div class="row">
            <h2 class="left left-line">Сфера применения</h2>
            <div class="row clearfix">
                <div class="col-md-5 col-md-offset-1 col-sm-12">
                    <div class="about-text">
                        <? the_field('about_text'); ?>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="about-img">
                        <img src="<? the_field('about_img'); ?>">
                    </div>
                </div>
                <div class="col-md-11 col-md-offset-1 col-sm-12">
                    <div class="about-text about-text-dop">
                        <? the_field('about_text_2'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include(TEMPLATEPATH."/blocks/kind.php"); ?>
<div class="reviews-block">
    <div class="container">
        <div class="row">
            <h2 class="left left-line">Отзывы наших клиентов</h2>
            <div class="reviews row clearfix  col-md-12">
                <? $reviews = get_field('reviews'); 
                foreach($reviews as $review){ ?>
                    <div class="col-md-12">
                        <div class="review-item">
                            <div class="review-thumb"><img src="<?=$review['img'] ?>"></div>
                            <div class="review-name"><?=$review['title'] ?></div>
                            <div class="review-spec"><?=$review['spec'] ?></div>
                            <div class="review-text"><?=$review['text'] ?></div>    
                        </div>
                    </div>
                <? } ?>
            </div>
        </div>
    </div>

 
    <script>
           jQuery(document).ready(function(){
                jQuery('.reviews').slick({
                    infinite: true,
                    arrows: true,
                    dots: true,
                      centerMode: true,
                      centerPadding: '28%',
                      slidesToShow: 1,
                      speed: 1000,
                    responsive: [
                        {
                          breakpoint: 1350,
                          settings: {
                            centerPadding: '33%',
                            slidesToShow: 1
                          }
                        },
                        {
                          breakpoint: 1200,
                          settings: {
                            centerPadding: '31%',
                            slidesToShow: 1
                          }
                        },
                        {
                          breakpoint: 991,
                          settings: {
                            centerPadding: '25%',
                            slidesToShow: 1
                          }
                        },
                        {
                          breakpoint: 650,
                          settings: {
                            centerPadding: '22%',
                            slidesToShow: 1
                          }
                        },
                       {
                          breakpoint: 500,
                          settings: {
                            centerPadding: '13%',
                            slidesToShow: 1
                          }
                        },
                         {
                          breakpoint: 420,
                          settings: {
                            centerPadding: '13%',
                            slidesToShow: 1
                          }
                        },
                        {
                          breakpoint: 380,
                          settings: {
                            centerPadding: '11%',
                            arrows: false,
                            slidesToShow: 1
                          }
                        }
                    ]
                });
            });

        </script>
</div>
<?php include(TEMPLATEPATH."/blocks/form-line.php"); ?>
<? /*<div class="news-block">
    <div class="container">
        <div class="row">
            <h2 class="center center-line">Новости и статьи</h2>
            <? $news = new WP_Query('category=3&posts_per_page=2'); 
                if($news->have_posts()) { ?>
                    <div class="news clearfix">
                        <? while($news->have_posts()) { $news->the_post(); ?>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="news-item clearfix">
                                    <div class="col-md-6 col-lg-7 row">
                                        <div class="news-thumb">
                                            <img src="<? echo kama_thumb_src('src=' . wp_get_attachment_url(get_post_thumbnail_id( $post->ID )) . '&w=285&h=240'); ?>" class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-5" style="padding-right: 0;">
                                        <div class="news-info">
                                            <div class="news-title"><? the_title(); ?></div>
                                            <div class="news-excerpt"><? echo kama_excerpt(); ?></div>
                                            <div class="news-date"><? echo get_the_date(); ?></div>
                                            <div class="news-link"><a href="<? the_permalink(); ?>">Читать></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <? } ?>
                    </div>
                        <div class="btn-center">
                            <a class="btn btn-inversed" href="<? echo get_category_link(3); ?>">ВСЕ НОВОСТИ</a>
                        </div>
                <? } wp_reset_query(); ?>
        </div>
    </div>
</div> */ ?>
<?php get_footer();
