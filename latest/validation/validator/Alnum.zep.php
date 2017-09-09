<?php

namespace Ice\Validation\Validator;

/**
 * Alnum validator.
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
 *      'username' => 'alnum',
 *      'prefix' => [
 *          'alnum' => [
 *              'message' => 'Field :field must be alphanumeric'
 *          ]
 *      ]
 *  ]);
 *
 *  $valid = $validation->validate($_POST);
 *
 *  if (!$valid) {
 *      $messages = $validation->getMessages();
 *  }
 * </code></pre>
 */
class Alnum extends \Ice\Validation\Validator
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
