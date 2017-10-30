<?php

class EbayController extends Controller {

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array(
                    'getInfo',
                    'reloadEbayPrice',
                    'create',
                    'update'
                ),
                'users' => array('admin', 'expertpcx'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('ebayPriceEmail'),
                'users' => array('*'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin', 'expertpcx'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    public function actionGetInfo() {
        $ebm = EbayPriceMonitor::model()->findAll();
        $this->render('getInfo', array('ebm' => $ebm));
    }

    public function actionReloadEbayPrice() {

        $ebm = EbayPriceMonitor::model()->findAll();

        Yii::import('application.modules.ebay.Ebay');
        $ebay = new Ebay();
        $phrase = 'div[class="price"]';

        foreach ($ebm as $item) {
            $item->price = number_format($ebay->getHTMLPrice($item->url, $phrase),2);

            $item->save();
        }

        $this->render('getInfo', array('ebm' => $ebm));
    }

    public function actionEbayPriceEmail() {
        $ebm = EbayPriceMonitor::model()->findAll();

        Yii::import('application.modules.ebay.Ebay');
        $ebay = new Ebay();
        $phrase = 'div[class="price"]';
        $msg = '<html><body>';
        $prod = 0;

        foreach ($ebm as $item) {
            $ebay_price = number_format($ebay->getHTMLPrice($item->url, $phrase), 2);

            if ($ebay_price != number_format($item->price, 2)) {
                $prod = 1;
                $msg .= 'product:' . $item->product . '<br>'
                        . 'url: ' . $item->url . ' <br> '
                        . 'old price:' . number_format($item->price, 2) . ' <br> '
                        . 'new price:' . $ebay_price . ' <br><br> ';
            }
        }

        $msg .= '</body></html>';

        if ($prod)
            $this->sendEmail($msg);
    }

    public function sendEmail($msg) {
        $subject = 'Ebay Price Update';
        // To send HTML mail, the Content-type header must be set
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: ExpertPcX CMS' . "\r\n" .
                'Reply-To: webmaster@expertpcx.com';

        $msg = wordwrap($msg, 70);

        mail("bart.wolski@expertpcx.com", $subject, $msg, $headers);
//        mail("peter.dusza@expertpcx.com", $subject, $msg, $headers);
    }

}
