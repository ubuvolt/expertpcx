<?php

class EbayTrackingController extends Controller {

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
                    'index',
                    'view',
                    'dialogBoxTraking',
                    'getEbayTrackingDetails'
                ),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array(
                    'admin',
                    'delete',
                    'ebayTrackingView',
                    'dialogBoxTraking'
                ),
                'users' => array('admin', 'piotr', 'bartek'),
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
        $model = new EbayTracking;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['EbayTracking'])) {
            $model->attributes = $_POST['EbayTracking'];
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

        if (isset($_POST['EbayTracking'])) {
            $model->attributes = $_POST['EbayTracking'];
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
        $dataProvider = new CActiveDataProvider('EbayTracking');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new EbayTracking('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['EbayTracking']))
            $model->attributes = $_GET['EbayTracking'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return EbayTracking the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = EbayTracking::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param EbayTracking $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'ebay-tracking-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionEbayTrackingView() {

        $this->render('trackingView', array(
            'ebay_tracking' => $this->getEbayTracking(),
        ));
    }

    public function getEbayTracking() {
        $sql = "
            SELECT
                id,
                ebay_item_id,
                modified,
                flow,
                referral_ebay_item_id,
                price,
                log
            
            FROM 
                ebay_tracking
                
            WHERE 
                flow = 1;";

        $command = Yii::app()->db->createCommand($sql);
        return $command->queryAll();
    }

    public function actionGetEbayTrackingDetails() {

        $ebay_main_item_id = $_GET['ebay_item_id'];


        $sql = "
            SELECT
                    price.id,
                    price.ebayItemID,
                    price.price,
                    price.modified,
                    tracking.flow,
                    tracking.log

            FROM ebay_traking_price AS price
            
            JOIN ebay_tracking AS tracking ON tracking.ebay_item_id = price.ebayItemID

            WHERE  price.ebayItemID = " . $ebay_main_item_id;


        $command = Yii::app()->db->createCommand($sql);
        $results = $command->queryAll();

        $this->render('trackingViewItem', array(
            'ebay_main_item_id' => $ebay_main_item_id,
            'tracking_view_item' => $results,
        ));
    }

//    public function getTrackingViewEbayTrakingPrice() {
//        $sql = "
//            SELECT
//                    price.id,
//                    price.ebayItemID,
//                    price.price,
//                    price.modified,
//                    tracking.flow,
//                    tracking.log
//
//            FROM ebay_traking_price AS price
//            
//            JOIN ebay_tracking AS tracking ON tracking.ebay_item_id = price.ebayItemID
//
//            ORDER BY id, modified";
//
//
//        $command = Yii::app()->db->createCommand($sql);
//        $results = $command->queryAll();
//
//        // grouping by ebayItemID
//        $ebay_item_id_array = array();
//        foreach ($results as $ebayItem)
//            $ebay_item_id_array[$ebayItem['ebayItemID']] = $ebayItem['ebayItemID'];
//
//
//        foreach ($ebay_item_id_array as $ebay_item_id) {
//            foreach ($results as $ebayItem) {
//
//                if ($ebay_item_id == $ebayItem['ebayItemID']) {
//                    $ebay_traking_price[$ebayItem['ebayItemID']][] = $ebayItem;
//                }
//            }
//        }
//
////        return $ebay_traking_price;
//    }
//    public function getTrackingViewEbayTrakingStore() {
//        $sql = "
//            SELECT
//                    store.id,
//                    store.ebayItemID,
//                    store.store,
//                    store.modified,
//                    tracking.flow,
//                    tracking.log
//
//            FROM ebay_traking_store AS store
//            
//            JOIN ebay_tracking AS tracking ON tracking.ebay_item_id = store.ebayItemID
//
//            ORDER BY id, modified";
//        $command = Yii::app()->db->createCommand($sql);
//        $results = $command->queryAll();
//
//        // grouping by ebayItemID
//        $ebay_item_id_array = array();
//        foreach ($results as $ebayItem)
//            $ebay_item_id_array[$ebayItem['ebayItemID']] = $ebayItem['ebayItemID'];
//
//
//        foreach ($ebay_item_id_array as $ebay_item_id) {
//            foreach ($results as $ebayItem) {
//
//                if ($ebay_item_id == $ebayItem['ebayItemID']) {
//                    $ebay_traking_store[$ebayItem['ebayItemID']][] = $ebayItem;
//                }
//            }
//        }
//
//        return $ebay_traking_store;
//    }

    public function actionDialogBoxTraking() {

//        $_POST['eBayItemId']
        $product_detail = array(
            'itemID' => '182819103840',
            'categoryName' => 'Hair Band',
            'conditionDisplayName' => 'New with tags',
            'quantity' => '5',
            'buyIstNowPrice' => '7.45',
            'pictureURL' => 'https://i.ebayimg.com/images/g/vmoAAOSwxeBZurkw/s-l500.jpg',
            'title' => 'Little Colorful Shining Red Blue Crystal Elastic Hair Bands Headbands - Reddish',
            'description' => 'Little Colorful Shining Red Blue Crystal Elastic Hair Bands Headbands for Girls Headwear Hair Accessories for Women - Reddish <br>
                            Material: Crystal Rhinestone <br>             
                            SurfaceTreatment: None <br>   
                            Color: As The Picture.<br>
                            Weight and Size: About 11g.<br>',
        );

        $this->renderPartial('dialog_box_traking', array(
            'product_detail' => $product_detail,
                ), false);
    }

}
