<?php

/**
 * This file is part of the DigitalOcean-silex library.
 *
 * (c) Antoine Corcy <contact@sbin.dk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DigitalOcean\Tests;

use Silex\Application;
use DigitalOcean\Silex\DigitalOceanServiceProvider;

/**
 * @author Antoine Corcy <contact@sbin.dk>
 */
class DigitalOceanServiceProviderTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->app = new Application();

        $this->app['digitalocean.client_id'] = 'client_id';
        $this->app['digitalocean.api_key']   = 'api_key';

        $this->app->register(new DigitalOceanServiceProvider());
    }

    public function testRegister()
    {
        $this->assertInstanceOf('DigitalOcean\\Credentials', $this->app['digitalocean.credentials']);
        $this->assertInstanceOf('DigitalOcean\\DigitalOcean', $this->app['digitalocean']);
    }

    public function testBoot()
    {
        $this->assertNull($this->app->boot());
    }
}
