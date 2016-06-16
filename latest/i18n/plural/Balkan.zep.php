<?php

namespace Ice\I18n\Plural;

/**
 * Plural rules for the following locales and languages:
 * Locales: be bs hr ru sh sr uk
 * Rules:
 * one → n mod 10 is 1 and n mod 100 is not 11;
 * few → n mod 10 in 2..4 and n mod 100 not in 12..14;
 * many → n mod 10 is 0 or n mod 10 in 5..9 or n mod 100 in 11..14;
 * other → everything else (fractions)
 * Reference CLDR Version 21 (2012-03-01 03:27:30 GMT)
 *
 * @see  http://unicode.org/repos/cldr-tmp/trunk/diff/supplemental/language_plural_rules.html
 * @see  http://unicode.org/repos/cldr/trunk/common/supplemental/plurals.xml
 * @package     Ice/I18n
 * @category    Plural rules
 * @author      Ice Team
 * @copyright   (c) 2014-2016 Ice Team
 * @license     http://iceframework.org/license
 */
class Balkan implements \Ice\I18n\Plural\PluralInterface
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
