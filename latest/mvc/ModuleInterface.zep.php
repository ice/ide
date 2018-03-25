<?php

namespace Ice\Mvc;

/**
 * Module interface.
 *
 * @package     Ice/Mvc
 * @category    Interface
 * @author      Ice Team
 * @copyright   (c) 2014-2018 Ice Team
 * @license     http://iceframework.org/license
 */
interface ModuleInterface
{


    public function registerAutoloaders();

    /**
     * @param \Ice\Di $di
     */
    public function registerServices(\Ice\Di $di);

}
