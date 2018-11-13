<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

     <div class="news-item clearfix">
         <div class="news-item clearfix">

         <div class="col-md-3 col-sm-4 col-xs-12 row">
            <div class="news-thumb">
                <img src="<? echo kama_thumb_src('src=' . wp_get_attachment_url(get_post_thumbnail_id( $post->ID )) . '&w=400&h=300'); ?>">
                <button class="btn btn-thumb btn-magnifier" onClick="tModalForm.show('more-fb');">
                               <button class="btn btn-thumb btn-thumb-play" onClick="tModalForm.show('video-fb');">
            </div>
        </div>
        <div class="col-md-9 col-sm-8 col-xs-12">
            <div class="news-info">
                <div class="news-title"><a href="<? the_permalink(); ?>"><?php the_title() ?></a></div>
                <div class="news-excerpt"><? echo kama_excerpt('maxchar=420'); ?></div>
                <? /*<div class="news-link"><a href="<? the_permalink(); ?>">Читать></a></div> */?>
            </div>
        </div>

 
	<?php
	if ( is_single() ) {
		twentyseventeen_entry_footer();
	}
	?>

		</div>

	</div>
