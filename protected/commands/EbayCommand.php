<?php

/**
 * Functions generating JobQueue emails for user whit abandon baskets:
 *      
 * ./yiic Ebay Email
 * ./yiic Ebay Contents
 * ./yiic Ebay FileGet
 * 
 */
class EbayCommand extends CConsoleCommand {
    
    public function actionFileGet() {
        
        $url = 'http://www.ebay.co.uk/itm/Crystal-Two-Line-Strip-Hair-Clips-Hairgrips-for-Women-Girl-Hair-Accessories-/112550685764?hash=item1a348b2c44:g:~zoAAOSwrQRZrEjy';


        echo file_get_contents($url);        
    }
    
    public function actionContents() {
        Yii::import('application.modules.ebay.Ebay');
        
        $url = 'http://www.ebay.co.uk/itm/Crystal-Two-Line-Strip-Hair-Clips-Hairgrips-for-Women-Girl-Hair-Accessories-/112550685764?hash=item1a348b2c44:g:~zoAAOSwrQRZrEjy';
//        $phrase = 'div[class="price"]';
        
        $ebay = new Ebay();
        echo $ebay->getHTMLContents($url);
    }
    
    public function actionIndex() {
        Yii::import('application.modules.ebay.Ebay');
        
        $url = 'http://www.ebay.co.uk/itm/NEW-GENUINE-HP-ENVY-X360-M6-AQ-15AQ-M6-AR-15T-AQ-SILVER-LID-TOP-COVER-856799-001-/192282354869';
        $phrase = 'div[class="price"]';
        
        $ebay = new Ebay();
        echo $ebay->getHTMLPrice($url, $phrase);
    }
    
    public function actionEmail() {
        // the message
        $msg = "First line of text\nSecond line of text";

        // use wordwrap() if lines are longer than 70 characters
        $msg = wordwrap($msg, 70);

        // send email
        mail("ubuvolt@gmail.com", "My subject", $msg);
        mail("voltani@wp.pl", "My subject", $msg);
        
        echo 'aaa';
    }
}
