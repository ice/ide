<?php

namespace Ice;

class Validation
{

    protected $_di;

    protected $_data = array();

    protected $_rules = array();

    protected $_validators = array();

    protected $_filters = array();

    protected $_labels = array();

    protected $_messages = array();

    protected $_valid = true;

    protected $_aliases = array();

    protected $_translate = true;

    protected $_humanLabels = false;

    protected $_defaultMessages = array(Field :field must contain only letters and numbers, Field :field must contain only letters, Field :field must be within the range of :min to :max, Field :field must be numeric, Field :field is not valid, Field :field must be an email address, Field :field must not be empty, File :field exceeds the maximum file size, File :field must not exceed :max resolution, File :field must be at least :min resolution, File :field exceeds the size of :max, File :field must be of type: :types, Field :field must be a part of list: :values, Field :field must not exceed :max characters long, Field :field must be at least :min characters long, Field :field must not be a part of list: :values, Field :field does not match the required format, Field :field is required, Field :field and :other must match, Field :field must be unique, Field :field must be a url, Field :field must occur together with :fields, Field :field must not occur together with :fields);


	public function getDi() {}

    /**
     * @param mixed $rules 
     */
	public function setRules($rules) {}

    /**
     * @param mixed $filters 
     */
	public function setFilters($filters) {}

    /**
     * @param mixed $labels 
     */
	public function setLabels($labels) {}

    /**
     * @param mixed $aliases 
     */
	public function setAliases($aliases) {}

    /**
     * @param mixed $translate 
     */
	public function setTranslate($translate) {}


	public function getTranslate() {}

    /**
     * @param mixed $humanLabels 
     */
	public function setHumanLabels($humanLabels) {}

    /**
     * Validation constructor. Fetch Di and set the data if given.
     *
     * @param array $data Data to validate
     */
	public function __construct($data = array()) {}

    /**
     * Resolve one rule.
     *
     * @param string $alias 
     * @param string $field 
     * @param mixed $options 
     * @return void 
     */
	public function resolve($alias, $field, $options = null) {}

    /**
     * Add one rule.
     *
     * @param string $field 
     * @param mixed $validators 
     * @param mixed $options 
     * @return void 
     */
	public function rule($field, $validators, $options = null) {}

    /**
     * Add multiple rules at once.
     *
     * @param array $validators 
     * @return void 
     */
	public function rules($validators) {}

    /**
     * Validate the data.
     *
     * @param array $data Data to validate
     * @return boolean 
     */
	public function validate($data = array()) {}

    /**
     * Check if validation passed.
     *
     * @return boolean 
     */
	public function valid() {}

    /**
     * Whether or not a value exists by field.
     *
     * @param string $field The data key
     * @return boolean 
     */
	public function hasValue($field) {}

    /**
     * Get a value by field.
     *
     * @param string $field The data key
     * @param boolean $filtered Get the filtered value or original
     * @return mixed 
     */
	public function getValue($field, $filtered = true) {}

    /**
     * Get the label of a field.
     * Humanize a label if humanLabels attribute and filter service is available
     *
     * @param string $field The data key
     * @return string 
     */
	public function getLabel($field) {}

    /**
     * Set the default messages.
     *
     * @param array $messages 
     * @return void 
     */
	public function setDefaultMessages($messages = array()) {}

    /**
     * Get a default message for the type.
     *
     * @param string $type Type of message
     * @return string 
     */
	public function getDefaultMessage($type) {}

    /**
     * Add a message to the field.
     *
     * @param string $field 
     * @param string $message 
     * @return void 
     */
	public function addMessage($field, $message) {}

    /**
     * Get the validation's messages.
     *
     * @return Arr 
     */
	public function getMessages() {}

}
