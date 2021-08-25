<?php

/* 
Template Name: single-page
*/
?>
<?php get_header(); ?>
<div id="page">
    <div class="content">
        <div class="post">
            <h2 class="title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
            <p class="meta">Posted by <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" title="<?php echo esc_attr( get_the_author() ); ?>"><?php the_author(); ?></a>on <a href="<?php //echo get_the_date();?>"><?php echo get_the_date();?></a>
            &nbsp;&bull;&nbsp; <a href="#" class="comments">Comments (64)</a> &nbsp;&bull;&nbsp; <a href="<?php the_permalink();?>" class="permalink">Full article</a></p>
            <div class="entry">
                <?php $thumb_id = get_post_thumbnail_id();
                    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                    $thumb_url = $thumb_url_array[0];
                ?>
                <p><img src="<?php echo $thumb_url;?>"width="143" height="143" alt="" class="alignleft border" ><?php 
                the_content();?></p>
            </div>
        </div>
    </div>                
</div>

<?php get_sidebar(); ?>
<?php get_footer() ;?>






