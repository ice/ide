<?php

namespace Ice;

/**
 * Get version of the framework.
 *
 * @package     Ice/Version
 * @category    Helper
 * @author      Ice Team
 * @copyright   (c) 2014-2016 Ice Team
 * @license     http://iceframework.org/license
 * @see         http://semver.org (Semantic Versioning 2.0.0)
 */
class Version
{

    const DEV = 0;


    const ALPHA = 1;


    const BETA = 2;


    const RC = 3;


    const STABLE = 4;


    const MAJOR = 1;


    const MINOR = 2;


    const PATCH = 4;


    const STAGE = 4;


    const BUILD = 0;


    /**
     * Get version array.
     *
     * @return array 
     */
    public static function current() {}

    /**
     * Get version string.
     * 1.0.0-dev
     * 1.0.0-alpha.3
     * 1.0.0-beta.2
     * 1.0.0-rc.5
     * 1.0.0
     *
     * @return string 
     */
    public static function get() {}

    /**
     * Get version id.
     * [major][minor(2 digits)][patch (2 digits)][stage][build]
     * eg. id for 1.4.12-rc.5 is 1041235
     *
     * @return int 
     */
    public static function id() {}

}
