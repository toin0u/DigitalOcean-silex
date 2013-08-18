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
$app->register(new DigitalOceanServiceProvider());
```


Changelog
---------

[See the changelog file](https://github.com/toin0u/DigitalOcean-silex/blob/master/CHANGELOG.md)


Support
-------

[Please open an issues in github](https://github.com/toin0u/DigitalOcean-silex/issues)


License
-------

Geotools-silex is released under the MIT License. See the bundled
[LICENSE](https://github.com/toin0u/DigitalOcean-silex/blob/master/LICENSE) file for details.
