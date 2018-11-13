<div class="kind-block">
    <div class="container">
        <div class="row">
            <h2 class="center center-line">Виды бытовок</h2>
            <div class="kinds row clearfix">
                <? $kinds = get_field('kind', 9);
                foreach($kinds as $kind){ ?> 
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="services-item">
                            <div class="services-thumb"><img src="<? echo wp_get_attachment_url(get_post_thumbnail_id( $kind['link'] )); ?>"></div>
                            <div class="services-title"><a href="<? echo get_permalink($kind['link']); ?>"><? echo get_the_title($kind['link']); ?></a></div>
                            <div class="services-sep"></div>
                            
                        </div>
                    </div>
                <? } ?>
            </div>
        </div>
    </div>
</div>