<?php
/**---------------------------------------------------------------------------------------------------------------
 *
 * Template Manager (Handlebars)
 *
 * ---------------------------------------------------------------------------------------------------------------*/


class PoPFrontend_Processor_ActionsBase extends PoPFrontend_Processor_BlocksBase {

	/***********************************************************/
	/** Repeated from "parent" class! */
	/***********************************************************/
	protected function get_block_page($template_id) {

		global $gd_template_settingsmanager;

		// Take the configuration from under the 'actions' instead of the 'blocks'
		if ($page = $gd_template_settingsmanager->get_action_page($template_id)) {

			return $page;
		}
		return parent::get_block_page($template_id);
	}

	function init_atts($template_id, &$atts) {

		global $gd_template_processor_manager;

		// No need for title. Take it out so it doesn't bother in ps-operational with the messagefeedbacks
		$this->add_att($template_id, $atts, 'title', '');
				
		return parent::init_atts($template_id, $atts);
	}
}
