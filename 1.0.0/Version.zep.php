<?php

namespace Ice;

class Version
{

    const DEV = 0;

    const ALPHA = 1;

    const BETA = 2;

    const RC = 3;

    const STABLE = 4;

    /**
     * Get array version of the framework.
     *
     * @return array 
     */
	public static function current() {}

    /**
     * Get version of the framework.
     * 1.0.0-dev
     * 1.0.0-alpha3
     * 1.0.0-beta2
     * 1.0.0-rc5
     * 1.0.0
     *
     * @return string 
     */
	public static function get() {}

    /**
     * Get version id of the framework.
     * [major][minor(2 digits)][patch (2 digits)][stage][build], eg. id for 1.4.2-rc5 is 1040235
     *
     * @return string 
     */
	public static function id() {}

}
