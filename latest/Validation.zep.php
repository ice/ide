<?php

namespace Ice;

/**
 * Allows to validate array data.
 *
 * @package     Ice/Validation
 * @category    Security
 * @author      Ice Team
 * @copyright   (c) 2014-2016 Ice Team
 * @license     http://iceframework.org/license
 * @uses        Ice\Filter (if service is available)
 * @uses        Ice\I18n (if service is available)
 *
 * <pre><code>
 *  $validation = new Ice\Validation();
 *
 *  $validation->rules([
 *      'fullName' => 'required',
 *      'email' => 'required|email',
 *      'repeatEmail' => 'same:email',
 *      'about' => 'required|length:10,5000',
 *  ]);
 *
 *  $valid = $validation->validate($_POST);
 *
 *  if (!$valid) {
 *      $messages = $validation->getMessages();
 *  }
 * </code></pre>
 */
class Validation
{

    protected $di;


    protected $data;


    protected $rules = array();


    protected $validators = array();


    protected $filters = array();


    protected $labels = array();


    protected $messages = array();


    protected $valid = true;


    protected $aliases = array();


    protected $translate = true;


    protected $humanLabels = false;


    protected $defaultMessages = array("alnum" => "Field :field must contain only letters and numbers", "alpha" => "Field :field must contain only letters", "between" => "Field :field must be within the range of :min to :max", "digit" => "Field :field must be numeric", "default" => "Field :field is not valid", "email" => "Field :field must be an email address", "fileEmpty" => "Field :field must not be empty", "fileIniSize" => "File :field exceeds the maximum file size", "fileMaxResolution" => "File :field must not exceed :max resolution", "fileMinResolution" => "File :field must be at least :min resolution", "fileSize" => "File :field exceeds the size of :max", "fileType" => "File :field must be of type: :types", "in" => "Field :field must be a part of list: :values", "lengthMax" => "Field :field must not exceed :max characters long", "lengthMin" => "Field :field must be at least :min characters long", "notIn" => "Field :field must not be a part of list: :values", "regex" => "Field :field does not match the required format", "required" => "Field :field is required", "same" => "Field :field and :other must match", "unique" => "Field :field must be unique", "url" => "Field :field must be a url", "with" => "Field :field must occur together with :fields", "without" => "Field :field must not occur together with :fields");



    public function getDi() {}


    public function getData() {}

    /**
     * @param mixed $rules
     */
    public function setRules($rules) {}


    public function getRules() {}

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
    public function __construct(array $data = array()) {}

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
     * <pre><code>
     *  $validation = new Ice\Validation();
     *
     *  $validation->rule('email', 'required|email');
     *  $validation->rule('content', [
     *      'length' => [
     *          'max' => 1000,
     *          'messageMin' => 'Too long!',
     *          'label' => 'Desctiption'
     *      ]
     *  ]);
     * </code></pre>
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
     * <pre><code>
     *  $validation = new Ice\Validation();
     *
     *  $validation->rules([
     *      'username' => 'required|length:4,24|notIn:admin,user,root|unique:users',
     *      'password'  => 'required|length:5,32',
     *      'repeatPassword'  => 'same:password',
     *      'email'  => 'email',
     *      'status'  => 'required|digit|in:0,1,2',
     *      'website'  => 'url',
     *      'title'  => 'length:,100',
     *      'age'  => 'required|between:18,21',
     *  ]);
     * </code></pre>
     *
     * @param array $validators
     * @param boolean $merge
     * @return void
     */
    public function rules(array $validators, $merge = true) {}

    /**
     * Validate the data.
     *
     * @param array $data Data to validate
     * @param boolean $clear Clear messages before
     * @return bool
     */
    public function validate(array $data = array(), $clear = true) {}

    /**
     * Check if validation passed.
     *
     * @return bool
     */
    public function valid() {}

    /**
     * Whether or not a value exists by field.
     *
     * @param string $field The data key
     * @return bool
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
     * Get the values by fields.
     * Values are automatically filtered out if filters have been setted.
     *
     * <pre><code>
     *  // Get value for one field
     *  $validation->getValues('password');
     *
     *  // Get values for multiple fields
     *  $validation->getValues(['fullName', 'about']);
     *
     *  // Get all values
     *  $validation->getValues();
     * </code></pre>
     *
     * @param mixed $fields The data keys
     * @param boolean $filtered Get the filtered value or original
     * @return mixed
     */
    public function getValues($fields = null, $filtered = true) {}

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
    public function setDefaultMessages(array $messages = array()) {}

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
