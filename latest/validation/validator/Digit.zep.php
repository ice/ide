<?php

namespace Ice\Validation\Validator;

/**
 * Digit validator.
 *
 * @package     Ice/Validation
 * @category    Security
 * @author      Ice Team
 * @copyright   (c) 2014-2016 Ice Team
 * @license     http://iceframework.org/license
 * <pre><code>
 * $validation = new Ice\Validation();
 * $validation->rules([
 * 'sort' => 'digit'
 * ]);
 * $valid = $validation->validate($_POST);
 * if (!$valid) {
 * $messages = $validation->getMessages();
 * }
 * </code></pre>
 */
class Digit extends \Ice\Validation\Validator
{

    /**
     * Validate the validator
     *
     * @param Validation $validation 
     * @param string $field 
     * @return boolean 
     */
    public function validate(\Ice\Validation $validation, $field) {}

}
