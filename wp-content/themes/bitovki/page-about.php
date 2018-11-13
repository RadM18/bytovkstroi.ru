<?php
/* template name: О компании */

get_header(); ?>
<div class="container container-about">
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
        <div class="page-title">
             <h2 class="left left-line"><? the_title(); ?></h2>
        </div>
        <div class="page-content">
            <div class="row">
                <? if($pageImg = get_field('page_img')) { ?>
                    <div class="col-md-5 col-sm-12">
                        <img src="<? echo kama_thumb_src('src=' . $pageImg . '&w=470&h=370'); ?>">
                    </div>
                <? } ?>
                    <div class="col-md-7 col-sm-12">
                        <div class="text-block">
                            <? while(have_posts()) { the_post(); 
                                the_content();
                            } ?>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
 
<div class="about-blocks">
    <div class="container">
        <div class="row">
            <h2>Цифры и факты</h2>
            <? $about = get_field('about'); 
            foreach($about as $aboutItem){ ?>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="about-item">
                        <div class="about-item-title"><?=$aboutItem['title']?></div>
                        <div class="about-item-text"><?=$aboutItem['text']?></div>
                    </div>
                </div>
            <? } ?>
        </div>
    </div>
</div>

<div class="about-blocks2">
    <div class="container">
        <div class="row">
            <h2>OOO «Бытстрой» сегодня это:</h2>
            <div class="col-md-12">
                <div class="about-blocks-box">
                      <div class="col-md-4 col-sm-6 col-xs-12">
                    <? $aboutt = get_field('about2'); 
                    foreach($aboutt as $aboutItemm){ ?>
                            <ul>
                                <li><?=$aboutItemm['sub-title2']?></li>
                            </ul>
                    <? } ?>
                        </div>
                      <div class="col-md-4 col-sm-6 col-xs-12">
                    <? $aboutt2 = get_field('about2'); 
                    foreach($aboutt2 as $aboutItemm2){ ?>
                            <ul>
                                <li><?=$aboutItemm2['sub-title3']?></li>
                            </ul>
                    <? } ?>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="about-blocks3">
    <div class="container">
        <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
               
                    <?php if( get_field('img_about333') ): ?>

                        <img src="<?php the_field('img_about333'); ?>" />

                    <?php endif; ?>
                </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                        <? $about3 = get_field('about3'); 
                        foreach($about3 as $aboutItem3){ ?>
                                <div class="about-item">
                                    <div class="about-item-title"><?=$aboutItem3['title3a']?></div>
                                    <div class="about-item-text"><?=$aboutItem3['text3a']?></div>
                                    <a class="btn" href="/kontakty/">Контакты</a>
                                        <a class="link-dev" href="/kontakty/">Сотрудничество</a>
                                </div>
                        <? } ?>


                </div>

        </div>
    </div>
</div>

<div class="specs-block">
    <div class="container">
        <div class="row">
            <h2 class="center center-line">Наши специалисты</h2>
            <? $specs = get_field('works'); 
            foreach($specs as $spec){ ?>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="spec-item">
                        <div class="spec-thumb"><img src="<? echo kama_thumb_src('src=' . $spec['img'] . '&w=800&h=800'); ?>" alt=""></div>
                        <div class="spec-info">
                            <div class="spec-name"><?=$spec['name']; ?></div>
                            <div class="spec-spec"><?=$spec['spec']; ?></div>
                        </div>
                    </div>
                </div>
            <? } ?>
        </div>
    </div>
</div>
<div class="vacant-block">  
    <div class="container">
        <div class="row">
            <h2 class="center center-line">Вакансии</h2>
            <? $vacants = get_field('vacant'); 
            foreach($vacants as $vacant){ ?>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="spec-item">
                        <div class="spec-thumb"><img src="<? echo kama_thumb_src('src=' . $vacant['img'] . '&w=800&h=800'); ?>" alt=""></div>
                        <div class="spec-info">
                            <div class="spec-name"><?=$vacant['title']; ?></div>
                        </div>
                    </div>
                </div>
            <? } ?>
        </div>
    </div>
</div>
<?php get_footer();
