<?php
/**---------------------------------------------------------------------------------------------------------------
 *
 * Template Configuration
 *
 * ---------------------------------------------------------------------------------------------------------------*/

define ('GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_NAVIGATOR', PoP_ServerUtils::get_template_definition('layout-previewpost-announcement-navigator'));
define ('GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_ADDONS', PoP_ServerUtils::get_template_definition('layout-previewpost-announcement-addons'));
define ('GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_DETAILS', PoP_ServerUtils::get_template_definition('layout-previewpost-announcement-details'));
define ('GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_THUMBNAIL', PoP_ServerUtils::get_template_definition('layout-previewpost-announcement-thumb'));
define ('GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_LIST', PoP_ServerUtils::get_template_definition('layout-previewpost-announcement-list'));
define ('GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_RELATED', PoP_ServerUtils::get_template_definition('layout-previewpost-announcement-related'));
define ('GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_EDIT', PoP_ServerUtils::get_template_definition('layout-previewpost-announcement-edit'));

define ('GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_NAVIGATOR', PoP_ServerUtils::get_template_definition('layout-previewpost-project-navigator'));
define ('GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_ADDONS', PoP_ServerUtils::get_template_definition('layout-previewpost-project-addons'));
define ('GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_DETAILS', PoP_ServerUtils::get_template_definition('layout-previewpost-project-details'));
define ('GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_THUMBNAIL', PoP_ServerUtils::get_template_definition('layout-previewpost-project-thumbnail'));
define ('GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_LIST', PoP_ServerUtils::get_template_definition('layout-previewpost-project-list'));
define ('GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_MAPDETAILS', PoP_ServerUtils::get_template_definition('layout-previewpost-project-mapdetails'));
define ('GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_HORIZONTALMAPDETAILS', PoP_ServerUtils::get_template_definition('layout-previewpost-project-horizontalmapdetails'));
define ('GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_RELATED', PoP_ServerUtils::get_template_definition('layout-previewpost-project-related'));
define ('GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_EDIT', PoP_ServerUtils::get_template_definition('layout-previewpost-project-edit'));

define ('GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_NAVIGATOR', PoP_ServerUtils::get_template_definition('layout-previewpost-featured-navigator'));
define ('GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_ADDONS', PoP_ServerUtils::get_template_definition('layout-previewpost-featured-addons'));
define ('GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_DETAILS', PoP_ServerUtils::get_template_definition('layout-previewpost-featured-details'));
define ('GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_THUMBNAIL', PoP_ServerUtils::get_template_definition('layout-previewpost-featured-thumbnail'));
define ('GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_LIST', PoP_ServerUtils::get_template_definition('layout-previewpost-featured-list'));
define ('GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_RELATED', PoP_ServerUtils::get_template_definition('layout-previewpost-featured-related'));
define ('GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_EDIT', PoP_ServerUtils::get_template_definition('layout-previewpost-featured-edit'));

define ('GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_NAVIGATOR', PoP_ServerUtils::get_template_definition('layout-previewpost-discussion-navigator'));
define ('GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_ADDONS', PoP_ServerUtils::get_template_definition('layout-previewpost-discussion-addons'));
define ('GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_DETAILS', PoP_ServerUtils::get_template_definition('layout-previewpost-discussion-details'));
define ('GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_THUMBNAIL', PoP_ServerUtils::get_template_definition('layout-previewpost-discussion-thumbnail'));
define ('GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_LIST', PoP_ServerUtils::get_template_definition('layout-previewpost-discussion-list'));
define ('GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_RELATED', PoP_ServerUtils::get_template_definition('layout-previewpost-discussion-related'));
define ('GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_EDIT', PoP_ServerUtils::get_template_definition('layout-previewpost-discussion-edit'));

define ('GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_NAVIGATOR', PoP_ServerUtils::get_template_definition('layout-previewpost-story-navigator'));
define ('GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_ADDONS', PoP_ServerUtils::get_template_definition('layout-previewpost-story-addons'));
define ('GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_DETAILS', PoP_ServerUtils::get_template_definition('layout-previewpost-story-details'));
define ('GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_THUMBNAIL', PoP_ServerUtils::get_template_definition('layout-previewpost-story-thumbnail'));
define ('GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_LIST', PoP_ServerUtils::get_template_definition('layout-previewpost-story-list'));
define ('GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_RELATED', PoP_ServerUtils::get_template_definition('layout-previewpost-story-related'));
define ('GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_EDIT', PoP_ServerUtils::get_template_definition('layout-previewpost-story-edit'));

define ('GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_NAVIGATOR', PoP_ServerUtils::get_template_definition('layout-previewost-blog-navigator'));
define ('GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_DETAILS', PoP_ServerUtils::get_template_definition('layout-previewost-blog-details'));
define ('GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_LIST', PoP_ServerUtils::get_template_definition('layout-previewost-blog-list'));
define ('GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_RELATED', PoP_ServerUtils::get_template_definition('layout-previewost-blog-related'));
define ('GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_ADDONS', PoP_ServerUtils::get_template_definition('layout-previewost-blog-addons'));

class GD_Custom_Template_Processor_CustomPreviewPostLayouts extends GD_Template_Processor_CustomPreviewPostLayoutsBase {

	function get_templates_to_process() {
	
		return array(
			GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_NAVIGATOR,
			GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_ADDONS,
			GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_DETAILS,
			GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_THUMBNAIL,
			GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_LIST,
			GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_RELATED,
			GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_EDIT,
			GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_NAVIGATOR,
			GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_ADDONS,
			GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_DETAILS,
			GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_THUMBNAIL,
			GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_LIST,
			GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_MAPDETAILS,
			GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_HORIZONTALMAPDETAILS,
			GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_RELATED,
			GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_EDIT,
			GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_NAVIGATOR,
			GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_ADDONS,
			GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_DETAILS,
			GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_THUMBNAIL,
			GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_LIST,
			GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_RELATED,
			GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_EDIT,
			GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_NAVIGATOR,
			GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_ADDONS,
			GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_DETAILS,
			GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_THUMBNAIL,
			GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_LIST,
			GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_RELATED,
			GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_EDIT,
			GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_NAVIGATOR,
			GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_ADDONS,
			GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_DETAILS,
			GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_THUMBNAIL,
			GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_LIST,
			GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_RELATED,
			GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_EDIT,
			GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_NAVIGATOR,
			GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_DETAILS,
			GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_LIST,
			GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_RELATED,
			GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_ADDONS,
		);
	}	



	function get_url_field($template_id) {

		switch ($template_id) {

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_EDIT:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_EDIT:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_EDIT:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_EDIT:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_EDIT:

				return 'edit-url';
		}

		return parent::get_url_field($template_id);
	}

	function get_quicklinkgroup_bottom($template_id) {

		switch ($template_id) {

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_EDIT:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_EDIT:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_EDIT:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_EDIT:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_EDIT:

				return GD_TEMPLATE_QUICKLINKGROUP_POSTEDIT;

			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_NAVIGATOR:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_THUMBNAIL:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_LIST:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_RELATED:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_NAVIGATOR:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_THUMBNAIL:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_LIST:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_MAPDETAILS:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_RELATED:
			
			// 	return GD_TEMPLATE_QUICKLINKGROUP_POSTBOTTOMVOLUNTEER;

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_DETAILS:
			
				return GD_TEMPLATE_QUICKLINKGROUP_POSTBOTTOMEXTENDEDVOLUNTEER;

			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_NAVIGATOR:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_THUMBNAIL:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_LIST:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_RELATED:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_NAVIGATOR:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_THUMBNAIL:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_LIST:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_RELATED:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_NAVIGATOR:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_THUMBNAIL:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_LIST:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_RELATED:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_LIST:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_RELATED:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_NAVIGATOR:

			// 	return GD_TEMPLATE_QUICKLINKGROUP_POSTBOTTOM;

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_DETAILS:

				return GD_TEMPLATE_QUICKLINKGROUP_POSTBOTTOMEXTENDED;
		}

		return parent::get_quicklinkgroup_bottom($template_id);
	}

	function get_quicklinkgroup_top($template_id) {

		switch ($template_id) {

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_NAVIGATOR:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_ADDONS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_THUMBNAIL:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_LIST:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_RELATED:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_NAVIGATOR:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_ADDONS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_THUMBNAIL:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_LIST:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_MAPDETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_HORIZONTALMAPDETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_RELATED:
			
				// return GD_TEMPLATE_QUICKLINKGROUP_POSTVOLUNTEER;

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_NAVIGATOR:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_ADDONS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_THUMBNAIL:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_LIST:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_RELATED:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_NAVIGATOR:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_ADDONS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_THUMBNAIL:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_LIST:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_RELATED:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_NAVIGATOR:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_ADDONS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_THUMBNAIL:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_LIST:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_RELATED:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_LIST:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_RELATED:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_NAVIGATOR:

				return GD_TEMPLATE_QUICKLINKGROUP_POST;
		}

		return parent::get_quicklinkgroup_top($template_id);
	}

	function get_bottom_layouts($template_id) {

		$ret = parent::get_bottom_layouts($template_id);

		switch ($template_id) {

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_DETAILS:

				// Add the highlights and the referencedby
				// if (PoPTheme_Wassup_Utils::feed_details_lazyload()) {
				// 	$ret[] = GD_TEMPLATE_CODEWRAPPER_LAZYLOADINGSPINNER;
				// 	$ret[] = GD_TEMPLATE_LAZYSUBCOMPONENT_HIGHLIGHTREFERENCEDBY_DETAILS;
				// 	$ret[] = GD_TEMPLATE_LAZYSUBCOMPONENT_REFERENCEDBY_DETAILS;
				// }
				// else {
				// 	$ret[] = GD_TEMPLATE_WIDGETWRAPPER_HIGHLIGHTREFERENCEDBY_DETAILS;
				// 	$ret[] = GD_TEMPLATE_WIDGETWRAPPER_REFERENCEDBY_DETAILS;
				// }
				$ret = array_merge(
					$ret,
					$this->get_detailsfeed_bottom_layouts($template_id)
				);
				break;

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_ADDONS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_RELATED:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_ADDONS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_RELATED:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_ADDONS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_RELATED:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_ADDONS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_RELATED:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_RELATED:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_LIST:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_ADDONS:
			
				$ret[] = GD_TEMPLATE_LAYOUT_PUBLISHED;
				break;

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_LIST:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_LIST:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_LIST:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_LIST:
			
				$ret[] = GD_TEMPLATE_LAYOUT_PUBLISHED;
				if (PoPTheme_Wassup_Utils::add_categories()) {
					$ret[] = GD_TEMPLATE_LAYOUTWRAPPER_CATEGORIES;
				}
				if (PoPTheme_Wassup_Utils::add_appliesto()) {
					$ret[] = GD_TEMPLATE_LAYOUTWRAPPER_APPLIESTO;
				}
				break;

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_LIST:

				$ret[] = GD_TEMPLATE_VIEWCOMPONENT_BUTTONWRAPPER_POSTLOCATIONS;
				if (PoPTheme_Wassup_Utils::add_categories()) {
					$ret[] = GD_TEMPLATE_LAYOUTWRAPPER_CATEGORIES;
				}
				if (PoPTheme_Wassup_Utils::add_appliesto()) {
					$ret[] = GD_TEMPLATE_LAYOUTWRAPPER_APPLIESTO;
				}
				break;

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_ADDONS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_RELATED:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_HORIZONTALMAPDETAILS:

				$ret[] = GD_TEMPLATE_VIEWCOMPONENT_BUTTONWRAPPER_POSTLOCATIONS;
				break;
		}

		return $ret;
	}

	function get_belowthumb_layouts($template_id) {

		$ret = parent::get_belowthumb_layouts($template_id);

		switch ($template_id) {

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_NAVIGATOR:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_THUMBNAIL:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_NAVIGATOR:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_THUMBNAIL:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_NAVIGATOR:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_THUMBNAIL:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_NAVIGATOR:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_THUMBNAIL:

				$ret[] = GD_TEMPLATE_LAYOUT_PUBLISHED;
				if (PoPTheme_Wassup_Utils::add_categories()) {
					$ret[] = GD_TEMPLATE_LAYOUTWRAPPER_CATEGORIES;
				}
				if (PoPTheme_Wassup_Utils::add_appliesto()) {
					$ret[] = GD_TEMPLATE_LAYOUTWRAPPER_APPLIESTO;
				}
				break;

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_NAVIGATOR:
			
				$ret[] = GD_TEMPLATE_LAYOUT_PUBLISHED;
				break;

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_NAVIGATOR:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_THUMBNAIL:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_MAPDETAILS:

				if (PoPTheme_Wassup_Utils::add_categories()) {
					$ret[] = GD_TEMPLATE_LAYOUTWRAPPER_CATEGORIES;
				}
				if (PoPTheme_Wassup_Utils::add_appliesto()) {
					$ret[] = GD_TEMPLATE_LAYOUTWRAPPER_APPLIESTO;
				}
				$ret[] = GD_TEMPLATE_VIEWCOMPONENT_BUTTONWRAPPER_POSTLOCATIONS;
				break;
		}

		return $ret;
	}

	function get_post_thumb_template($template_id) {

		switch ($template_id) {

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_EDIT:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_EDIT:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_EDIT:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_EDIT:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_EDIT:

				return GD_TEMPLATE_LAYOUT_POSTTHUMB_CROPPEDSMALL_EDIT;

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_HORIZONTALMAPDETAILS:

				return GD_TEMPLATE_LAYOUT_POSTTHUMB_XSMALL;

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_RELATED:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_RELATED:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_RELATED:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_LIST:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_LIST:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_LIST:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_LIST:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_ADDONS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_ADDONS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_ADDONS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_ADDONS:

				return GD_TEMPLATE_LAYOUT_POSTTHUMB_CROPPEDSMALL;

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_RELATED:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_RELATED:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_LIST:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_LIST:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_ADDONS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_ADDONS:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_HORIZONTALMAPDETAILS:

				return GD_TEMPLATE_LAYOUT_POSTTHUMB_CROPPEDSMALL_VOLUNTEER;

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_NAVIGATOR:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_NAVIGATOR:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_NAVIGATOR:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_NAVIGATOR:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_THUMBNAIL:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_THUMBNAIL:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_THUMBNAIL:

				return GD_TEMPLATE_LAYOUT_POSTTHUMB_CROPPEDMEDIUM;

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_NAVIGATOR:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_NAVIGATOR:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_MAPDETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_THUMBNAIL:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_THUMBNAIL:

				return GD_TEMPLATE_LAYOUT_POSTTHUMB_CROPPEDMEDIUM_VOLUNTEER;
		}

		return parent::get_post_thumb_template($template_id);
	}

	function show_excerpt($template_id) {

		switch ($template_id) {

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_DETAILS:

				return true;
		}

		return parent::show_excerpt($template_id);
	}

	function get_title_htmlmarkup($template_id, $atts) {

		switch ($template_id) {

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_DETAILS:

				return 'h3';
		}

		return parent::get_title_htmlmarkup($template_id, $atts);
	}

	function author_positions($template_id) {

		switch ($template_id) {

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_NAVIGATOR:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_NAVIGATOR:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_NAVIGATOR:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_NAVIGATOR:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_NAVIGATOR:

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_ADDONS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_ADDONS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_ADDONS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_ADDONS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_ADDONS:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_ADDONS:

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_RELATED:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_RELATED:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_RELATED:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_RELATED:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_RELATED:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_RELATED:

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_MAPDETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_HORIZONTALMAPDETAILS:

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_DETAILS:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_DETAILS:

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_THUMBNAIL:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_THUMBNAIL:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_THUMBNAIL:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_THUMBNAIL:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_THUMBNAIL:

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_LIST:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_LIST:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_LIST:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_LIST:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_LIST:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_LIST:
			
				return array(
					GD_CONSTANT_AUTHORPOSITION_ABOVETITLE,
					GD_CONSTANT_AUTHORPOSITION_BELOWCONTENT,
				);

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_EDIT:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_EDIT:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_EDIT:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_EDIT:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_EDIT:

			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_LIST:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_RELATED:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_LIST:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_NAVIGATOR:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_ADDONS:

				return array();
		}

		return parent::author_positions($template_id);
	}

	function horizontal_layout($template_id) {

		switch ($template_id) {

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_DETAILS:

				return true;
		}

		return parent::horizontal_layout($template_id);
	}

	function horizontal_media_layout($template_id) {

		switch ($template_id) {

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_RELATED:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_RELATED:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_RELATED:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_RELATED:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_RELATED:

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_EDIT:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_EDIT:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_EDIT:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_EDIT:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_EDIT:

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_LIST:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_LIST:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_LIST:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_LIST:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_LIST:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_LIST:

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_ADDONS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_ADDONS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_ADDONS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_ADDONS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_ADDONS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_ADDONS:

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_HORIZONTALMAPDETAILS:
			
				return true;
		}

		return parent::horizontal_media_layout($template_id);
	}

	function get_title_beforeauthors($template_id, $atts) {

		switch ($template_id) {
			
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_NAVIGATOR:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_NAVIGATOR:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_NAVIGATOR:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_NAVIGATOR:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_NAVIGATOR:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_NAVIGATOR:

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_ADDONS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_ADDONS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_ADDONS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_ADDONS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_ADDONS:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_ADDONS:

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_RELATED:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_RELATED:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_RELATED:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_RELATED:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_RELATED:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_RELATED:

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_MAPDETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_HORIZONTALMAPDETAILS:

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_DETAILS:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_DETAILS:

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_THUMBNAIL:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_THUMBNAIL:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_THUMBNAIL:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_THUMBNAIL:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_THUMBNAIL:

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_LIST:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_LIST:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_LIST:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_LIST:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_LIST:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_LIST:

				return array(
					'belowcontent' => __('posted by', 'poptheme-wassup-sectionprocessors')
				);
		}

		return parent::get_title_beforeauthors($template_id, $atts);
	}

	function get_template_configuration($template_id, $atts) {

		$ret = parent::get_template_configuration($template_id, $atts);

		switch ($template_id) {

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_NAVIGATOR:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_THUMBNAIL:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_RELATED:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_NAVIGATOR:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_THUMBNAIL:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_MAPDETAILS:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_RELATED:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_NAVIGATOR:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_THUMBNAIL:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_RELATED:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_NAVIGATOR:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_THUMBNAIL:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_RELATED:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_NAVIGATOR:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_THUMBNAIL:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_RELATED:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_NAVIGATOR:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_DETAILS:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_RELATED:

				$ret[GD_JS_CLASSES/*'classes'*/]['belowthumb'] = 'bg-info text-info belowavatar';
				break;
		}

		switch ($template_id) {
			
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_DETAILS:
			
				$ret[GD_JS_CLASSES/*'classes'*/]['thumb'] = 'pop-thumb-framed';
				break;
		}

		switch ($template_id) {

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_NAVIGATOR:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_NAVIGATOR:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_NAVIGATOR:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_NAVIGATOR:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_NAVIGATOR:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_NAVIGATOR:

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_ADDONS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_ADDONS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_ADDONS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_ADDONS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_ADDONS:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_ADDONS:

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_RELATED:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_RELATED:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_RELATED:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_RELATED:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_RELATED:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_RELATED:

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_MAPDETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_HORIZONTALMAPDETAILS:

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_DETAILS:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_DETAILS:

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_THUMBNAIL:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_THUMBNAIL:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_THUMBNAIL:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_THUMBNAIL:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_THUMBNAIL:

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_LIST:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_LIST:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_LIST:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_LIST:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_LIST:
			// case GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_LIST:

				$ret[GD_JS_CLASSES/*'classes'*/]['authors-belowcontent'] = 'pull-right';
				break;
		}

		return $ret;
	}

	function init_atts($template_id, &$atts) {

		switch ($template_id) {

			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_ANNOUNCEMENT_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_PROJECT_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_FEATURED_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_DISCUSSION_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_STORY_DETAILS:
			case GD_TEMPLATE_LAYOUT_PREVIEWPOST_BLOG_DETAILS:

				if (PoPTheme_Wassup_Utils::feed_details_lazyload()) {

					$this->merge_att(GD_TEMPLATE_LAZYSUBCOMPONENT_HIGHLIGHTREFERENCEDBY_DETAILS, $atts, 'previoustemplates-ids', array(
						'data-lazyloadingspinner-target' => GD_TEMPLATE_CODEWRAPPER_LAZYLOADINGSPINNER,
					));
				}
				break;
		}

		return parent::init_atts($template_id, $atts);
	}

}

/**---------------------------------------------------------------------------------------------------------------
 * Initialization
 * ---------------------------------------------------------------------------------------------------------------*/
new GD_Custom_Template_Processor_CustomPreviewPostLayouts();