# Polygonscan PHP API

PHP wrapper for the Polygonscan API - forked from https://github.com/maslakoff/php-Polygonscan-api

[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg)](https://opensource.org/licenses/MIT)

[Official API Documentation](https://docs.polygonscan.com/)

[Create API Key (optional)](https://docs.polygonscan.com/getting-started/viewing-api-usage-statistics)

## Requirements

The minimum requirement by Polygonscan API is that your Web server supports PHP 5.6.

## Installation

To install Polygonscan PHP API package you can run command:

```
composer require baumann-at/php-Polygonscan-api:dev-master
```

## Usage

Mainnet

```php
$client = new \Polygonscan\Client('Y3U3GMFC8P545CFWRU4TET8MY1K79YDZ3V');
$client->api('account')->balance('0x43406D1baAE11a950DE734DAE4079A3C9Eb48DAf');
```

## For testnet usage

Supported:

-   mumbai

```php
$client = new \Polygonscan\Client('Y3U3GMFC8P545CFWRU4TET8MY1K79YDZ3V', PolygonscanAPIConf::TESTNET_MUMBAI);
$client->api('account')->balance('0x43406D1baAE11a950DE734DAE4079A3C9Eb48DAf');
```
