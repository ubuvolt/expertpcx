<?php

class EbayInsetrsController extends Controller {

    // qty of photons produced by one flow
    public $jump = 20;

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
                    'setCateg',
                    'setHomeCateg',
                    'setDataInPresta',
                    'generateImages',
                    'pic',
                    'createImage',
                    'reStartGenerateImages'
                ),
                'users' => array('bartek', 'piotr'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    //
    //
    //  1
    //
    //
    public function actionSetDataInPresta() {

        $curent_company = AdminCentralStorage::get_central_setting(Yii::app()->user->name, 'curent_company_flow');
        if ($curent_company == 'hairacc4you') {
            $seller_userID = 'hairacc4youcom';
            $db = 'db_hair';
        }

        if ($curent_company == 'expertpcx') {
            $seller_userID = 'expertpcx';
            $db = 'db_expert';
        }

        $current_data_time = date('Y-m-d h:i:s', time());
        $current_data = date('Y-m-d', time());

        $criteria = new CDbCriteria();
        $criteria->condition = "
                sellingStatus_listingStatus = 'Active' AND seller_userID = '" . $seller_userID . "' AND currency = 'GBP'";
        $ebayitems = EbayItem::model()->findAll($criteria);


        foreach ($ebayitems as $key => $value) {
//            file_put_contents("/var/www/engine/description_all.xhtml", "\n" . $value->description, FILE_APPEND);

            $description = str_replace('"', "&#34;", $value->description);

            $ps_product = Yii::app()->$db->createCommand('
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
            $command = Yii::app()->$db->createCommand($sql);
            $results = $command->queryAll();
            $ps_id_product = $results[0]['id_product'];

            $this->Log($ps_product, 'ps_product', $ps_id_product, null);

            $update_ebay_item = Yii::app()->db->createCommand('
          UPDATE `ebay_item` SET ps_id_product = ' . $ps_id_product . ' WHERE id = ' . $value->id . ';')->execute();


            $this->Log($update_ebay_item, 'update_ebay_item', $ps_id_product, $value->id);

            $ps_product_lang = Yii::app()->$db->createCommand('
          INSERT INTO `ps_product_lang` (`id_product`, `id_shop`, `id_lang`, `description`, `description_short`,
          `link_rewrite`, `meta_description`, `meta_keywords`, `meta_title`, `name`, `available_now`, `available_later`)
          VALUES (' . $ps_id_product . ', "1", "1", "' . $this->processEbayItemDescription($description, $curent_company) . '", "' . $this->processEbayItemDescription($description, $curent_company) . '", "pen1", "", "", "", "' . addslashes($value->title) . '", "", "");')->execute();

            $this->Log($ps_product_lang, 'ps_product_lang', $ps_id_product);


            $ps_product_shop = Yii::app()->$db->createCommand('
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


            $ps_stock_available = Yii::app()->$db->createCommand('
          INSERT INTO `ps_stock_available` (`id_stock_available`, `id_product`, `id_product_attribute`,
          `id_shop`, `id_shop_group`, `quantity`, `depends_on_stock`, `out_of_stock`)
          VALUES (NULL, "' . $ps_id_product . '", "0", "1", "0", "' . $value->quantity . '", "0", "2");'
                    )->execute();


            $this->Log($ps_stock_available, 'ps_stock_available', $ps_id_product);


            $ps_cart_product = Yii::app()->$db->createCommand('
          INSERT INTO `ps_cart_product` (`id_cart`, `id_product`, `id_address_delivery`, `id_shop`,
          `id_product_attribute`, `quantity`, `date_add`)
          VALUES ("7", "' . $ps_id_product . '", "0", "1", "0", "1", "' . $current_data_time . '");'
                    )->execute();

            $this->Log($ps_cart_product, 'ps_cart_product', $ps_id_product);


            $ps_category_product = '';

            $ps_specyfic_price_priority = Yii::app()->$db->createCommand('
          INSERT INTO `ps_specific_price_priority` (`id_specific_price_priority`, `id_product`, `priority`)
          VALUES (NULL, "' . $ps_id_product . '", "id_shop;id_currency;id_country;id_group");'
                    )->execute();

            $this->Log($ps_specyfic_price_priority, 'ps_specyfic_price_priority', $ps_id_product);


            $picture_url_array = array();
            $picture_array = explode('[]', $value->pictureURL);


            foreach ($picture_array as $picture) {

                $picture_array = explode('##', $picture);
                if (!empty($picture_array[1]))
                    $picture_url_array[] = $picture_array[1];
            };

            $position = '1';
            foreach ($picture_url_array as $key => $picture) {

                if (strcmp($picture, $value->galleryURL) == 0) {
                    $ps_image = Yii::app()->$db->createCommand('
          INSERT INTO `ps_image` (`id_image`, `id_product`, `position`,`cover`) VALUES (NULL, "' . $ps_id_product . '", "' . $position . '","1");'
                            )->execute();

                    //get last id_image
                    $sql = 'SELECT id_image FROM ps_image ORDER BY id_image DESC LIMIT 1';
                    $command = Yii::app()->$db->createCommand($sql);
                    $results = $command->queryAll();

                    $id_image = $results[0]['id_image'];

                    $ps_image_lang = Yii::app()->$db->createCommand('
          INSERT INTO `ps_image_lang` (`id_image`, `id_lang`, `legend`) VALUES ("' . $id_image . '", "1", "Pen1");'
                            )->execute();

                    $ps_image_shop = Yii::app()->$db->createCommand('
          INSERT INTO `ps_image_shop` (`id_product`, `id_image`, `id_shop`,`cover`) VALUES ("' . $ps_id_product . '","' . $id_image . '", "1","1");'
                            )->execute();
                } else {

                    $ps_image = Yii::app()->$db->createCommand('
          INSERT INTO `ps_image` (`id_image`, `id_product`, `position`) VALUES (NULL, "' . $ps_id_product . '", "' . $position . '");'
                            )->execute();

                    //get last id_image
                    $sql = 'SELECT id_image FROM ps_image ORDER BY id_image DESC LIMIT 1';
                    $command = Yii::app()->$db->createCommand($sql);
                    $results = $command->queryAll();

                    $id_image = $results[0]['id_image'];

                    $ps_image_lang = Yii::app()->$db->createCommand('
          INSERT INTO `ps_image_lang` (`id_image`, `id_lang`, `legend`) VALUES ("' . $id_image . '", "1", "Pen1");'
                            )->execute();

                    $ps_image_shop = Yii::app()->$db->createCommand('
          INSERT INTO `ps_image_shop` (`id_product`, `id_image`, `id_shop`) VALUES ("' . $ps_id_product . '","' . $id_image . '", "1");'
                            )->execute();
                };

                $this->Log($ps_image, 'ps_image', $ps_id_product);
                $this->Log($ps_image_lang, 'ps_image_lang', $ps_id_product);
                $this->Log($ps_image_shop, 'ps_image_shop', $ps_id_product);

                $position++;
            }
        }
    }

    //
    // zeby sie serwer nie wysypoał trzeba limitowasc iloisc zdjec
    // 
    // 2
    //
    public function actionGenerateImages() {

        $curent_company = AdminCentralStorage::get_central_setting(Yii::app()->user->name, 'curent_company_flow');
        $company_image_counter = AdminCentralStorage::get_central_setting(Yii::app()->user->name, 'company_image_counter');

        if (DEVELOPMENT) {
            if ($curent_company == 'hairacc4you')
                $prestashop_img_home_path = "/var/www/prestashop/img/p/";
            if ($curent_company == 'expertpcx')
                $prestashop_img_home_path = "/var/www/prestashoppcx/img/p/";
        } else {

            if ($curent_company == 'hairacc4you')
                $prestashop_img_home_path = "/home/wolscy/public_html/hairacc4you/img/p/";
            if ($curent_company == 'expertpcx')
                $prestashop_img_home_path = "/home/wolscy/public_html/__________prestashoppcx_______/img/p/";
        }

        if ($curent_company == 'hairacc4you') {
            $seller_userID = 'hairacc4youcom';
            $db = 'db_hair';
        }

        if ($curent_company == 'expertpcx') {
            $seller_userID = 'expertpcx';
            $db = 'db_expert';
        }

        $sql = 'SELECT ps_id_product, pictureURL FROM ebay_item WHERE `ps_id_product` IS NOT NULL AND `seller_userID` = "' . $seller_userID . '" ORDER BY `id` ASC LIMIT ' . $company_image_counter . ', ' . $this->jump;

        $command = Yii::app()->db->createCommand($sql);
        $results = $command->queryAll();
        
//              1 => array
//            (
//                'ps_id_product' => '2179'
//                'pictureURL' => '[]PictureURL##http://i.ebayimg.com/00/s/MTIwMFgxNjAw/$(KGrHqFHJFIE88e5RSipBPdLnSeMyw~~60_1.JPG?set_id=8800005007'
//            )
        $company_image_counter = $company_image_counter + $this->jump;
        AdminCentralStorage::set_central_setting(Yii::app()->user->name, 'company_image_counter', $company_image_counter);

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

            $command = Yii::app()->$db->createCommand($sql);
            $results = $command->queryAll();

            foreach ($results as $ps_image_details) {
                $image_url_array[$ebay_item_details['ps_id_product']]['ps_image_details'][] = $ps_image_details['id_image'];
            }
        }

        //
        // createImage
        //
        foreach ($image_url_array as $image_url_details) {
            foreach ($image_url_details['url'] as $key => $url) {
                $this->createImage($image_url_details['ps_image_details'][$key], $url, $prestashop_img_home_path, $curent_company, $db);
            }
        }
    }

    /**
     * @param type $id_image
     * @param type $picture_url
     * @param type $prestashop_img_home_path
     */
    public function createImage($id_image, $picture_url, $prestashop_img_home_path, $curent_company, $db) {

        $path_chunks = str_split($id_image);

        foreach ($path_chunks as $chunks)
            $path_sufix .= $chunks . '/';

        $path = $prestashop_img_home_path . $path_sufix;

        if (!file_exists($path)) {
            mkdir($path, 0775, true);
        }

        $sql = 'SELECT name, width, height FROM ps_image_type';
        $command = Yii::app()->$db->createCommand($sql);
        $image_value = $command->queryAll();

        //size of images        
        foreach ($image_value as $k => $image) {
            $img_path = $path . $id_image . '-' . $image['name'] . '.jpg';
            var_dump(file_put_contents($img_path, file_get_contents($picture_url)));

            $this->imageSize($img_path, $image['width'], $image['height']);
        }
    }

    function imageSize($img_path, $width, $height) {

        $imagick = new Imagick(realpath($img_path));

        $imagick->scaleImage($width, $height, true);
        $imagick->writeImage($img_path);
    }

    // This method is designed only for expertpcx
    public function processEbayItemDescription($description, $curent_company) {

        if ($curent_company == 'hairacc4you') {
            $description = $description;
        }

        if ($curent_company == 'expertpcx') {

            $description_array = explode('border=&#34;0&#34;></a></noscript></div>', $description);
            $description_array = explode('<font size=&#34;5&#34;><span style=&#34;', $description_array[1]);

            $description = $description_array[0];

            $description = str_replace('<br>', 'MMbrMM', $description);

            $description = Helper::removeAllTags($description);

            $description = str_replace('MMbrMM', '<br>', $description);
        }
        return $description;
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

        return $log;
    }

//    public function actionPic() {
//
//        $home = '/var/www/prestashop/download.jpg';
//        $homea = '/var/www/prestashop/a-download.jpg';
//
//        $imagick = new Imagick(realpath($home));
//        $imagick->scaleImage(150, 150, true);
////        header("Content-Type: image/jpg");
//        $imagick->writeImage($homea);
//    }

    public function actionSetHomeCateg() {

        $sql = 'SELECT * FROM `ps_product` ORDER BY `id_product` DESC LIMIT 60';
        $command = Yii::app()->db1->createCommand($sql);
        $ps_product = $command->queryAll();

        foreach ($ps_product as $key => $item) {
            $values .= '(2, ' . $item['id_product'] . ', ' . $key . '),';
        }

        $values = substr($values, 0, -1);

        $ps_product = Yii::app()->db1->createCommand('
                INSERT INTO `ps_category_product` (`id_category`, `id_product`, `position`) VALUES ' . $values)->execute();
    }

    public function actionSetCateg() {

        // copy existing categ form ps_category
        // set parent ID 2
        // add bellow categores to  ps_category_lang
        //INSERT INTO `ps_category_group` (`id_category`, `id_group`) VALUES ('13', '0'), ('13', '1')
        //INSERT INTO `ps_category_shop` (`id_category`, `id_shop`, `position`) VALUES ('12', '1', '0'), ('13', '1', '0');

        $curent_company = AdminCentralStorage::get_central_setting(Yii::app()->user->name, 'curent_company_flow');

        if ($curent_company == 'hairacc4you') {
            $db = 'db_hair';
            $store_category_array = array(
                22171978012 => 'Hair Bands',
                22171999012 => 'Hair Pins',
                22172000012 => 'Hair Claws',
                22172055012 => 'Hair Clips'
            );

            $ps_category_array = array(
                'Hair Bands' => 12,
                'Hair Pins' => 13,
                'Hair Claws' => 14,
                'Hair Clips' => 15
            );
        }

        if ($curent_company == 'expertpcx') {
            $db = 'db_expert';
            $store_category_array = array(
                2545040013 => 'Laptops',
                2545041013 => "PC's",
                2545042013 => 'Keyboards',
                2545043013 => "HDD's",
                2545044013 => "CPU's",
                2545045013 => 'Memories',
                2545046013 => 'Toners',
                2545047013 => 'Optical Drives',
                2545048013 => 'Cables',
                2545049013 => 'Graphic Cards',
                2545050013 => 'Sound Cards',
                2545051013 => 'LCD Screens',
                2545053013 => 'Power Adapters',
                2545052013 => 'Inverters',
                2545054013 => 'Docking Stations',
                2545055013 => 'Lids / Top Covers',
                2545056013 => 'Palmrests',
                2545057013 => 'Bezels / Trims',
                2545058013 => 'Connectors',
                2545085013 => 'Plastic Bases / Covers',
                2545215013 => 'Heatsinks / Fans',
                2545216013 => 'Speakers',
                2545218013 => "Cameras / WebCam's",
                2545217013 => 'Remote Controls',
                2545219013 => 'Drums',
                2545529013 => 'Power Boards',
                2545530013 => 'Hinge Covers',
                2545531013 => 'Screen Brackets',
                2545532013 => 'Hinge / Power Button Covers',
                2547080013 => 'Mouses',
                2547081013 => 'Hinges',
                2547082013 => 'Doughter Boards',
                2547083013 => 'Front / Facsia Panels',
                2547084013 => 'Ribbons',
                2547519013 => 'Server Parts',
                2547518013 => 'LED / CCFL LCD Screens',
                2547520013 => 'Networking',
                2547521013 => 'Monitors',
                2549898013 => 'Rubbers / Bumpers',
                2549899013 => 'Bluetooths',
                2549900013 => 'Wi-Fi Cards',
                2558238013 => 'Batteries',
                2591359013 => 'Power Supplies',
                2579441013 => 'Rails / LCD Brackets',
                3033087013 => 'TV Tuners / DVB',
                3668323013 => 'Sofware / Driver Disc',
                3593981013 => 'Screws',
                3960350013 => 'LEGO',
                4056792013 => "Caddy's",
                2545219013 => 'Motherboards'
            );

            $ps_category_array = array(
                'Laptops' => 13,
                "PC's" => 14,
                "Keyboards" => 15,
                "HDD's" => 16,
                "CPU's" => 17,
                "Memories" => 18,
                "Toners" => 19,
                "Optical Drives" => 20,
                "Cables" => 21,
                "Graphic Cards" => 22,
                "Sound Cards" => 23,
                "LCD Screens" => 24,
                "Power Adapters" => 25,
                "Inverters" => 26,
                "Docking Stations" => 27,
                "Lids / Top Covers" => 28,
                'Palmrests' => 29,
                'Bezels / Trims' => 30,
                'Connectors' => 31,
                'Plastic Bases / Covers' => 32,
                'Heatsinks / Fans' => 33,
                'Speakers' => 34,
                "Cameras / WebCam's" => 35,
                "Remote Controls" => 36,
                "Drums" => 37,
                "Power Boards" => 38,
                "Hinge Covers" => 39,
                "Screen Brackets" => 40,
                "Hinge / Power Button Covers" => 41,
                "Mouses" => 42,
                "Hinges" => 43,
                "Doughter Boards" => 44,
                "Front / Facsia Panels" => 45,
                'Ribbons' => 46,
                'Server Parts' => 47,
                'LED / CCFL LCD Screens' => 48,
                'Networking' => 49,
                'Monitors' => 50,
                'Rubbers / Bumpers' => 51,
                'Bluetooths' => 52,
                'Wi-Fi Cards' => 53,
                'Batteries' => 54,
                'Power Supplies' => 55,
                'Rails / LCD Brackets' => 56,
                'TV Tuners / DVB' => 57,
                'Sofware / Driver Disc' => 58,
                'Screws' => 59,
                'LEGO' => 60,
                "Caddy's" => 61,
                "Motherboards" => 62
            );
        }

        $sql = 'SELECT * FROM `ebay_item`';
        $command = Yii::app()->db->createCommand($sql);
        $ebay_item = $command->queryAll();

        foreach ($ebay_item as $item) {
            
            if ($store_category_array[$item['storeCategoryID']] == NULL)
                continue;

            $values = '(' . $ps_category_array[$store_category_array[$item['storeCategoryID']]] . ' ,' . $item['ps_id_product'] . ', 1)';

            d::d( $values);

// ID - 2389 ZWRACA NULL

            if($item['ps_id_product']!= NULL){
            $ps_product = Yii::app()->$db->createCommand('
                INSERT INTO `ps_category_product` (`id_category`, `id_product`, `position`) VALUES ' . $values)->execute();
            }
            d::d($ps_product);
        }
    }

    public function actionReStartGenerateImages() {

        $curent_company = AdminCentralStorage::get_central_setting(Yii::app()->user->name, 'curent_company_flow');
        if ($curent_company == 'hairacc4you')
            $seller_userID = 'hairacc4youcom';
        if ($curent_company == 'expertpcx')
            $seller_userID = 'expertpcx';

        AdminCentralStorage::set_central_setting(Yii::app()->user->name, 'company_image_counter', 1);

        header("Location: http://www.engine.dev/");
    }

}
