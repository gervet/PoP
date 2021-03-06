<?php

define('POPTHEME_WASSUP_SECTIONPROCESSORS_MIN_VERSION', 0.1);
define('GETPOP_PROCESSORS_MIN_VERSION', 0.1);
define('GETPOPDEMO_PROCESSORS_MIN_VERSION', 0.1);

class GetPoP_Validation {

	function validate(){

		$success = true;
		if(!defined('POPTHEME_WASSUP_SECTIONPROCESSORS_VERSION')){

			add_action('admin_notices',array($this,'install_warning'));
			add_action('network_admin_notices',array($this,'install_warning'));
			// Comment Leo: allow the theme to initialize, so that we can access the back-end in case of error, eg: to enable the needed plug-ins
			// $success = false;
		}
		elseif(!defined('POPTHEME_WASSUP_SECTIONPROCESSORS_INITIALIZED')){

			// The admin notice will come from another failing plug-in, no need to repeat it here
			// Comment Leo: allow the theme to initialize, so that we can access the back-end in case of error, eg: to enable the needed plug-ins
			// $success = false;
		}
		elseif(POPTHEME_WASSUP_SECTIONPROCESSORS_VERSION < POPTHEME_WASSUP_SECTIONPROCESSORS_MIN_VERSION){
			
			add_action('admin_notices',array($this,'version_warning'));
			add_action('network_admin_notices',array($this,'version_warning'));
		}

		// The Theme is valid for both the GetPoP website and the GetPoP Demo website
		if(!defined('GETPOP_ENVIRONMENT_VERSION') && !defined('GETPOPDEMO_ENVIRONMENT_VERSION') && !defined('POPDEMO_ENVIRONMENT_VERSION')){

			add_action('admin_notices',array($this,'plugins_env_warning'));
			add_action('network_admin_notices',array($this,'plugins_env_warning'));
			// Comment Leo: allow the theme to initialize, so that we can access the back-end in case of error, eg: to enable the needed plug-ins
			// $success = false;
		}
		else {

			// If the website is GetPoP, validate the needed processors plug-in is installed
			if (defined('GETPOP_ENVIRONMENT_VERSION')) {

				if(!defined('GETPOP_PROCESSORS_VERSION')){

					add_action('admin_notices',array($this,'processors_install_warning'));
					add_action('network_admin_notices',array($this,'processors_install_warning'));
					// Comment Leo: allow the theme to initialize, so that we can access the back-end in case of error, eg: to enable the needed plug-ins
					// $success = false;
				}
				elseif(!defined('GETPOP_PROCESSORS_INITIALIZED')){

					// The admin notice will come from another failing plug-in, no need to repeat it here
					// Comment Leo: allow the theme to initialize, so that we can access the back-end in case of error, eg: to enable the needed plug-ins
					// $success = false;
				}
				elseif(GETPOP_PROCESSORS_VERSION < GETPOP_PROCESSORS_MIN_VERSION){
					
					add_action('admin_notices',array($this,'processors_version_warning'));
					add_action('network_admin_notices',array($this,'processors_version_warning'));
				}
			}
			// If the website is GetPoP Demo, validate the needed processors plug-in is installed
			elseif (defined('GETPOPDEMO_ENVIRONMENT_VERSION')) {

				if(!defined('GETPOPDEMO_PROCESSORS_VERSION')){

					add_action('admin_notices',array($this,'processorsdemo_install_warning'));
					add_action('network_admin_notices',array($this,'processorsdemo_install_warning'));
					// Comment Leo: allow the theme to initialize, so that we can access the back-end in case of error, eg: to enable the needed plug-ins
					// $success = false;
				}
				elseif(!defined('GETPOPDEMO_PROCESSORS_INITIALIZED')){

					// The admin notice will come from another failing plug-in, no need to repeat it here
					// Comment Leo: allow the theme to initialize, so that we can access the back-end in case of error, eg: to enable the needed plug-ins
					// $success = false;
				}
				elseif(GETPOPDEMO_PROCESSORS_VERSION < GETPOPDEMO_PROCESSORS_MIN_VERSION){
					
					add_action('admin_notices',array($this,'processorsdemo_version_warning'));
					add_action('network_admin_notices',array($this,'processorsdemo_version_warning'));
				}
			}
		}

		return $success;
	}

	function admin_notice($message){
		?>
		<div class="error"><p><?php echo $message ?><br/><em><?php _e('Only admins see this message.','getpop'); ?></em></p></div>
		<?php
	}
	function install_warning(){
		
		$this->admin_notice(__('Error: <b>PoP Theme: Wassup Processors</b> is not installed/activated. Without it, <b>GetPoP</b> will not work. Please install this plugin from your plugin installer or download it <a href="http://wordpress.org/extend/plugins/pop/">from here</a>.','getpop'));
	}
	function version_warning(){
		
		$this->admin_notice(__('Warning: please make sure to have the <a href="http://wordpress.org/extend/plugins/pop/">latest version</a> of <b>PoP Theme: Wassup Processors</b> installed, or otherwise <b>GetPoP</b> might not function properly.','getpop'));
	}
	function plugins_env_warning(){
		
		$this->admin_notice(__('Error: either <b>GetPoP Environment Constants</b> or <b>GetPoP Demo Environment Constants</b> must be installed/activated. Without any of these, <b>GetPoP</b> will not work. Please install the corresponding plugin from your plugin installer or download it <a href="http://wordpress.org/extend/plugins/pop/">from here</a>.','getpop'));
	}
	function processors_install_warning(){
		
		$this->admin_notice(__('Error: <b>GetPoP Processors</b> is not installed/activated. Without it, <b>GetPoP</b> will not work. Please install this plugin from your plugin installer or download it <a href="http://wordpress.org/extend/plugins/pop/">from here</a>.','getpop'));
	}
	function processors_version_warning(){
		
		$this->admin_notice(__('Warning: please make sure to have the <a href="http://wordpress.org/extend/plugins/pop/">latest version</a> of <b>GetPoP Processors</b> installed, or otherwise <b>GetPoP</b> might not function properly.','getpop'));
	}
	function processorsdemo_install_warning(){
		
		$this->admin_notice(__('Error: <b>GetPoP Demo Processors</b> is not installed/activated. Without it, <b>GetPoP</b> will not work. Please install this plugin from your plugin installer or download it <a href="http://wordpress.org/extend/plugins/pop/">from here</a>.','getpop'));
	}
	function processorsdemo_version_warning(){
		
		$this->admin_notice(__('Warning: please make sure to have the <a href="http://wordpress.org/extend/plugins/pop/">latest version</a> of <b>GetPoP Demo Processors</b> installed, or otherwise <b>GetPoP</b> might not function properly.','getpop'));
	}
}
