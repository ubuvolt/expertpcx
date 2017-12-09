<?php

/**
 */
class AdminCentralStorage extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'admin_central_storage';
    }

    /**
     * @param type $user_id
     * @param type $key
     * 
     * @return type
     */
    public static function get_central_setting($user_name, $key) {

        $user_id = AdminCentralStorage::get_user_id_by_name($user_name);

        $sql = "
            SELECT
            Value
            FROM admin_central_storage
            WHERE User_ID = ".$user_id."
            AND Name = '" . $key . "'
            LIMIT 0, 1;
        ";

        $command = Yii::app()->db->createCommand($sql);
        $results = $command->queryAll();

        $value = unserialize($results[0]['Value']);

        return $value;
    }

    /**
     * @param type $user_id
     * @param type $key
     * @param type $value
     */
    public static function set_central_setting($user_name, $key, $value) {

        $user_id = AdminCentralStorage::get_user_id_by_name($user_name);

        $sql = "
            DELETE FROM admin_central_storage
            WHERE User_ID = " . $user_id . "
            AND Name = '" . $key . "'
            LIMIT 1;
        ";
        Yii::app()->db->createCommand($sql)->query();

        $sql = "
            INSERT INTO admin_central_storage
            (
                User_ID,
                Name,
                Value
            ) VALUES (
                " . $user_id . " , '" . $key . "' , '" . serialize($value) . "'
            )
        ";

        Yii::app()->db->createCommand($sql)->query();
    }

    /**
     * OK
     * @param type $user_name
     * 
     * @return int
     */
    public static function get_user_id_by_name($user_name) {

        $user_id = 0;

        switch ($user_name) {
            case 'hairacc':
                $user_id = 2;
                break;
            case 'piotr':
                $user_id = 4;
                break;
            case 'admin':
                $user_id = 1;
                break;
        }
        
        return $user_id;
    }

}
