<?php

namespace Ice;

/**
 * The Crypt library provides two-way encryption of text.
 *
 * @package     Ice/Crypt
 * @category    Library
 * @author      Ice Team
 * @copyright   (c) 2014-2018 Ice Team
 * @license     http://iceframework.org/license
 * @uses        openSSL
 */
class Crypt
{

    protected $key;


    protected $cipher = 'aes-256';


    protected $mode = 'cbc';


    protected $block = 16;


    /**
     * @param mixed $key
     */
    public function setKey($key) {}

    /**
     * @param mixed $cipher
     */
    public function setCipher($cipher) {}

    /**
     * @param mixed $mode
     */
    public function setMode($mode) {}

    /**
     * @param mixed $block
     */
    public function setBlock($block) {}

    /**
     * Create a new encrypter instance.
     *
     * @param string $key
     * @return void
     */
    public function __construct(string $key = null) {}

    /**
     * Encrypt the given value.
     *
     * @param string $text
     * @return string
     */
    public function encrypt(string $text): string {}

    /**
     * Generate an input vector.
     *
     * @return string
     */
    protected function generateInputVector(): string {}

    /**
     * Actually encrypt the value using the given Iv with the openssl library encrypt function.
     *
     * @param string $value
     * @param string $iv
     * @return string
     */
    protected function doEncrypt(string $value, string $iv): string {}

    /**
     * Decrypt the given value.
     *
     * @param string $text payload
     * @return string
     */
    public function decrypt(string $text): string {}

    /**
     * Actually decrypt the value using the given Iv with the openssl library decrypt function.
     *
     * @param string $value
     * @param string $iv
     * @return string
     */
    protected function doDecrypt(string $value, string $iv): string {}

    /**
     * Get the JSON array from the given payload.
     *
     * @param string $text payload
     * @return array
     */
    protected function getJsonPayload(string $text) {}

    /**
     * Create a MAC for the given value.
     *
     * @param string $value
     * @return string
     */
    protected function hash(string $value): string {}

    /**
     * Add PKCS7 padding to a given value.
     *
     * @param string $value
     * @return string
     */
    protected function addPadding(string $value): string {}

    /**
     * Remove the padding from the given value.
     *
     * @param string $value
     * @return string
     */
    protected function stripPadding(string $value): string {}

    /**
     * Determine if the given padding for a value is valid.
     *
     * @param int $pad
     * @param string $value
     * @return bool
     */
    protected function paddingIsValid(int $pad, string $value): bool {}

    /**
     * Verify that the encryption payload is valid.
     *
     * @param array $data
     * @return bool
     */
    protected function invalidPayload(array $data): bool {}

    /**
     * Get the IV size for the cipher.
     *
     * @return int
     */
    protected function getIvSize(): int {}

}
