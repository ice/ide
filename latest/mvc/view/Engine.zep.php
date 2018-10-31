<?php

namespace Ice\Mvc\View;

/**
 * View template engine.
 *
 * @package     Ice/View
 * @category    Component
 * @author      Ice Team
 * @copyright   (c) 2014-2018 Ice Team
 * @license     http://iceframework.org/license
 */
abstract class Engine extends \Ice\Di\Access implements \Ice\Mvc\View\Engine\EngineInterface
{

    protected $view;


    protected $options;


    /**
     * @param mixed $options
     */
    public function setOptions($options) {}

    /**
     * Engine constructor. Set the view and di object.
     *
     * @param \Ice\Mvc\View\ViewInterface $view
     * @param \Ice\Di $di
     */
    public function __construct(\Ice\Mvc\View\ViewInterface $view, \Ice\Di $di = null) {}

    /**
     * Get the view content.
     *
     * @return string
     */
    public function getContent(): string {}

    /**
     * Load some view.
     *
     * @param string $path
     * @param array $data
     * @return string
     */
    public function load(string $path, array $data = array()): string {}

    /**
     * Load some partial view.
     *
     * @param string $path
     * @param array $data
     * @return string
     */
    public function partial(string $path, array $data = array()): string {}

    /**
     * Render some view.
     *
     * @param string $path
     * @param array $data
     */
    public abstract function render(string $path, array $data = array());

}
