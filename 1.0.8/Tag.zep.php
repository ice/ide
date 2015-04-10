<?php

namespace Ice;

class Tag
{

    const HTML32 = 1;


    const HTML401_STRICT = 2;


    const HTML401_TRANSITIONAL = 3;


    const HTML401_FRAMESET = 4;


    const HTML5 = 5;


    const XHTML10_STRICT = 6;


    const XHTML10_TRANSITIONAL = 7;


    const XHTML10_FRAMESET = 8;


    const XHTML11 = 9;


    const XHTML20 = 10;


    const XHTML5 = 11;


    protected $_di;


    protected $_values;


    protected $_docType = 5;


    protected $_title = null;


    protected $_titleSeparator = " - ";


    protected $_escape = true;



	public function getDi() {}


	public function getValues() {}

    /**
     * @param mixed $docType 
     */
	public function setDocType($docType) {}

    /**
     * @param mixed $title 
     */
	public function setTitle($title) {}


	public function getTitle() {}

    /**
     * @param mixed $titleSeparator 
     */
	public function setTitleSeparator($titleSeparator) {}


	public function getTitleSeparator() {}

    /**
     * @param mixed $escape 
     */
	public function setEscape($escape) {}

    /**
     * Tag constructor. Fetch Di and set it as a property.
     */
	public function __construct() {}

    /**
     * Appends a text to current document title.
     *
     * @param string $title 
     * @param string $separator 
     * @return void 
     */
	public function appendTitle($title, $separator = null) {}

    /**
     * Prepends a text to current document title.
     *
     * @param string $title 
     * @param string $separator 
     * @return void 
     */
	public function prependTitle($title, $separator = null) {}

    /**
     * Builds a HTML INPUT[type="text"] tag.
     *
     * @param array $parameters 
     * @return string 
     */
	public function textField($parameters) {}

    /**
     * Builds a HTML INPUT[type="password"] tag.
     *
     * @param array $parameters 
     * @return string 
     */
	public function passwordField($parameters) {}

    /**
     * Builds a HTML INPUT[type="hidden"] tag.
     *
     * @param array $parameters 
     * @return string 
     */
	public function hiddenField($parameters) {}

    /**
     * Builds a HTML INPUT[type="file"] tag.
     *
     * @param array $parameters 
     * @return string 
     */
	public function fileField($parameters) {}

    /**
     * Builds a HTML INPUT[type="submit"] tag.
     *
     * @param array $parameters 
     * @return string 
     */
	public function submitButton($parameters) {}

    /**
     * Builds a HTML BUTTON tag.
     *
     * @param array $parameters 
     * @return string 
     */
	public function button($parameters) {}

    /**
     * Builds a HTML INPUT[type="checkbox"] tag.
     *
     * @param array $parameters 
     * @return string 
     */
	public function checkField($parameters) {}

    /**
     * Builds generic INPUT tags.
     *
     * @param string $type 
     * @param array $parameters 
     * @return string 
     */
	private function input($type, $parameters) {}

    /**
     * Builds a HTML FORM tag.
     *
     * @param array $parameters 
     * @return string 
     */
	public function form($parameters) {}

    /**
     * Builds a HTML TEXTAREA tag.
     *
     * @param array $parameters 
     * @return string 
     */
	public function textArea($parameters) {}

    /**
     * Alias of the `img` method.
     *
     * @param array $parameters 
     * @return string 
     */
	public function image($parameters) {}

    /**
     * Builds HTML IMG tags.
     *
     * @param array $parameters 
     * @return string 
     */
	public function img($parameters) {}

    /**
     * Alias of the `a` method.
     *
     * @param array $parameters 
     * @return string 
     */
	public function linkTo($parameters) {}

    /**
     * Builds a HTML A tag using framework conventions.
     *
     * @param array $parameters 
     * @return string 
     */
	public function a($parameters) {}

    /**
     * Builds a LINK[rel="stylesheet"] tag.
     *
     * @param array $parameters 
     * @return string 
     */
	public function link($parameters) {}

    /**
     * Builds a SCRIPT[type="javascript"] tag.
     *
     * @param array $parameters 
     * @return string 
     */
	public function script($parameters) {}

    /**
     * Builds a STYLE tag.
     *
     * @param array $parameters 
     * @return string 
     */
	public function style($parameters) {}

    /**
     * Builds a SELECT tag.
     *
     * @param array $parameters 
     * @return string 
     */
	public function select($parameters) {}

    /**
     * Builds a HTML tag.
     *
     * @param string $name Name of tag
     * @param array $parameters Parameters like id, style
     * @param array $defaultParams Default parameters
     * @param array $skip Skip parameters
     * @param string $content Parameter name to append content
     * @param boolean $close Close tag
     * @param boolean $eol Add end of line
     * @param boolean $single Void element, close a tag by " />" (depending on doctype)
     * @return string 
     */
	public function tagHtml($name, $parameters = array(), $defaultParams = array(), $skip = array(), $content = null, $close = false, $eol = false, $single = false) {}

    /**
     * Builds a HTML close tag.
     *
     * @param string $name 
     * @param boolean $eol 
     * @return string 
     */
	public function endTag($name, $eol = true) {}

    /**
     * Renders parameters keeping order in html attributes.
     *
     * @param string $name 
     * @param array $attributes 
     * @param array $skip 
     * @param boolean $single 
     * @return string 
     */
	public function prepareTag($name, $attributes, $skip = array(), $single = false) {}

    /**
     * Check if a helper has a default value set using Ice\Tag::setValues or value from _POST.
     *
     * @param string $name 
     * @return boolean 
     */
	public function hasValue($name) {}

    /**
     * Assigns default values to generated tags by helpers.
     *
     * @param string $id 
     * @param mixed $value 
     * @return void 
     */
	public function setValue($id, $value) {}

    /**
     * Assigns default values to generated tags by helpers.
     *
     * @param array $values 
     * @param boolean $merge 
     * @return void 
     */
	public function setValues($values, $merge = false) {}

    /**
     * Every helper calls this function to check whether a component has a predefined value using Ice\Tag::setValue
     * or value from _POST.
     *
     * @param string $name 
     * @return mixed 
     */
	public function getValue($name) {}

    /**
     * Converts texts into URL-friendly titles.
     *
     * @param string $text 
     * @param string $separator 
     * @param boolean $lowercase 
     * @param mixed $replace 
     * @return string 
     */
	public function friendlyTitle($text, $separator = "-", $lowercase = true, $replace = null) {}

    /**
     * Get the document type declaration of content.
     *
     * @return string 
     */
	public function getDocType() {}

}
