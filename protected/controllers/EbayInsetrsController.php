<?php

class EbayInsetrsController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

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
//                    'index',
//                    'view',
//                    'create',
//                    'update',
//                    'admin', 
//                    'delete',
                    'setDataInPresta',
                    'generateImages',
                    'pic',
                    'createImage'),
                'users' => array('admin', 'expertpcx'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    public function actionSetDataInPresta() {

        $current_data_time = date('Y-m-d h:i:s', time());
        $current_data = date('Y-m-d', time());

        $criteria = new CDbCriteria();
        $criteria->condition = "sellingStatus_listingStatus = 'Active'";

        $ebayitems = EbayItem::model()->findAll($criteria);



        foreach ($ebayitems as $key => $value) {
            d::d($value->id);
            $description = str_replace('"', "'", $value->description);

            $ps_product = Yii::app()->db1->createCommand('
                INSERT INTO `ps_product` (`id_product`, `id_supplier`, `id_manufacturer`, `id_category_default`,
                    `id_shop_default`, `id_tax_rules_group`, `on_sale`, `online_only`, `ean13`, `upc`, `ecotax`, `quantity`, 
                    `minimal_quantity`, `price`, `wholesale_price`, `unity`, `unit_price_ratio`, `additional_shipping_cost`,
                    `reference`, `supplier_reference`, `location`, `width`, `height`, `depth`, `weight`, `out_of_stock`,
                    `quantity_discount`, `customizable`, `uploadable_files`, `text_fields`, `active`, `redirect_type`, 
                    `id_product_redirected`, `available_for_order`, `available_date`, `condition`, `show_price`, `indexed`,
                     `visibility`, `cache_is_pack`, `cache_has_attachments`, `is_virtual`, `cache_default_attribute`, `date_add`,
                     `date_upd`, `advanced_stock_management`, `pack_stock_type`) 
                    VALUES (NULL, "0", "0", "2", "1", "1", "0", "0", "", "", "0.000000", "0", "1", "' . $value->sellingStatus_currentPrice . '",
                    "1.000000", "","0.000000", "0.00", "one", "", "", "0.000000", "0.000000", "0.000000","0.000000", "2", "0", "0", "0", "0",
                    "1", "404", "0", "1", "' . $current_data . '","new", "1", "1", "both", "0", "0", "0", "0", "' . $current_data_time . '",
                    "' . $current_data_time . '", "0", "3");')->execute();

            //get last id_product
            $sql = 'SELECT id_product FROM ps_product ORDER BY id_product DESC LIMIT 1';
            $command = Yii::app()->db1->createCommand($sql);
            $results = $command->queryAll();
            $ps_id_product = $results[0]['id_product'];


            $this->Log($ps_product, 'ps_product', $ps_id_product, null);


            $update_ebay_item = Yii::app()->db->createCommand('
                UPDATE `ebay_item` SET ps_id_product = ' . $ps_id_product . ' WHERE id = ' . $value->id . ';')->execute();


            $this->Log($update_ebay_item, 'update_ebay_item', $ps_id_product, $value->id);


            $ps_product_lang = Yii::app()->db1->createCommand('
                INSERT INTO `ps_product_lang` (`id_product`, `id_shop`, `id_lang`, `description`, `description_short`,
                    `link_rewrite`, `meta_description`, `meta_keywords`, `meta_title`, `name`, `available_now`, `available_later`)
                VALUES ("' . $ps_id_product . '", "1", "1", "' . $description . '", "' . $description . '", "pen1", "", "", "", "' . $value->title . '", "", "");'
                    )->execute();

            $this->Log($ps_product_lang, 'ps_product_lang', $ps_id_product);


            $ps_product_shop = Yii::app()->db1->createCommand('
                INSERT INTO `ps_product_shop` (`id_product`, `id_shop`, `id_category_default`, `id_tax_rules_group`,
                    `on_sale`, `online_only`, `ecotax`, `minimal_quantity`, `price`, `wholesale_price`, `unity`, `unit_price_ratio`,
                    `additional_shipping_cost`, `customizable`, `uploadable_files`, `text_fields`, `active`, `redirect_type`,
                    `id_product_redirected`, `available_for_order`, `available_date`, `condition`, `show_price`, `indexed`,
                    `visibility`, `cache_default_attribute`, `advanced_stock_management`, `date_add`, `date_upd`, `pack_stock_type`)
                VALUES ("' . $ps_id_product . '", "1", "2", "0", "0", "0", "0.000000", "1", "' . $value->sellingStatus_currentPrice . '", "1.000000", "", "0.000000", "0.00", "0", "0",
                    "0","1", "404", "0", "1", "' . $current_data . '", "new", "1", "1", "both", "0", "0", "' . $current_data_time . '",
                    "' . $current_data_time . '", "3");'
                    )->execute();


            $this->Log($ps_product_shop, 'ps_product_shop', $ps_id_product);


            $ps_stock_available = Yii::app()->db1->createCommand('
                INSERT INTO `ps_stock_available` (`id_stock_available`, `id_product`, `id_product_attribute`,
                    `id_shop`, `id_shop_group`, `quantity`, `depends_on_stock`, `out_of_stock`)
                VALUES (NULL, "' . $ps_id_product . '", "0", "1", "0", "' . $value->quantity . '", "0", "2");'
                    )->execute();


            $this->Log($ps_stock_available, 'ps_stock_available', $ps_id_product);


            $ps_cart_product = Yii::app()->db1->createCommand('
                INSERT INTO `ps_cart_product` (`id_cart`, `id_product`, `id_address_delivery`, `id_shop`,
                    `id_product_attribute`, `quantity`, `date_add`)
                VALUES ("7", "' . $ps_id_product . '", "0", "1", "0", "1", "' . $current_data_time . '");'
                    )->execute();

            $this->Log($ps_cart_product, 'ps_cart_product', $ps_id_product);


            $ps_category_product = '';

            $ps_specyfic_price_priority = Yii::app()->db1->createCommand('
                INSERT INTO `ps_specific_price_priority` (`id_specific_price_priority`, `id_product`, `priority`)
                VALUES (NULL, "' . $ps_id_product . '", "id_shop;id_currency;id_country;id_group");'
                    )->execute();

            $this->Log($ps_specyfic_price_priority, 'ps_specyfic_price_priority', $ps_id_product);


            $picture_url_array = array();
//            $picture_array = array();
            $picture_array = explode('[]', $value->pictureURL);


            foreach ($picture_array as $picture) {

                $picture_array = explode('##', $picture);
                if (!empty($picture_array[1]))
                    $picture_url_array[] = $picture_array[1];
            };

            $position = '1';
            foreach ($picture_url_array as $key => $picture) {

                if (strcmp($picture, $value->galleryURL) == 0) {
                    $ps_image = Yii::app()->db1->createCommand('
                    INSERT INTO `ps_image` (`id_image`, `id_product`, `position`,`cover`) VALUES (NULL, "' . $ps_id_product . '", "' . $position . '","1");'
                            )->execute();

                    //get last id_image
                    $sql = 'SELECT id_image FROM ps_image ORDER BY id_image DESC LIMIT 1';
                    $command = Yii::app()->db1->createCommand($sql);
                    $results = $command->queryAll();

                    $id_image = $results[0]['id_image'];

                    $ps_image_lang = Yii::app()->db1->createCommand('
                        INSERT INTO `ps_image_lang` (`id_image`, `id_lang`, `legend`) VALUES ("' . $id_image . '", "1", "Pen1");'
                            )->execute();

                    $ps_image_shop = Yii::app()->db1->createCommand('
                        INSERT INTO `ps_image_shop` (`id_product`, `id_image`, `id_shop`,`cover`) VALUES ("' . $ps_id_product . '","' . $id_image . '", "1","1");'
                            )->execute();
                } else {

                    $ps_image = Yii::app()->db1->createCommand('
                        INSERT INTO `ps_image` (`id_image`, `id_product`, `position`) VALUES (NULL, "' . $ps_id_product . '", "' . $position . '");'
                            )->execute();

                    //get last id_image
                    $sql = 'SELECT id_image FROM ps_image ORDER BY id_image DESC LIMIT 1';
                    $command = Yii::app()->db1->createCommand($sql);
                    $results = $command->queryAll();

                    $id_image = $results[0]['id_image'];

                    $ps_image_lang = Yii::app()->db1->createCommand('
                        INSERT INTO `ps_image_lang` (`id_image`, `id_lang`, `legend`) VALUES ("' . $id_image . '", "1", "Pen1");'
                            )->execute();

                    $ps_image_shop = Yii::app()->db1->createCommand('
                        INSERT INTO `ps_image_shop` (`id_product`, `id_image`, `id_shop`) VALUES ("' . $ps_id_product . '","' . $id_image . '", "1");'
                            )->execute();
                };

                $this->Log($ps_image, 'ps_image', $ps_id_product);
                $this->Log($ps_image_lang, 'ps_image_lang', $ps_id_product);
                $this->Log($ps_image_shop, 'ps_image_shop', $ps_id_product);

//                $this->createImage($id_image, $picture);
//                
                $position++;
            }
        }
    }

    public function actionGenerateImages() {

        ini_set('max_execution_time', 3000);
        
        $sql = 'SELECT ps_id_product, pictureURL FROM ebay_item WHERE `ps_id_product` IS NOT NULL';
        $command = Yii::app()->db->createCommand($sql);
        $results = $command->queryAll();

        $image_url_array = array();

        foreach ($results as $ebay_item_details) {

            $picture_url_array = array();
            $picture_array = explode('[]', $ebay_item_details['pictureURL']);

            foreach ($picture_array as $picture) {

                $picture_array = explode('##', $picture);

                if (!empty($picture_array[1]))
                    $picture_url_array[] = $picture_array[1];
            }

            $image_url_array[$ebay_item_details['ps_id_product']]['ps_id_product'] = $ebay_item_details['ps_id_product'];

            foreach ($picture_url_array as $key => $picture_url) {
                $image_url_array[$ebay_item_details['ps_id_product']]['url'][] = $picture_url;
            }

            $sql = 'SELECT id_image FROM ps_image WHERE id_product = ' . $ebay_item_details['ps_id_product'] . ' ORDER BY position ASC;';

            $command = Yii::app()->db1->createCommand($sql);
            $results = $command->queryAll();

            foreach ($results as $ps_image_details) {
                $image_url_array[$ebay_item_details['ps_id_product']]['ps_image_details'][] = $ps_image_details['id_image'];
            }

            foreach ($image_url_array as $image_url_details) {
                foreach ($image_url_details['url'] as $key => $url) {
                    $this->createImage($image_url_details['ps_image_details'][$key], $url);
                }
            }
        }
    }

    public function createImage($id_image, $picture_url) {

        $prestashop_img_home = '/var/www/prestashop/img/p/';

        $path_chunks = str_split($id_image);


        foreach ($path_chunks as $chunks)
            $path_sufix .= $chunks . '/';

        $path = $prestashop_img_home . $path_sufix;

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $sql = 'SELECT name, width, height FROM ps_image_type';
        $command = Yii::app()->db1->createCommand($sql);
        $image_value = $command->queryAll();

        foreach ($image_value as $k => $image) {
            $img_path = $path . $id_image . '-' . $image['name'] . '.jpg';
            file_put_contents($img_path, file_get_contents($picture_url));

            $this->imageSize($img_path, $image['width'], $image['height']);
        }
    }

    function imageSize($img_path, $width, $height) {

        $imagick = new Imagick(realpath($img_path));

        $imagick->scaleImage($width, $height, true);
        $imagick->writeImage($img_path);
    }

    public function Log($table_name, $t_n, $ps_id_product, $itemId = null) {

        if ($itemId) {

            if ($table_name)
                $log['success'] = $t_n . ' [' . $ps_id_product . '] set with eBay itemID [' . $itemId . ']';
            else
                $log['error'] = $t_n . ' set with eBay itemID error';
        }else {
            if ($table_name)
                $log['success'] = $t_n . ' [' . $ps_id_product . '] created';
            else
                $log['error'] = $t_n . ' error';
        }

        d::d($log);
        return $log;
    }

    public function actionPic() {

        d::d(__LINE__);
        $home = '/var/www/prestashop/download.jpg';
        $homea = '/var/www/prestashop/a-download.jpg';

        $imagick = new Imagick(realpath($home));
        $imagick->scaleImage(150, 150, true);
//        header("Content-Type: image/jpg");
        $imagick->writeImage($homea);
    }

}
