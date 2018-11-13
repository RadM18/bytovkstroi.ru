<?php
/* template name: Контакты */

get_header(); ?>
<div class="page-contacts">
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

    <div class="page-title page-contact-title">
        <div class="container">
            <div class="row">
                <h2><? the_title(); ?></h2>
            </div>
        </div>
    </div>
    <div class="page-content page-content-contact">
        <div class="container">
            <div class="row">
                    <div class="col-md-12">
                        <div class="text-block">
                            <? while(have_posts()) { the_post(); 
                                the_content();                       
                            } ?>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="contacts-block">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-info">
                        <div class="contact-line adr">
                            <div class="contact-title">Адрес</div>
                            <div class="contact-text"><? the_field('adr'); ?></div>
                        </div>
                        <div class="contact-line work-time">
                            <div class="contact-title">Время работы</div>
                            <div class="contact-text"><? the_field('work_time'); ?></div>
                        </div>
                        <div class="contact-line phones">
                            <div class="contact-title">Контакты</div>
                            <div class="contact-text">
                               <span><? the_field('phone'); ?></span> <span><? the_field('phone_2'); ?></span> <br>
                                <span class="email-contact"><? the_field('email'); ?></span>
                            </div>
                        </div>
    <!--                     <div class="contact-line">
                            <i class="fa fa-truck" aria-hidden="true" style="position: absolute;left: 36px;font-size: 19px;top: 5px;color: #115faf;"></i>
                            <div class="contact-title">Доставка круглосуточно</div>
                        </div> -->
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="map-block">
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aa63075f40fc3025dbecfb93bd6efe23160044327d4ca899ff7a6b0dfcaf6eeb0&amp;width=100%25&amp;height=320&amp;lang=ru_RU&amp;scroll=true"></script>
                    </div>
                </div>
                <div class="col-md-12 col-image-contact">
                    <img src="<? bloginfo('template_directory'); ?>/images/proezd.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <?php include(TEMPLATEPATH."/blocks/form-line.php"); ?>
    <!-- <div class="chief-form">
        <div class="container">
            <div class="row">
                <h2 class="center center-line">Есть вопросы? – Задайте их директору!</h2>
                <div class="col-md-6 col-md-offset-3">
                    <div class="contacts-form">
                        <? echo do_shortcode('[contact-form-7 id="188" title="Письмо директору"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</div>
<?php get_footer();
