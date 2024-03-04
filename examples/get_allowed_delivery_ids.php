<?php
require __DIR__.'/_init.php';

use VHLEurope\VHLCarrier\Client;

$apikey = "4syR7gyCmLF17bdVsswx2sa2bZlDuo1hffLc6N3ktobvJyEb1H";

$client = new VHLEurope\VHLCarrier\Client($apikey);

$response = $client->getAllowedDeliveryIDs(7);

print_r($response);

/*

Array
(
    [status] => success
    [points] => Array
        (
            [0] => Array
                (
                    [deliveryID] => 30001
                    [lat] => 47.428497
                    [lon] => 19.069677
                    [name] => AlzaBox - Budapest XXI - Csepel (Penny)
                    [note] => 
                    [hours] => Hétfő: 00:00-23:59<br>Kedd: 00:00-23:59<br>Szerda: 00:00-23:59<br>Csütörtök: 00:00-23:59<br>Péntek: 00:00-23:59<br>Szombat: 00:00-23:59<br>Vasárnap: 00:00-23:59
                    [street] => Kossuth Lajos u. 69
                    [city] => Budapest
                    [country] => HU
                    [zipcode] => 1212
                    [delivery_method] => 
                    [image] => 
                    [active] => 0
                )

        )

    [requestID] => d11c6bf6-079a-4d1e-9bfc-694e4749dfda
)
*/
