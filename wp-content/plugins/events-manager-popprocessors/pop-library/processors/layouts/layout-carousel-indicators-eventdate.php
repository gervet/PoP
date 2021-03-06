<?php
/**---------------------------------------------------------------------------------------------------------------
 *
 * Template Manager (Handlebars)
 *
 * ---------------------------------------------------------------------------------------------------------------*/

define ('GD_TEMPLATE_EM_LAYOUT_CAROUSEL_INDICATORS_EVENTDATE', PoP_ServerUtils::get_template_definition('em-layout-carousel-indicators-eventdate'));

class GD_Template_Processor_EventDateCarouselIndicatorLayouts extends GD_Template_Processor_EventDateCarouselIndicatorLayoutsBase {

	function get_templates_to_process() {
	
		return array(
			GD_TEMPLATE_EM_LAYOUT_CAROUSEL_INDICATORS_EVENTDATE,
		);
	}
}


/**---------------------------------------------------------------------------------------------------------------
 * Initialization
 * ---------------------------------------------------------------------------------------------------------------*/
new GD_Template_Processor_EventDateCarouselIndicatorLayouts();