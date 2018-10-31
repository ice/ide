<?php

namespace Ice\I18n\Plural;

/**
 * Plural rules for Polish language:
 *
 * Locales: pl
 *
 * Rules:
 *  one → n is 1;
 *  few → n mod 10 in 2..4 and n mod 100 not in 12..14 and n mod 100 not in 22..24;
 *  other → everything else (fractions)
 *
 * Reference CLDR Version 21 (2012-03-01 03:27:30 GMT)
 *
 * @see  http://unicode.org/repos/cldr-tmp/trunk/diff/supplemental/language_plural_rules.html
 * @see  http://unicode.org/repos/cldr/trunk/common/supplemental/plurals.xml
 *
 * @package     Ice/I18n
 * @category    Plural rules
 * @author      Ice Team
 * @copyright   (c) 2014-2018 Ice Team
 * @license     http://iceframework.org/license
 */
class Polish implements \Ice\I18n\Plural\PluralInterface
{

    /**
     * @param int $count
     * @return string
     */
    public function getCategory(int $count): string {}

    /**
     * @param mixed $value
     */
    protected function isInt($value) {}

}
