<?php
/**---------------------------------------------------------------------------------------------------------------
 *
 * Template Manager (Handlebars)
 *
 * ---------------------------------------------------------------------------------------------------------------*/

define ('GD_TEMPLATE_BLOCKGROUP_SECTION_INDIVIDUALS_SIDEBAR', PoP_ServerUtils::get_template_definition('blockgroup-section-individuals-sidebar'));
define ('GD_TEMPLATE_BLOCKGROUP_SECTION_ORGANIZATIONS_SIDEBAR', PoP_ServerUtils::get_template_definition('blockgroup-section-organizations-sidebar'));
define ('GD_TEMPLATE_BLOCKGROUP_SECTION_MYMEMBERS_SIDEBAR', PoP_ServerUtils::get_template_definition('blockgroup-section-mymembers-sidebar'));
// define ('GD_TEMPLATE_BLOCKGROUP_AUTHOR_SIDEBAR_ORGANIZATION', PoP_ServerUtils::get_template_definition('blockgroup-author-sidebar-organization'));
// define ('GD_TEMPLATE_BLOCKGROUP_AUTHORMAINALLCONTENT_SIDEBAR_ORGANIZATION', PoP_ServerUtils::get_template_definition('blockgroup-authormainallcontent-sidebar-organization'));
// define ('GD_TEMPLATE_BLOCKGROUP_AUTHORALLCONTENT_SIDEBAR_ORGANIZATION', PoP_ServerUtils::get_template_definition('blockgroup-authorallcontent-sidebar-organization'));
// define ('GD_TEMPLATE_BLOCKGROUP_AUTHORFOLLOWERS_SIDEBAR_ORGANIZATION', PoP_ServerUtils::get_template_definition('blockgroup-authorfollowers-sidebar-organization'));
// define ('GD_TEMPLATE_BLOCKGROUP_AUTHORFOLLOWINGUSERS_SIDEBAR_ORGANIZATION', PoP_ServerUtils::get_template_definition('blockgroup-authorfollowingusers-sidebar-organization'));
// define ('GD_TEMPLATE_BLOCKGROUP_AUTHORRECOMMENDEDPOSTS_SIDEBAR_ORGANIZATION', PoP_ServerUtils::get_template_definition('blockgroup-authorrecommendedposts-sidebar-organization'));
// define ('GD_TEMPLATE_BLOCKGROUP_AUTHORWEBPOSTS_SIDEBAR_ORGANIZATION', PoP_ServerUtils::get_template_definition('blockgroup-authorwebposts-sidebar-organization'));
// define ('GD_TEMPLATE_BLOCKGROUP_AUTHORMEMBERS_SIDEBAR_ORGANIZATION', PoP_ServerUtils::get_template_definition('blockgroup-authormembers-sidebar-organization'));
// define ('GD_TEMPLATE_BLOCKGROUP_AUTHOR_SIDEBAR_INDIVIDUAL', PoP_ServerUtils::get_template_definition('blockgroup-author-sidebar-individual'));
// define ('GD_TEMPLATE_BLOCKGROUP_AUTHORMAINALLCONTENT_SIDEBAR_INDIVIDUAL', PoP_ServerUtils::get_template_definition('blockgroup-authormainallcontent-sidebar-individual'));
// define ('GD_TEMPLATE_BLOCKGROUP_AUTHORALLCONTENT_SIDEBAR_INDIVIDUAL', PoP_ServerUtils::get_template_definition('blockgroup-authorallcontent-sidebar-individual'));
// define ('GD_TEMPLATE_BLOCKGROUP_AUTHORFOLLOWERS_SIDEBAR_INDIVIDUAL', PoP_ServerUtils::get_template_definition('blockgroup-authorfollowers-sidebar-individual'));
// define ('GD_TEMPLATE_BLOCKGROUP_AUTHORFOLLOWINGUSERS_SIDEBAR_INDIVIDUAL', PoP_ServerUtils::get_template_definition('blockgroup-authorfollowingusers-sidebar-individual'));
// define ('GD_TEMPLATE_BLOCKGROUP_AUTHORRECOMMENDEDPOSTS_SIDEBAR_INDIVIDUAL', PoP_ServerUtils::get_template_definition('blockgroup-authorrecommendedposts-sidebar-individual'));
// define ('GD_TEMPLATE_BLOCKGROUP_AUTHORWEBPOSTS_SIDEBAR_INDIVIDUAL', PoP_ServerUtils::get_template_definition('blockgroup-authorwebposts-sidebar-individual'));
define ('GD_TEMPLATE_BLOCKGROUP_AUTHOR_SIDEBAR', PoP_ServerUtils::get_template_definition('blockgroup-author-sidebar'));
define ('GD_TEMPLATE_BLOCKGROUP_AUTHORMAINALLCONTENT_SIDEBAR', PoP_ServerUtils::get_template_definition('blockgroup-authormainallcontent-sidebar'));
define ('GD_TEMPLATE_BLOCKGROUP_AUTHORALLCONTENT_SIDEBAR', PoP_ServerUtils::get_template_definition('blockgroup-authorallcontent-sidebar'));
define ('GD_TEMPLATE_BLOCKGROUP_AUTHORFOLLOWERS_SIDEBAR', PoP_ServerUtils::get_template_definition('blockgroup-authorfollowers-sidebar'));
define ('GD_TEMPLATE_BLOCKGROUP_AUTHORFOLLOWINGUSERS_SIDEBAR', PoP_ServerUtils::get_template_definition('blockgroup-authorfollowingusers-sidebar'));
define ('GD_TEMPLATE_BLOCKGROUP_AUTHORRECOMMENDEDPOSTS_SIDEBAR', PoP_ServerUtils::get_template_definition('blockgroup-authorrecommendedposts-sidebar'));
define ('GD_TEMPLATE_BLOCKGROUP_AUTHORWEBPOSTS_SIDEBAR', PoP_ServerUtils::get_template_definition('blockgroup-authorwebposts-sidebar'));
define ('GD_TEMPLATE_BLOCKGROUP_AUTHORMEMBERS_SIDEBAR', PoP_ServerUtils::get_template_definition('blockgroup-authormembers-sidebar'));

class GD_URE_Template_Processor_SidebarBlockGroups extends GD_Template_Processor_SidebarBlockGroupsBase {

	function get_templates_to_process() {
	
		return array(
			GD_TEMPLATE_BLOCKGROUP_SECTION_INDIVIDUALS_SIDEBAR,
			GD_TEMPLATE_BLOCKGROUP_SECTION_ORGANIZATIONS_SIDEBAR,
			GD_TEMPLATE_BLOCKGROUP_SECTION_MYMEMBERS_SIDEBAR,
			// GD_TEMPLATE_BLOCKGROUP_AUTHOR_SIDEBAR_ORGANIZATION,
			// GD_TEMPLATE_BLOCKGROUP_AUTHORALLCONTENT_SIDEBAR_ORGANIZATION,
			// GD_TEMPLATE_BLOCKGROUP_AUTHORMAINALLCONTENT_SIDEBAR_ORGANIZATION,
			// GD_TEMPLATE_BLOCKGROUP_AUTHORFOLLOWERS_SIDEBAR_ORGANIZATION,
			// GD_TEMPLATE_BLOCKGROUP_AUTHORFOLLOWINGUSERS_SIDEBAR_ORGANIZATION,
			// GD_TEMPLATE_BLOCKGROUP_AUTHORRECOMMENDEDPOSTS_SIDEBAR_ORGANIZATION,
			// GD_TEMPLATE_BLOCKGROUP_AUTHORWEBPOSTS_SIDEBAR_ORGANIZATION,
			// GD_TEMPLATE_BLOCKGROUP_AUTHORMEMBERS_SIDEBAR_ORGANIZATION,
			// GD_TEMPLATE_BLOCKGROUP_AUTHOR_SIDEBAR_INDIVIDUAL,
			// GD_TEMPLATE_BLOCKGROUP_AUTHORMAINALLCONTENT_SIDEBAR_INDIVIDUAL,
			// GD_TEMPLATE_BLOCKGROUP_AUTHORALLCONTENT_SIDEBAR_INDIVIDUAL,
			// GD_TEMPLATE_BLOCKGROUP_AUTHORFOLLOWERS_SIDEBAR_INDIVIDUAL,
			// GD_TEMPLATE_BLOCKGROUP_AUTHORFOLLOWINGUSERS_SIDEBAR_INDIVIDUAL,
			// GD_TEMPLATE_BLOCKGROUP_AUTHORRECOMMENDEDPOSTS_SIDEBAR_INDIVIDUAL,
			// GD_TEMPLATE_BLOCKGROUP_AUTHORWEBPOSTS_SIDEBAR_INDIVIDUAL,
			GD_TEMPLATE_BLOCKGROUP_AUTHOR_SIDEBAR,
			GD_TEMPLATE_BLOCKGROUP_AUTHORALLCONTENT_SIDEBAR,
			GD_TEMPLATE_BLOCKGROUP_AUTHORMAINALLCONTENT_SIDEBAR,
			GD_TEMPLATE_BLOCKGROUP_AUTHORFOLLOWERS_SIDEBAR,
			GD_TEMPLATE_BLOCKGROUP_AUTHORFOLLOWINGUSERS_SIDEBAR,
			GD_TEMPLATE_BLOCKGROUP_AUTHORRECOMMENDEDPOSTS_SIDEBAR,
			GD_TEMPLATE_BLOCKGROUP_AUTHORWEBPOSTS_SIDEBAR,
			GD_TEMPLATE_BLOCKGROUP_AUTHORMEMBERS_SIDEBAR,
		);
	}

	function get_inner_blocks($template_id) {

		$ret = parent::get_inner_blocks($template_id);

		switch ($template_id) {

			// // Add also the filter block for the Single Related Content, etc
			// case GD_TEMPLATE_BLOCKGROUP_AUTHORMAINALLCONTENT_SIDEBAR_ORGANIZATION:
			// case GD_TEMPLATE_BLOCKGROUP_AUTHORALLCONTENT_SIDEBAR_ORGANIZATION:
			// case GD_TEMPLATE_BLOCKGROUP_AUTHORFOLLOWERS_SIDEBAR_ORGANIZATION:
			// case GD_TEMPLATE_BLOCKGROUP_AUTHORFOLLOWINGUSERS_SIDEBAR_ORGANIZATION:
			// case GD_TEMPLATE_BLOCKGROUP_AUTHORRECOMMENDEDPOSTS_SIDEBAR_ORGANIZATION:
			// case GD_TEMPLATE_BLOCKGROUP_AUTHORWEBPOSTS_SIDEBAR_ORGANIZATION:
			// case GD_TEMPLATE_BLOCKGROUP_AUTHORMEMBERS_SIDEBAR_ORGANIZATION:

			// 	$filters = array(
			// 		GD_TEMPLATE_BLOCKGROUP_AUTHORMAINALLCONTENT_SIDEBAR_ORGANIZATION => GD_TEMPLATE_BLOCK_AUTHORSECTION_MAINALLCONTENT_SIDEBAR,
			// 		GD_TEMPLATE_BLOCKGROUP_AUTHORALLCONTENT_SIDEBAR_ORGANIZATION => GD_TEMPLATE_BLOCK_AUTHORSECTION_ALLCONTENT_SIDEBAR,
			// 		GD_TEMPLATE_BLOCKGROUP_AUTHORFOLLOWERS_SIDEBAR_ORGANIZATION => GD_TEMPLATE_BLOCK_SECTION_ALLUSERS_SIDEBAR,
			// 		GD_TEMPLATE_BLOCKGROUP_AUTHORFOLLOWINGUSERS_SIDEBAR_ORGANIZATION => GD_TEMPLATE_BLOCK_SECTION_ALLUSERS_SIDEBAR,
			// 		GD_TEMPLATE_BLOCKGROUP_AUTHORRECOMMENDEDPOSTS_SIDEBAR_ORGANIZATION => GD_TEMPLATE_BLOCK_SECTION_ALLCONTENT_SIDEBAR,
			// 		GD_TEMPLATE_BLOCKGROUP_AUTHORWEBPOSTS_SIDEBAR_ORGANIZATION => GD_TEMPLATE_BLOCK_AUTHORSECTION_ALLCONTENT_SIDEBAR,
			// 		GD_TEMPLATE_BLOCKGROUP_AUTHORMEMBERS_SIDEBAR_ORGANIZATION => GD_TEMPLATE_BLOCK_AUTHORSECTION_ALLUSERS_SIDEBAR,
			// 	);
			// 	$ret[] = $filters[$template_id];
			// 	$ret[] = GD_TEMPLATE_BLOCK_AUTHOR_SIDEBAR_ORGANIZATION;
			// 	break;

			// case GD_TEMPLATE_BLOCKGROUP_AUTHORMAINALLCONTENT_SIDEBAR_INDIVIDUAL:
			// case GD_TEMPLATE_BLOCKGROUP_AUTHORALLCONTENT_SIDEBAR_INDIVIDUAL:
			// case GD_TEMPLATE_BLOCKGROUP_AUTHORFOLLOWERS_SIDEBAR_INDIVIDUAL:
			// case GD_TEMPLATE_BLOCKGROUP_AUTHORFOLLOWINGUSERS_SIDEBAR_INDIVIDUAL:
			// case GD_TEMPLATE_BLOCKGROUP_AUTHORRECOMMENDEDPOSTS_SIDEBAR_INDIVIDUAL:
			// case GD_TEMPLATE_BLOCKGROUP_AUTHORWEBPOSTS_SIDEBAR_INDIVIDUAL:

			// 	$filters = array(
			// 		GD_TEMPLATE_BLOCKGROUP_AUTHORMAINALLCONTENT_SIDEBAR_INDIVIDUAL => GD_TEMPLATE_BLOCK_AUTHORSECTION_MAINALLCONTENT_SIDEBAR,
			// 		GD_TEMPLATE_BLOCKGROUP_AUTHORALLCONTENT_SIDEBAR_INDIVIDUAL => GD_TEMPLATE_BLOCK_AUTHORSECTION_ALLCONTENT_SIDEBAR,
			// 		GD_TEMPLATE_BLOCKGROUP_AUTHORFOLLOWERS_SIDEBAR_INDIVIDUAL => GD_TEMPLATE_BLOCK_SECTION_ALLUSERS_SIDEBAR,
			// 		GD_TEMPLATE_BLOCKGROUP_AUTHORFOLLOWINGUSERS_SIDEBAR_INDIVIDUAL => GD_TEMPLATE_BLOCK_SECTION_ALLUSERS_SIDEBAR,
			// 		GD_TEMPLATE_BLOCKGROUP_AUTHORRECOMMENDEDPOSTS_SIDEBAR_INDIVIDUAL => GD_TEMPLATE_BLOCK_SECTION_ALLCONTENT_SIDEBAR,
			// 		GD_TEMPLATE_BLOCKGROUP_AUTHORWEBPOSTS_SIDEBAR_INDIVIDUAL => GD_TEMPLATE_BLOCK_AUTHORSECTION_ALLCONTENT_SIDEBAR,
			// 	);
			// 	$ret[] = $filters[$template_id];
			// 	$ret[] = GD_TEMPLATE_BLOCK_AUTHOR_SIDEBAR_INDIVIDUAL;
			// 	break;

			// Add also the filter block for the Single Related Content, etc
			case GD_TEMPLATE_BLOCKGROUP_AUTHOR_SIDEBAR:
			case GD_TEMPLATE_BLOCKGROUP_AUTHORMAINALLCONTENT_SIDEBAR:
			case GD_TEMPLATE_BLOCKGROUP_AUTHORALLCONTENT_SIDEBAR:
			case GD_TEMPLATE_BLOCKGROUP_AUTHORFOLLOWERS_SIDEBAR:
			case GD_TEMPLATE_BLOCKGROUP_AUTHORFOLLOWINGUSERS_SIDEBAR:
			case GD_TEMPLATE_BLOCKGROUP_AUTHORRECOMMENDEDPOSTS_SIDEBAR:
			case GD_TEMPLATE_BLOCKGROUP_AUTHORWEBPOSTS_SIDEBAR:
			case GD_TEMPLATE_BLOCKGROUP_AUTHORMEMBERS_SIDEBAR:

				global $author;
				$filters = array(
					GD_TEMPLATE_BLOCKGROUP_AUTHOR_SIDEBAR => null,
					GD_TEMPLATE_BLOCKGROUP_AUTHORMAINALLCONTENT_SIDEBAR => GD_TEMPLATE_BLOCK_AUTHORSECTION_MAINALLCONTENT_SIDEBAR,
					GD_TEMPLATE_BLOCKGROUP_AUTHORALLCONTENT_SIDEBAR => GD_TEMPLATE_BLOCK_AUTHORSECTION_ALLCONTENT_SIDEBAR,
					GD_TEMPLATE_BLOCKGROUP_AUTHORFOLLOWERS_SIDEBAR => GD_TEMPLATE_BLOCK_SECTION_ALLUSERS_SIDEBAR,
					GD_TEMPLATE_BLOCKGROUP_AUTHORFOLLOWINGUSERS_SIDEBAR => GD_TEMPLATE_BLOCK_SECTION_ALLUSERS_SIDEBAR,
					GD_TEMPLATE_BLOCKGROUP_AUTHORRECOMMENDEDPOSTS_SIDEBAR => GD_TEMPLATE_BLOCK_SECTION_ALLCONTENT_SIDEBAR,
					GD_TEMPLATE_BLOCKGROUP_AUTHORWEBPOSTS_SIDEBAR => GD_TEMPLATE_BLOCK_AUTHORSECTION_ALLCONTENT_SIDEBAR,
					GD_TEMPLATE_BLOCKGROUP_AUTHORMEMBERS_SIDEBAR => GD_TEMPLATE_BLOCK_AUTHORSECTION_ALLUSERS_SIDEBAR,
				);
				if ($filter = $filters[$template_id]) {
					$ret[] = $filter;
				}

				if (gd_ure_is_organization($author)) {
					
					$ret[] = GD_TEMPLATE_BLOCK_AUTHOR_SIDEBAR_ORGANIZATION;
				}
				elseif (gd_ure_is_individual($author)) {
				
					$ret[] = GD_TEMPLATE_BLOCK_AUTHOR_SIDEBAR_INDIVIDUAL;
				}
				break;
			
			default:
				
				$blocks = array(
					GD_TEMPLATE_BLOCKGROUP_SECTION_INDIVIDUALS_SIDEBAR => GD_TEMPLATE_BLOCK_SECTION_INDIVIDUALS_SIDEBAR,
					GD_TEMPLATE_BLOCKGROUP_SECTION_ORGANIZATIONS_SIDEBAR => GD_TEMPLATE_BLOCK_SECTION_ORGANIZATIONS_SIDEBAR,
					GD_TEMPLATE_BLOCKGROUP_SECTION_MYMEMBERS_SIDEBAR => GD_TEMPLATE_BLOCK_SECTION_MYMEMBERS_SIDEBAR,
					// GD_TEMPLATE_BLOCKGROUP_AUTHOR_SIDEBAR_ORGANIZATION => GD_TEMPLATE_BLOCK_AUTHOR_SIDEBAR_ORGANIZATION,
					// GD_TEMPLATE_BLOCKGROUP_AUTHOR_SIDEBAR_INDIVIDUAL => GD_TEMPLATE_BLOCK_AUTHOR_SIDEBAR_INDIVIDUAL,
				);
				if ($block = $blocks[$template_id]) {

					$ret[] = $block;
				}
				break;
		}

		return $ret;
	}

	function get_screen($template_id) {

		$screens = array(
			GD_TEMPLATE_BLOCKGROUP_SECTION_INDIVIDUALS_SIDEBAR => POP_SCREEN_USERS,
			GD_TEMPLATE_BLOCKGROUP_SECTION_ORGANIZATIONS_SIDEBAR => POP_SCREEN_USERS,
			GD_TEMPLATE_BLOCKGROUP_SECTION_MYMEMBERS_SIDEBAR => POP_URE_SCREEN_MYUSERS,
			// GD_TEMPLATE_BLOCKGROUP_AUTHOR_SIDEBAR_ORGANIZATION => POP_SCREEN_AUTHOR,
			// GD_TEMPLATE_BLOCKGROUP_AUTHORMAINALLCONTENT_SIDEBAR_ORGANIZATION => POP_SCREEN_AUTHORSECTION,
			// GD_TEMPLATE_BLOCKGROUP_AUTHORALLCONTENT_SIDEBAR_ORGANIZATION => POP_SCREEN_AUTHORSECTION,
			// GD_TEMPLATE_BLOCKGROUP_AUTHORFOLLOWERS_SIDEBAR_ORGANIZATION => POP_SCREEN_AUTHORUSERS,
			// GD_TEMPLATE_BLOCKGROUP_AUTHORFOLLOWINGUSERS_SIDEBAR_ORGANIZATION => POP_SCREEN_AUTHORUSERS,
			// GD_TEMPLATE_BLOCKGROUP_AUTHORRECOMMENDEDPOSTS_SIDEBAR_ORGANIZATION => POP_SCREEN_AUTHORSECTION,
			// GD_TEMPLATE_BLOCKGROUP_AUTHORWEBPOSTS_SIDEBAR_ORGANIZATION => POP_SCREEN_AUTHORSECTION,
			// GD_TEMPLATE_BLOCKGROUP_AUTHORMEMBERS_SIDEBAR_ORGANIZATION => POP_SCREEN_AUTHORUSERS,
			// GD_TEMPLATE_BLOCKGROUP_AUTHOR_SIDEBAR_INDIVIDUAL => POP_SCREEN_AUTHOR,
			// GD_TEMPLATE_BLOCKGROUP_AUTHORMAINALLCONTENT_SIDEBAR_INDIVIDUAL => POP_SCREEN_AUTHORSECTION,
			// GD_TEMPLATE_BLOCKGROUP_AUTHORALLCONTENT_SIDEBAR_INDIVIDUAL => POP_SCREEN_AUTHORSECTION,
			// GD_TEMPLATE_BLOCKGROUP_AUTHORFOLLOWERS_SIDEBAR_INDIVIDUAL => POP_SCREEN_AUTHORUSERS,
			// GD_TEMPLATE_BLOCKGROUP_AUTHORFOLLOWINGUSERS_SIDEBAR_INDIVIDUAL => POP_SCREEN_AUTHORUSERS,
			// GD_TEMPLATE_BLOCKGROUP_AUTHORRECOMMENDEDPOSTS_SIDEBAR_INDIVIDUAL => POP_SCREEN_AUTHORSECTION,
			// GD_TEMPLATE_BLOCKGROUP_AUTHORWEBPOSTS_SIDEBAR_INDIVIDUAL => POP_SCREEN_AUTHORSECTION,
			GD_TEMPLATE_BLOCKGROUP_AUTHOR_SIDEBAR => POP_SCREEN_AUTHOR,
			GD_TEMPLATE_BLOCKGROUP_AUTHORMAINALLCONTENT_SIDEBAR => POP_SCREEN_AUTHORSECTION,
			GD_TEMPLATE_BLOCKGROUP_AUTHORALLCONTENT_SIDEBAR => POP_SCREEN_AUTHORSECTION,
			GD_TEMPLATE_BLOCKGROUP_AUTHORFOLLOWERS_SIDEBAR => POP_SCREEN_AUTHORUSERS,
			GD_TEMPLATE_BLOCKGROUP_AUTHORFOLLOWINGUSERS_SIDEBAR => POP_SCREEN_AUTHORUSERS,
			GD_TEMPLATE_BLOCKGROUP_AUTHORRECOMMENDEDPOSTS_SIDEBAR => POP_SCREEN_AUTHORSECTION,
			GD_TEMPLATE_BLOCKGROUP_AUTHORWEBPOSTS_SIDEBAR => POP_SCREEN_AUTHORSECTION,
			GD_TEMPLATE_BLOCKGROUP_AUTHORMEMBERS_SIDEBAR => POP_SCREEN_AUTHORUSERS,
		);
		if ($screen = $screens[$template_id]) {

			return $screen;
		}
		
		return parent::get_screen($template_id);
	}

	function get_screengroup($template_id) {

		switch ($template_id) {

			case GD_TEMPLATE_BLOCKGROUP_SECTION_INDIVIDUALS_SIDEBAR:
			case GD_TEMPLATE_BLOCKGROUP_SECTION_ORGANIZATIONS_SIDEBAR:
			// case GD_TEMPLATE_BLOCKGROUP_AUTHOR_SIDEBAR_ORGANIZATION:
			// case GD_TEMPLATE_BLOCKGROUP_AUTHORMAINALLCONTENT_SIDEBAR_ORGANIZATION:
			// case GD_TEMPLATE_BLOCKGROUP_AUTHORALLCONTENT_SIDEBAR_ORGANIZATION:
			// case GD_TEMPLATE_BLOCKGROUP_AUTHORFOLLOWERS_SIDEBAR_ORGANIZATION:
			// case GD_TEMPLATE_BLOCKGROUP_AUTHORFOLLOWINGUSERS_SIDEBAR_ORGANIZATION:
			// case GD_TEMPLATE_BLOCKGROUP_AUTHORRECOMMENDEDPOSTS_SIDEBAR_ORGANIZATION:
			// case GD_TEMPLATE_BLOCKGROUP_AUTHORWEBPOSTS_SIDEBAR_ORGANIZATION:
			// case GD_TEMPLATE_BLOCKGROUP_AUTHORMEMBERS_SIDEBAR_ORGANIZATION:
			// case GD_TEMPLATE_BLOCKGROUP_AUTHOR_SIDEBAR_INDIVIDUAL:
			// case GD_TEMPLATE_BLOCKGROUP_AUTHORMAINALLCONTENT_SIDEBAR_INDIVIDUAL:
			// case GD_TEMPLATE_BLOCKGROUP_AUTHORALLCONTENT_SIDEBAR_INDIVIDUAL:
			// case GD_TEMPLATE_BLOCKGROUP_AUTHORFOLLOWERS_SIDEBAR_INDIVIDUAL:
			// case GD_TEMPLATE_BLOCKGROUP_AUTHORFOLLOWINGUSERS_SIDEBAR_INDIVIDUAL:
			// case GD_TEMPLATE_BLOCKGROUP_AUTHORRECOMMENDEDPOSTS_SIDEBAR_INDIVIDUAL:
			// case GD_TEMPLATE_BLOCKGROUP_AUTHORWEBPOSTS_SIDEBAR_INDIVIDUAL:
			case GD_TEMPLATE_BLOCKGROUP_AUTHOR_SIDEBAR:
			case GD_TEMPLATE_BLOCKGROUP_AUTHORMAINALLCONTENT_SIDEBAR:
			case GD_TEMPLATE_BLOCKGROUP_AUTHORALLCONTENT_SIDEBAR:
			case GD_TEMPLATE_BLOCKGROUP_AUTHORFOLLOWERS_SIDEBAR:
			case GD_TEMPLATE_BLOCKGROUP_AUTHORFOLLOWINGUSERS_SIDEBAR:
			case GD_TEMPLATE_BLOCKGROUP_AUTHORRECOMMENDEDPOSTS_SIDEBAR:
			case GD_TEMPLATE_BLOCKGROUP_AUTHORWEBPOSTS_SIDEBAR:
			case GD_TEMPLATE_BLOCKGROUP_AUTHORMEMBERS_SIDEBAR:
			
				return POP_SCREENGROUP_CONTENTREAD;

			case GD_TEMPLATE_BLOCKGROUP_SECTION_MYMEMBERS_SIDEBAR:
			
				return POP_SCREENGROUP_CONTENTWRITE;
		}
		
		return parent::get_screengroup($template_id);
	}

	function init_atts_blockgroup_block($blockgroup, $blockgroup_block, &$blockgroup_block_atts, $blockgroup_atts) {

		switch ($blockgroup) {

			case GD_TEMPLATE_BLOCKGROUP_AUTHORMAINALLCONTENT_SIDEBAR:

				switch ($blockgroup_block) {

					case GD_TEMPLATE_BLOCK_AUTHORSECTION_MAINALLCONTENT_SIDEBAR:
					case GD_TEMPLATE_BLOCK_AUTHOR_SIDEBAR_ORGANIZATION:
					case GD_TEMPLATE_BLOCK_AUTHOR_SIDEBAR_INDIVIDUAL:

						$mainblock_taget = '#'.GD_TEMPLATEID_PAGESECTIONID_MAIN.' .pop-pagesection-page.toplevel.active > .blockgroup-author > .blocksection-extensions > .pop-block.withfilter';

						// Make the block be collapsible, open it when the main feed is reached, with waypoints
						$this->append_att($blockgroup_block, $blockgroup_block_atts, 'class', 'collapse');
						$this->merge_att($blockgroup_block, $blockgroup_block_atts, 'params', array(
							'data-collapse-target' => $mainblock_taget
						));
						$this->merge_block_jsmethod_att($blockgroup_block, $blockgroup_block_atts, array('waypointsToggleCollapse'));
						break;
				}
				break;
		}

		return parent::init_atts_blockgroup_block($blockgroup, $blockgroup_block, $blockgroup_block_atts, $blockgroup_atts);
	}
}

/**---------------------------------------------------------------------------------------------------------------
 * Initialization
 * ---------------------------------------------------------------------------------------------------------------*/
new GD_URE_Template_Processor_SidebarBlockGroups();
