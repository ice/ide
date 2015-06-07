<?php

namespace Ice\Mvc;

class View extends \Ice\Arr implements \Ice\Mvc\View\ViewInterface
{

    protected $_engines;


    protected $_content;


    protected $_mainView = "index";


    protected $_layoutsDir = "layouts/";


    protected $_partialsDir = "partials/";


    protected $_viewsDir;


    protected $_file;


    protected $_silent = false;


    /**
     * @param mixed $engines 
     */
    public function setEngines($engines) {}

    /**
     * @param mixed $content 
     */
    public function setContent($content) {}


    public function getContent() {}

    /**
     * @param mixed $mainView 
     */
    public function setMainView($mainView) {}


    public function getMainView() {}

    /**
     * @param mixed $layoutsDir 
     */
    public function setLayoutsDir($layoutsDir) {}


    public function getLayoutsDir() {}

    /**
     * @param mixed $partialsDir 
     */
    public function setPartialsDir($partialsDir) {}


    public function getPartialsDir() {}

    /**
     * @param mixed $viewsDir 
     */
    public function setViewsDir($viewsDir) {}


    public function getViewsDir() {}

    /**
     * @param mixed $file 
     */
    public function setFile($file) {}


    public function getFile() {}

    /**
     * @param mixed $silent 
     */
    public function setSilent($silent) {}

    /**
     * View constructor. Set the file and vars.
     *
     * @param string $file 
     * @param array $data 
     */
    public function __construct($file = null, $data = array()) {}

    /**
     * Get registered engines.
     */
    public function getEngines() {}

    /**
     * Try to render the view with vars for engines.
     *
     * @param string $file 
     * @param array $data 
     * @return string 
     */
    public function render($file = null, $data = array()) {}

    /**
     * Load the view.
     *
     * @param string $file Name of file without extension from the views dir
     * @param array $data Vars to send
     * @return string 
     */
    public function load($file, $data = array()) {}

    /**
     * Load the partial view.
     *
     * @param string $file Name of file without extension from the partials dir
     * @param array $data Vars to send
     * @return string 
     */
    public function partial($file, $data = array()) {}

    /**
     * Load the layout view.
     *
     * @param string $file Name of file without extension from the layouts dir
     * @param array $data Vars to send
     * @return string 
     */
    public function layout($file = null, $data = array()) {}

    /**
     * Set var to the view.
     *
     * @param string $name 
     * @param mixed $value 
     */
    public function setVar($name, $value) {}

    /**
     * Set multiple vars to the view.
     *
     * @param array $vars 
     */
    public function setVars($vars) {}

    /**
     * Magic toStrint, get the rendered view.
     */
    public function __toString() {}

}
