<?php

namespace Ice\Http;

/**
 * This class provides a simple interface around the HTTP response.
 *
 * @package     Ice/Http
 * @category    Component
 * @author      Ice Team
 * @copyright   (c) 2014-2018 Ice Team
 * @license     http://iceframework.org/license
 */
class Response implements \Ice\Http\Response\ResponseInterface
{

    protected $protocolVersion = 'HTTP/1.1';


    protected $status = 200;


    protected $headers;


    protected $loops = 16;


    protected $redirects = 0;


    protected $body;



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


    public function getLoops() {}

    /**
     * @param mixed $loops
     */
    public function setLoops($loops) {}


    public function getRedirects() {}


    public function getBody() {}

    /**
     * @param mixed $body
     */
    public function setBody($body) {}

    /**
     * Response constructor. Fetch Di and set it as a property.
     *
     * @param string|null $body The HTTP response body
     * @param int $status The HTTP response status
     */
    public function __construct($body = null, int $status = 200) {}

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
     * @return bool
     */
    public function hasHeader(string $name): bool {}

    /**
     * Get header value.
     *
     * @param string $name
     * @return string
     */
    public function getHeader(string $name): string {}

    /**
     * Set header value.
     *
     * @param string $name
     * @param string $value
     * @return object
     */
    public function setHeader(string $name, string $value) {}

    /**
     * Set multiple header values.
     *
     * @param array $headers
     * @return object
     */
    public function setHeaders(array $headers) {}

    /**
     * Remove header by index name.
     *
     * @param string $name
     * @return object
     */
    public function removeHeader(string $name) {}

    /**
     * Set body content.
     *
     * @param string $contet
     * @param string $content
     * @return object
     */
    public function setContent(string $contet) {}

    /**
     * Finalize response for delivery to client.
     * Apply final preparations to the resposne object so that it is suitable for delivery to the client.
     *
     * @param RequestInterface $request
     * @return object
     */
    public function finalize(\Ice\Http\Request\RequestInterface $request) {}

    /**
     * Send HTTP response headers.
     *
     * @return object
     */
    public function send() {}

    /**
     * Send file download as the response. All execution will be halted when
     * this method is called! The third parameter allows the following
     * options to be set:
     *
     * Type      | Option    | Description                        | Default Value
     * ----------|-----------|------------------------------------|--------------
     * string    | file      | file that already exists           | null
     * boolean   | inline    | Display inline instead of download | FALSE
     * boolean   | resumable | Allow to resumable download        | FALSE
     * boolean   | delete    | Delete the file after sending      | FALSE
     * int       | timeout   | Execute time for the script        | 0
     * int       | speed     | Download speed in millisecond      | 0
     *
     * Download a file that already exists:
     *
     *     $request->sendFile('ice.zip', 'application/zip', ['file' => '/download/latest.zip']);
     *
     * Download generated content as a file:
     *
     *     $response->setContent($content);
     *     $response->sendFile($filename, $mineType);
     *
     * Attention: No further processing can be done after this method is called!
     *
     * @param string $filename The file name of the attachment
     * @param string $mime Manual mime type
     * @param array $options The keys can be [file|inline|resumable|delete|timeout|speed]
     * @return void
     */
    public function sendFile(string $filename, string $mime, array $options = array()) {}

    /**
     * Redirect to some location.
     * This method prepares the response object to return an HTTP Redirect response to the client.
     *
     * @param string $location The redirect destination
     * @param int $status The redirect HTTP status code
     * @param bool $external
     * @return object
     */
    public function redirect(string $location = null, int $status = 302, bool $external = false) {}

    /**
     * Check whether status is for Empty.
     *
     * @return bool
     */
    public function isEmpty(): bool {}

    /**
     * Check whether status is for Informational.
     *
     * @return bool
     */
    public function isInformational(): bool {}

    /**
     * Check whether status is for OK.
     *
     * @return bool
     */
    public function isOk(): bool {}

    /**
     * Check whether status is for Successful.
     *
     * @return bool
     */
    public function isSuccessful(): bool {}

    /**
     * Check whether status is for Redirect.
     *
     * @return bool
     */
    public function isRedirect(): bool {}

    /**
     * Check whether status is for Redirection.
     *
     * @return bool
     */
    public function isRedirection(): bool {}

    /**
     * Check whether status is for Forbidden.
     *
     * @return bool
     */
    public function isForbidden(): bool {}

    /**
     * Check whether status is for Not Found.
     *
     * @return bool
     */
    public function isNotFound(): bool {}

    /**
     * Check whether status is for Client error.
     *
     * @return bool
     */
    public function isClientError(): bool {}

    /**
     * Check whether status is for Server Error.
     *
     * @return bool
     */
    public function isServerError(): bool {}

    /**
     * Get message for Response codes.
     *
     * @param int $code Status code
     * @return string
     */
    public function getMessage(int $code = 200): string {}

    /**
     * Get all messages.
     *
     * @return array
     */
    public function getMessages() {}

    /**
     * Response data to JSON string.
     *
     * @param mixed $data Can be any type excepta resource
     * @param int $option The options for json_encode
     * @return object
     */
    public function toJson($data, $option = null) {}

    /**
     * Response data to XML string.
     *
     * <pre><code>
     *     $response->toXml(
     *         [['title' => 'hello world', 'desc' => 'dont panic']],
     *         ['root' => 'blogs', 'namespace' => 'http://example.com/xml/blog']
     *     );
     *
     *     // This will output the xml
     *     <?xml version="1.0"?><blogs xmlns="http://example.com/xml/blog">
     *     <blog><title>hello world</title><desc>dont panic</desc></blog></blogs>
     * </code></pre>
     *
     * @param mixed $data Can be any type excepta resource
     * @param array $options The options can be [root|charset|namespace]
     * @return object
     */
    public function toXml($data, $options = null) {}

    /**
     * Convert data to XML string.
     *
     * @param mixed $data Can be any type excepta resource
     * @param string $root The root tag name
     * @param DOMElement $domNode null, ONLY FOR INTERNAL USE
     * @return DOMDocument object
     */
    public function xmlEncode($data, string $root = 'root', \DOMElement $domNode = null) {}

    /**
     * Magic toString, convert response to string.
     *
     * @return string
     */
    public function __toString(): string {}

    /**
     *
     * At the moment we only support single ranges.
     * Multiple ranges requires some more work to ensure it works correctly
     * and comply with the spesifications:
     *    http://www.w3.org/Protocols/rfc2616/rfc2616-sec19.html#sec19.2
     *
     * Multirange support annouces itself with:
     * header('Accept-Ranges: bytes');
     *
     * Multirange content must be sent with multipart/byteranges mediatype,
     * as well as a boundry header to indicate the various chunks of data.
     *
     * @param int $size
     * @return array
     */
    protected function getByteRange(int $size) {}

}
