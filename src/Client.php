<?php 

namespace VHLEurope\VHLCarrier;

class Client {
    private $apikey;
    private $url = "https://ship.vhleurope.com/api/";

    public function __construct($apikey) {
        $this->apikey = $apikey;
    }

    public function getAllowedCarriers() { 
        return json_decode($this->callApi("get-allowed-carriers"), true);
    }

    public function getAllowedDeliveryIDs($id) { 
        return json_decode($this->callApi("get-delivery-ids/".$id), true);
    }

    public function createOrder($data = [], $carrierID) {
        return json_decode($this->callApi("create-order/".$carrierID, $data, 'POST'), true);
    }

    public function getLabel($data = [], $carrierID) {
        return $this->callApi("get-label/".$carrierID, $data, 'POST');
    }

    public function getTracking($trackingNumber, $carrierID) {
        $data = [
            "trackingNumber" => $trackingNumber
        ];
        return $this->callApi("get-tracking/".$carrierID, $data, 'POST');
    }

    private function callApi($endpoint, $data = [], $method = 'GET') {
        // Initialize cURL session
        $ch = curl_init();

        $url = $this->url.$endpoint;

        // Setup for POST request
        if ($method == 'POST') {
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        } else {
            // Append query string for GET request
            $url = sprintf("%s?%s", $url, http_build_query($data));
        }
      
        // Common cURL settings
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($ch, CURLOPT_HTTPHEADER , array(
            'apikey: '.$this->apikey
            )
        );

        // Execute cURL session
        $response = curl_exec($ch);
        curl_close($ch); 
        // Decode and return response
        return $response;
    }

}
