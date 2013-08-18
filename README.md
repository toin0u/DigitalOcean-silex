DigitalOcean for Silex
======================

This package allows you to use [**DigitalOcean**](https://github.com/toin0u/DigitalOcean) in [**Silex**](http://silex.sensiolabs.org/).


Installation
------------

It can be found on [Packagist](https://packagist.org/packages/toin0u/digitalocean-silex).
The recommended way is through [composer](http://getcomposer.org).

Edit `compose.json` and add:

```json
{
    "require": {
        "toin0u/digitalocean-silex": "~0.1"
    }
}
```

And install dependecies:

```bash
$ curl -sS https://getcomposer.org/installer | php
$ php composer.phar install
```

Usage
-----

Registering `DigitalOceanServiceProvider` is required.

```php
<?php

use DigitalOcean\Silex\DigitalOceanServiceProvider;

// .. create $app
$app->register(new DigitalOceanServiceProvider(), array(
    'digitalocean.client_id' => 'YOUR_CLIENT_ID',
    'digitalocean.api_key'   => 'YOUR_API_KEY',
));
```

Then use the [DigitalOcean API](https://github.com/toin0u/DigitalOcean#api):

```php
$digitalOcean = $app['digitalocean'];
$digitalocean->setAdapter(new \HttpAdapter\BuzzHttpAdapter());
$activeDroplets = $digitalOcean->droplets()->showAllActive();
var_dump($activeDroplets);

// object(stdClass)[61]
// public 'status' => string 'OK' (length=2)
// public 'droplets' =>
//     array (size=1)
//         0 =>
//             object(stdClass)[62]
//                 public 'id' => int 347553
//                 public 'name' => string 'foobar' (length=6)
//                 public 'image_id' => int 284212
//                 public 'size_id' => int 66
//                 public 'region_id' => int 4
//                 public 'backups_active' => boolean false
//                 public 'ip_address' => string '192.241.175.217' (length=15)
//                 public 'locked' => boolean false
//                 public 'status' => string 'active' (length=6)
//                 public 'created_at' => string '2013-01-07T01:37:21Z' (length=20)
```


Changelog
---------

[See the changelog file](https://github.com/toin0u/DigitalOcean-silex/blob/master/CHANGELOG.md)


Support
-------

[Please open an issues in github](https://github.com/toin0u/DigitalOcean-silex/issues)


License
-------

DigitalOcean-silex is released under the MIT License. See the bundled
[LICENSE](https://github.com/toin0u/DigitalOcean-silex/blob/master/LICENSE) file for details.
