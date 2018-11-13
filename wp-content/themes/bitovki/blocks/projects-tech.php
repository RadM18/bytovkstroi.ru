<div class="projects-block projects-block-tech">
    <div class="container">
        <div class="row">
            <h2 class="center center-line">Техника в наличии</h2>
            <div class="projects clearfix">
                <? $args = array(
                    'post_type' => 'page',
                    'post_status' => 'publish', 
                    'meta_key' => 'page_parent',
                    'meta_value' => 85,
                    'meta_compare' => 'LIKE',
                    'order_by' => 'date',
                    'order' => 'ASC'
                ); 
                $products = new WP_Query($args); 
                while($products->have_posts()) { $products->the_post(); ?>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="project-item">
                            <div class="project-thumb"><a href="<? the_permalink(); ?>"><img src="<? echo kama_thumb_src('src=' . wp_get_attachment_url(get_post_thumbnail_id( $post->ID )) . '&w=270&h=200') ?>"></a></div>
                            <div class="project-title"><? the_title(); ?></div>
                            <div class="project-info">
                                <div class="project-info-line clearfix">
                                    <span class="pull-left">Грузоподъёмность крана:</span><span class="pull-right"><? the_field('gpk', $post->ID); ?> т</span>
                                </div>
                                <div class="project-info-line clearfix">
                                    <span class="pull-left">Грузоподъёмность платформы:</span><span class="pull-right"><? the_field('gpp', $post->ID); ?> т</span>
                                </div>
                            </div>
                            <div class="projects-links row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="btn" onClick="tModalForm.show('zak');">Заказать</div></div>
                               
                            </div>
                        </div>
                    </div>
                <? } wp_reset_query(); ?>
            </div>
        </div>
    </div>
</div>