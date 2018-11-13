<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
</div>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo">
                            <img src="/wp-content/uploads/2017/08/Group-13@3x-min.png">
                            <span>Аренда и продажа бытовок б/у в Москве</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="logo-text">
                             </div>
                    </div>
                </div>
                <div class="adr">
                    <? the_field('adr', 19); ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer-info">
                    <span>Все предлагаемые сведения, размещенные на сайте, носят справочно-информационный характер и не являются публичной офертой, определяемой ст. 437 ГК РФ</span>
                    <br>
                    <a href="/politika-konfidencialnosti/">Политика конфиденциальности</a>
                    <div class="copyright">
                        © 2010—2018  <? if(is_front_page()) { ?><a href="https://xpert-studio.ru/" target="_blank">Разработка сайтов</a> - Xpert-studio.ru<? } ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-md-offset-1">
                <div class="share">
                    <span>Поделиться в соцсетях:</span>
                    <ul class="social">
                        <li><a href="https://vk.com/public152632979"><img src="<? bloginfo('template_directory'); ?>/images/vk.png"></a></li>
                        <li><a href="https://ok.ru/"><img src="<? bloginfo('template_directory'); ?>/images/ok.png"></a></li>
                        <li><a href="https://www.facebook.com/groups/305375613265157/"><img src="<? bloginfo('template_directory'); ?>/images/fb.png"></a></li>
                        <li><a href="https://plus.google.com/?hl=ru"><img src="<? bloginfo('template_directory'); ?>/images/gp.png"></a></li>
                        <li><a href="https://twitter.com/Bytstroi"><img src="<? bloginfo('template_directory'); ?>/images/tw.png"></a></li>
                    </ul>
                </div>
            </div>
            <? if(is_front_page()){ ?>
                <div class="dev-logo">
                    <a href="https://xpert-studio.ru/" target="_blank">
                        <img src="<? bloginfo('template_directory'); ?>/images/xpert-logo.png" alt="">
                    </a>
                </div>
            <? } ?>
        </div>
    </div>
</div>
        
<?php wp_footer(); ?>
<!-- Окна. В подвал сайта -->
<div id="tModalForm">
    <div class="overlay" onclick="tModalForm.closeAll();"></div>
    <div class="form-box" id="frm_order">
        <div class="form-close" onclick="tModalForm.closeAll();"></div>
        <div class="h2 center center-line">Обратный звонок</div>
        <div><?php echo do_shortcode('[contact-form-7 id="284" title="Заказать звонок (всплывающая)"]'); ?></div>
    </div>

    <div class="form-box" id="frm_order1">
        <div class="form-close" onclick="tModalForm.closeAll();"></div>
        <div class="h2 center center-line">Обратный звонок</div>
        <div><?php echo do_shortcode('[contact-form-7 id="2284" title="Заказать звонок (всплывающая из таблицы)"]'); ?></div>
    </div>

    <div class="form-box" id="frm_order_get_sentence">
        <div class="form-close" onclick="tModalForm.closeAll();"></div>
        <div class="h2 center center-line">Получить предложение</div>
        <div><?php echo do_shortcode('[contact-form-7 id="284" title="Заказать звонок (всплывающая)"]'); ?></div>
    </div>

    <div class="form-box" id="rent-container">
        <div class="form-close" onclick="tModalForm.closeAll();"></div>
        <div class="h2 center center-line">Арендовать контейнер</div>
        <div><?php echo do_shortcode('[contact-form-7 id="3017" title="Арендовать контейнер (всплывающая)"]'); ?></div>
    </div>

    <div class="form-box" id="buy-container">
        <div class="form-close" onclick="tModalForm.closeAll();"></div>
        <div class="h2 center center-line">Заказать контейнер</div>
        <div><?php echo do_shortcode('[contact-form-7 id="284" title="Заказать звонок (всплывающая)"]'); ?></div>
    </div>
    
    <div class="form-box" id="buy">
        <div class="form-close" onclick="tModalForm.closeAll();"></div>
        <div class="h2 center center-line">Заказать бытовку</div>
        <div><?php echo do_shortcode('[contact-form-7 id="284" title="Заказать звонок (всплывающая)"]'); ?></div>
    </div>

    <div class="form-box" id="rent">
        <div class="form-close" onclick="tModalForm.closeAll();"></div>
        <div class="h2 center center-line">Арендовать бытовку</div>
        <div><?php echo do_shortcode('[contact-form-7 id="284" title="Заказать звонок (всплывающая)"]'); ?></div>
    </div>

    <div class="form-box" id="magnifier">
        <div class="form-close" onclick="tModalForm.closeAll();"></div>
        <div>
            <div class="gallery-product-block">
                <div class="big-thumb"></div>
                <div class="small-thumb"></div>
            </div> 
        </div>

    </div>                       
                           
                            <!--    Линейка    -->
    <div class="form-box" id="line">
        <div class="form-close" onclick="tModalForm.closeAll();"></div>
             <div class="line-drawing">
                 
            </div>
    </div>

    <div class="form-box" id="sale">
        <div class="form-close" onclick="tModalForm.closeAll();"></div>
        <div class="h2 center center-line">Хочу скидку</div>
        <div><?php echo do_shortcode('[contact-form-7 id="284" title="Заказать звонок (всплывающая)"]'); ?></div>
    </div>

    <div class="form-box" id="zak">
        <div class="form-close" onclick="tModalForm.closeAll();"></div>
        <div class="h2 center center-line">Заказать!</div>
        <div><?php echo do_shortcode('[contact-form-7 id="284" title="Заказать звонок (всплывающая)"]'); ?></div>
    </div>
<!--     <div class="form-box" id="video-fb">
        <div class="form-close" onclick="tModalForm.closeAll();"></div>
       
        <div>
            <div class="box-video">
                 <? $video_feedback_block = get_field('video_feedback_block'); 
                 foreach($video_feedback_block as $video_feedback_blocks){ ?>

              <div class="bg-video" style="background: url(<?=$video_feedback_blocks['video_prev']; ?>) #111;">
                <div class="bt-play">Play</div>
              </div>
              <div class="video-container">
                <iframe width="590" height="332" src="<?=$video_feedback_blocks['video_feedback']; ?>" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
              </div><? the_field('video_feedback'); ?>

                     <? } ?>
                    
            </div>
        </div>
    </div> -->

                            <!--    Видео с youtube    -->
<div id="video" class="lightbox" onclick="hideVideo('video','youtube')">
  <div class="lightbox-container">  
    <div class="lightbox-content">
      <button onclick="" class="lightbox-close">Закрыть | ✕</button>
      <div class="video-container">
        <iframe id="youtube" width="960" height="540" src="" frameborder="0" allow="autoplay; encrypted-media" frameborder="0" allowfullscreen></iframe>
      </div>      
    </div>
  </div>
</div>
<script>
    $ = jQuery;
    $('[data-video]').click(function(){
        var videoSrc = $(this).attr('data-video');
        $('#video').show();
        $('#video iframe').attr('src', videoSrc +'&autoplay=1');
    });
    $('#video, #video .lightbox-close').click(function(){
        $('#video').hide();
        $('#video iframe').attr('src', '');
    });
</script>
                            <!--    Отзыв текст и фото    -->
    <div class="form-box modal-content ajax" id="more-fb"  >
        <div class="form-close" onclick="tModalForm.closeAll();"></div>
        <!-- <div class="h2 center center-line">Размеры</div> -->
        <div>
            <h4 class="center"><?php the_title() ?></h4>
            <div class="wrap-fb-box">
                <div class="feedback-thumb">
                    <img src="<? echo kama_thumb_src('src=' . wp_get_attachment_url(get_post_thumbnail_id( $post->ID )) . '&w=120&h=120'); ?>">
                </div>
                <div class="text-block">
                    <p> <?php the_content(); ?></p>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /Окна -->

<script>
        $ = jQuery.noConflict();
        
        $('.open-popup-gal').click(function(){
            var galleryBig = $(this).attr('data-gallery-big');
            var gallerySmall = $(this).attr('data-gallery-small');
            galleryBig = galleryBig.slice(0, -1);
            galleryBig = galleryBig.split(';');
            gallerySmall = gallerySmall.slice(0, -1);
            gallerySmall = gallerySmall.split(';');
            
            for(i = 0; i < galleryBig.length; i++) {
                var bigThumb = '<a class="fncbox fancybox" rel="popup-gal" href="'+galleryBig[i]+'"><img src="'+galleryBig[i]+'"></a>';
                var smallThumb = '<img src="'+gallerySmall[i]+'">'
                $('.form-box#magnifier .big-thumb').append(bigThumb);
                $('.form-box#magnifier .small-thumb').append(smallThumb);
                $('.form-box#magnifier .big-thumb a.fancybox').fancybox();
            }
            
            jQuery('.form-box#magnifier .big-thumb').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                fade: true,
                asNavFor: '.small-thumb'
            });
            jQuery('.form-box#magnifier .small-thumb').slick({
                slidesToShow: 9,
                slidesToScroll: 1,
                asNavFor: '.big-thumb',
                focusOnSelect: true,
                arrows: false,
                responsive: [
                    {
                      breakpoint: 991,
                      settings: {
                        slidesToShow: 8,
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
                      breakpoint: 380,
                      settings: {
                        slidesToShow: 3,
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
            
        });
        
        $('.open-popup-line').click(function(){
            var dataDrawing = $(this).attr('data-draw');
            dataDrawing = '<img src="'+dataDrawing+'">';
            $('.form-box#line .line-drawing').append(dataDrawing);
        });
        
        $('#tModalForm .form-box#line .form-close, #tModalForm .overlay').click(function(){
            $('.form-box#line .line-drawing *').remove();
        });
    
        $('#tModalForm .form-box#magnifier .form-close, #tModalForm .overlay').click(function(){
            $('.form-box#magnifier .big-thumb').slick('unslick');
            $('.form-box#magnifier .small-thumb').slick('unslick');
            $('.form-box#magnifier .big-thumb *').remove();
            $('.form-box#magnifier .small-thumb *').remove();
        });
        
        
        
    </script>



<!-- Скрипт. В подвал сайта -->
<script type="text/javascript">
(function($){
    window.tModalForm = {
        overlayBox:'#tModalForm .overlay', formBox:'#tModalForm .form-box',
        show: function(id, flds) {
            var cs = $(window).scrollTop();var wh = window.innerHeight;var hb = $('#'+id).outerHeight();var po = (parseInt(wh) - parseInt(hb)) / 2;
            if( po > 0 ) eo = parseInt(cs) + parseInt(po); else eo = parseInt(cs) + 10;
            $(tModalForm.overlayBox).fadeIn('fast',function(){$('#'+id).animate({'top':eo}, 500);});
            if( flds ) $.each(flds, function(i,v) {if(i && v) $('#'+i).val(v);});
            return false;
        },
        closeAll:function() {
            $(tModalForm.formBox).each(function() {$(this).animate({top:-2000}, 300);});
            $(tModalForm.overlayBox).fadeOut('fast');
            return false;
        }
    };
})(jQuery);
</script>
<!-- /Скрипт -->

<script>
    function setEqualHeight(columns){ 
        var tallestcolumn = 0;
        columns.each(
            function(){
                currentHeight = jQuery(this).height();
                if(currentHeight > tallestcolumn){
                    tallestcolumn  = currentHeight;
                }
            }
        );
        columns.height(tallestcolumn);
        tallestcolumn = 0;
        }
    jQuery(document).ready(function(){
        setEqualHeight(jQuery('.advantage-text'));
        setEqualHeight(jQuery('.services-icon'));
        setEqualHeight(jQuery('.services-thumb'));
        setEqualHeight(jQuery('.review-text'));
        setEqualHeight(jQuery('.about-item'));
        //setEqualHeight(jQuery('.spec-info'));
        setEqualHeight(jQuery('.project-item'));
        setEqualHeight(jQuery('.project-title'));
        setEqualHeight(jQuery('.project-info'));
        setEqualHeight(jQuery('.news-excerpt'));
        setEqualHeight(jQuery('.news-title'));
    });
</script>
<script src="<? bloginfo('template_directory'); ?>/js/jquery.maskedinput.min.js"></script>
<script>
    jQuery( document ).ready(function() {
       jQuery(".wpcf7-tel").mask("+7 (999) 999-99-99",{placeholder:"+7 (___) ___-__-__"});
    });
    
    jQuery("a.fncbox").fancybox();
</script>
<script>
    jQuery('.toggle-btn').click(function(){
        jQuery('.mob-menu').addClass('show');
        jQuery('.close-btn').show(500);
    });
    jQuery('.close-btn').click(function(){
        jQuery('.mob-menu').removeClass('show');
        jQuery(this).hide(500);
    });
    
    jQuery('.toggle-phone').click(function(){
        jQuery('.phones-block').show(500);
        jQuery(this).hide(500);
        jQuery('.close-phones').show(500);
    }); 
    jQuery('.close-phones').click(function(){
        jQuery('.phones-block').hide(500);
        jQuery(this).hide(500);
        jQuery('.toggle-phone').show(500);
    });
</script>
<script>
    jQuery('.price-order-table .btn').click(function(){
        var srok = jQuery(this).parent().parent().children('td:nth-child(1)').text();
        var price = jQuery(this).parent().parent().children('td:nth-child(2)').text();
        var zalog = jQuery(this).parent().parent().children('td:nth-child(3)').text();
        console.log(srok, price, zalog);
        jQuery('#frm_order1 input[name="hidden-srok"]').attr('value', srok);
        jQuery('#frm_order1 input[name="hidden-price"]').attr('value', price);
        jQuery('#frm_order1 input[name="hidden-zalog"]').attr('value', zalog);
    });
</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter28501166 = new Ya.Metrika({
                    id:28501166,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/28501166" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<script>
jQuery(document).ready(function(){
    jQuery('.fc-form-2').submit(function(){
        yaCounter28501166.reachGoal('napishite'); return true;
    });
    jQuery('.fc-form-1').submit(function(){
        yaCounter28501166.reachGoal('ZAKAZ'); return true;
    });
});
</script>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
      var siblings = getSiblings(this);
      var siblingsArr = Array.prototype.slice.call(siblings); 
      console.log("ssasa: " + siblingsArr);
      siblingsArr.forEach(function(item) {
          console.log("www");
          // item.className.add("123");
      })
      console.log("Sibling:" + siblings);
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    panel.style.padding = "0";
    } else {
      panel.style.maxHeight = panel.scrollHeight + "20px";
      panel.style.padding = "17px 10px 16px 30px";
    } 
  });
}
function getSiblings(el, filter) {
    var siblings = [];
    el = el.parentNode.firstChild;
    do { if (!filter || filter(el)) siblings.push(el); } while (el = el.nextSibling);
    return siblings;
}
</script>
 
                            <!-- Кнопка Загрузить ещё  -->
 <script>
     jQuery(function($){
    $('#true_loadmore').click(function(){
        $(this).text('Загружаю...');
        var data = {
            'action': 'loadmore',
            'query': true_posts,
            'page' : current_page
        };
        $.ajax({
            url:ajaxurl, // обработчик
            data:data, // данные
            type:'POST', // тип запроса
            success:function(data){
                if( data ) { 
                    $('#true_loadmore').text('Загрузить ещё').before(data); // вставляем новые посты
                    current_page++; // увеличиваем номер страницы на единицу
                    if (current_page == max_pages) $("#true_loadmore").remove(); // если последняя страница, удаляем кнопку
                } else {
                    $('#true_loadmore').remove(); // если мы дошли до последней страницы постов, скроем кнопку
                }
            }
        });
    });
});
 </script>
                            <!-- Кнопка Загрузить ещё  -->
 <script>
  jQuery(function($){
    $(".box-video").click(function(){
      $('iframe',this)[0].src += "&amp;autoplay=1";
      $(this).addClass('open');
    });
  });
 </script>
                            <!-- Табы характеристик  -->
<script>
  jQuery(function($){
    $('.tabgroup > div').hide();
    $('.tabgroup > div').hide();
    $('.tabgroup > div:first-of-type').show();
    $('.tabs a').click(function(e){
      e.preventDefault();
        var $this = $(this),
            tabgroup = '#'+$this.parents('.tabs').data('tabgroup'),
            others = $this.closest('li').siblings().children('a'),
            target = $this.attr('href');
        others.removeClass('active-tabs');
        $this.addClass('active-tabs');
        $(tabgroup).children('div').hide();
        $(target).show();
    })
  });
</script>
    <script>
        jQuery(document).ready(function(){
            if(jQuery(".project-info-line .pull-right").text().length == 0 ) {
                jQuery(".projects-block h2").hide();
            }
          
 
        });
    </script>                
<script>
jQuery(function($){
function fetch(e){
        var param = $(e.target).attr('data-ajax-param');
        jQuery.post('<? echo site_url(); ?>/wp-admin/admin-ajax.php', {'action':'modal_content', 'param':param}, function(response){
            $('.modal-content.ajax').html(response);
            console.log(response);
        });
    }

    jQuery('[data-ajax-param]').click(function (e) {
        console.log(e.target);
        fetch(e);
    });
});
</script>
<script type="text/javascript" src="<? bloginfo('template_directory'); ?>/js/demo.js"></script>
<script type="text/javascript" src="<? bloginfo('template_directory'); ?>/js/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="<? bloginfo('template_directory'); ?>/js/anime.min.js"></script>
<script type="text/javascript" src="<? bloginfo('template_directory'); ?>/js/demo1.js"></script>
 
<!-- RedHelper
<script id="rhlpscrtg" type="text/javascript" charset="utf-8" async="async" 
src="https://web.redhelper.ru/service/main.js?c=akssana21"> 
</script> 
/Redhelper -->
</body>
</html>
