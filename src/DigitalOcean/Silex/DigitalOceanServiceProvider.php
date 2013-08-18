<?php

/**
 * This file is part of the DigitalOcean-silex library.
 *
 * (c) Antoine Corcy <contact@sbin.dk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DigitalOcean\Silex;

use Silex\Application;
use Silex\ServiceProviderInterface;
use DigitalOcean\Credentials;
use DigitalOcean\DigitalOcean;

/**
 * DigitalOcean service provider.
 *
 * @author Antoine Corcy <contact@sbin.dk>
 */
class DigitalOceanServiceProvider implements ServiceProviderInterface
{
    /**
     * {@inheritDoc}
     */
    public function register(Application $app)
    {
        $app['digitalocean.credentials'] = $app->share(function($app) {
            return new Credentials($app['digitalocean.client_id'], $app['digitalocean.api_key']);
        });

        $app['digitalocean'] = $app->share(function($app) {
            return new DigitalOcean($app['digitalocean.credentials']);
        });
    }

    /**
     * {@inheritDoc}
     */
    public function boot(Application $app)
    {
    }
}
