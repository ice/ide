<?php

namespace Ice\Cli\Websocket;

/**
 * Websocket server.
 *
 * @package     Ice/Cli
 * @category    Component
 * @author      Ice Team
 * @copyright   (c) 2014-2018 Ice Team
 * @license     http://iceframework.org/license
 */
class Server extends \Ice\Cli\Websocket\Websocket
{

    protected $verbose = false;


    protected $address;


    protected $server;


    protected $sockets = array();


    protected $clients = array();


    protected $callbacks = array();


    /**
     * @param mixed $verbose
     */
    public function setVerbose($verbose) {}


    public function getServer() {}


    public function getClients() {}

    /**
     * Create an instance.
     *
     * @param string $address Where to create the server, defaults to "ws://127.0.0.1:8080"
     * @param array $options Stream context options
     */
    public function __construct(string $address = 'ws://127.0.0.1:8080', array $options = array()) {}

    /**
     * Start processing requests. This method runs in an infinite loop.
     *
     * @return void
     */
    public function run() {}

    /**
     * Connect a socket to the server.
     *
     * @param resource $socket The resource
     * @return bool
     */
    protected function connect($socket): bool {}

    /**
     * Disconnect a socket from the server.
     *
     * @param resource $socket The resource
     * @return void
     */
    public function disconnect($socket) {}

    /**
     * Set a callback to be executed when a client connects, returning `false` will prevent the client from connecting.
     * The callable will receive:
     *  - an associative array with client data
     *  - the current server instance
     * The callable should return `true` if the client should be allowed to connect or `false` otherwise.
     *
     * @param callable $callback The callback
     * @return self
     */
    public function onValidate($callback): self {}

    /**
     * Set a callback to be executed when a client is connected.
     * The callable will receive:
     *  - an associative array with client data
     *  - the current server instance
     *
     * @param callable $callback The callback
     * @return self
     */
    public function onConnect($callback): self {}

    /**
     * Set a callback to execute when a client disconnects.
     * The callable will receive:
     *  - an associative array with client data
     *  - the current server instance
     *
     * @param callable $callback The callback
     * @return self
     */
    public function onDisconnect($callback): self {}

    /**
     * Set a callback to execute when a client sends a message.
     * The callable will receive:
     *  - an associative array with client data
     *  - the message string
     *  - the current server instance
     *
     * @param callable $callback The callback
     * @return self
     */
    public function onMessage($callback): self {}

    /**
     * Set a callback to execute every few milliseconds.
     * The callable will receive the server instance. If it returns boolean `false` the server will stop listening.
     *
     * @param callable $callback The callback
     * @return self
     */
    public function onTick($callback): self {}

    /**
     * Set a callback to execute on boot the server.
     * The callable will receive the server instance.
     *
     * @param callable $callback The callback
     * @return self
     */
    public function onBoot($callback): self {}

    /**
     * Register a callback to execute.
     *
     * @param string $key A callback key
     * @param callable $callback The callback
     * @return self
     */
    public function callback(string $key, $callback): self {}

}
