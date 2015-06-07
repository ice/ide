<?php

namespace Ice\Http;

class Response implements \Ice\Http\Response\ResponseInterface
{

    protected $_di;


    protected $_protocolVersion = "HTTP/1.1";


    protected $_status = 200;


    protected $_headers;


    protected $_body;


    protected $_messages = array(100 => "Continue", 101 => "Switching Protocols", 102 => "Processing", 200 => "OK", 201 => "Created", 202 => "Accepted", 203 => "Non-Authoritative Information", 204 => "No Content", 205 => "Reset Content", 206 => "Partial Content", 207 => "Multi-Status", 208 => "Already Reported", 226 => "IM Used", 300 => "Multiple Choices", 301 => "Moved Permanently", 302 => "Found", 303 => "See Other", 304 => "Not Modified", 305 => "Use Proxy", 306 => "(Unused)", 307 => "Temporary Redirect", 308 => "Permanent Redirect", 310 => "Too Many Redirects", 400 => "Bad Request", 401 => "Unauthorized", 402 => "Payment Required", 403 => "Forbidden", 404 => "Not Found", 405 => "Method Not Allowed", 406 => "Not Acceptable", 407 => "Proxy Authentication Required", 408 => "Request Timeout", 409 => "Conflict", 410 => "Gone", 411 => "Length Required", 412 => "Precondition Failed", 413 => "Request Entity Too Large", 414 => "Request-URI Too Long", 415 => "Unsupported Media Type", 416 => "Requested Range Not Satisfiable", 417 => "Expectation Failed", 418 => "I\\\"m a teapot", 422 => "Unprocessable Entity", 423 => "Locked", 424 => "Failed Dependency", 426 => "Upgrade Required", 428 => "Precondition Required", 429 => "Too Many Requests", 431 => "Request Header Fields Too Large", 500 => "Internal Server Error", 501 => "Not Implemented", 502 => "Bad Gateway", 503 => "Service Unavailable", 504 => "Gateway Timeout", 505 => "HTTP Version Not Supported", 506 => "Variant Also Negotiates", 507 => "Insufficient Storage", 508 => "Loop Detected", 510 => "Not Extended", 511 => "Network Authentication Required");



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
     * Set body content.
     *
     * @param string $contet 
     * @param string $content 
     * @return object 
     */
    public function setContent($contet) {}

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
