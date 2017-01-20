<?php
/**
 * @package Viral
 */

$viral_frontpage_middle_blocks = get_theme_mod('viral_frontpage_middle_blocks');

if($viral_frontpage_middle_blocks){
	$viral_frontpage_middle_blocks = json_decode($viral_frontpage_middle_blocks);
	foreach ($viral_frontpage_middle_blocks as $viral_frontpage_middle_block) {
		if($viral_frontpage_middle_block->category && ($viral_frontpage_middle_block->enable == 'on' )){
			$viral_layout = $viral_frontpage_middle_block->layout;
			
			$args = array(
				'cat' => $viral_frontpage_middle_block->category,
				'layout' => $viral_layout,
				'title' => $viral_frontpage_middle_block->title
				);

			do_action('viral_middle_section', $args);

		}
	}
}