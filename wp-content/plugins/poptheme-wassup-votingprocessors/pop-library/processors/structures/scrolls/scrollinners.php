<?php
/**---------------------------------------------------------------------------------------------------------------
 *
 * Template Manager (Handlebars)
 *
 * ---------------------------------------------------------------------------------------------------------------*/

define ('GD_TEMPLATE_SCROLLINNER_MYOPINIONATEDVOTES_FULLVIEWPREVIEW', PoP_ServerUtils::get_template_definition('scrollinner-myopinionatedvote-fullviewpreview'));
define ('GD_TEMPLATE_SCROLLINNER_OPINIONATEDVOTES_NAVIGATOR', PoP_ServerUtils::get_template_definition('scrollinner-opinionatedvotes-navigator'));
define ('GD_TEMPLATE_SCROLLINNER_OPINIONATEDVOTES_ADDONS', PoP_ServerUtils::get_template_definition('scrollinner-opinionatedvotes-addons'));
// define ('GD_TEMPLATE_SCROLLINNER_OPINIONATEDVOTES_DETAILS', PoP_ServerUtils::get_template_definition('scrollinner-opinionatedvotes-details'));
define ('GD_TEMPLATE_SCROLLINNER_OPINIONATEDVOTES_FULLVIEW', PoP_ServerUtils::get_template_definition('scrollinner-opinionatedvotes-fullview'));
define ('GD_TEMPLATE_SCROLLINNER_OPINIONATEDVOTES_THUMBNAIL', PoP_ServerUtils::get_template_definition('scrollinner-opinionatedvotes-thumbnail'));
define ('GD_TEMPLATE_SCROLLINNER_OPINIONATEDVOTES_LIST', PoP_ServerUtils::get_template_definition('scrollinner-opinionatedvotes-list'));
define ('GD_TEMPLATE_SCROLLINNER_AUTHOROPINIONATEDVOTES_FULLVIEW', PoP_ServerUtils::get_template_definition('scrollinner-authoropinionatedvotes-fullview'));
define ('GD_TEMPLATE_SCROLLINNER_AUTHOROPINIONATEDVOTES_THUMBNAIL', PoP_ServerUtils::get_template_definition('scrollinner-authoropinionatedvotes-thumbnail'));
define ('GD_TEMPLATE_SCROLLINNER_AUTHOROPINIONATEDVOTES_LIST', PoP_ServerUtils::get_template_definition('scrollinner-authoropinionatedvotes-list'));
define ('GD_TEMPLATE_SCROLLINNER_SINGLERELATEDOPINIONATEDVOTECONTENT_FULLVIEW', PoP_ServerUtils::get_template_definition('scrollinner-singlerelatedopinionatedvotecontent-fullview'));

class VotingProcessors_Template_Processor_CustomScrollInners extends GD_Template_Processor_ScrollInnersBase {

	function get_templates_to_process() {
	
		return array(
			GD_TEMPLATE_SCROLLINNER_MYOPINIONATEDVOTES_FULLVIEWPREVIEW,
			GD_TEMPLATE_SCROLLINNER_OPINIONATEDVOTES_NAVIGATOR,
			GD_TEMPLATE_SCROLLINNER_OPINIONATEDVOTES_ADDONS,
			// GD_TEMPLATE_SCROLLINNER_OPINIONATEDVOTES_DETAILS,
			GD_TEMPLATE_SCROLLINNER_OPINIONATEDVOTES_FULLVIEW,
			GD_TEMPLATE_SCROLLINNER_OPINIONATEDVOTES_THUMBNAIL,
			GD_TEMPLATE_SCROLLINNER_OPINIONATEDVOTES_LIST,
			GD_TEMPLATE_SCROLLINNER_AUTHOROPINIONATEDVOTES_FULLVIEW,
			GD_TEMPLATE_SCROLLINNER_AUTHOROPINIONATEDVOTES_THUMBNAIL,
			GD_TEMPLATE_SCROLLINNER_AUTHOROPINIONATEDVOTES_LIST,
			GD_TEMPLATE_SCROLLINNER_SINGLERELATEDOPINIONATEDVOTECONTENT_FULLVIEW,
		);
	}

	function get_layout_grid($template_id, $atts) {

		switch ($template_id) {

			case GD_TEMPLATE_SCROLLINNER_OPINIONATEDVOTES_THUMBNAIL:
			case GD_TEMPLATE_SCROLLINNER_AUTHOROPINIONATEDVOTES_THUMBNAIL:

				// Allow ThemeStyle Expansive to override the grid
				return apply_filters(
					POP_HOOK_SCROLLINNER_THUMBNAIL_GRID, 
					array(
						'row-items' => 2, 
						'class' => 'col-xsm-6'
					)
				);

			case GD_TEMPLATE_SCROLLINNER_MYOPINIONATEDVOTES_FULLVIEWPREVIEW:
			case GD_TEMPLATE_SCROLLINNER_OPINIONATEDVOTES_NAVIGATOR:
			case GD_TEMPLATE_SCROLLINNER_OPINIONATEDVOTES_ADDONS:
			// case GD_TEMPLATE_SCROLLINNER_OPINIONATEDVOTES_DETAILS:
			case GD_TEMPLATE_SCROLLINNER_OPINIONATEDVOTES_FULLVIEW:
			case GD_TEMPLATE_SCROLLINNER_OPINIONATEDVOTES_LIST:
			case GD_TEMPLATE_SCROLLINNER_AUTHOROPINIONATEDVOTES_FULLVIEW:
			case GD_TEMPLATE_SCROLLINNER_AUTHOROPINIONATEDVOTES_LIST:
			case GD_TEMPLATE_SCROLLINNER_SINGLERELATEDOPINIONATEDVOTECONTENT_FULLVIEW:

				return array(
					'row-items' => 1, 
					'class' => 'col-sm-12'
				);
		}

		return parent::get_layout_grid($template_id, $atts);
	}

	function get_layouts($template_id) {

		$ret = parent::get_layouts($template_id);

		$layouts = array(
			GD_TEMPLATE_SCROLLINNER_OPINIONATEDVOTES_NAVIGATOR => GD_TEMPLATE_LAYOUT_PREVIEWPOST_OPINIONATEDVOTE_NAVIGATOR,
			GD_TEMPLATE_SCROLLINNER_OPINIONATEDVOTES_ADDONS => GD_TEMPLATE_LAYOUT_PREVIEWPOST_OPINIONATEDVOTE_CONTENTAUTHORREFERENCED, //GD_TEMPLATE_LAYOUT_PREVIEWPOST_OPINIONATEDVOTE_ADDONS,
			// GD_TEMPLATE_SCROLLINNER_OPINIONATEDVOTES_DETAILS => GD_TEMPLATE_LAYOUT_PREVIEWPOST_OPINIONATEDVOTE_CONTENTAUTHORREFERENCED, //GD_TEMPLATE_LAYOUT_PREVIEWPOST_OPINIONATEDVOTE_DETAILS,
			GD_TEMPLATE_SCROLLINNER_OPINIONATEDVOTES_FULLVIEW => GD_TEMPLATE_LAYOUT_FULLVIEW_OPINIONATEDVOTE,				
			GD_TEMPLATE_SCROLLINNER_OPINIONATEDVOTES_THUMBNAIL => GD_TEMPLATE_LAYOUT_PREVIEWPOST_OPINIONATEDVOTE_THUMBNAIL, //GD_TEMPLATE_LAYOUT_PREVIEWPOST_OPINIONATEDVOTE_THUMBNAIL,
			GD_TEMPLATE_SCROLLINNER_OPINIONATEDVOTES_LIST => GD_TEMPLATE_LAYOUT_PREVIEWPOST_OPINIONATEDVOTE_CONTENTAUTHORREFERENCED, //GD_TEMPLATE_LAYOUT_PREVIEWPOST_OPINIONATEDVOTE_LIST,
			GD_TEMPLATE_SCROLLINNER_AUTHOROPINIONATEDVOTES_FULLVIEW => GD_TEMPLATE_AUTHORLAYOUT_FULLVIEW_OPINIONATEDVOTE,//GD_TEMPLATE_LAYOUT_PREVIEWPOST_OPINIONATEDVOTE_CONTENTREFERENCED,				
			GD_TEMPLATE_SCROLLINNER_AUTHOROPINIONATEDVOTES_THUMBNAIL => GD_TEMPLATE_LAYOUT_PREVIEWPOST_OPINIONATEDVOTE_THUMBNAIL,//GD_TEMPLATE_LAYOUT_PREVIEWPOST_OPINIONATEDVOTE_CONTENTREFERENCED,				
			GD_TEMPLATE_SCROLLINNER_AUTHOROPINIONATEDVOTES_LIST => GD_TEMPLATE_LAYOUT_PREVIEWPOST_OPINIONATEDVOTE_CONTENTAUTHORREFERENCED,				
			GD_TEMPLATE_SCROLLINNER_MYOPINIONATEDVOTES_FULLVIEWPREVIEW => GD_TEMPLATE_LAYOUT_FULLVIEW_OPINIONATEDVOTE,
			GD_TEMPLATE_SCROLLINNER_SINGLERELATEDOPINIONATEDVOTECONTENT_FULLVIEW => GD_TEMPLATE_LAYOUT_FULLVIEW_OPINIONATEDVOTE,
		);

		if ($layout = $layouts[$template_id]) {

			$ret[] = $layout;
		}

		return $ret;
	}
}

/**---------------------------------------------------------------------------------------------------------------
 * Initialization
 * ---------------------------------------------------------------------------------------------------------------*/
new VotingProcessors_Template_Processor_CustomScrollInners();