<?php
/*
    Plugin name: Google analytics
    Copyright: Copyright (C) 2013 JSC "Insightio"
    License: MIT, see README.md
*/

namespace Plugin\IptGoogleAnalytics;
use Ip\Response\JsonRpc;

class AdminController extends \Ip\Controller
{
    public function index()
    {
        ipAddJs('Plugin/IptGoogleAnalytics/assets/admin.js');

        $form = new \Ip\Form();
        $form->addClass('IptGoogleAnalyticsOptions');

        $field = new \Ip\Form\Field\Hidden(array(
            'name' => 'aa',
            'value' => 'IptGoogleAnalytics.saveOptions'
        ));
        $form->addField($field);

        $field = new \Ip\Form\Field\TextArea(array(
            'name' => 'trackingCode',
            'label' => __('Google Analytics tracking code', 'IptGoogleAnalytics'),
            'value' => ipGetOption('IptGoogleAnalytics.trackingCode'),
        ));
        $form->addField($field);

        $field = new \Ip\Form\Field\Checkbox(array(
            'name' => 'enabled',
            'label' => __('Enable tracking code', 'IptGoogleAnalytics'),
            'checked' => ipGetOption('IptGoogleAnalytics.enabled') ? true : false,
        ));
        $form->addField($field);

        $field = new \Ip\Form\Field\Submit(array(
            'name' => 'submit',
            'value' => __('Submit', 'IptGoogleAnalytics')
        ));
        $form->addField($field);

        $data = array(
            'form' => $form,
        );

        return ipView('view/options.php', $data);
    }

    public function saveOptions()
    {
        $request = ipRequest();
        $enabled = $request->getPost('enabled', false) ? true : false;
        ipSetOption('IptGoogleAnalytics.enabled', $enabled);
        ipSetOption('IptGoogleAnalytics.trackingCode', $request->getPost('trackingCode'));

        return JsonRpc::result(true);
    }
}
