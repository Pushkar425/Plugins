<?php
/** 
 Plugin Name: Plugin-meta
 */


function create_metaboxes(){
    $scr = ['post','article','page'];
    foreach($scr as $scr){
    add_meta_box('page-id','Metabox','article_function',$scr,'normal','high');
    }
}
add_action('add_meta_boxes','create_metaboxes');


function  article_function($post){
    
    <div>
        <label for="txtPublisherName">Publisher name</label>
        <?php
        if(isset($_POST['txtPublisherName'])){
            $publisher = get_post_meta(get_the_ID(),'article_publisher_name',true);
        }else{
            $publisher ="Enter Name...";
        }
        ?>
        <input type="text" name="txtPublisherName" value="<?php echo $publisher;?>" placeholder="Enter Name...">
    </div>
    <?php
}


function save_metabox_data($post_id){
    if ( array_key_exists( 'txtPublisherName', $_POST ) ) {
        update_post_meta(
            $post_id,
            'article_publisher_name',
            $_POST['txtPublisherName']
        );
    }

    

}
add_action('save_post','save_metabox_data');




?>
