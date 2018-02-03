<?php

/*
 * //        file_put_contents("/var/www/engine/shop.xhtml", "\n" . $response, FILE_APPEND);
 */

class Api_call extends CComponent {

    /**
     * @param type $apiKey
     * @param type $call_name
     * 
     * @return string
     */
    public function apiHeaders($apiKey, $call_name) {
        // Create headers to send with CURL request.
        $headers = array(
            'X-EBAY-API-COMPATIBILITY-LEVEL: ' . $apiKey['compatabilityLevel'],
            'X-EBAY-API-DEV-NAME: ' . $apiKey['devID'],
            'X-EBAY-API-APP-NAME: ' . $apiKey['appID'],
            'X-EBAY-API-CERT-NAME: ' . $apiKey['certID'],
            'X-EBAY-API-CALL-NAME: ' . $call_name,
            'X-EBAY-API-SITEID: ' . $apiKey['siteID']);

        return $headers;
    }

    /**
     * @param type $auth_token
     * @param type $itemID
     * 
     * @return string
     */
    public function getItem($auth_token, $itemID) {
        // Generate XML request
        $xml_request = "<?xml version=\"1.0\" encoding=\"utf-8\" ?>
                <GetItemRequest xmlns=\"urn:ebay:apis:eBLBaseComponents\">
                <RequesterCredentials>
                <eBayAuthToken>" . $auth_token . "</eBayAuthToken>
                </RequesterCredentials>
                <DetailLevel>ReturnAll</DetailLevel>
                <IncludeItemSpecifics>true</IncludeItemSpecifics>
                <IncludeWatchCount>true</IncludeWatchCount>
                <ItemID>" . $itemID . "</ItemID>
                </GetItemRequest>";

        return $xml_request;
    }

    /**
     * @param type $headers
     * @param type $xml_request
     * @param type $serverUrl
     * 
     * @return type
     */
    public function ebayApiCall($headers, $xml_request, $serverUrl) {

        $connection = curl_init();
        curl_setopt($connection, CURLOPT_URL, $serverUrl);
        curl_setopt($connection, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($connection, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($connection, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($connection, CURLOPT_POST, 1);
        curl_setopt($connection, CURLOPT_POSTFIELDS, $xml_request);
        curl_setopt($connection, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($connection);
        curl_close($connection);

        $dom = new DOMDocument();
        $dom->loadXML($response);

        return $response;
    }

}
