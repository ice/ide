<?php

namespace Ice\Mvc;

/**
 * Service is intermediary between Model and Controller.
 *
 * @package     Ice/Mvc
 * @category    Component
 * @author      Ice Team
 * @copyright   (c) 2014-2018 Ice Team
 * @license     http://iceframework.org/license
 */
abstract class Service extends \Ice\Di\Access
{

    protected $model;


    /**
     * @param mixed $model
     */
    public function setModel($model) {}


    public function getModel() {}

    /**
     * Magic method to call model's method.
     *
     * @param string $method
     * @param mixed $arguments
     * @return mixed
     */
    public function __call(string $method, $arguments = null) {}

}
