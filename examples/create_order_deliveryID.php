<?php
require __DIR__.'/_init.php';

use VHLEurope\VHLCarrier\Client;

$apikey = "4syR7gyCmLF17bdVsswx2sa2bZlDuo1hffLc6N3ktobvJyEb1H";

$client = new VHLEurope\VHLCarrier\Client($apikey);

$carrierID = 14; 

$shipment = [
    "CompanyName" => "Example Company",
    "County" => "Central Bohemia",
    "CountryCode" => "CZ",
    "City" => "Prague",
    "Street" => "Main Street",
    "StreetNumber" => "123",
    "ZipCode" => "11000",
    "ContactName" => "John Doe",
    "Phone" => "+420123456789",
    "Email" => "johndoe@example.com",
    "Parcels" => 1,
    "Weight" => 5,
    "Value" => 1000,
    "InsuranceAmount" => 500,
    "CodValue" => 0,
    "VariableSymbol" => "202312345",
    "Note" => "Handle with care",
    "DeliveryPointID" => "KM10276701" 
];

$response = $client->createOrder($shipment,$carrierID);

print_r($response);

/*

Array
(
    [status] => success
    [trackingNumbers] => Array
        (
            [0] => 40856071177
        )

    [trackingNumbersWithLinks] => Array
        (
            [0] => Array
                (
                    [trackingNumber] => 40856071177
                    [trackingLink] => https://www.ppl.cz/vyhledat-zasilku?shipmentId=40856071177
                )

        )

    [requestID] => d2929900-4bdb-41cd-84a6-60ab0457f2e1
)

*/