# Laravel Pinata
#### Laravel Package to Integrate Pinata API

This package will make PHP able to integrate with https://www.pinata.cloud/

## Features

- Test authentication
- Pinnning File or Directory
- Pin JSON
- Pin by CID
- List Pin By CID Jobs
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
This function allows the sender to add and pin any JSON object they wish to Pinata's IPFS nodes. 
```php
// Must be array
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
$cidVersion = 1;
$pinata = Pinata::init($cidVersion);
return $pinata->pinJson('Mindblowon #1', $keyVal, $metadata);
```

#### Pinning By CID:
There may be times where a piece of content is not available on your local machine or server but is already on the IPFS network. In those times, the Pin By CID API endpoint is helpful. A CID (or content identifier) is a hash generated by the IPFS protocol and representative of a piece of content. By taking that CID (or hash) and using this API, you can import the content into your own Pinata account and pin it on Pinata's storage nodes. 
```php
$pinata = Pinata::init(0);
$keyVal = [
    'key' => 'value'
];
// The Pin name
$name = 'Moondogz';
// Moondogz Pinata CID
$cid = 'QmRT1o23bkiHTjUrUkL2XDGSj3yV7LFmwShWiBEcsgVLaT';
return $pinata->pinByCID($cid, $name, $keyVal);
```

#### List Pin By CID Jobs:
When using the pinByCID function, you may want to programmatically check on the status of CIDs you'd requested to be pinned to your account. This endpoint allows you to do so.
```php
$pinata = Pinata::init(0);
// sort can be ASC or DESC
return $pinata->listPinJob('ASC');
```
