<?php

namespace Ice\Cli\Websocket;

/**
 * A base class used in the server class.
 * It handles all encoding / decoding / masking / socket operations.
 *
 * @package     Ice/Cli
 * @category    Component
 * @author      Ice Team
 * @copyright   (c) 2014-2018 Ice Team
 * @license     http://iceframework.org/license
 */
class Websocket
{

    static protected $opcodes = array('continuation' => 0, 'text' => 1, 'binary' => 2, 'close' => 8, 'ping' => 9, 'pong' => 10);


    static protected $fragmentSize = 4096;


    static protected $magic = '258EAFA5-E914-47DA-95CA-C5AB0DC85B11';


    protected $params;


    /**
     * Send data to a socket in clear form (basically fwrite).
     *
     * @param resource $socket The socket to write to
     * @param string $data The data to send
     * @return bool
     */
    public function sendClear($socket, string $data): bool {}

    /**
     * Send data to a socket.
     *
     * @param resource $socket The socket to send to
     * @param string $data The data to send
     * @param string $opcode One of the opcodes (defaults to "text")
     * @param boolean $masked Should the data be masked (per specs the server should not mask, defaults to false)
     * @return bool
     */
    public function sendData($socket, string $data, string $opcode = 'text', bool $masked = false): bool {}

    /**
     * Read clear data from a socket (basically a fread).
     *
     * @param resource $socket The socket to read from
     * @return string
     */
    public function receiveClear($socket): string {}

    /**
     * Read data from a socket (in websocket format).
     *
     * @param resource $socket The socket to read from
     * @return string|bool
     */
    public function receive($socket) {}

    /**
     * Encode the data.
     *
     * @param string $data The data to send
     * @param string $opcode One of the opcodes (defaults to "text")
     * @param boolean $masked Should the data be masked
     * @param boolean $fin Add 1 to the head
     * @return string
     */
    protected function encode(string $data, string $opcode = 'text', bool $masked = true, bool $fin = true): string {}

    /**
     * Set server params.
     *
     * @param array $params
     * @return self
     */
    public function setParams(array $params): self {}

    /**
     * Get server params.
     *
     * @return array
     */
    public function getParams() {}

    /**
     * Retrieve a single param.
     *
     * @param string $key The data key
     * @param mixed $defaultValue The value to return if data key does not exist
     * @return mixed
     */
    public function getParam(string $key, $defaultValue = null) {}

    /**
     * Display text on the console.
     *
     * @param string $text Text to display
     * @param string $color The foreground color
     * @param int $decoration Formatting type
     * @param string $bgColor The background color
     * @param boolean $exit Die if true
     * @return self
     */
    public function console(string $text, string $color = null, int $decoration = Console::NORMAL, string $bgColor = null, bool $exit = false) {}

    /**
     * Get script uptime.
     *
     * @param boolean $human In seconds if false
     * @return float|string
     */
    public function getUptime(bool $human = true) {}

    /**
     * Get memory usage.
     *
     * @param boolean $human In byetes if false
     * @return int|string
     */
    public function getMemoryUsage(bool $human = true) {}

}
