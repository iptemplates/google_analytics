<?php
/*
	Plugin name: Google analytics
	Copyright: Copyright (C) 2013 JSC "Insightio"
	License: MIT, see README.md
*/

namespace Modules\standard\google_analytics;     

if (!defined('CMS')) exit;

class System{

	public function init(){
		global $site;

		$tracking_code = strip_tags($this->get_option('ga_tracking_code'));

		if((bool) $this->get_option('enable_ga'))
			$site->addJavascriptContent('ga-tracking-code', $tracking_code);
	}

	private function get_option($key){
		global $parametersMod;

		return $parametersMod->getValue('standard', 'google_analytics', 'options', $key); 
	}

}