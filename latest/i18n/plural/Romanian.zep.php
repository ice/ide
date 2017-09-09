<?php

namespace Ice\I18n\Plural;

/**
 * Plural rules for the following locales and languages:
 *
 * Locales: ro mo
 *
 * Rules:
 *  one → n is 1;
 *  few → n is 0 OR n is not 1 AND n mod 100 in 1..19;
 *  other → everything else
 *
 * Reference CLDR Version 21 (2012-03-01 03:27:30 GMT)
 *
 * @see  http://unicode.org/repos/cldr-tmp/trunk/diff/supplemental/language_plural_rules.html
 * @see  http://unicode.org/repos/cldr/trunk/common/supplemental/plurals.xml
 *
 * @package     Ice/I18n
 * @category    Plural rules
 * @author      Ice Team
 * @copyright   (c) 2014-2016 Ice Team
 * @license     http://iceframework.org/license
 */
class Romanian implements \Ice\I18n\Plural\PluralInterface
{

    /**
     * @param int $count
     * @return string
     */
    public function getCategory($count) {}

    /**
     * @param mixed $value
     */
    protected function isInt($value) {}

}
