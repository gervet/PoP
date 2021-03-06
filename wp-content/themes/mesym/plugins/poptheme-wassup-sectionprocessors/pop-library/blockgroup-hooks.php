<?php

/**---------------------------------------------------------------------------------------------------------------
 *
 * PageSection Hooks
 *
 * ---------------------------------------------------------------------------------------------------------------*/

class MESYM_SectionProcessors_BlockGroupHooks {

	function __construct() {

		add_filter(
			'GD_Template_Processor_CustomBlockGroups:blocks:home_widgetarea',
			array($this, 'hometop_widget_firstblocks'),
			3
		);
		add_filter(
			'GD_Template_Processor_CustomBlockGroups:blocks:home_widgetarea',
			array($this, 'hometop_widget_blocks'),
			20
		);
		add_filter(
			'GD_Template_Processor_CustomBlockGroups:blocks:author_widgetarea',
			array($this, 'authortop_widget_firstblocks'),
			3
		);
		add_filter(
			'GD_Template_Processor_CustomBlockGroups:blocks:author_widgetarea',
			array($this, 'authortop_widget_blocks'),
			20
		);
		add_filter(
			'GD_Template_Processor_CustomBlockGroups:blocks:tag_widgetarea',
			array($this, 'tagtop_widget_firstblocks'),
			3
		);
		add_filter(
			'GD_Template_Processor_CustomBlockGroups:blocks:tag_widgetarea',
			array($this, 'tagtop_widget_blocks'),
			20
		);
		add_filter(
			'GD_Template_Processor_CustomBlockGroups:blocks:atts',
			array($this, 'block_atts'),
			10,
			5
		);
	}

	function block_atts($blockgroup_block_atts, $blockgroup_block, $blockgroup, $blockgroup_atts, $processor) {

		switch ($blockgroup) {

			case GD_TEMPLATE_BLOCKGROUP_AUTHOR_WIDGETAREA:
			case GD_TEMPLATE_BLOCKGROUP_TAG_WIDGETAREA:

				// Hide if block is empty
				$processor->add_att($blockgroup_block, $blockgroup_block_atts, 'hidden-if-empty', true);

				if (
					$blockgroup_block == GD_TEMPLATE_BLOCK_AUTHORPROJECTS_HORIZONTALSCROLLMAP ||
					$blockgroup_block == GD_TEMPLATE_BLOCK_TAGPROJECTS_HORIZONTALSCROLLMAP
					) {

					// Format
					$processor->add_att($blockgroup_block, $blockgroup_block_atts, 'title-htmltag', 'h3');
					$processor->add_att($blockgroup_block, $blockgroup_block_atts, 'add-titlelink', true);
					$processor->add_att($blockgroup_block, $blockgroup_block_atts, 'collapsible', true);
				}
				break;
			
			case GD_TEMPLATE_BLOCKGROUP_HOME_WIDGETAREA:

				if ($blockgroup_block == GD_TEMPLATE_BLOCK_FEATURED_CAROUSEL) {
					
					// Hide if block is empty
					$processor->add_att($blockgroup_block, $blockgroup_block_atts, 'hidden-if-empty', true);
				}
				elseif ($blockgroup_block == GD_TEMPLATE_BLOCK_PROJECTS_HORIZONTALSCROLLMAP) {

					// Make lazy-load
					$processor->add_att($blockgroup_block, $blockgroup_block_atts, 'content-loaded', false);	

					// Format
					$processor->add_att($blockgroup_block, $blockgroup_block_atts, 'title-htmltag', 'h3');
					$processor->add_att($blockgroup_block, $blockgroup_block_atts, 'add-titlelink', true);
					$processor->add_att($blockgroup_block, $blockgroup_block_atts, 'collapsible', true);
				}
				break;
		}

		return $blockgroup_block_atts;
	}

	function hometop_widget_blocks($blocks) {

		// Add the Blockgroup which has the Featured widget
		$blocks[] = GD_TEMPLATE_BLOCK_FEATURED_CAROUSEL;
		return $blocks;
	}

	function hometop_widget_firstblocks($blocks) {

		// Add the Blockgroup which has the Featured widget
		$blocks[] = GD_TEMPLATE_BLOCK_PROJECTS_HORIZONTALSCROLLMAP;
		return $blocks;
	}

	function authortop_widget_blocks($blocks) {

		// Add the Blockgroup which has the Featured widget
		$blocks[] = GD_TEMPLATE_BLOCK_AUTHORFEATURED_CAROUSEL;
		return $blocks;
	}

	function authortop_widget_firstblocks($blocks) {

		// Add the Blockgroup which has the Featured widget
		$blocks[] = GD_TEMPLATE_BLOCK_AUTHORPROJECTS_HORIZONTALSCROLLMAP;
		return $blocks;
	}

	function tagtop_widget_blocks($blocks) {

		// Add the Blockgroup which has the Featured widget
		$blocks[] = GD_TEMPLATE_BLOCK_TAGFEATURED_CAROUSEL;
		return $blocks;
	}

	function tagtop_widget_firstblocks($blocks) {

		// Add the Blockgroup which has the Featured widget
		$blocks[] = GD_TEMPLATE_BLOCK_TAGPROJECTS_HORIZONTALSCROLLMAP;
		return $blocks;
	}
}

/**---------------------------------------------------------------------------------------------------------------
 * Initialization
 * ---------------------------------------------------------------------------------------------------------------*/
new MESYM_SectionProcessors_BlockGroupHooks();
