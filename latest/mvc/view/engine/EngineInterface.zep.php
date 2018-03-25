<?php

namespace Ice\Mvc\View\Engine;

/**
 * Engine interface.
 *
 * @package     Ice/View
 * @category    Interface
 * @author      Ice Team
 * @copyright   (c) 2014-2018 Ice Team
 * @license     http://iceframework.org/license
 */
interface EngineInterface
{

    /**
     * @param \Ice\Mvc\View\ViewInterface $view
     * @param \Ice\Di $di
     */
    public function __construct(\Ice\Mvc\View\ViewInterface $view, \Ice\Di $di = null);

    /**
     * @param string $path
     * @param array $data
     */
    public function render($path, array $data = array());

}
