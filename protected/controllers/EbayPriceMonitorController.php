<?php

class EbayPriceMonitorController extends Controller {

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
                'actions' => array('index', 'view', 'performeItemTracking'),
                'users' => array('bartek', 'piotr'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update', 'performeItemTracking'),
                'users' => array('bartek', 'piotr'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete', 'performeItemTracking'),
                'users' => array('bartek', 'piotr'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new EbayPriceMonitor;

// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);

        if (isset($_POST['EbayPriceMonitor'])) {
            $model->attributes = $_POST['EbayPriceMonitor'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);

        if (isset($_POST['EbayPriceMonitor'])) {
            $model->attributes = $_POST['EbayPriceMonitor'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('EbayPriceMonitor');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new EbayPriceMonitor('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['EbayPriceMonitor']))
            $model->attributes = $_GET['EbayPriceMonitor'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return EbayPriceMonitor the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = EbayPriceMonitor::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param EbayPriceMonitor $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'ebay-price-monitor-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

///
///
///
    public function actionPerformeItemTracking() {
        $ebay_price_tracking_array = $this->getEbayPriceTracking(0);

        $ebay_api = new Ebay_api();
        $apiKey = $ebay_api->getApiKey();

        $api_call = new Api_call();
        $headers = $api_call->apiHeaders($apiKey, 'GetItem');

        foreach ($ebay_price_tracking_array as $ebay_product_id => $product_details) {

            sleep(0.5);

            $xml_request = $api_call->getItem($apiKey['appToken'], $ebay_product_id);
            $response = $api_call->ebayApiCall($headers, $xml_request, $apiKey['serverUrl']);

            $dom = new DOMDocument();
            $dom->loadXML($response);

            $ebay_item_price = (float) $this->ebayItemPrice($dom);
            $ebay_item_qty = (int) $dom->getElementsByTagName('Quantity')->item(0)->nodeValue;

            //
            // save data
            $this->saveEbayTrackingPrice($ebay_product_id, $ebay_item_price);
            $this->processEbayTrackingStore($ebay_product_id, $ebay_item_qty);
        }
    }

    private function ebayItemPrice($dom) {
        $converted_start_price = $dom->getElementsByTagName('ConvertedStartPrice')->item(0)->nodeValue;
        if ($converted_start_price)
            return $converted_start_price;

        $current_price = $dom->getElementsByTagName('CurrentPrice')->item(0)->nodeValue;
        if ($current_price)
            return $current_price;

        $converted_current_price = $dom->getElementsByTagName('ConvertedCurrentPrice')->item(0)->nodeValue;
        if ($converted_current_price)
            return;
    }

    private function getEbayPriceTracking($limit = 0) {
        /*
         * TO DO:
         * 
         * optymalizacja pobranie naszych produktow i odpowiadajacych im 
         * produktow z konkurencji mozna zrobic za pomocom jednego zapytania SQL
         * 
         */

// get all our items referral_ebay_item_id = 1
        $criteria = new CDbCriteria();
        $criteria->condition = 'flow = ' . EbayPriceTracking::OUR_ITEM;
        if ($limit > 0)
            $criteria->limit = $limit;

        $our_EbayPriceTracking = EbayPriceTracking::model()->findAll($criteria);

// create php for our_item array to use 
        $our_item_array = array();
        foreach ($our_EbayPriceTracking as $our_item) {
            $our_item_array[$our_item->ebay_item_id]['level'] = 'parent';
            $our_item_array[$our_item->ebay_item_id]['id'] = $our_item->id;
            $our_item_array[$our_item->ebay_item_id]['ebay_item_id'] = $our_item->ebay_item_id;
            $our_item_array[$our_item->ebay_item_id]['modified'] = $our_item->modified;
            $our_item_array[$our_item->ebay_item_id]['flow'] = $our_item->flow;
            $our_item_array[$our_item->ebay_item_id]['referral_ebay_item_id'] = $our_item->referral_ebay_item_id;
            $our_item_array[$our_item->ebay_item_id]['price'] = $our_item->price;
            $our_item_array[$our_item->ebay_item_id]['log'] = $our_item->log;
        }

// based on ours items we collect corresponding items our competition
        $ebay_price_tracking_array = array();
        foreach ($our_item_array as $our_ebay_item_id => $details) {

// get all our items referral_ebay_item_id = 1
            $criteria = new CDbCriteria();
            $criteria->condition = 'flow = ' . EbayPriceTracking::COMPETITOR_ITEM . ' AND referral_ebay_item_id = ' . $our_ebay_item_id;
            $competitor_EbayPriceTracking = EbayPriceTracking::model()->findAll($criteria);
//
            $ebay_price_tracking_array[$our_ebay_item_id] = $our_item_array[$our_ebay_item_id];

// create php for competitor_item array to use 
            foreach ($competitor_EbayPriceTracking as $competitor_item) {
                $ebay_price_tracking_array[$competitor_item->ebay_item_id]['level'] = 'child';
                $ebay_price_tracking_array[$competitor_item->ebay_item_id]['id'] = $competitor_item->id;
                $ebay_price_tracking_array[$competitor_item->ebay_item_id]['ebay_item_id'] = $competitor_item->ebay_item_id;
                $ebay_price_tracking_array[$competitor_item->ebay_item_id]['modified'] = $competitor_item->modified;
                $ebay_price_tracking_array[$competitor_item->ebay_item_id]['flow'] = $competitor_item->flow;
                $ebay_price_tracking_array[$competitor_item->ebay_item_id]['referral_ebay_item_id'] = $competitor_item->referral_ebay_item_id;
                $ebay_price_tracking_array[$competitor_item->ebay_item_id]['price'] = $competitor_item->price;
                $ebay_price_tracking_array[$competitor_item->ebay_item_id]['log'] = $competitor_item->log;
            }
        }
        return $ebay_price_tracking_array;
    }

    public function saveEbayTrackingPrice($ebay_item_id, $ebay_item_price) {

        $ebayTrakingPrice = new EbayTrakingPrice();
        $ebayTrakingPrice->ebayItemID = $ebay_item_id;
        $ebayTrakingPrice->price = $ebay_item_price;
        $ebayTrakingPrice->modified = date('Y-m-d H:i:s');
        $ebayTrakingPrice->save();
    }

    public function processEbayTrackingStore($ebay_item_id, $ebay_item_qty) {

        $ebayTrakingPrice = new EbayTrakingStore();
        $ebayTrakingPrice->ebayItemID = $ebay_item_id;
        $ebayTrakingPrice->store = $ebay_item_qty;
        $ebayTrakingPrice->modified = date('Y-m-d H:i:s');
        $ebayTrakingPrice->save();
    }

}
