<?php get_header(); ?>
<div class="page-template-main">
    <div class="page-title">
        <div class="container">
        <div class="row">
            <div class="breadcrumbs">
                <div class="col-md-12 col-xs-12">
                    <div class="breadcrumbs-inner">
                      <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>  
                    </div>
                </div>
            </div>
        </div>            <div class="row">
                <h1 class="left left-line"><? if(function_exists(h1_title)) h1_title(); ?></h1>
            </div>
        </div>
    </div>
    <div class="page-content">
        <div class="container">
            <div class="row"><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    			<? the_content(); ?><?php endwhile; endif; ?>
            </div>
        </div>
    </div> 
</div>
<?php get_footer();
