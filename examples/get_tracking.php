<?php
require __DIR__.'/_init.php';

use VHLEurope\VHLCarrier\Client;

$apikey = "4syR7gyCmLF17bdVsswx2sa2bZlDuo1hffLc6N3ktobvJyEb1H";

$client = new VHLEurope\VHLCarrier\Client($apikey);

$carrierID = 14;

$response = $client->getTracking("6419850003200000136090",$carrierID);

print_r($response);

/*

stdClass Object
(
    [trackingNumber] => 6419850003200000136090
    [history] => Array
        (
            [0] => stdClass Object
                (
                    [date] => 2023-11-08T13:08:00+01:00
                    [status] => DELIVERED
                    [is_final] => 1
                    [success] => 1
                )

            [1] => stdClass Object
                (
                    [date] => 2023-11-08T08:04:00+01:00
                    [status] => IN_DELIVERY
                    [is_final] => 
                    [success] => 
                )

            [2] => stdClass Object
                (
                    [date] => 2023-11-08T01:03:37+01:00
                    [status] => IN_TRANSIT
                    [is_final] => 
                    [success] => 
                )

            [3] => stdClass Object
                (
                    [date] => 2023-11-08T01:02:48+01:00
                    [status] => CARRIER_PICKUP
                    [is_final] => 
                    [success] => 
                )

            [4] => stdClass Object
                (
                    [date] => 2023-11-07T16:54:01+01:00
                    [status] => PICKUP_SIGNED
                    [is_final] => 
                    [success] => 
                )

            [5] => stdClass Object
                (
                    [date] => 2023-11-07T16:52:04+01:00
                    [status] => CLIENT_PICKUP
                    [is_final] => 
                    [success] => 
                )

        )

    [history_original] => Array
        (
            [0] => stdClass Object
                (
                    [date] => 2023-11-08T13:08:00+01:00
                    [status] => Sikeres kézbesítés
                )

            [1] => stdClass Object
                (
                    [date] => 2023-11-08T08:04:00+01:00
                    [status] => Kiadva futárnak
                )

            [2] => stdClass Object
                (
                    [date] => 2023-11-08T06:27:57+01:00
                    [status] => Depóba érkezett
                )

            [3] => stdClass Object
                (
                    [date] => 2023-11-08T01:04:00+01:00
                    [status] => Adat bekerült a rendszerbe
                )

            [4] => stdClass Object
                (
                    [date] => 2023-11-08T01:03:37+01:00
                    [status] => Központi raktárat elhagyta
                )

            [5] => stdClass Object
                (
                    [date] => 2023-11-08T01:02:48+01:00
                    [status] => Központi raktárba érkezett
                )

        )

    [status] => success
    [requestID] => 5dff1bf3-6928-4035-b134-ae31452fcda9
)
    
*/