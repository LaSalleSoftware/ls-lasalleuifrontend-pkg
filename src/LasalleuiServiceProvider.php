<?php

/**
 * This file is part of the Lasalle Software UI package
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright  (c) 2019 The South LaSalle Trading Corporation
 * @license    http://opensource.org/licenses/MIT MIT
 * @author     Bob Bloom
 * @email      bob.bloom@lasallesoftware.ca
 * @link       https://lasallesoftware.ca
 * @link       https://packagist.org/packages/lasallesoftware/lsv2-lasalleui-pkg
 * @link       https://github.com/LaSalleSoftware/lsv2-lasalleui-pkg
 *
 */

namespace Lasallesoftware\Lasalleui;

// Laravel class
use Illuminate\Support\ServiceProvider;

/**
 * Class LasalleuiServiceProvider
 *
 * @package Lasallesoftware\Lasalleui
 */
class LasalleuiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     *
     * "So, what if we need to register a view composer within our service provider?
     * This should be done within the boot method. This method is called after all other service providers
     * have been registered, meaning you have access to all other services that have been registered by the framework"
     * (https://laravel.com/docs/5.6/providers)
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViews();
        //$this->publishViews();
    }

    /**
     * Load this package's views
     *
     * @return void
     */
    protected function loadViews()
    {
        $this->loadViewsFrom(__DIR__.'/../views', 'lasallesoftwarelasalleui');
    }
}
