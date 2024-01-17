<?php
require __DIR__.'/_init.php';

use VHLEurope\VHLCarrier\Client;

$apikey = "4syR7gyCmLF17bdVsswx2sa2bZlDuo1hffLc6N3ktobvJyEb1H";

$client = new VHLEurope\VHLCarrier\Client($apikey);

$response = $client->getAllowedCarriers();

print_r($response);

/*

Array
(
    [status] => success
    [carriers] => Array
        (
            [0] => Array
                (
                    [carrierID] => 1
                    [name] => Urgent Cargus
                )

            [1] => Array
                (
                    [carrierID] => 2
                    [name] => GLS Hungary
                )

            [2] => Array
                (
                    [carrierID] => 3
                    [name] => FanCourier
                )

            [3] => Array
                (
                    [carrierID] => 7
                    [name] => Express One
                )

            [4] => Array
                (
                    [carrierID] => 11
                    [name] => InPost
                )

            [5] => Array
                (
                    [carrierID] => 14
                    [name] => PPL
                )

        )

    [requestID] => 5dff1bf3-6928-4035-b134-ae31452fcda9
)
    
*/