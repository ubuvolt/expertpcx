<?php

// Price control
// Price control
// Price control
// Price control
// Price control
// Price control
// Price control
// Price control
// Price control
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

    ///////////////////////////
    // 1 - monitoring price (refresh button)
    ///////////////////////////

    public function actionGetInfo() {
        $ebay_price_monitor = EbayPriceMonitor::model()->findAll();
        $this->render('getInfo', array('ebay_price_monitor' => $ebay_price_monitor));
    }

    ///////////////////////////
    // 2 - monitoring price (reload button) API CALL
    ///////////////////////////
    public function actionReloadEbayPrice($view = true) {

        $ebay_price_monitor = EbayPriceMonitor::model()->findAll();

        Yii::import('application.modules.ebay.Ebay');
        $ebay = new Ebay();
        $phrase = 'div[class="price"]';
        if (is_array($ebay_price_monitor)) {
            foreach ($ebay_price_monitor as $item) {

                $substr = $ebay->getHTML($item->url, $phrase);
                $price_array = explode('Approx', $substr['price']);
                $price_UK = $price_array[0];
                $price = (float) str_replace('ound;', '', $price_UK);

//            
//            
                $product_title = explode('<title>', $substr['product']);
                $product_title = explode('">', $product_title[0]);
                $product_title = explode('</', $product_title[1]);

                $item->product = $product_title[0];
                $item->seller = $substr['seller'];
                $item->price = number_format($price, 2);
                $item->save();
            }
            if ($view) {
                $this->render('getInfo', array('ebay_price_monitor' => $ebay_price_monitor));
            }
        }
    }

    ///////////////////////////
    // 3 - raport aboute prices - (ebayPriceEmail button) API CALL
    ///////////////////////////
    public function actionEbayPriceEmail() {
        $ebay_price_monitor = EbayPriceMonitor::model()->findAll();

        Yii::import('application.modules.ebay.Ebay');
        $ebay = new Ebay();
//        $phrase = 'div[class="price"]';
        $phrase = 'div[class="price"]';
        $msg = '<html><body>';
        $prod = 1;
        if (is_array($ebay_price_monitor)) {
            foreach ($ebay_price_monitor as $ebay_item) {

                $substr = $ebay->getHTML($ebay_item->url, $phrase);
                $price_array = explode('Approx', $substr['price']);
                $price_UK = $price_array[0];
                $current_ebay_price = (float) str_replace('ound;', '', $price_UK);

                $current_price = number_format($current_ebay_price, 2);
                $db_price = number_format((float) $ebay_item->price, 2);

                // price compare
                // price compare
                // price compare
                if ($current_price != $db_price) {
                    $msg .= 'product:' . $ebay_item->product . '<br>'
                            . 'url: ' . $ebay_item->url . ' <br> '
                            . 'old price:' . $db_price . ' <br> '
                            . 'new price:' . $current_price . ' <br><br> ';
                }
            }

            $msg .= '</body></html>';

            if ($prod) {
                if ($msg != '<html><body></body></html>') {

                    $msg .= '<br>';
                    $msg .= '<br>';
                    $msg .= 'Ebay Price Update: ' . date('D M Y H:i:s');

                    $this->sendEmail($msg);
                }
            }

            $this->actionReloadEbayPrice(false);
        }
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
        mail("ubuvolt@gmail.com", $subject, $msg, $headers);
//        mail("peter.dusza@expertpcx.com", $subject, $msg, $headers);
    }

}
