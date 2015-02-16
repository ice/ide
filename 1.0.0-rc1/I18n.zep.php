<?php

namespace Ice;

class I18n
{

    static protected $_i18n;

    protected $_cache = array();

    protected $_options = array(en-gb, en-gb, );

    /**
     * I18n constructor.
     *
     * @param array $options 
     */
	public function __construct($options = array()) {}

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
	public function lang($lang = null) {}

    /**
     * Get ISO language code.
     *
     * @return string 
     */
	public function iso() {}

    /**
     * Returns translation of a string. No parameters are replaced.
     * If no translation exists, the original string will be returned.
     *
     * @param string $str Text to translate
     * @param string $lang Target language
     * @return string 
     */
	public function get($str, $lang = null) {}

    /**
     * Load language from the file.
     *
     * @param string $lang Language code
     * @return array 
     */
	private function load($lang) {}

    /**
     * Alias of translate.
     *
     * @param string $str 
     * @param array $values 
     * @param string $lang 
     * @return string 
     */
	public function _($str, $values = null, $lang = null) {}

    /**
     * Translation/internationalization function. strtr() or sprintf is used for replacing parameters.
     *
     * @param string $str 
     * @param array $values Values to replace in the translated text
     * @param string $lang Source language
     * @param string $string Text to translate
     * @return string 
     */
	public function translate($str, $values = null, $lang = null) {}

}
