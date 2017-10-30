<?php

/**
 * This is the model class for table "my_ebay_selling".
 *
 * The followings are the available columns in table 'my_ebay_selling':
 * @property integer $id
 * @property double $buyItNowPrice
 * @property string $itemID
 * @property string $startTime
 * @property string $viewItemURL
 * @property string $viewItemURLForNaturalSearch
 * @property string $listingDuration
 * @property string $listingType
 * @property integer $quantity
 * @property double $currentPrice
 * @property double $shippingServiceCost
 * @property string $shippingType
 * @property string $timeLeft
 * @property string $title
 * @property integer $watchCount
 * @property integer $quantityAvailable
 * @property string $galleryURL
 * @property double $classifiedAdPayPerLeadFee
 * @property string $shippingProfileID
 * @property string $shippingProfileName
 * @property string $returnProfileID
 * @property string $returnProfileName
 * @property string $paymentProfileID
 * @property string $paymentProfileName
 */
class MyEbaySelling extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'my_ebay_selling';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('quantity, watchCount, quantityAvailable', 'numerical', 'integerOnly' => true),
            array('buyItNowPrice, currentPrice, shippingServiceCost, classifiedAdPayPerLeadFee', 'numerical'),
            array('itemID, startTime, listingDuration, listingType, shippingProfileID, returnProfileID, paymentProfileID', 'length', 'max' => 128),
            array('viewItemURL, viewItemURLForNaturalSearch, galleryURL', 'length', 'max' => 2048),
            array('shippingType, timeLeft', 'length', 'max' => 32),
            array('title, shippingProfileName, returnProfileName, paymentProfileName', 'length', 'max' => 255),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, buyItNowPrice, itemID, startTime, viewItemURL, viewItemURLForNaturalSearch, listingDuration, listingType, quantity, currentPrice, shippingServiceCost, shippingType, timeLeft, title, watchCount, quantityAvailable, galleryURL, classifiedAdPayPerLeadFee, shippingProfileID, shippingProfileName, returnProfileID, returnProfileName, paymentProfileID, paymentProfileName', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'buyItNowPrice' => 'Buy It Now Price',
            'itemID' => 'Item',
            'startTime' => 'Start Time',
            'viewItemURL' => 'View Item Url',
            'viewItemURLForNaturalSearch' => 'View Item Urlfor Natural Search',
            'listingDuration' => 'Listing Duration',
            'listingType' => 'Listing Type',
            'quantity' => 'Quantity',
            'currentPrice' => 'Current Price',
            'shippingServiceCost' => 'Shipping Service Cost',
            'shippingType' => 'Shipping Type',
            'timeLeft' => 'Time Left',
            'title' => 'Title',
            'watchCount' => 'Watch Count',
            'quantityAvailable' => 'Quantity Available',
            'galleryURL' => 'Gallery Url',
            'classifiedAdPayPerLeadFee' => 'Classified Ad Pay Per Lead Fee',
            'shippingProfileID' => 'Shipping Profile',
            'shippingProfileName' => 'Shipping Profile Name',
            'returnProfileID' => 'Return Profile',
            'returnProfileName' => 'Return Profile Name',
            'paymentProfileID' => 'Payment Profile',
            'paymentProfileName' => 'Payment Profile Name',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('buyItNowPrice', $this->buyItNowPrice);
        $criteria->compare('itemID', $this->itemID, true);
        $criteria->compare('startTime', $this->startTime, true);
        $criteria->compare('viewItemURL', $this->viewItemURL, true);
        $criteria->compare('viewItemURLForNaturalSearch', $this->viewItemURLForNaturalSearch, true);
        $criteria->compare('listingDuration', $this->listingDuration, true);
        $criteria->compare('listingType', $this->listingType, true);
        $criteria->compare('quantity', $this->quantity);
        $criteria->compare('currentPrice', $this->currentPrice);
        $criteria->compare('shippingServiceCost', $this->shippingServiceCost);
        $criteria->compare('shippingType', $this->shippingType, true);
        $criteria->compare('timeLeft', $this->timeLeft, true);
        $criteria->compare('title', $this->title, true);
        $criteria->compare('watchCount', $this->watchCount);
        $criteria->compare('quantityAvailable', $this->quantityAvailable);
        $criteria->compare('galleryURL', $this->galleryURL, true);
        $criteria->compare('classifiedAdPayPerLeadFee', $this->classifiedAdPayPerLeadFee);
        $criteria->compare('shippingProfileID', $this->shippingProfileID, true);
        $criteria->compare('shippingProfileName', $this->shippingProfileName, true);
        $criteria->compare('returnProfileID', $this->returnProfileID, true);
        $criteria->compare('returnProfileName', $this->returnProfileName, true);
        $criteria->compare('paymentProfileID', $this->paymentProfileID, true);
        $criteria->compare('paymentProfileName', $this->paymentProfileName, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return MyEbaySelling the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * From: ISO yyyy-MM-dd'T'HH:mm:ss.SSS'Z'
     * To: Y-m-d H:i:s
     * @param type $time
     */
    public function convertStartTime($time) {
        $this->startTime = date("Y-m-d H:i:s", strtotime($time));
    }

}
