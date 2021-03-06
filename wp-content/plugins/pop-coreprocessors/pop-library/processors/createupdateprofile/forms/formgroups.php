<?php
/**---------------------------------------------------------------------------------------------------------------
 *
 * Template Manager (Handlebars)
 *
 * ---------------------------------------------------------------------------------------------------------------*/

define ('GD_TEMPLATE_FORMCOMPONENTGROUP_CUP_DISPLAYEMAIL', PoP_ServerUtils::get_template_definition('formcomponentgroup-cup-displayemail'));
define ('GD_TEMPLATE_FORMCOMPONENTGROUP_CUP_SHORTDESCRIPTION', PoP_ServerUtils::get_template_definition('formcomponentgroup-cup-shortdescription'));
define ('GD_TEMPLATE_FORMCOMPONENTGROUP_CUP_FACEBOOK', PoP_ServerUtils::get_template_definition('formcomponentgroup-cup-facebook'));
define ('GD_TEMPLATE_FORMCOMPONENTGROUP_CUP_TWITTER', PoP_ServerUtils::get_template_definition('formcomponentgroup-cup-twitter'));
define ('GD_TEMPLATE_FORMCOMPONENTGROUP_CUP_LINKEDIN', PoP_ServerUtils::get_template_definition('formcomponentgroup-cup-linkedin'));
define ('GD_TEMPLATE_FORMCOMPONENTGROUP_CUP_YOUTUBE', PoP_ServerUtils::get_template_definition('formcomponentgroup-cup-youtube'));

class GD_Template_Processor_ProfileFormGroups extends GD_Template_Processor_FormComponentGroupsBase {

	function get_templates_to_process() {
	
		return array(
			GD_TEMPLATE_FORMCOMPONENTGROUP_CUP_DISPLAYEMAIL,
			GD_TEMPLATE_FORMCOMPONENTGROUP_CUP_SHORTDESCRIPTION,
			GD_TEMPLATE_FORMCOMPONENTGROUP_CUP_FACEBOOK,
			GD_TEMPLATE_FORMCOMPONENTGROUP_CUP_TWITTER,
			GD_TEMPLATE_FORMCOMPONENTGROUP_CUP_LINKEDIN,
			GD_TEMPLATE_FORMCOMPONENTGROUP_CUP_YOUTUBE,
		);
	}
	function use_component_configuration($template_id) {

		switch ($template_id) {

			case GD_TEMPLATE_FORMCOMPONENTGROUP_CUP_DISPLAYEMAIL:
				
				return false;
		}

		return parent::use_component_configuration($template_id);
	}

	function get_label($template_id, $atts) {

		$ret = parent::get_label($template_id, $atts);

		$icons = array(
			GD_TEMPLATE_FORMCOMPONENTGROUP_CUP_FACEBOOK => 'fa-facebook',
			GD_TEMPLATE_FORMCOMPONENTGROUP_CUP_TWITTER => 'fa-twitter',
			GD_TEMPLATE_FORMCOMPONENTGROUP_CUP_LINKEDIN => 'fa-linkedin',
			GD_TEMPLATE_FORMCOMPONENTGROUP_CUP_YOUTUBE => 'fa-youtube',
		);

		if ($icon = $icons[$template_id]) {

			$ret = sprintf(
				'<i class="fa fa-fw %s"></i>%s',
				$icon,
				$ret
			);
		}
		
		return $ret;
	}

	function get_component($template_id) {

		$components = array(
			GD_TEMPLATE_FORMCOMPONENTGROUP_CUP_DISPLAYEMAIL => GD_TEMPLATE_FORMCOMPONENT_CUP_DISPLAYEMAIL,
			GD_TEMPLATE_FORMCOMPONENTGROUP_CUP_SHORTDESCRIPTION => GD_TEMPLATE_FORMCOMPONENT_CUP_SHORTDESCRIPTION,
			GD_TEMPLATE_FORMCOMPONENTGROUP_CUP_FACEBOOK => GD_TEMPLATE_FORMCOMPONENT_CUP_FACEBOOK,
			GD_TEMPLATE_FORMCOMPONENTGROUP_CUP_TWITTER => GD_TEMPLATE_FORMCOMPONENT_CUP_TWITTER,
			GD_TEMPLATE_FORMCOMPONENTGROUP_CUP_LINKEDIN => GD_TEMPLATE_FORMCOMPONENT_CUP_LINKEDIN,
			GD_TEMPLATE_FORMCOMPONENTGROUP_CUP_YOUTUBE => GD_TEMPLATE_FORMCOMPONENT_CUP_YOUTUBE,
		);

		if ($component = $components[$template_id]) {

			return $component;
		}
		
		return parent::get_component($template_id);
	}

	function init_atts($template_id, &$atts) {

		// Override the placeholders
		$placeholders = array(
			GD_TEMPLATE_FORMCOMPONENTGROUP_CUP_FACEBOOK => 'https://www.facebook.com/...',
			GD_TEMPLATE_FORMCOMPONENTGROUP_CUP_TWITTER => 'https://twitter.com/...',
			GD_TEMPLATE_FORMCOMPONENTGROUP_CUP_LINKEDIN => 'https://www.linkedin.com/...',
			GD_TEMPLATE_FORMCOMPONENTGROUP_CUP_YOUTUBE => 'http://www.youtube.com/...',
		);
		if ($placeholder = $placeholders[$template_id]) {

			$component = $this->get_component($template_id);
			$this->add_att($component, $atts, 'placeholder', $placeholder);
		}
		
		return parent::init_atts($template_id, $atts);
	}
}


/**---------------------------------------------------------------------------------------------------------------
 * Initialization
 * ---------------------------------------------------------------------------------------------------------------*/
new GD_Template_Processor_ProfileFormGroups();