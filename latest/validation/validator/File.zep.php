<?php

namespace Ice\Validation\Validator;

/**
 * File validator.
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
 *      'picture' => [
 *          'file' => [
 *              'maxSize' => '6M',
 *              'allowedTypes' => ['image/jpeg', 'image/png'],
 *              'minResolution' => '400x300',
 *              'maxResolution' => '1600x1200',
 *          ]
 *      ]
 *  ]);
 *
 *  $valid = $validation->validate($_FILES);
 *
 *  if (!$valid) {
 *      $messages = $validation->getMessages();
 *  }
 * </code></pre>
 */
class File extends \Ice\Validation\Validator
{

    /**
     * Validate the validator
     * Options: label, messageIniSize, allowEmpty, messageEmpty, messageValid, maxSize, messageSize, allowedTypes, messageType
     * minResolution, maxResolution, messageMinResolution, messageMaxResolution
     *
     * @param Validation $validation
     * @param string $field
     * @return bool
     */
    public function validate(\Ice\Validation $validation, $field) {}

}
