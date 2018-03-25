<?php

namespace Ice\Filter;

/**
 * Minify css string.
 *
 * @package     Ice/Filter
 * @category    Minification
 * @author      Ice Team
 * @copyright   (c) 2014-2018 Ice Team
 * @license     http://iceframework.org/license
 * @uses        cssmin.c www.ryanday.org
 */
class Css
{

    const FREE = 1;


    const ATRULE = 2;


    const SELECTOR = 3;


    const BLOCK = 4;


    const DECLARATION = 5;


    const COMMENT = 6;


    /**
     * Minify the css.
     * Removes comments, removes newlines and line feeds keeping, removes last semicolon from last property
     *
     * @param string $css CSS code to minify
     * @return string
     */
    public function sanitize($css) {}

}
