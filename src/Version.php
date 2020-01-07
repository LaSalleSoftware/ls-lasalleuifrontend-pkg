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
 * @copyright  (c) 2019-2020 The South LaSalle Trading Corporation
 * @license    http://opensource.org/licenses/MIT MIT
 * @author     Bob Bloom
 * @email      bob.bloom@lasallesoftware.ca
 * @link       https://lasallesoftware.ca
 * @link       https://packagist.org/packages/lasallesoftware/lsv2-lasalleui-pkg
 * @link       https://github.com/LaSalleSoftware/lsv2-lasalleui-pkg
 *
 */

namespace Lasallesoftware\Lasalleui;

class Version
{
    /**
     * This package's version number.
     *
     * @var string
     */
    const VERSION = '2.0.1';

    /**
     * This package's release date.
     *
     * @var string
     */
    const RELEASEDATE = 'January 07, 2020';

    /**
     * This package's name.
     *
     * @var string
     */
    const PACKAGE = 'UI package for my LaSalle Software Version 2';

    /**
     * Get the version number of this package.
     *
     * @return string
     */
    public function version()
    {
        return static::VERSION;
    }

    /**
     * Get the release date of this package.
     *
     * @return string
     */
    public function releasedate()
    {
        return static::RELEASEDATE;
    }

    /**
     * Get the name of this package.
     *
     * @return string
     */
    public function packageName()
    {
        return static::PACKAGE;
    }
}