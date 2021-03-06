<?php

/**
 * This is the model class for table "ebay_tracking".
 *
 * The followings are the available columns in table 'ebay_tracking':
 * @property integer $id
 * @property string $ebay_item_id
 * @property string $modified
 * @property integer $flow
 * @property string $referral_ebay_item_id
 * @property double $price
 * @property string $log
 */
class EbayTracking extends CActiveRecord {

    const OUR_ITEM = 1;
    const COMPETITOR_ITEM = 2;
    
    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'ebay_tracking';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('modified', 'required'),
            array('flow', 'numerical', 'integerOnly' => true),
            array('price', 'numerical'),
            array('ebay_item_id, referral_ebay_item_id', 'length', 'max' => 64),
            array('log', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, ebay_item_id, modified, flow, referral_ebay_item_id, price, log', 'safe', 'on' => 'search'),
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
            'ebay_item_id' => 'Ebay Item',
            'modified' => 'Modified',
            'flow' => 'Flow',
            'referral_ebay_item_id' => 'Referral Ebay Item',
            'price' => 'Price',
            'log' => 'Log',
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
        $criteria->compare('ebay_item_id', $this->ebay_item_id, true);
        $criteria->compare('modified', $this->modified, true);
        $criteria->compare('flow', $this->flow);
        $criteria->compare('referral_ebay_item_id', $this->referral_ebay_item_id, true);
        $criteria->compare('price', $this->price);
        $criteria->compare('log', $this->log, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return EbayTracking the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function setFlow($flow) {
        if ($flow == 'my')
            return 1;
        if ($flow == 'track')
            return 2;
    }

}
