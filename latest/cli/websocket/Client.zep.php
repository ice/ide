<?php

namespace Ice\Cli\Websocket;

/**
 * Websocket client.
 *
 * @package     Ice/Cli
 * @category    Component
 * @author      Ice Team
 * @copyright   (c) 2014-2018 Ice Team
 * @license     http://iceframework.org/license
 */
class Client extends \Ice\Cli\Websocket\Websocket
{

    protected $socket = null;


    protected $message = null;


    protected $tick = null;


    /**
     * Connect to server.
     *
     * @param string $address Address to bind to, defaults to `ws://127.0.0.1:8080`
     * @param array $headers Optional array of headers to pass when connecting
     * @return self
     */
    public function connect(string $address = 'ws://127.0.0.1:8080', $headers = array()): self {}

    /**
     * Generate key.
     *
     * @return string
     */
    protected function generateKey(): string {}

    /**
     * Normalize header.
     *
     * @param array $headers headers to normalize
     * @return array
     */
    protected function normalizeHeaders(array $headers) {}

    /**
     * Send a message to the server.
     *
     * @param string $data The data to send
     * @param string $opcode The data opcode, defaults to `text`
     * @return bool
     */
    public function send(string $data, string $opcode = 'text'): bool {}

    /**
     * Start listening.
     *
     * @return void
     */
    public function run() {}

    /**
     * Set a callback to execute when a message arrives.
     * The callable will receive the message string and the server instance.
     *
     * @param callable $callback The callback
     * @return self
     */
    public function onMessage($callback): self {}

    /**
     * Set a callback to execute every few milliseconds.
     * The callable will receive the server instance. If it returns boolean `false` the client will stop listening.
     *
     * @param callable $callback The callback
     * @return self
     */
    public function onTick($callback): self {}

}
