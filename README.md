# VHL Carrier Connector

This is a PHP shipping connector class that provides methods for interacting with shipping carriers.

## Installation

To use this shipping connector, you need to have PHP installed. You can install the shipping connector by following these steps:

1. Clone the repository: `git clone https://github.com/VHL-Europe/vhlcarrier.git`
2. Include the shipping connector class in your PHP project.

or you can require the package via composer
```bash
composer require vhl-europe/vhlcarrier
```

## Usage

First you need to load connector using: 
```php
use VHLEurope\VHLCarrier\Client;
$apikey = "your api key";
$client = new VHLEurope\VHLCarrier\Client($apikey);
```
Afterwars you can use one of the following methods:

### 1. `getAllowedCarriers()`

This method returns a list of allowed carriers for shipping. See example in examples/get_allowed_carriers.php

### 2. `createOrder()`

This method creates shipping order / awb / package and returns tracking number. See example in examples/create_order.php

### 3. `getLabel()`

This method returns shipping label for package in pdf format. See example in examples/get_label.php

### 4. `getTracking()`

This method returns tracking history for package. See example in examples/get_tracking.php

### 4. `getDeliveryIDs()`

This method returns pickup location for selected carrier. See example in examples/get_delivery_ids.php
