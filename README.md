# Laravel Pinata
#### Laravel Package to Integrate Pinata API

This package will make PHP able to integrate with https://www.pinata.cloud/

## Features

- Test authentication
- Pinnning File or Directory
- Pin JSON
- Pin by CID
- List Pin
- Update Metadata
- Remove Pin

## Installation

Install the package in your Laravel Project.

```sh
composer require antikode/pinata-cloud
```

## Usage

#### Publish configuration :
Before initializing the package, make sure you have publish the configuration file by typing the code below.
```sh
php artisan vendor:publish --tag=pinata-config
```

#### Environment:
You need to define the API at your .env file.
```env
PINATA_API_KEY=[pinata api key]
PINATA_API_SECRET=[pinata secret key]
PINATA_JWT=[pinata jwt]
```

#### Pinning Metadata (JSON):
Pinning metadata or JSON file to Pinata
```php
$metadata = [
    'id' => 1,
    'uuid' => 'd19a449c-ba3d-435b-b8d3-4abb6fee6a69',
    'filename' => '1.jpg',
    'name' => 'Mindblowon #1',
    'description' => ''
];
$keyVal = [
    'key' => 'value'
];
$pinata = Pinata::init();
return $pinata->pinJson('Mindblowon #1', $keyVal, $metadata);
```
