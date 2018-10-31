<?php

namespace Ice\Validation\Validator;

/**
 * Same validator.
 *
 * @package     Ice/Validation
 * @category    Security
 * @author      Ice Team
 * @copyright   (c) 2014-2018 Ice Team
 * @license     http://iceframework.org/license
 *
 * <pre><code>
 *  $validation = new Ice\Validation();
 *
 *  $validation->rules([
 *      'email' => 'required|email',
 *      'repeatEmail' => 'same:email'
 *  ]);
 *
 *  $valid = $validation->validate($_POST);
 *
 *  if (!$valid) {
 *      $messages = $validation->getMessages();
 *  }
 * </code></pre>
 */
class Same extends \Ice\Validation\Validator
{

    /**
     * Validate the validator
     * Options: other (0), allowEmpty (1), label, labelOther, message
     *
     * @param Validation $validation
     * @param string $field
     * @return bool
     */
    public function validate(\Ice\Validation $validation, string $field): bool {}

}
