<?php

namespace Ice;

/**
 * Internationalization (i18n) class.
 *
 * @package     Ice/I18n
 * @category    Library
 * @author      Ice Team
 * @copyright   (c) 2014-2018 Ice Team
 * @license     http://iceframework.org/license
 */
class I18n
{

    static protected $i18n;


    protected $cache = array();


    protected $rules = array();


    protected $options = array('source' => 'en-gb', 'lang' => 'en-gb', 'dir' => '');


    /**
     * I18n constructor.
     *
     * @param array $options
     */
    public function __construct(array $options = array()) {}

    /**
     * Return the last I18n created.
     *
     * @return I18n
     */
    public static function fetch() {}

    /**
     * Get and set the target language.
     *
     * @param string $lang New language setting
     * @return string
     */
    public function lang(string $lang = null): string {}

    /**
     * Get ISO language code.
     *
     * @param string $lang Language
     * @param boolean $country Get country code, by default gets language code
     * @return string
     */
    public function iso($lang = null, bool $country = false): string {}

    /**
     * Returns specified form of a string translation. No parameters are replaced.
     * If no translation exists, the original string will be returned.
     *
     * @param string $str Text to translate
     * @param mixed $form If NULL, looking for `other` form, else the very first form
     * @param string $lang Target language
     * @return string
     */
    public function get(string $str, $form = null, string $lang = null): string {}

    /**
     * Load language from the file.
     *
     * @param string $lang Language code
     * @return array
     */
    private function load(string $lang) {}

    /**
     * Returns translation of a string with right plural form.
     * If no translation exists, the original string will be returned.
     *
     * @param string $str
     * @param int $count
     * @param string $lang
     * @param string $string
     * @return string
     */
    public function plural(string $str, int $count = 0, string $lang = null) {}

    /**
     * Plural rules lazy initialization.
     *
     * @param string $code Language code
     * @return object
     */
    protected function pluralRules(string $code) {}

    /**
     * Alias of translate.
     *
     * @param string $str
     * @param array $values
     * @param mixed $context
     * @param string $lang
     * @return string
     */
    public function _(string $str, array $values = null, $context = null, string $lang = null): string {}

    /**
     * Translation/internationalization function. strtr() or sprintf is used for replacing parameters.
     *
     * @param string $str
     * @param array $values Values to replace in the translated text
     * @param mixed $context String form or numeric count
     * @param string $lang Source language
     * @param string $string Text to translate
     * @return string
     */
    public function translate(string $str, array $values = null, $context = null, string $lang = null): string {}

}
