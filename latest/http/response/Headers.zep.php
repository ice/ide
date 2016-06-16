<?php

namespace Ice\Http\Response;

/**
 * This class is a bag to manage the response headers.
 *
 * @package     Ice/Http
 * @category    Component
 * @author      Ice Team
 * @copyright   (c) 2014-2016 Ice Team
 * @license     http://iceframework.org/license
 */
class Headers extends \Ice\Arr implements \Ice\Http\Response\HeadersInterface
{

    /**
     * Sends the headers to the client.
     *
     * @return boolean 
     */
    public function send() {}

}
