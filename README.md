# Riak Client for PHP 修改版
支持 PHP7以上, protobuf修改为 Google 官方protobuf

## 示例

官方示例，https://docs.riak.com/riak/kv/latest/developing/getting-started/php/crud-operations/index.html

### 对象

```php
use Basho\Riak;
use Basho\Riak\Node;
use Basho\Riak\Command;

$node = (new node\Builder)
    ->atHost('127.0.0.1')
    ->onPort(8087)
    ->build();
$riak = new Riak([$node], [], new Riak\Api\Pb());
$bucket = new Riak\Bucket("carnoc");

$key = "date.txt";
$location = new Riak\Location($key, $bucket);
```

### 写入

对写入、读取的内容不再编码，无需设置`setContentEncoding`

https://github.com/jiangyunan/riak-php7/blob/main/src/Riak/Command/RObject.php#L42

```php
$dateString = Date("H:i:s");

$dataObject = new Riak\RObject($dateString);
$dataObject->setContentType("text/plain");

$storeCommand = (new Command\Builder\StoreObject($riak))
    ->withObject($dataObject)
    ->atLocation($location)
    ->build();
$response = $storeCommand->execute();
```        

### 读取

```php
$fetchCommand = (new Command\Builder\FetchObject($riak))
    ->atLocation($location)
    ->build();
$response = $fetchCommand->execute();

if($response->getCode() == 200){
    $dataObject = $response->getObject();
    $contentType = $dataObject->getContentType();
    $data = [
        "type" => $contentType,
        "data" => $dataObject->getData(),
    ];
} else {
    $data = [];
}
```

### 删除

```php
$deleteCommand = (new Command\Builder\DeleteObject($riak))
    ->atLocation($location)
    ->build();
$response = $deleteCommand->execute();

return ($response->getCode() == 204);
```

## Installation
### Dependencies
- PHP 5.4+
- PHP Extensions: curl, json and openssl [protobuf](https://pecl.php.net/package/protobuf)
- Riak 2.1+


# Riak Client for PHP

[![Packagist](https://img.shields.io/packagist/v/basho/riak.svg?maxAge=2592000)](https://packagist.org/packages/basho/riak)

**Riak PHP Client** is a library which makes it easy to communicate with [Riak](http://basho.com/riak/), an open source, distributed database that focuses on high availability, horizontal scalability, and *predictable*
latency. This library communicates with Riak's HTTP interface using the cURL extension. If you want to communicate with Riak using the Protocol Buffers interface, use the [Official PHP PB Client](https://github.com/basho/riak-phppb-client). Both Riak and this library are maintained by [Basho Technologies](http://www.basho.com/). 

To see other clients available for use with Riak visit our [Documentation Site](http://docs.basho.com/riak/latest/dev/using/libraries)


1. [Riak Client for PHP 修改版](#riak-client-for-php-修改版)
   1. [Installation](#installation)
      1. [Dependencies](#dependencies)
2. [Riak Client for PHP](#riak-client-for-php)
   1. [Installation](#installation-1)
      1. [Dependencies](#dependencies-1)
      2. [Composer Install](#composer-install)
   2. [Documentation](#documentation)
      1. [Example Usage](#example-usage)
   3. [Contributing](#contributing)
      1. [An honest disclaimer](#an-honest-disclaimer)
   4. [Roadmap](#roadmap)
   5. [License and Authors](#license-and-authors)


## Installation

### Dependencies
- PHP 5.4+
- PHP Extensions: curl, json and openssl [required for security features]
- Riak 2.1+
- [Composer PHP Dependency Manager](https://getcomposer.org/)

### Composer Install

This library has been added to [Packagist](https://packagist.org/packages/basho/) to simplify the installation process. Run the following [composer](https://getcomposer.org/) command:

```console
$ composer require "basho/riak": "3.0.*"
```

Alternately, manually add the following to your `composer.json`, in the `require` section:

```javascript
"require": {
    "basho/riak": "3.0.*"
}
```

And then run `composer update` to ensure the module is installed.

## Documentation

* Master: [![Build Status](https://secure.travis-ci.org/basho/riak-php-client.png?branch=master)](http://travis-ci.org/basho/riak-php-client)

A fully traversable version of the API documentation for this library can be found on [Github Pages](http://basho.github.io/riak-php-client). 

### Example Usage

Below is a short example of using the client. More substantial sample code is available [in examples](/examples).

```php
// lib classes are included via the Composer autoloader files
use Basho\Riak;
use Basho\Riak\Node;
use Basho\Riak\Command;

// define the connection info to our Riak nodes
$nodes = (new Node\Builder)
    ->onPort(10018)
    ->buildCluster(['riak1.company.com', 'riak2.company.com', 'riak3.company.com',]);

// instantiate the Riak client
$riak = new Riak($nodes);

// build a command to be executed against Riak
$command = (new Command\Builder\StoreObject($riak))
    ->buildObject('some_data')
    ->buildBucket('users')
    ->build();
    
// Receive a response object
$response = $command->execute();

// Retrieve the Location of our newly stored object from the Response object
$object_location = $response->getLocation();
```

## Contributing

This repo's maintainers are engineers at Basho and we welcome your contribution to the project! You can start by reviewing [CONTRIBUTING.md](CONTRIBUTING.md) for information on everything from testing to coding standards.

### An honest disclaimer

Due to our obsession with stability and our rich ecosystem of users, community updates on this repo may take a little longer to review. 

The most helpful way to contribute is by reporting your experience through issues. Issues may not be updated while we review internally, but they're still incredibly appreciated.

Thank you for being part of the community! We love you for it. 

## Roadmap

* Current develop & master branches contain feature support for Riak version 2.1+
* Add support for Riak TS Q2 2016

## License and Authors

* Author: Christopher Mancini (https://github.com/christophermancini)
* Author: Alex Moore (https://github.com/alexmoore)
* Author: Luke Bakken (https://github.com/lukebakken)

Copyright (c) 2015 Basho Technologies, Inc. Licensed under the Apache License, Version 2.0 (the "License"). For more details, see [License](License).
