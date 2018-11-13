<div class="services-block">
    <div class="container">
        <div class="row">
            <? if(!is_page(13)) { ?><h2 class="center center-line">Наши услуги</h2><? } ?>
            <div class="services row clearfix">
                <? $services = get_field('services', 13);
                foreach($services as $service){ ?> 
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="services-item">
                            <div class="services-icon"><img src="<?=$service['icon'] ?>"></div>
                            <div class="services-title"><a href="<? echo get_permalink($service['link']); ?>"><?=$service['title'] ?></a></div>
                            <div class="services-sep"></div>
                        </div>
                    </div>
                <? } ?>
            </div>
        </div>
    </div>
</div>