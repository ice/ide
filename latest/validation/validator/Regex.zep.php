<?php

namespace Ice\Validation\Validator;

/**
 * Regex validator.
 *
 * @package     Ice/Validation
 * @category    Security
 * @author      Ice Team
 * @copyright   (c) 2014-2015 Ice Team
 * @license     http://iceframework.org/license
 * <pre><code>
 * $validation = new Ice\Validation();
 * $validation->rules([
 * 'username' => [
 * 'regex' => [
 * 'pattern' => '/[a-zA-Z][a-zA-Z0-9_-]{3,}/'
 * ],
 * ]
 * ]);
 * $valid = $validation->validate($_POST);
 * if (!$valid) {
 * $messages = $validation->getMessages();
 * }
 * </code></pre>
 */
class Regex extends \Ice\Validation\Validator
{

    /**
     * Validate the validator
     * Options: label, pattern, message
     *
     * @param Validation $validation 
     * @param string $field 
     * @return boolean 
     */
    public function validate(\Ice\Validation $validation, $field) {}

}
