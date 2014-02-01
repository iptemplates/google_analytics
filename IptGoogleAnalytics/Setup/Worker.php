<?php
/*
	Plugin name: Google analytics
	Copyright: Copyright (C) 2013 JSC "Insightio"
	License: MIT, see README.md
*/

namespace Plugin\IptGoogleAnalytics\Setup;

class Worker extends \Ip\SetupWorker{

    public function activate()
    {
        ipSetOption('IptGoogleAnalytics.enabled', true);
        ipSetOption('IptGoogleAnalytics.trackingCode', "
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-XXXXXXXX-1']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        ");
    }

    public function deactivate()
    {
    }

    public function remove()
    {
        ipRemoveOption('IptGoogleAnalytics.enabled');
        ipRemoveOption('IptGoogleAnalytics.trackingCode');
    }

}
