<?php

namespace Ice\Validation\Validator;

/**
 * Email validator.
 *
 * @package     Ice/Validation
 * @category    Security
 * @author      Ice Team
 * @copyright   (c) 2014-2016 Ice Team
 * @license     http://iceframework.org/license
 *
 * <pre><code>
 *  $validation = new Ice\Validation();
 *
 *  $validation->rules([
 *      'e_mail' => 'email'
 *  ]);
 *
 *  $valid = $validation->validate($_POST);
 *
 *  if (!$valid) {
 *      $messages = $validation->getMessages();
 *  }
 * </code></pre>
 */
class Email extends \Ice\Validation\Validator
{

    /**
     * Validate the validator
     * Options: label, message
     *
     * @param Validation $validation
     * @param string $field
     * @return bool
     */
    public function validate(\Ice\Validation $validation, $field) {}

}
