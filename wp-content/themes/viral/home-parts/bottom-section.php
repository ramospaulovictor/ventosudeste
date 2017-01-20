<?php
/**
 * @package Viral
 */

$viral_frontpage_bottom_blocks = get_theme_mod('viral_frontpage_bottom_blocks');

if($viral_frontpage_bottom_blocks){
	$viral_frontpage_bottom_blocks = json_decode($viral_frontpage_bottom_blocks);
	foreach ($viral_frontpage_bottom_blocks as $viral_frontpage_bottom_block) {
		if($viral_frontpage_bottom_block->enable == 'on'){
			$viral_layout = $viral_frontpage_bottom_block->layout;
			
			$args = array(
				'cat1' => $viral_frontpage_bottom_block->category1,
				'cat2' => $viral_frontpage_bottom_block->category2,
				'cat3' => $viral_frontpage_bottom_block->category3,
				'layout' => $viral_layout,
				);

			do_action('viral_bottom_section', $args);
	
		}
	}
}