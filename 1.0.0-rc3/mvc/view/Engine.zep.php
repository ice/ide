<?php

namespace Ice\Mvc\View;

abstract class Engine extends \Ice\Di\Access implements \Ice\Mvc\View\Engine\EngineInterface
{

    protected $_view;

    protected $_options;

    /**
     * @param mixed $options 
     */
	public function setOptions($options) {}

    /**
     * Engine constructor. Set the view and di object.
     *
     * @param mixed $view 
     * @param mixed $di 
     */
	public function __construct(\Ice\Mvc\View\ViewInterface $view, \Ice\Di $di = null) {}

    /**
     * Get the view content.
     *
     * @return string 
     */
	public function getContent() {}

    /**
     * Load some view.
     *
     * @param string $path 
     * @param array $data 
     * @return string 
     */
	public function load($path, $data = array()) {}

    /**
     * Load some partial view.
     *
     * @param string $path 
     * @param array $data 
     * @return string 
     */
	public function partial($path, $data = array()) {}

    /**
     * Render some view.
     *
     * @param string $path 
     * @param array $data 
     */
	public abstract function render($path, $data = array());

}
