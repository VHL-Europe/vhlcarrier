<?php
require __DIR__.'/_init.php';

use VHLEurope\VHLCarrier\Client;

$apikey = "4syR7gyCmLF17bdVsswx2sa2bZlDuo1hffLc6N3ktobvJyEb1H";

$client = new VHLEurope\VHLCarrier\Client($apikey);

$carrierID = 14; 

$data = [
    "trackingNumber"=>"40856071172"
];

$response = $client->getLabel($data,$carrierID);

print_r($response);

/*

retrun is base 64 encoded pdf file

*/