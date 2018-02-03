<?php

/**
 * Collection of various utility functions that do not fit anywhere else 
 * 
  //        $file = "/var/www/engine/processeBaySelling.xhtml";
  //
  //        $f = @fopen($file, "r+");
  //        if ($f !== false) {
  //            ftruncate($f, 0);
  //            fclose($f);
  //        }
  //        file_put_contents($file, "\n" . $xml, FILE_APPEND);
 * 
 */
class Helper extends CComponent {

    /**
     * @param type $type
     * @return type
     */
    static function TimeStamp($type = "compact") {
        switch ($type) {
            case "compact":
                $timestamp = date("YmdHis");
                break;
            case "formatted":
                $timestamp = date("Y-m-d H:i:s");
                break;
        }
        return $timestamp;
    }

    /**
     * @param type $field_name
     * @param type $old_value
     * @param type $new_value
     * @param type $curent_company
     */
    static function LogEbayItem($itemID, $field_name, $old_value, $new_value, $curent_company) {

        $log = new LogEbayItem();

        $log->data_time = self::TimeStamp('formatted');
        $log->itemID = $itemID;
        $log->field_name = $field_name;
        $log->old_value = $old_value;
        $log->new_value = $new_value;
        $log->status = LogEbayItem::Ready_For_Update;
        $log->shopName = $curent_company;

        $log->save();
    }

    /**
     * @param type $value
     * @param type $format
     * @return type
     */
    static function NumberFormat($value, $format = 'two_decimals') {
        $formatted_value = '';
        switch ($format) {
            case 'two_decimals':
                $formatted_value = number_format($value, 2, '.', ',');
                break;
            case 'no_decimals':
                $formatted_value = number_format($value, 0, '.', ',');
                break;
            case 'k':
                $formatted_value = round($value / 1000);
                break;
            case 'm':
                $formatted_value = round($value / 1000000, 2);
                break;
            case 'kk':
                $formatted_value = round($value / 1000, 2);
                break;
        }
        return $formatted_value;
    }

    /**
     * From: ISO yyyy-MM-dd'T'HH:mm:ss.SSS'Z'
     * To: Y-m-d H:i:s
     * @param type $time
     */
    public function convertStartTime($time) {
        return date("Y-m-d H:i:s", strtotime($time));
    }
    
    /*
     * Removes all tags from given string
     */
    function removeAllTags($string) { 
        $string = preg_replace('/<[^<]+?>/', ' ', $string);
        return $string;
    }
    
}
