<?php

class Ebay {

    /**
     * Method performs Curl call and return string as price
     * 
     * @param string $url
     * @param string $phrase
     * @return string as price
     */
    public function getHTMLContents($url) {

        Yii::import('ext.simpleHTMLDOM.SimpleHTMLDOM');
        Yii::import('application.components.Curl');

        $cookieFile = './cookies.txt';

        $_parser = new SimpleHTMLDOM;
        $_curl = new Curl($url);
        $_curl->setup(
                array(
                    CURLOPT_COOKIEJAR => $cookieFile,
                    CURLOPT_COOKIEFILE => $cookieFile,
//                    CURLOPT_USERAGENT => 'Mozilla/5.0 (X11; Linux x86_64; rv:43.0) Gecko/20100101 Firefox/44.0'
                    CURLOPT_USERAGENT => 'Mozilla/5.0 (Android; Mobile; rv:13.0) Gecko/13.0 Firefox/13.0',
                    CURLOPT_TIMEOUT => 500
        ))->setPostData('');

        $_curl->call();

        $xml = $_parser->str_get_html($_curl->setUrl($url)->call());

        if (!$xml instanceof SimpleHTMLDOMParser)
            return false;
        else {
            $this->saveRelevandContents($xml);
        }
    }

    public function saveRelevandContents($xml) {

        $price_css = 'div[class="price"]';
        $price_part = $xml->find($price_css, 0);
        echo 'price: ' . substr(strip_tags($price_part), 2);

        echo PHP_EOL;

        $desc_css = 'div[id="itmShortDesc"]';
        $desc_part = $xml->find($desc_css, 0);
        echo 'desc: ' . $desc_part;

//        div[div="desc_div"]
//        div[id="itmShortDesc"]
//        div[div="ds_div"]
//        iframe[id="desc_ifr"]

        $qty_css = 'iframe[id="desc_ifr"]';
        $qty_part = $xml->find($qty_css, 0);
        echo 'desc: ' . $desc_part;

//        qtySubTxt
//        div[div="ds_div"]
//        iframe[id="desc_ifr"]
    }

    /**
     * Method performs Curl call and return string as price
     * 
     * @param string $url
     * @param string $phrase
     * @return string as price
     */
    public function getHTML($url, $phrase) {

        Yii::import('ext.simpleHTMLDOM.SimpleHTMLDOM');
        Yii::import('application.components.Curl');

        $cookieFile = './cookies.txt';

        $_parser = new SimpleHTMLDOM;
        $_curl = new Curl($url);
        $_curl->setup(
                array(
                    CURLOPT_COOKIEJAR => $cookieFile,
                    CURLOPT_COOKIEFILE => $cookieFile,
//                    CURLOPT_USERAGENT => 'Mozilla/5.0 (X11; Linux x86_64; rv:43.0) Gecko/20100101 Firefox/44.0'
                    CURLOPT_USERAGENT => 'Mozilla/5.0 (Android; Mobile; rv:13.0) Gecko/13.0 Firefox/13.0',
                    CURLOPT_TIMEOUT => 500
        ))->setPostData('');

        $_curl->call();

        $xml = $_parser->str_get_html($_curl->setUrl($url)->call());

        if (!$xml instanceof SimpleHTMLDOMParser) {
            return;
        }




        $part = $xml->find($phrase, 0);

        // price
        // price
        // price
        $return_array['price'] = substr(strip_tags($part), 2);
        
        // seller name
        // seller name
        // seller name
        $sellerid = $xml->find('div[data-sellerid]', 0);
        $seller_array = $sellerid->{'attr'};
        $return_array['seller'] = $seller_array['data-sellerid'];
        
        // product
        // product
        // product
//        $product_xml = $xml->find('h1[class="it-ttl"]', 0);
        $product_xml = $xml->find('h1[class="it-ttl"]', 0);
        $return_array['product'] = $product_xml;
        
        //        file_put_contents("/var/www/engine/shop.xhtml", "\n" . $xml, FILE_APPEND);
        
//        $return_array['product'] = $product_xml_array;
//        $return_array['product'] = $product_xml->{'_'};


         

        return $return_array;
    }

}
