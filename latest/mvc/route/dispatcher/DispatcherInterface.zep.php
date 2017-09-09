<?php

namespace Ice\Mvc\Route\Dispatcher;


interface DispatcherInterface
{

    /**
     * Dispatches against the provided HTTP method verb and URI.
     *
     * Returns array with one of the following formats:
     *
     *  [self::NOT_FOUND]
     *  [self::METHOD_NOT_ALLOWED, ['GET', 'OTHER_ALLOWED_METHODS']]
     *  [self::FOUND, $handler, ['varName' => 'value', ...]]
     *
     * @param string $uri
     *
     * @param string $httpMethod
     * @param mixed $stringuri
     * @param string $$httpMethod
     * @return array
     */
    public function dispatch($httpMethod, $stringuri);

}
