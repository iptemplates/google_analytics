<?php
/*
	Plugin name: Google analytics
	Copyright: Copyright (C) 2013 JSC "Insightio"
	License: MIT, see README.md
*/

namespace Plugin\IptGoogleAnalytics;

class Event
{
    public static function ipInit()
    {
    	if(ipGetOption('IptGoogleAnalytics.enabled')) {
    		$js = ipGetOption('IptGoogleAnalytics.trackingCode');
			\Ip\ServiceLocator::pageAssets()->addJavascriptContent('ga-tracking-code', $js);
        }
    }
}
