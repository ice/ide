<?php

namespace Ice\Http;

class Response implements \Ice\Http\Response\ResponseInterface
{

    protected $_di;

    protected $_protocolVersion = "HTTP/1.1";

    protected $_status = 200;

    protected $_headers;

    protected $_body;

    protected $_messages = array(Continue, Switching Protocols, Processing, OK, Created, Accepted, Non-Authoritative Information, No Content, Reset Content, Partial Content, Multi-Status, Already Reported, IM Used, Multiple Choices, Moved Permanently, Found, See Other, Not Modified, Use Proxy, (Unused), Temporary Redirect, Permanent Redirect, Too Many Redirects, Bad Request, Unauthorized, Payment Required, Forbidden, Not Found, Method Not Allowed, Not Acceptable, Proxy Authentication Required, Request Timeout, Conflict, Gone, Length Required, Precondition Failed, Request Entity Too Large, Request-URI Too Long, Unsupported Media Type, Requested Range Not Satisfiable, Expectation Failed, I\"m a teapot, Unprocessable Entity, Locked, Failed Dependency, Upgrade Required, Precondition Required, Too Many Requests, Request Header Fields Too Large, Internal Server Error, Not Implemented, Bad Gateway, Service Unavailable, Gateway Timeout, HTTP Version Not Supported, Variant Also Negotiates, Insufficient Storage, Loop Detected, Not Extended, Network Authentication Required);


	public function getProtocolVersion() {}

    /**
     * @param mixed $protocolVersion 
     */
	public function setProtocolVersion($protocolVersion) {}


	public function getStatus() {}

    /**
     * @param mixed $status 
     */
	public function setStatus($status) {}


	public function getBody() {}

    /**
     * @param mixed $body 
     */
	public function setBody($body) {}


	public function getMessages() {}

    /**
     * Response constructor. Fetch Di and set it as a property.
     *
     * @param string $body The HTTP response body
     * @param int $status The HTTP response status
     */
	public function __construct($body = "", $status = 200) {}

    /**
     * Get HTTP headers.
     *
     * @return array 
     */
	public function getHeaders() {}

    /**
     * Check whether request have a given header.
     *
     * @param string $name 
     * @return boolean 
     */
	public function hasHeader($name) {}

    /**
     * Get header value.
     *
     * @param string $name 
     * @return string 
     */
	public function getHeader($name) {}

    /**
     * Set header value.
     *
     * @param string $name 
     * @param string $value 
     */
	public function setHeader($name, $value) {}

    /**
     * Set multiple header values.
     *
     * @param array $headers 
     */
	public function setHeaders($headers) {}

    /**
     * Remove header by index name.
     *
     * @param string $name 
     */
	public function removeHeader($name) {}

    /**
     * Finalize response for delivery to client.
     * Apply final preparations to the resposne object so that it is suitable for delivery to the client.
     *
     * @param RequestInterface $request 
     * @return Response 
     */
	public function finalize(\Ice\Http\Request\RequestInterface $request) {}

    /**
     * Send HTTP response headers.
     *
     * @return Response 
     */
	public function send() {}

    /**
     * Redirect to some location.
     * This method prepares the response object to return an HTTP Redirect response to the client.
     *
     * @param string $location The redirect destination
     * @param int $status The redirect HTTP status code
     * @param bool $external 
     */
	public function redirect($location = null, $status = 302, $external = false) {}

    /**
     * Check whether status is for Empty.
     *
     * @return boolean 
     */
	public function isEmpty() {}

    /**
     * Check whether status is for Informational.
     *
     * @return boolean 
     */
	public function isInformational() {}

    /**
     * Check whether status is for OK.
     *
     * @return boolean 
     */
	public function isOk() {}

    /**
     * Check whether status is for Successful.
     *
     * @return boolean 
     */
	public function isSuccessful() {}

    /**
     * Check whether status is for Redirect.
     *
     * @return boolean 
     */
	public function isRedirect() {}

    /**
     * Check whether status is for Redirection.
     *
     * @return boolean 
     */
	public function isRedirection() {}

    /**
     * Check whether status is for Forbidden.
     *
     * @return boolean 
     */
	public function isForbidden() {}

    /**
     * Check whether status is for Not Found.
     *
     * @return boolean 
     */
	public function isNotFound() {}

    /**
     * Check whether status is for Client error.
     *
     * @return boolean 
     */
	public function isClientError() {}

    /**
     * Check whether status is for Server Error.
     *
     * @return boolean 
     */
	public function isServerError() {}

    /**
     * Get message for Response codes.
     *
     * @param int $code Status code
     * @return string 
     */
	public function getMessage($code = 200) {}

    /**
     * Magic toString, convert response to string.
     *
     * @return string 
     */
	public function __toString() {}

}
