<?php

namespace Ice\Validation\Validator;

/**
 * In validator.
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
 *      'status' => 'in:1,2,3,4'
 *  ]);
 *
 *  $valid = $validation->validate($_POST);
 *
 *  if (!$valid) {
 *      $messages = $validation->getMessages();
 *  }
 * </code></pre>
 */
class In extends \Ice\Validation\Validator
{

    /**
     * Validate the validator
     * Options: values (0,1,2..), label, message
     *
     * @param Validation $validation
     * @param string $field
     * @return bool
     */
    public function validate(\Ice\Validation $validation, string $field): bool {}

}
