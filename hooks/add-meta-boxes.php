<?php

add_action('add_meta_boxes', function (){
    add_meta_box(
         'wbs-receipe-box-1',     
         __('Ingredients', 'wbs-custom-post-type-demo'),     
         'wbs_custom_post_type_demo_metabox_test',     
         ['receipe'],     
         'advanced' 
    );
});

//Meta callback function
function wbs_custom_post_type_demo_metabox_test($post){
    $cs_meta_val = get_post_meta($post->ID);
    ?>
	<div class="metabox-row">
    	<div class="metabox-col">
			<label for="wbs_ingredient_1"><?php _e('Ingredient 1', 'wbs-custom-post-type-demo')?></label>
			<input type="text" name="wbs_ingredient_1" id="wbs_ingredient_1" class="regular-text" value="<?php if( isset( $cs_meta_val['wbs_ingredient_1'])) echo $cs_meta_val['wbs_ingredient_1'][0] ?>">
		</div>
	</div>
	<?php     
}

//save meta value with save post hook
function wbs_custom_post_type_demo_save( $post_id ){
	
	if(isset($_POST['wbs_ingredient_1'])){
		update_post_meta($post_id,'wbs_ingredient_1', sanitize_text_field($_POST['wbs_ingredient_1']));
    } else {
		delete_post_meta( $post_id, 'wbs_ingredient_1' );
    }
	
}
add_action('save_post', 'wbs_custom_post_type_demo_save');