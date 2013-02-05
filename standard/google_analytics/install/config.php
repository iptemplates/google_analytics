<?php
//language description
$languageCode = "en"; //RFC 4646 code
$languageShort = "EN"; //Short description
$languageLong = "English"; //Long title
$languageUrl = "en";


$moduleGroupTitle["standard"] = "Standard";
$moduleTitle["standard"]["google_analytics"] = "Google analytics";
  
  $parameterGroupTitle["standard"]["google_analytics"]["options"] = "Options";
  $parameterGroupAdmin["standard"]["google_analytics"]["options"] = "0";

    $parameterTitle["standard"]["google_analytics"]["options"]["ga_tracking_code"] = "Google analytics tracking code";
    $parameterValue["standard"]["google_analytics"]["options"]["ga_tracking_code"] = "
      <script type=\"text/javascript\">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-XXXXXXXX-1']);
        _gaq.push(['_trackPageview']);

        (function() {
          var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
          ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

      </script>
    ";
    $parameterAdmin["standard"]["google_analytics"]["options"]["ga_tracking_code"] = "0";
    $parameterType["standard"]["google_analytics"]["options"]["ga_tracking_code"] = "textarea";

    $parameterTitle["standard"]["google_analytics"]["options"]["enable_ga"] = "Enable google analytics?";
    $parameterValue["standard"]["google_analytics"]["options"]["enable_ga"] = "1";
    $parameterAdmin["standard"]["google_analytics"]["options"]["enable_ga"] = "0";
    $parameterType["standard"]["google_analytics"]["options"]["enable_ga"] = "bool";