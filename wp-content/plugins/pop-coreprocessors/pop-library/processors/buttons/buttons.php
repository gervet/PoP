<?php
/**---------------------------------------------------------------------------------------------------------------
 *
 * Template Manager (Handlebars)
 *
 * ---------------------------------------------------------------------------------------------------------------*/

define ('GD_TEMPLATE_BUTTON_QUICKVIEW_PREVIEWDROPDOWN', PoP_ServerUtils::get_template_definition('button-quickview-previewdropdown'));
define ('GD_TEMPLATE_BUTTON_QUICKVIEW_USER_PREVIEWDROPDOWN', PoP_ServerUtils::get_template_definition('button-quickview-user-previewdropdown'));
define ('GD_TEMPLATE_BUTTON_PRINT_PREVIEWDROPDOWN', PoP_ServerUtils::get_template_definition('button-print-previewdropdown'));
define ('GD_TEMPLATE_BUTTON_PRINT_SOCIALMEDIA', PoP_ServerUtils::get_template_definition('button-print-socialmedia'));
define ('GD_TEMPLATE_BUTTON_POSTEDIT', PoP_ServerUtils::get_template_definition('button-postedit'));
define ('GD_TEMPLATE_BUTTON_POSTVIEW', PoP_ServerUtils::get_template_definition('button-postview'));
define ('GD_TEMPLATE_BUTTON_POSTPREVIEW', PoP_ServerUtils::get_template_definition('button-postpreview'));
define ('GD_TEMPLATE_BUTTON_POSTPERMALINK', PoP_ServerUtils::get_template_definition('button-postpermalink'));
define ('GD_TEMPLATE_BUTTON_POSTCOMMENTS', PoP_ServerUtils::get_template_definition('postbutton-comments'));
define ('GD_TEMPLATE_BUTTON_FOLLOWUSER_PREVIEW', PoP_ServerUtils::get_template_definition('button-followuser-preview'));
define ('GD_TEMPLATE_BUTTON_FOLLOWUSER_FULL', PoP_ServerUtils::get_template_definition('button-sidebar-followuser-full'));
define ('GD_TEMPLATE_BUTTON_UNFOLLOWUSER_PREVIEW', PoP_ServerUtils::get_template_definition('button-unfollowuser-preview'));
define ('GD_TEMPLATE_BUTTON_UNFOLLOWUSER_FULL', PoP_ServerUtils::get_template_definition('button-sidebar-unfollowuser-full'));
define ('GD_TEMPLATE_BUTTON_RECOMMENDPOST_FULL', PoP_ServerUtils::get_template_definition('button-recommendpost-full'));
define ('GD_TEMPLATE_BUTTON_RECOMMENDPOST_PREVIEW', PoP_ServerUtils::get_template_definition('button-recommendpost-preview'));
define ('GD_TEMPLATE_BUTTON_UNRECOMMENDPOST_FULL', PoP_ServerUtils::get_template_definition('button-unrecommendpost-full'));
define ('GD_TEMPLATE_BUTTON_UNRECOMMENDPOST_PREVIEW', PoP_ServerUtils::get_template_definition('button-unrecommendpost-preview'));
define ('GD_TEMPLATE_BUTTON_UPVOTEPOST_PREVIEW', PoP_ServerUtils::get_template_definition('button-upvotepost-preview'));
define ('GD_TEMPLATE_BUTTON_UPVOTEPOST_FULL', PoP_ServerUtils::get_template_definition('button-sidebar-upvotepost-full'));
define ('GD_TEMPLATE_BUTTON_UNDOUPVOTEPOST_PREVIEW', PoP_ServerUtils::get_template_definition('button-undoupvotepost-preview'));
define ('GD_TEMPLATE_BUTTON_UNDOUPVOTEPOST_FULL', PoP_ServerUtils::get_template_definition('button-sidebar-undoupvotepost-full'));
define ('GD_TEMPLATE_BUTTON_DOWNVOTEPOST_FULL', PoP_ServerUtils::get_template_definition('button-downvotepost-full'));
define ('GD_TEMPLATE_BUTTON_DOWNVOTEPOST_PREVIEW', PoP_ServerUtils::get_template_definition('button-downvotepost-preview'));
define ('GD_TEMPLATE_BUTTON_UNDODOWNVOTEPOST_FULL', PoP_ServerUtils::get_template_definition('button-undodownvotepost-full'));
define ('GD_TEMPLATE_BUTTON_UNDODOWNVOTEPOST_PREVIEW', PoP_ServerUtils::get_template_definition('button-undodownvotepost-preview'));

class GD_Template_Processor_Buttons extends GD_Template_Processor_ButtonsBase {

	function get_templates_to_process() {
	
		return array(
			GD_TEMPLATE_BUTTON_QUICKVIEW_PREVIEWDROPDOWN,
			GD_TEMPLATE_BUTTON_QUICKVIEW_USER_PREVIEWDROPDOWN,
			GD_TEMPLATE_BUTTON_PRINT_PREVIEWDROPDOWN,
			GD_TEMPLATE_BUTTON_PRINT_SOCIALMEDIA,
			GD_TEMPLATE_BUTTON_POSTEDIT,
			GD_TEMPLATE_BUTTON_POSTVIEW,
			GD_TEMPLATE_BUTTON_POSTPREVIEW,
			GD_TEMPLATE_BUTTON_POSTPERMALINK,
			GD_TEMPLATE_BUTTON_POSTCOMMENTS,
			GD_TEMPLATE_BUTTON_FOLLOWUSER_PREVIEW,
			GD_TEMPLATE_BUTTON_FOLLOWUSER_FULL,
			GD_TEMPLATE_BUTTON_UNFOLLOWUSER_PREVIEW,
			GD_TEMPLATE_BUTTON_UNFOLLOWUSER_FULL,
			GD_TEMPLATE_BUTTON_RECOMMENDPOST_FULL,
			GD_TEMPLATE_BUTTON_RECOMMENDPOST_PREVIEW,
			GD_TEMPLATE_BUTTON_UNRECOMMENDPOST_FULL,
			GD_TEMPLATE_BUTTON_UNRECOMMENDPOST_PREVIEW,
			GD_TEMPLATE_BUTTON_UPVOTEPOST_PREVIEW,
			GD_TEMPLATE_BUTTON_UPVOTEPOST_FULL,
			GD_TEMPLATE_BUTTON_UNDOUPVOTEPOST_PREVIEW,
			GD_TEMPLATE_BUTTON_UNDOUPVOTEPOST_FULL,
			GD_TEMPLATE_BUTTON_DOWNVOTEPOST_FULL,
			GD_TEMPLATE_BUTTON_DOWNVOTEPOST_PREVIEW,
			GD_TEMPLATE_BUTTON_UNDODOWNVOTEPOST_FULL,
			GD_TEMPLATE_BUTTON_UNDODOWNVOTEPOST_PREVIEW,
		);
	}

	function get_buttoninner_template($template_id) {

		switch ($template_id) {

			case GD_TEMPLATE_BUTTON_QUICKVIEW_PREVIEWDROPDOWN:
			case GD_TEMPLATE_BUTTON_QUICKVIEW_USER_PREVIEWDROPDOWN:

				return GD_TEMPLATE_BUTTONINNER_QUICKVIEW_PREVIEWDROPDOWN;

			case GD_TEMPLATE_BUTTON_PRINT_PREVIEWDROPDOWN:

				return GD_TEMPLATE_BUTTONINNER_PRINT_PREVIEWDROPDOWN;

			case GD_TEMPLATE_BUTTON_PRINT_SOCIALMEDIA:

				return GD_TEMPLATE_BUTTONINNER_PRINT_SOCIALMEDIA;

			case GD_TEMPLATE_BUTTON_POSTEDIT:

				return GD_TEMPLATE_BUTTONINNER_POSTEDIT;

			case GD_TEMPLATE_BUTTON_POSTVIEW:

				return GD_TEMPLATE_BUTTONINNER_POSTVIEW;

			case GD_TEMPLATE_BUTTON_POSTPREVIEW:

				return GD_TEMPLATE_BUTTONINNER_POSTPREVIEW;

			case GD_TEMPLATE_BUTTON_POSTPERMALINK:

				return GD_TEMPLATE_BUTTONINNER_POSTPERMALINK;
			
			case GD_TEMPLATE_BUTTON_POSTCOMMENTS:

				return GD_TEMPLATE_BUTTONINNER_POSTCOMMENTS;

			default:

				$buttoninners = array(
					GD_TEMPLATE_BUTTON_FOLLOWUSER_PREVIEW => GD_TEMPLATE_BUTTONINNER_FOLLOWUSER_PREVIEW,
					GD_TEMPLATE_BUTTON_FOLLOWUSER_FULL => GD_TEMPLATE_BUTTONINNER_FOLLOWUSER_FULL,
					GD_TEMPLATE_BUTTON_UNFOLLOWUSER_PREVIEW => GD_TEMPLATE_BUTTONINNER_UNFOLLOWUSER_PREVIEW,
					GD_TEMPLATE_BUTTON_UNFOLLOWUSER_FULL => GD_TEMPLATE_BUTTONINNER_UNFOLLOWUSER_FULL,
					GD_TEMPLATE_BUTTON_RECOMMENDPOST_FULL => GD_TEMPLATE_BUTTONINNER_RECOMMENDPOST_FULL,
					GD_TEMPLATE_BUTTON_RECOMMENDPOST_PREVIEW => GD_TEMPLATE_BUTTONINNER_RECOMMENDPOST_PREVIEW,
					GD_TEMPLATE_BUTTON_UNRECOMMENDPOST_FULL => GD_TEMPLATE_BUTTONINNER_UNRECOMMENDPOST_FULL,
					GD_TEMPLATE_BUTTON_UNRECOMMENDPOST_PREVIEW => GD_TEMPLATE_BUTTONINNER_UNRECOMMENDPOST_PREVIEW,
					GD_TEMPLATE_BUTTON_UPVOTEPOST_PREVIEW => GD_TEMPLATE_BUTTONINNER_UPVOTEPOST_PREVIEW,
					GD_TEMPLATE_BUTTON_UPVOTEPOST_FULL => GD_TEMPLATE_BUTTONINNER_UPVOTEPOST_FULL,
					GD_TEMPLATE_BUTTON_UNDOUPVOTEPOST_PREVIEW => GD_TEMPLATE_BUTTONINNER_UNDOUPVOTEPOST_PREVIEW,
					GD_TEMPLATE_BUTTON_UNDOUPVOTEPOST_FULL => GD_TEMPLATE_BUTTONINNER_UNDOUPVOTEPOST_FULL,
					GD_TEMPLATE_BUTTON_DOWNVOTEPOST_FULL => GD_TEMPLATE_BUTTONINNER_DOWNVOTEPOST_FULL,
					GD_TEMPLATE_BUTTON_DOWNVOTEPOST_PREVIEW => GD_TEMPLATE_BUTTONINNER_DOWNVOTEPOST_PREVIEW,
					GD_TEMPLATE_BUTTON_UNDODOWNVOTEPOST_FULL => GD_TEMPLATE_BUTTONINNER_UNDODOWNVOTEPOST_FULL,
					GD_TEMPLATE_BUTTON_UNDODOWNVOTEPOST_PREVIEW => GD_TEMPLATE_BUTTONINNER_UNDODOWNVOTEPOST_PREVIEW,
				);
				if ($buttoninner = $buttoninners[$template_id]) {

					return $buttoninner;
				}
				break;
		}

		return parent::get_buttoninner_template($template_id);
	}

	function get_url_field($template_id) {
		
		switch ($template_id) {

			case GD_TEMPLATE_BUTTON_PRINT_PREVIEWDROPDOWN:
			case GD_TEMPLATE_BUTTON_PRINT_SOCIALMEDIA:

				return 'print-url';

			// case GD_TEMPLATE_BUTTON_QUICKVIEW_USER_PREVIEWDROPDOWN:

			// 	return 'description-tab-url';

			case GD_TEMPLATE_BUTTON_POSTEDIT:

				return 'edit-url';
		
			case GD_TEMPLATE_BUTTON_POSTPREVIEW:

				return 'preview-url';
					
			case GD_TEMPLATE_BUTTON_POSTCOMMENTS:
				
				return 'comments-url';
					
			case GD_TEMPLATE_BUTTON_FOLLOWUSER_PREVIEW:
			case GD_TEMPLATE_BUTTON_FOLLOWUSER_FULL:
				
				return 'followuser-url';

			case GD_TEMPLATE_BUTTON_UNFOLLOWUSER_PREVIEW:
			case GD_TEMPLATE_BUTTON_UNFOLLOWUSER_FULL:

				return 'unfollowuser-url';
					
			case GD_TEMPLATE_BUTTON_RECOMMENDPOST_PREVIEW:
			case GD_TEMPLATE_BUTTON_RECOMMENDPOST_FULL:
				
				return 'recommendpost-url';

			case GD_TEMPLATE_BUTTON_UNRECOMMENDPOST_PREVIEW:
			case GD_TEMPLATE_BUTTON_UNRECOMMENDPOST_FULL:

				return 'unrecommendpost-url';

			case GD_TEMPLATE_BUTTON_UPVOTEPOST_PREVIEW:
			case GD_TEMPLATE_BUTTON_UPVOTEPOST_FULL:

				return 'upvotepost-url';

			case GD_TEMPLATE_BUTTON_UNDOUPVOTEPOST_PREVIEW:
			case GD_TEMPLATE_BUTTON_UNDOUPVOTEPOST_FULL:

				return 'undoupvotepost-url';

			case GD_TEMPLATE_BUTTON_DOWNVOTEPOST_PREVIEW:
			case GD_TEMPLATE_BUTTON_DOWNVOTEPOST_FULL:

				return 'downvotepost-url';

			case GD_TEMPLATE_BUTTON_UNDODOWNVOTEPOST_PREVIEW:
			case GD_TEMPLATE_BUTTON_UNDODOWNVOTEPOST_FULL:

				return 'undodownvotepost-url';
		}

		return parent::get_url_field($template_id);
	}

	// function get_wrapper($template_id) {

	// 	switch ($template_id) {

	// 		case GD_TEMPLATE_BUTTON_QUICKVIEW_PREVIEWDROPDOWN:
	// 		case GD_TEMPLATE_BUTTON_QUICKVIEW_USER_PREVIEWDROPDOWN:
	// 		case GD_TEMPLATE_BUTTON_PRINT_PREVIEWDROPDOWN:

	// 			return 'li';
	// 	}

	// 	return parent::get_wrapper($template_id);
	// }

	function get_title($template_id) {
		
		switch ($template_id) {

			case GD_TEMPLATE_BUTTON_QUICKVIEW_PREVIEWDROPDOWN:
			case GD_TEMPLATE_BUTTON_QUICKVIEW_USER_PREVIEWDROPDOWN:

				return __('Quickview', 'pop-coreprocessors');

			case GD_TEMPLATE_BUTTON_PRINT_PREVIEWDROPDOWN:
			case GD_TEMPLATE_BUTTON_PRINT_SOCIALMEDIA:

				return __('Print', 'pop-coreprocessors');

			case GD_TEMPLATE_BUTTON_POSTEDIT:

				return __('Edit', 'pop-coreprocessors');

			case GD_TEMPLATE_BUTTON_POSTVIEW:

				return __('View', 'pop-coreprocessors');

			case GD_TEMPLATE_BUTTON_POSTPREVIEW:

				return __('Preview', 'pop-coreprocessors');
		
			case GD_TEMPLATE_BUTTON_POSTPERMALINK:

				return __('Permalink', 'pop-coreprocessors');
			
			case GD_TEMPLATE_BUTTON_POSTCOMMENTS:

				return __('Comments', 'pop-coreprocessors');

			case GD_TEMPLATE_BUTTON_FOLLOWUSER_PREVIEW:
			case GD_TEMPLATE_BUTTON_FOLLOWUSER_FULL:
				
				return __('Follow', 'pop-coreprocessors');

			case GD_TEMPLATE_BUTTON_UNFOLLOWUSER_PREVIEW:
			case GD_TEMPLATE_BUTTON_UNFOLLOWUSER_FULL:
			
				return __('Following', 'pop-coreprocessors');
			
			case GD_TEMPLATE_BUTTON_RECOMMENDPOST_FULL:
			case GD_TEMPLATE_BUTTON_RECOMMENDPOST_PREVIEW:

				return __('Recommend', 'pop-coreprocessors');

			case GD_TEMPLATE_BUTTON_UNRECOMMENDPOST_FULL:
			case GD_TEMPLATE_BUTTON_UNRECOMMENDPOST_PREVIEW:
		
				return __('Recommended', 'pop-coreprocessors');

			case GD_TEMPLATE_BUTTON_UPVOTEPOST_PREVIEW:
			case GD_TEMPLATE_BUTTON_UPVOTEPOST_FULL:

				return __('Up-vote', 'pop-coreprocessors');

			case GD_TEMPLATE_BUTTON_UNDOUPVOTEPOST_PREVIEW:
			case GD_TEMPLATE_BUTTON_UNDOUPVOTEPOST_FULL:

				return __('Up-voted', 'pop-coreprocessors');

			case GD_TEMPLATE_BUTTON_DOWNVOTEPOST_PREVIEW:
			case GD_TEMPLATE_BUTTON_DOWNVOTEPOST_FULL:

				return __('Down-vote', 'pop-coreprocessors');

			case GD_TEMPLATE_BUTTON_UNDODOWNVOTEPOST_PREVIEW:
			case GD_TEMPLATE_BUTTON_UNDODOWNVOTEPOST_FULL:

				return __('Down-voted', 'pop-coreprocessors');
		}
		
		return parent::get_title($template_id);
	}

	function get_linktarget($template_id, $atts) {
		
		switch ($template_id) {

			case GD_TEMPLATE_BUTTON_QUICKVIEW_PREVIEWDROPDOWN:
			case GD_TEMPLATE_BUTTON_QUICKVIEW_USER_PREVIEWDROPDOWN:
			case GD_TEMPLATE_BUTTON_POSTPREVIEW:

				return GD_URLPARAM_TARGET_QUICKVIEW;

			case GD_TEMPLATE_BUTTON_PRINT_PREVIEWDROPDOWN:
			case GD_TEMPLATE_BUTTON_PRINT_SOCIALMEDIA:

				return GD_URLPARAM_TARGET_PRINT;
		}
		
		return parent::get_linktarget($template_id, $atts);
	}

	// function get_condition_field($template_id) {
		
	// 	switch ($template_id) {

	// 		case GD_TEMPLATE_BUTTON_POSTVIEW:

	// 			return 'published';
			
	// 		case GD_TEMPLATE_BUTTON_POSTPREVIEW:

	// 			return 'not-published';
	// 	}

	// 	return parent::get_condition_field($template_id);
	// }

	function get_btn_class($template_id, $atts) {

		$ret = parent::get_btn_class($template_id, $atts);

		switch ($template_id) {

			case GD_TEMPLATE_BUTTON_QUICKVIEW_PREVIEWDROPDOWN:
			case GD_TEMPLATE_BUTTON_QUICKVIEW_USER_PREVIEWDROPDOWN:

				$ret .= ' btn btn-compact btn-link';
				break;
					
			case GD_TEMPLATE_BUTTON_PRINT_SOCIALMEDIA:

				$ret .= ' socialmedia-item socialmedia-print';
				break;

			case GD_TEMPLATE_BUTTON_POSTEDIT:
			case GD_TEMPLATE_BUTTON_POSTVIEW:
			case GD_TEMPLATE_BUTTON_POSTPREVIEW:

				$ret .= ' btn btn-xs btn-default';
				break;
		
			case GD_TEMPLATE_BUTTON_POSTPERMALINK:
			case GD_TEMPLATE_BUTTON_POSTCOMMENTS:

				$ret .= ' btn btn-link';
				break;

			case GD_TEMPLATE_BUTTON_FOLLOWUSER_FULL:
			case GD_TEMPLATE_BUTTON_UNFOLLOWUSER_FULL:
			case GD_TEMPLATE_BUTTON_RECOMMENDPOST_FULL:
			case GD_TEMPLATE_BUTTON_UNRECOMMENDPOST_FULL:
			case GD_TEMPLATE_BUTTON_UPVOTEPOST_FULL:
			case GD_TEMPLATE_BUTTON_UNDOUPVOTEPOST_FULL:
			case GD_TEMPLATE_BUTTON_DOWNVOTEPOST_FULL:
			case GD_TEMPLATE_BUTTON_UNDODOWNVOTEPOST_FULL:

				$ret .= ' btn btn-sm btn-success btn-block btn-important';
				break;

			case GD_TEMPLATE_BUTTON_FOLLOWUSER_PREVIEW:
			case GD_TEMPLATE_BUTTON_UNFOLLOWUSER_PREVIEW:
			case GD_TEMPLATE_BUTTON_RECOMMENDPOST_PREVIEW:
			case GD_TEMPLATE_BUTTON_UNRECOMMENDPOST_PREVIEW:
			case GD_TEMPLATE_BUTTON_UPVOTEPOST_PREVIEW:
			case GD_TEMPLATE_BUTTON_UNDOUPVOTEPOST_PREVIEW:
			case GD_TEMPLATE_BUTTON_DOWNVOTEPOST_PREVIEW:
			case GD_TEMPLATE_BUTTON_UNDODOWNVOTEPOST_PREVIEW:

				$ret .= ' btn btn-compact btn-link';
				break;
		}

		switch ($template_id) {
					
			case GD_TEMPLATE_BUTTON_FOLLOWUSER_FULL:
			case GD_TEMPLATE_BUTTON_UNFOLLOWUSER_FULL:

				$ret .= ' pop-hidden-print';
				break;
		}

		switch ($template_id) {
					
			case GD_TEMPLATE_BUTTON_FOLLOWUSER_FULL:
			case GD_TEMPLATE_BUTTON_FOLLOWUSER_PREVIEW:
				
				$ret .= ' '.GD_CLASS_FOLLOWUSER;
				break;

			case GD_TEMPLATE_BUTTON_UNFOLLOWUSER_FULL:
			case GD_TEMPLATE_BUTTON_UNFOLLOWUSER_PREVIEW:

				$ret .= ' '.GD_CLASS_UNFOLLOWUSER;
				break;
			
			case GD_TEMPLATE_BUTTON_RECOMMENDPOST_FULL:
			case GD_TEMPLATE_BUTTON_RECOMMENDPOST_PREVIEW:

				$ret .= ' '.GD_CLASS_RECOMMENDPOST;
				break;

			case GD_TEMPLATE_BUTTON_UNRECOMMENDPOST_FULL:
			case GD_TEMPLATE_BUTTON_UNRECOMMENDPOST_PREVIEW:

				$ret .= ' '.GD_CLASS_UNRECOMMENDPOST;
				break;

			case GD_TEMPLATE_BUTTON_UPVOTEPOST_PREVIEW:
			case GD_TEMPLATE_BUTTON_UPVOTEPOST_FULL:

				$ret .= ' '.GD_CLASS_UPVOTEPOST;
				break;

			case GD_TEMPLATE_BUTTON_UNDOUPVOTEPOST_PREVIEW:
			case GD_TEMPLATE_BUTTON_UNDOUPVOTEPOST_FULL:

				$ret .= ' '.GD_CLASS_UNDOUPVOTEPOST;
				break;

			case GD_TEMPLATE_BUTTON_DOWNVOTEPOST_PREVIEW:
			case GD_TEMPLATE_BUTTON_DOWNVOTEPOST_FULL:

				$ret .= ' '.GD_CLASS_DOWNVOTEPOST;
				break;

			case GD_TEMPLATE_BUTTON_UNDODOWNVOTEPOST_PREVIEW:
			case GD_TEMPLATE_BUTTON_UNDODOWNVOTEPOST_FULL:

				$ret .= ' '.GD_CLASS_UNDODOWNVOTEPOST;
				break;
		}
		
		switch ($template_id) {
					
			case GD_TEMPLATE_BUTTON_FOLLOWUSER_FULL:
			case GD_TEMPLATE_BUTTON_FOLLOWUSER_PREVIEW:
			case GD_TEMPLATE_BUTTON_UNFOLLOWUSER_FULL:
			case GD_TEMPLATE_BUTTON_UNFOLLOWUSER_PREVIEW:
			case GD_TEMPLATE_BUTTON_RECOMMENDPOST_FULL:
			case GD_TEMPLATE_BUTTON_RECOMMENDPOST_PREVIEW:
			case GD_TEMPLATE_BUTTON_UNRECOMMENDPOST_FULL:
			case GD_TEMPLATE_BUTTON_UNRECOMMENDPOST_PREVIEW:
			case GD_TEMPLATE_BUTTON_UPVOTEPOST_PREVIEW:
			case GD_TEMPLATE_BUTTON_UPVOTEPOST_FULL:
			case GD_TEMPLATE_BUTTON_UNDOUPVOTEPOST_PREVIEW:
			case GD_TEMPLATE_BUTTON_UNDOUPVOTEPOST_FULL:
			case GD_TEMPLATE_BUTTON_DOWNVOTEPOST_PREVIEW:
			case GD_TEMPLATE_BUTTON_DOWNVOTEPOST_FULL:
			case GD_TEMPLATE_BUTTON_UNDODOWNVOTEPOST_PREVIEW:
			case GD_TEMPLATE_BUTTON_UNDODOWNVOTEPOST_FULL:

				$ret .= ' pop-functionbutton';
				break;
		}

		// Make the classes 'active' as to make them appear as they've been clicked from the previous state
		switch ($template_id) {
					
			case GD_TEMPLATE_BUTTON_UNFOLLOWUSER_FULL:
			case GD_TEMPLATE_BUTTON_UNFOLLOWUSER_PREVIEW:
			case GD_TEMPLATE_BUTTON_UNRECOMMENDPOST_FULL:
			case GD_TEMPLATE_BUTTON_UNRECOMMENDPOST_PREVIEW:
			case GD_TEMPLATE_BUTTON_UNDOUPVOTEPOST_PREVIEW:
			case GD_TEMPLATE_BUTTON_UNDOUPVOTEPOST_FULL:
			case GD_TEMPLATE_BUTTON_UNDODOWNVOTEPOST_PREVIEW:
			case GD_TEMPLATE_BUTTON_UNDODOWNVOTEPOST_FULL:

				$ret .= ' active';
				break;
		}

		return $ret;
	}

	// function init_atts($template_id, &$atts) {

	// 	switch ($template_id) {
					
	// 		// case GD_TEMPLATE_BUTTON_POSTCOMMENTS:

	// 		// 	// Do not show the 'Loading' message on top
	// 		// 	// $this->merge_att($template_id, $atts, 'params', array(
	// 		// 	// 	'data-loadingmsg-target' => '',
	// 		// 	// 	'data-addspinner' => true,
	// 		// 	// ));
	// 		// 	$this->append_att($template_id, $atts, 'class', 'pop-functionbutton');
	// 		// 	break;

	// 		case GD_TEMPLATE_BUTTON_FOLLOWUSER_FULL:
	// 		case GD_TEMPLATE_BUTTON_UNFOLLOWUSER_FULL:

	// 			$this->append_att($template_id, $atts, 'class', 'pop-hidden-print');
	// 			break;
	// 	}

	// 	switch ($template_id) {
					
	// 		case GD_TEMPLATE_BUTTON_FOLLOWUSER_FULL:
	// 		case GD_TEMPLATE_BUTTON_FOLLOWUSER_PREVIEW:
				
	// 			$this->append_att($template_id, $atts, 'class', GD_CLASS_FOLLOWUSER);
	// 			break;

	// 		case GD_TEMPLATE_BUTTON_UNFOLLOWUSER_FULL:
	// 		case GD_TEMPLATE_BUTTON_UNFOLLOWUSER_PREVIEW:

	// 			$this->append_att($template_id, $atts, 'class', GD_CLASS_UNFOLLOWUSER);
	// 			break;
			
	// 		case GD_TEMPLATE_BUTTON_RECOMMENDPOST_FULL:
	// 		case GD_TEMPLATE_BUTTON_RECOMMENDPOST_PREVIEW:

	// 			$this->append_att($template_id, $atts, 'class', GD_CLASS_RECOMMENDPOST);
	// 			break;

	// 		case GD_TEMPLATE_BUTTON_UNRECOMMENDPOST_FULL:
	// 		case GD_TEMPLATE_BUTTON_UNRECOMMENDPOST_PREVIEW:

	// 			$this->append_att($template_id, $atts, 'class', GD_CLASS_UNRECOMMENDPOST);
	// 			break;

	// 		case GD_TEMPLATE_BUTTON_UPVOTEPOST_PREVIEW:
	// 		case GD_TEMPLATE_BUTTON_UPVOTEPOST_FULL:

	// 			$this->append_att($template_id, $atts, 'class', GD_CLASS_UPVOTEPOST);
	// 			break;

	// 		case GD_TEMPLATE_BUTTON_UNDOUPVOTEPOST_PREVIEW:
	// 		case GD_TEMPLATE_BUTTON_UNDOUPVOTEPOST_FULL:

	// 			$this->append_att($template_id, $atts, 'class', GD_CLASS_UNDOUPVOTEPOST);
	// 			break;

	// 		case GD_TEMPLATE_BUTTON_DOWNVOTEPOST_PREVIEW:
	// 		case GD_TEMPLATE_BUTTON_DOWNVOTEPOST_FULL:

	// 			$this->append_att($template_id, $atts, 'class', GD_CLASS_DOWNVOTEPOST);
	// 			break;

	// 		case GD_TEMPLATE_BUTTON_UNDODOWNVOTEPOST_PREVIEW:
	// 		case GD_TEMPLATE_BUTTON_UNDODOWNVOTEPOST_FULL:

	// 			$this->append_att($template_id, $atts, 'class', GD_CLASS_UNDODOWNVOTEPOST);
	// 			break;
	// 	}
		
	// 	switch ($template_id) {
					
	// 		case GD_TEMPLATE_BUTTON_FOLLOWUSER_FULL:
	// 		case GD_TEMPLATE_BUTTON_FOLLOWUSER_PREVIEW:
	// 		case GD_TEMPLATE_BUTTON_UNFOLLOWUSER_FULL:
	// 		case GD_TEMPLATE_BUTTON_UNFOLLOWUSER_PREVIEW:
	// 		case GD_TEMPLATE_BUTTON_RECOMMENDPOST_FULL:
	// 		case GD_TEMPLATE_BUTTON_RECOMMENDPOST_PREVIEW:
	// 		case GD_TEMPLATE_BUTTON_UNRECOMMENDPOST_FULL:
	// 		case GD_TEMPLATE_BUTTON_UNRECOMMENDPOST_PREVIEW:
	// 		case GD_TEMPLATE_BUTTON_UPVOTEPOST_PREVIEW:
	// 		case GD_TEMPLATE_BUTTON_UPVOTEPOST_FULL:
	// 		case GD_TEMPLATE_BUTTON_UNDOUPVOTEPOST_PREVIEW:
	// 		case GD_TEMPLATE_BUTTON_UNDOUPVOTEPOST_FULL:
	// 		case GD_TEMPLATE_BUTTON_DOWNVOTEPOST_PREVIEW:
	// 		case GD_TEMPLATE_BUTTON_DOWNVOTEPOST_FULL:
	// 		case GD_TEMPLATE_BUTTON_UNDODOWNVOTEPOST_PREVIEW:
	// 		case GD_TEMPLATE_BUTTON_UNDODOWNVOTEPOST_FULL:

	// 			// Do not show the 'Loading' message on top
	// 			// $this->merge_att($template_id, $atts, 'params', array(
	// 			// 	'data-loadingmsg-target' => '',
	// 			// 	'data-addspinner' => true,
	// 			// ));
	// 			$this->append_att($template_id, $atts, 'class', 'pop-functionbutton');
	// 			break;
	// 	}

	// 	// Make the classes 'active' as to make them appear as they've been clicked from the previous state
	// 	switch ($template_id) {
					
	// 		case GD_TEMPLATE_BUTTON_UNFOLLOWUSER_FULL:
	// 		case GD_TEMPLATE_BUTTON_UNFOLLOWUSER_PREVIEW:
	// 		case GD_TEMPLATE_BUTTON_UNRECOMMENDPOST_FULL:
	// 		case GD_TEMPLATE_BUTTON_UNRECOMMENDPOST_PREVIEW:
	// 		case GD_TEMPLATE_BUTTON_UNDOUPVOTEPOST_PREVIEW:
	// 		case GD_TEMPLATE_BUTTON_UNDOUPVOTEPOST_FULL:
	// 		case GD_TEMPLATE_BUTTON_UNDODOWNVOTEPOST_PREVIEW:
	// 		case GD_TEMPLATE_BUTTON_UNDODOWNVOTEPOST_FULL:

	// 			$this->append_att($template_id, $atts, 'class', 'active');
	// 			break;
	// 	}
		
	// 	return parent::init_atts($template_id, $atts);
	// }
}

/**---------------------------------------------------------------------------------------------------------------
 * Initialization
 * ---------------------------------------------------------------------------------------------------------------*/
new GD_Template_Processor_Buttons();