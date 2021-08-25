<?php
get_header();
?>

<div id="page">
    <?php
        $args = array( 
            'post_type' => 'movie',
            'posts_per_page' => 3 
            );
            $query = new WP_Query($args);
            if($query->have_posts()) {
            while($query->have_posts()){
                $query->the_post();
                        
    ?>
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
                <p><img src="<?php echo $thumb_url;?>" width="143" height="143" alt="" class="alignleft border" > </p>
                <?php the_content();?>
            </div>
        </div>
    </div>              
            
    <?php
            }
} ?>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>


