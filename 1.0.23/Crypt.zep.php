<?php

namespace Ice;

/**
 * The Crypt library provides two-way encryption of text.
 *
 * @package     Ice/Crypt
 * @category    Library
 * @author      Ice Team
 * @copyright   (c) 2014-2015 Ice Team
 * @license     http://iceframework.org/license
 * @uses        openSSL
 */
class Crypt
{

    protected $key;


    protected $cipher = "aes-256";


    protected $mode = "cbc";


    protected $block = 16;


    /**
     * Create a new encrypter instance.
     *
     * @param string $key 
     * @return void 
     */
    public function __construct($key) {}

    /**
     * Encrypt the given value.
     *
     * @param string $text 
     * @return string 
     */
    public function encrypt($text) {}

    /**
     * Generate an input vector.
     *
     * @return string 
     */
    protected function generateInputVector() {}

    /**
     * Actually encrypt the value using the given Iv with the openssl library encrypt function.
     *
     * @param string $value 
     * @param string $iv 
     * @return string 
     */
    protected function doEncrypt($value, $iv) {}

    /**
     * Decrypt the given value.
     *
     * @param string $text payload
     * @return string 
     */
    public function decrypt($text) {}

    /**
     * Actually decrypt the value using the given Iv with the openssl library decrypt function.
     *
     * @param string $value 
     * @param string $iv 
     * @return string 
     */
    protected function doDecrypt($value, $iv) {}

    /**
     * Get the JSON array from the given payload.
     *
     * @param string $text payload
     * @return array 
     */
    protected function getJsonPayload($text) {}

    /**
     * Create a MAC for the given value.
     *
     * @param string $value 
     * @return string 
     */
    protected function hash($value) {}

    /**
     * Add PKCS7 padding to a given value.
     *
     * @param string $value 
     * @return string 
     */
    protected function addPadding($value) {}

    /**
     * Remove the padding from the given value.
     *
     * @param string $value 
     * @return string 
     */
    protected function stripPadding($value) {}

    /**
     * Determine if the given padding for a value is valid.
     *
     * @param int $pad 
     * @param string $value 
     * @return bool 
     */
    protected function paddingIsValid($pad, $value) {}

    /**
     * Verify that the encryption payload is valid.
     *
     * @param array $data 
     * @return bool 
     */
    protected function invalidPayload($data) {}

    /**
     * Get the IV size for the cipher.
     *
     * @return int 
     */
    protected function getIvSize() {}

    /**
     * Set the encryption key.
     *
     * @param string $key 
     * @return void 
     */
    public function setKey($key) {}

    /**
     * Set the encryption cipher.
     *
     * @param string $cipher 
     * @return void 
     */
    public function setCipher($cipher) {}

    /**
     * Set the encryption mode.
     *
     * @param string $mode 
     * @return void 
     */
    public function setMode($mode) {}

}
