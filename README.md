DigitalOcean for Silex
======================

This package allows you to use [**DigitalOcean**](https://github.com/toin0u/DigitalOcean) in [**Silex**](http://silex.sensiolabs.org/).

[![Latest Stable Version](https://poser.pugx.org/toin0u/DigitalOcean-silex/v/stable.png)](https://packagist.org/packages/toin0u/DigitalOcean-silex)
[![Total Downloads](https://poser.pugx.org/toin0u/DigitalOcean-silex/downloads.png)](https://packagist.org/packages/toin0u/DigitalOcean-silex)
[![Build Status](https://secure.travis-ci.org/toin0u/DigitalOcean-silex.png)](http://travis-ci.org/toin0u/DigitalOcean-silex)
[![Coverage Status](https://coveralls.io/repos/toin0u/DigitalOcean-silex/badge.png)](https://coveralls.io/r/toin0u/DigitalOcean-silex)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/410ba56f-9de9-4f76-81eb-2643603e9bcc/mini.png)](https://insight.sensiolabs.com/projects/410ba56f-9de9-4f76-81eb-2643603e9bcc)

Installation
------------

It can be found on [Packagist](https://packagist.org/packages/toin0u/digitalocean-silex).
The recommended way is through [composer](http://getcomposer.org).

Edit `compose.json` and add:

```json
{
    "require": {
        "toin0u/digitalocean-silex": "@stable"
    }
}
```

**Protip:** you should browse the
[`toin0u/digitalocean-silex`](https://packagist.org/packages/toin0u/digitalocean-silex)
page to choose a stable version to use, avoid the `@stable` meta constraint.

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
//                 public 'private_ip_address' => null
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


Contributor Code of Conduct
---------------------------

As contributors and maintainers of this project, we pledge to respect all people
who contribute through reporting issues, posting feature requests, updating
documentation, submitting pull requests or patches, and other activities.

We are committed to making participation in this project a harassment-free
experience for everyone, regardless of level of experience, gender, gender
identity and expression, sexual orientation, disability, personal appearance,
body size, race, age, or religion.

Examples of unacceptable behavior by participants include the use of sexual
language or imagery, derogatory comments or personal attacks, trolling, public
or private harassment, insults, or other unprofessional conduct.

Project maintainers have the right and responsibility to remove, edit, or reject
comments, commits, code, wiki edits, issues, and other contributions that are
not aligned to this Code of Conduct. Project maintainers who do not follow the
Code of Conduct may be removed from the project team.

Instances of abusive, harassing, or otherwise unacceptable behavior may be
reported by opening an issue or contacting one or more of the project
maintainers.

This Code of Conduct is adapted from the [Contributor
Covenant](http:contributor-covenant.org), version 1.0.0, available at
[http://contributor-covenant.org/version/1/0/0/](http://contributor-covenant.org/version/1/0/0/)


License
-------

DigitalOcean-silex is released under the MIT License. See the bundled
[LICENSE](https://github.com/toin0u/DigitalOcean-silex/blob/master/LICENSE) file for details.
