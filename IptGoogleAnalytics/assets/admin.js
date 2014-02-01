$(document).ready(function () {
    IptGoogleAnalytics.init();
});

var IptGoogleAnalytics = new function () {
    "use strict";

    this.init = function () {
        // $('.IptGoogleAnalyticsOptions').validator(validatorConfig);
        $('.IptGoogleAnalyticsOptions').submit(function(e) {
            var form = $(this);

            // client-side validation OK.
            if (!e.isDefaultPrevented()) {
                $.ajax({
                    url: ip.baseUrl,
                    dataType: 'json',
                    type : 'POST',
                    data: form.serialize(),
                    success: function (response) {
                        if (response.result) {
                            var $alert = $('.IptGoogleAnalyticsAlert');
                            $alert.removeClass('hide');
                            setTimeout(function(){
                                $alert.fadeOut(400);
                            }, 1000);
                        } else {
                            //PHP controller says there are some errors
                            if (response.error) {
                                form.data("validator").invalidate(response.error.data);
                            }
                        }
                    }
                });
            }
            e.preventDefault();
        });
    };
};
