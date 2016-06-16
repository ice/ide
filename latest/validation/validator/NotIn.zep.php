<?php

namespace Ice\Validation\Validator;

/**
 * NotIn validator.
 *
 * @package     Ice/Validation
 * @category    Security
 * @author      Ice Team
 * @copyright   (c) 2014-2016 Ice Team
 * @license     http://iceframework.org/license
 * <pre><code>
 * $validation = new Ice\Validation();
 * $validation->rules([
 * 'status' => 'notIn:unactive,removed',
 * 'username' => [
 * 'notIn' => [
 * 'values' => ['about', 'admin', 'user', 'root'],
 * 'message' => 'Field :field is reserved',
 * 'label' => 'Nick'
 * ],
 * ]
 * ]);
 * $valid = $validation->validate($_POST);
 * if (!$valid) {
 * $messages = $validation->getMessages();
 * }
 * </code></pre>
 */
class NotIn extends \Ice\Validation\Validator
{

    /**
     * Validate the validator
     * Options: label, values, message
     *
     * @param Validation $validation 
     * @param string $field 
     * @return boolean 
     */
    public function validate(\Ice\Validation $validation, $field) {}

}
