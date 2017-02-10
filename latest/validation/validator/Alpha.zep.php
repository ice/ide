<?php

namespace Ice\Validation\Validator;

/**
 * Alpha validator.
 *
 * @package     Ice/Validation
 * @category    Security
 * @author      Ice Team
 * @copyright   (c) 2014-2016 Ice Team
 * @license     http://iceframework.org/license
 * <pre><code>
 * $validation = new Ice\Validation();
 * $validation->rules([
 * 'username' => 'alpha',
 * 'prefix' => [
 * 'alpha' => [
 * 'message' => 'Field :field must be alpha'
 * ]
 * ]
 * ]);
 * $valid = $validation->validate($_POST);
 * if (!$valid) {
 * $messages = $validation->getMessages();
 * }
 * </code></pre>
 */
class Alpha extends \Ice\Validation\Validator
{

    /**
     * Validate the validator
     * Options: label, message
     *
     * @param Validation $validation 
     * @param string $field 
     * @return boolean 
     */
    public function validate(\Ice\Validation $validation, $field) {}

}
