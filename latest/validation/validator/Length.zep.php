<?php

namespace Ice\Validation\Validator;

/**
 * Length validator.
 *
 * @package     Ice/Validation
 * @category    Security
 * @author      Ice Team
 * @copyright   (c) 2014-2016 Ice Team
 * @license     http://iceframework.org/license
 * <pre><code>
 * $validation = new Ice\Validation();
 * $validation->rules([
 * 'title' => 'length:10,100',
 * 'content' => [
 * 'length' => [
 * 'max' => 1000,
 * 'messageMin' => 'Too long!',
 * 'label' => 'Desctiption'
 * ]
 * ]
 * ]);
 * $valid = $validation->validate($_POST);
 * if (!$valid) {
 * $messages = $validation->getMessages();
 * }
 * </code></pre>
 */
class Length extends \Ice\Validation\Validator
{

    /**
     * Validate the validator
     * Options: min (0), max (1), label, messageMin, messageMax
     *
     * @param Validation $validation 
     * @param string $field 
     * @return boolean 
     */
    public function validate(\Ice\Validation $validation, $field) {}

}
