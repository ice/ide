<?php

namespace Ice;

class Text
{

    const ALNUM = 0;

    const ALPHA = 1;

    const HEXDEC = 2;

    const NUMERIC = 3;

    const NOZERO = 4;

    /**
     * Generates a random string based on the given type. Type is one of the constants.
     *
     * @param int $type 
     * @param int $length 
     * @return string 
     */
	static public function random($type = 0, $length = 8) {}

}
