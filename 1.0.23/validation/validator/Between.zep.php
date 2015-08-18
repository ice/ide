<?php

namespace Ice\Validation\Validator;

/**
 * Between validator.
 *
 * @package     Ice/Validation
 * @category    Security
 * @author      Ice Team
 * @copyright   (c) 2014-2015 Ice Team
 * @license     http://iceframework.org/license
 * <pre><code>
 * $validation = new Ice\Validation();
 * $validation->rules([
 * 'age' => 'between:18,21',
 * 'height' => [
 * 'between' => [
 * 'min' => 180,
 * 'max' => 190,
 * ]
 * ]
 * ]);
 * $valid = $validation->validate($_POST);
 * if (!$valid) {
 * $messages = $validation->getMessages();
 * }
 * </code></pre>
 */
class Between extends \Ice\Validation\Validator
{

    /**
     * Validate the validator
     * Options: label, min, max, message
     *
     * @param Validation $validation 
     * @param string $field 
     * @return boolean 
     */
    public function validate(\Ice\Validation $validation, $field) {}

}
