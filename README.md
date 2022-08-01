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

Publish configuration :

```sh
php artisan vendor:publish --tag=pinata-config
```

Environment:

```sh
PINATA_API_KEY=[pinata api key]
PINATA_API_SECRET=[pinata secret key]
PINATA_JWT=[pinata jwt]
```
